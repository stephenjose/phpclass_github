<?php
	//this is a controller file in an MVC type layout.
	//because of this, this file will not display anything to the screen, but will call other files to do that
	
	require 'model/bikes.php';
	
	$bikeManufacturer = get_manufacturer();
	
	$bikeModel = get_model();
	

	
	include 'views/list.php'; //calls the list.php file, which will display some html
?>	