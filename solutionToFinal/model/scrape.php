<?php

function strip_guidtags($sIn){
	
	//strip out all cdata and html tags, so raw data is left
	//then add the raw data to the $oJob object, and save the object to db
	
	$sOut = preg_replace('/<!\[CDATA\[/', '', $sIn);
	$sOut = preg_replace('/\]\]>/', '', $sOut);
	$sOut = strip_tags($sOut);
	return $sOut;
	
}


function scrapeData(){
$sIn = file_get_contents("http://www.wowjobs.ca/wowrss.aspx?q=Web+Developer&l=N2T1G8&s=&sr=25&t=30&f=r&e=&si=A&Dup=H");
 if(preg_match_all("|<item(.*)</item>|U", $sIn, $aItem)){
 	//print_r($aIn);
 	foreach($aItem[0] as $sItem){
 		
 	 	 if(preg_match_all("|<guid(.*)</guid>|U", $sItem, $aGuid)){
 			
 			$sGuid = strip_guidtags($aGuid[0][0]);
 			
 		}
 		
 		if(!Job::find_by_guid($sGuid)){	//if the job is not found already in the database
	 		 		
	 		$oJob = new Job;
	 		$oJob->guid = $sGuid;
	 		
	 		if(preg_match_all("|<title(.*)</title>|U", $sItem, $aTitle)){
	 			
	 			$oJob->title = strip_guidtags($aTitle[0][0]);
	 			
	 		}
	 	 	if(preg_match_all("|<description(.*)</description>|U", $sItem, $aDescription)){
	 	 		
	 			$oJob->description = strip_guidtags($aDescription[0][0]);
	 			
	 		}
	 	 	if(preg_match_all("|<link(.*)</link>|U", $sItem, $aLink)){
	 	 		
	 			$oJob->link = strip_guidtags($aLink[0][0]);
	 			
	 		}
	 	 	if(preg_match_all("|<pubDate(.*)</pubDate>|U", $sItem, $aDate)){
	 	 		
	 			$oJob->pubdate = strip_guidtags($aDate[0][0]);
	 			
	 		}
	 	 	if(preg_match_all("|<author(.*)</author>|U", $sItem, $aAuthor)){
	 	 		
	 			$oJob->author = strip_guidtags($aAuthor[0][0]);
	 			
	 		}
	 		
	 		$oJob->save();
	 		
 		}//end if	
 	}//end foreach
 }//end if
}//end scrapeData