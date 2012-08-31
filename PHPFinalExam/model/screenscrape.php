<?php

//modify this function to populate database rather than echoing results
//see code below for adding to db

header("Content-Type: text/plain");
 $sIn = file_get_contents("http://www.wowjobs.ca/wowrss.aspx?q=Web+Developer&l=N2T1G8&s=&sr=25&t=30&f=r&e=&si=A&Dup=H");
 if(preg_match_all("|<item(.*)</item>|U", $sIn, $aItem)){
 	//print_r($aIn);
 	foreach($aItem[0] as $sItem){
 	 	 if(preg_match_all("|<guid(.*)</guid>|U", $sItem, $aGuid)){
 			echo $aGuid[0][0]  . "\n";
 		}
 		if(preg_match_all("|<title(.*)</title>|U", $sItem, $aTitle)){
 			$sTitle = preg_replace('/<!\[CDATA\[/', '', $aTitle[0][0]);
 			$sTitle = preg_replace('/\]\]>/', '', $sTitle);
 			echo strip_tags($sTitle) . "\n";
 		}
 	 	if(preg_match_all("|<description(.*)</description>|U", $sItem, $aDescription)){
 			echo $aDescription[0][0]  . "\n";
 		}
 	 	if(preg_match_all("|<link(.*)</link>|U", $sItem, $aLink)){
 			echo $aLink[0][0]  . "\n";
 		}
 	 	if(preg_match_all("|<pubDate(.*)</pubDate>|U", $sItem, $aDate)){
 			echo $aDate[0][0]  . "\n";
 		}
 	 	if(preg_match_all("|<author(.*)</author>|U", $sItem, $aAuthor)){
 			echo $aAuthor[0][0]  . "\n";
 		}
 		//echo $sItem . "\n";
 	}
 }else{
 	echo "nothing to display";
 }
?>






//handling adding to db
if(array_key_exists('submit', $_POST)){
	$oPurchase = new Purchase;	//create a new object to store purchase values
	$oPurchase->date = $_POST['date'];   //assigning the date field of the post array to the $oPurchase object variable
	$oPurchase->purchase = $_POST['purchase'];
	$oPurchase->price = $_POST['price'];
	$oPurchase->save();	//save object to database
	
	//print_r($oPurchase);
	//print_r is  a debugging tool that prints out all aspects of an object or variable
}

