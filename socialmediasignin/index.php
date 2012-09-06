<?php

$action = array_key_exists('code', $_GET)?'complete':(array_key_exists('action', $_POST)?$_POST['action']:'');

/*active record import for database connection*/
require '../ActiveRecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
	$cfg->set_model_directory('model');
	$cfg->set_connections(
			array(
					'development' => 'mysql://root:@localhost/sessions',
					'test' => 'mysql://username:password@localhost/test_database_name',
					'production' => 'mysql://username:password@localhost/production_database_name'
			)
	);
});

if($action == 'signin'){
	include 'model/starter.php';
}elseif($action=='complete'){  //if google signin is complete
	include 'model/complete.php';
	
	//add user to users table if doesn't already exist
	
	$sSocialId = 'google:' . $oProfile->id;
	$oUser = User::find_by_social_id($sSocialId);	//the find statement says: in table User, find $sSocialId in the social_id column
	if(!$oUser){									//the if statement says if the user is not found, add to the database (code below)
												
		$oUser = new User;
		$oUser->social_id = $sSocialId;
		$oUser->name = $oProfile->name;
		$oUser->save();
	}//end if
	
	//create a session
	$oSession = new Session;
	$oSession->user_id = $oUser->id;
	$oSession->session_id = base64_encode(uniqid());
	$oSession->save();	
	
	
	//$sProfile = base64_encode(json_encode($oProfile));	//encoding $sProfile in base64 data in json notation
	setcookie('session', $oSession->session_id);
	$_COOKIE['session'] = $oSession->session_id;
}
if(array_key_exists('session', $_COOKIE)){
	
	//retrieve username from session
	$oSession = Session::find_by_session_id($_COOKIE['session']);
	$oProfile = User::find($oSession->user_id);
	include 'views/hello.php';
}
include 'views/signin.php';
?>
