<?php

function addCookie($sUser){
	
	setcookie('username', $sUser);
	$_COOKIE['username'] = $sUser; 
	
}//end addCookie


function addUser($aPost){
	
	if($aPost['password'] == $aPost['repeatpassword']){
		
		$oUser = new User;
		$oUser->password = $aPost['password'];
		$oUser->username = $aPost['username'];
		$oUser->save();
		
	}//end if
	
}//end addUser


function validateUser($aPost){
	
	if($aPost['password'] == 'Secret55'){
		return true;
	}
	return false;
	
}//end validateUser

?>