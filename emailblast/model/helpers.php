<?php

function sendEmails(){
	foreach(Email::find('all') as $sEmail){

		//The message
		$message = $_POST['message'];
		$subject = $_POST['subject'];
			
		// In case any of our lines are larger than 70 characters, we should use wordwrap()
		$message = wordwrap($message, 70);
			
		$headers = 'From: ' . $_SERVER['SERVER_ADMIN'] . "\r\n" .
				'Reply-To: ' . $_SERVER['SERVER_ADMIN'] . "\r\n" .
				'X-Mailer: PHP/' . phpversion();
			
			
		// Send
		if(mail($sEmail->email, $subject, $message, $headers)){
			echo "mail sent to " . $sEmail->email . '<br/>';
		}else{
			echo "mail failed to " . $sEmail->email . '<br/>';
		}//end else

	}//end foreach
}//end sendEmails

?>