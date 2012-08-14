
<?php
//this is an example of cookie handling
//if there is no cookie set, a form will appear to enter cookie name (form.php)
//if there is a cookie set, the cookie name is displayed to screen (hello.php)

	if(array_key_exists('nameInput', $_POST)){	//check for a value in the $_POST array (ie - has a form been submitted)
		setcookie('username', $_POST['nameInput']);		//setcookie creates a cookie file on the local machine
		$_COOKIE['username'] = $_POST['nameInput'];		//the $_COOKIE array variable is set using hte value from $_POST, so it can be used below (and elsewhere)
	}
	

	if(array_key_exists('username', $_COOKIE)){  //'username' here is an index into the $_COOKIE array
		include 'view/hello.php';	
	}//end if
	else{
		include 'view/form.php';
	}//end else
	
	

?>