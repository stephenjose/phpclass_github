<?php

function addCookie($sUser){
	setcookie('username', $sUser);
	$_COOKIE['username']= $sUser;
}

function addUser($aPost){
	$sError = "success";  //error string variable

	$oUser = User::find_by_username($aPost['username']);
	
	if($oUser){		//if the user already exists in the database
		$sError = "username already exists";		
	}elseif($aPost['password'] != $aPost['repeatpassword']){
		$sError = "passwords don't match";		
	}else{
		$oUser = new User;
		$oUser->password = sha1($aPost['username'] . $aPost['password']);  	//sha1 is a hash algorithm returning a 40 character hex string hash of the password, 
																			//rather than the password itself for storage in the db
																			//note this line also stores the password as username concatted with password
																			//this approach ensures the resulting hash will be different even when passwords are the same
		$oUser->username = $aPost['username'];
		$oUser->save();	
	}
	return $sError;
}

function validateUser($aPost){  //validates that the user exists and the password matches the usernames password in the db
	$oUser = User::find_by_username($aPost['username']);
	if($oUser && sha1($aPost['username'] . $aPost['password']) == $oUser->password){	//sha1 returns a 40 character hex hash
		return true;
	}
	return false;
}

?>