<?php

//this code connects to google for a login

$action = array_key_exists('code', $_GET)?'complete':(array_key_exists('action', $_POST)?$_POST['action']:'');	//note double ternary if - if there is a 'code' value in $_GET, then $action='complete' or if not, then if there is an 'action' value in $_POST, then assign that to $action
if($action == 'signin'){
	include 'model/starter.php';
}elseif($action=='complete'){
	include 'model/complete.php';
	$username = $oProfile->id . ' aka ' . $oProfile->name;
	setcookie('username', $username );
	$_COOKIE['username']= $username;
}
if(array_key_exists('username', $_COOKIE)){
	include 'views/hello.php';
}
include 'views/signin.php';
?>
