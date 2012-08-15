<?php

	function sayHello()
	{
		echo "Bonjour le monde!";
	}
	
	$fSayGoodDay = function()  //anonymous function assigned to a variable of type function (note $ for variable, f for function in the variable name)
	{
		echo "good day!";
	};
	
	function callMeBack($fCallMe)  //callback function
	{
		$fCallMe();   //this line runs whichever function variable is passed in as the argument to this function
	}

?>
<!--  <html><body><?php //sayHello() ?><br><?php //$fSayGoodDay() ?></body></html>  -->
<html><body><?php callMeBack($fSayGoodDay); ?></body></html>
