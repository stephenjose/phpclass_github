<?php
 
	function getCDs(){
		global $db;			//declares the $db variable as global for use here
		$query = 'select * from cdsexample';		//declaring a local string variable called $query
		return $db->query($query);
	}
	
	function addCD($sTitle){
		global $db;
		$query = "insert into cdsexample (name) values ('$sTitle')";				
		$db->exec($query);
	}

?>