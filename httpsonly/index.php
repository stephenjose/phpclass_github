<?php
// code to connect using https only
// this script forces an https connection by rebuilding the url as an https url
// page 684 in Murach php book

	if(!isset($_SERVER['HTTPS'])){	//if the server is not on https then the url is converted to https
		$url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		
		
		/*echo $url . "\n";
		print_r($_SERVER);*/
		
		header("Location: " . $url);  //this redirect constructs http message header 'location' field with https version of the url
		exit();
	}//end if

?>

<html><body>Hello World!</body></html>