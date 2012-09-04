<?php 

function orderSubTotaller($oOrder){

	//print_r($oOrder);
	
	
	$dMOUNTAINPRICE = 39.99;
	$dROADPRICE = 29.99;
	$dCOMMUTERPRICE = 54.99;
	$dDIRTJUMPERPRICE = 29.99;
	
	$dOrderSubTotal = 0.00;  //setting up a return value as a decimal

	for($i = 1; $i < 5; $i++){
	
		if($oOrder[$i . 'qtyinput'] > 0){
			
			switch($i){
				case '1':
					$dOrderSubTotal += ($oOrder[$i . 'qtyinput'] * $dMOUNTAINPRICE);
					break;
				case '2':
					$dOrderSubTotal += ($oOrder[$i . 'qtyinput'] * $dROADPRICE);
					break;
				case '3':
					$dOrderSubTotal += ($oOrder[$i . 'qtyinput'] * $dCOMMUTERPRICE);
					break;
				case '4':
					$dOrderSubTotal += ($oOrder[$i . 'qtyinput'] * $dDIRTJUMPERPRICE);
					break;			
			}//end switch
			
		}//end if
	
	}//end for
	
	return $dOrderSubTotal;
  
} ?>

