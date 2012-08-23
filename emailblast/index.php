<?php

	//logic controller for form submission
	$action = array_key_exists('action', $_POST)?$_POST['action']:'';  //check $_post for 'action' key, if not there, return emptry string
	
	$action = array_key_exists('action', $_GET)?$_GET['action']: $action;	//if there are values in the $_GET array, replace the previous $_POST array query above with the $_GET array query found, or just leave it as is if nothing in $_GET


	/*active record import for database connection*/
	require '../ActiveRecord/ActiveRecord.php';
	
	ActiveRecord\Config::initialize(function($cfg)
	{
		$cfg->set_model_directory('model');
		$cfg->set_connections(
				array(
						'development' => 'mysql://root:@localhost/emails',
						'test' => 'mysql://username:password@localhost/test_database_name',
						'production' => 'mysql://username:password@localhost/production_database_name'
				)
		);
	});
	/*end active record import for database connection*/
	
	
	//handling adding to db
	if($action == 'Subscribe'){
		$oEmail = new Email;	//create a new object to store emails
		$oEmail->email = $_POST['email'];   //assigning the email field of the post array to the $oEmail object variable
		$oEmail->save();	//save object to database		
		
	}elseif($action == 'Unsubscribe'){
		$oEmail = Email::find_by_email($_GET['email']);
		if($oEmail->delete()){
			echo "You have been Unsubscribed";			
		}else{
			echo "Unsubscribe failed";
		}//end if else
			exit();
	}//end elseif
	
	
	
	
	if($action == 'Edit List'){	//if the Edit List button was pressed on the form
		include 'views/edit.php';
	}else{
		include 'views/email.php';
	}//end else
	
	



?>


