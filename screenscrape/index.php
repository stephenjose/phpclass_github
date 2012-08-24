<?php
//an example of showing data from other sources
//aka screenscraping

	header("Content-Type: text/plain");
	$sIn = file_get_contents("http://gdata.youtube.com/feeds/api/users/rhildred/uploads"); //youtube
	
	if(preg_match_all("|<title(.*)</title>|U", $sIn, $aIn)){ //perform regex
		foreach($aIn[0] as $sTitle){
			echo $sTitle . "\n";
		}//end foreach
	}else{
		echo "nothing to display";
	}//end else
	


?>