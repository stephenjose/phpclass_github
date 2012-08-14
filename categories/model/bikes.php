<?php
	//model file

	require 'database.php';

	function get_manufacturer()
	{
		global $db;  
		$query = 'select manufacturer from bikes';
		
		return $db->query($query);		
		
	}
	
	
	function get_model()
	{
		
		global $db;
		$query = 'select model from bikes';
		
		return $db->query($query);
	}
	
	
	
	
	
	
	
?>	