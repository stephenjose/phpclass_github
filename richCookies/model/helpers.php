<?php

function addCookie($sUser){
	setcookie('username', $sUser);
	$_COOKIE['username']= $sUser;
}

function addUser($aPost){
	if($aPost['password'] == $aPost['repeatpassword']){
		$oUser = new User;
		$oUser->password = $aPost['password'];
		$oUser->username = $aPost['username'];
		$oUser->save();
	}
	
}

function validateUser($aPost){
	$oUser = User::find_by_username($aPost['username']);
	if( $aPost['password'] == $oUser->password){
		return true;
	}
	return false;
}

?>