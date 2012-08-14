<?php
	//model file

	require 'database.php';

	function get_categories()
	{
		global $db;  
		$query = 'select categoryName from categories';
		
		return $db->query($query);
		
		
	}
	
	function get_products()
	{
		global $db;
		$query = 'select productName from products';
	
		return $db->query($query);
	
		
	}
	
	
	
?>	