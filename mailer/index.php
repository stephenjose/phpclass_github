<?php

//mailer is a project to learn php's mail handling functionality, say for a contact form


//storing the inputs from the contact.php form in $action.  Note ternary if(?:) below.
$action = array_key_exists('submit', $_POST)?$_POST['submit']:"";

echo $action;

if($action == 'Contact'){
	
	//The message
	$message = $_POST['message'];
	$subject = $_POST['subject'];
	
	// In case any of our lines are larger than 70 characters, we should use wordwrap()
	$message = wordwrap($message, 70);
	
	$headers = 'From: ' . $_SERVER['SERVER_ADMIN'] . "\r\n" . 
				'Reply-To: ' . $_POST['email'] . "\r\n" . 
				'X-Mailer: PHP/' . phpversion();
	
	// Send
	if(mail('contact@stephenjose.com', $subject, $message, $headers)){
		echo "mail sent!";
	}else{
		echo "mail fail...";
	}//end else
		
}//end if

include 'views/contact.php';

?>

