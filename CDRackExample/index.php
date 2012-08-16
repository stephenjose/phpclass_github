<?php

	require 'model/database.php';  //make database connection
	require 'model/mycds.php';	//pull data from the database
	
	
	
	if(array_key_exists('title', $_POST)){   //if there is a value in the _post array - ie if something has been submitted by the form in newcd.php
		addCD($_POST['title']);		//calling addCD function and passing the title field of hte post array
	}
	$aMyCDs = getCDs();  //creates an array variable to hold the return from getCDs function
	
	
	include 'views/newcd.php';

?>

