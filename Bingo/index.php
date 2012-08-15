<html><body><?php
//controller file for Bingo program

	require 'model/dog.php';	//the dog file is requried because of the Dog class within, which is instantiated below.
	include 'views/form.php';
	$oBingo = new Dog('chihuahua');  //a variable of type object - in this case a Dog object.  Note that this is an instantiation of the Dog class, which is in dog.php
									//note this calls the constructor function in dog.php, giving it the arg 'chihuahua'
	if(array_key_exists('foodInput', $_POST)){//note, foodInput is the 'name' attribute of the form in form.php
	
		$oBingo->eat($_POST['foodInput']);  //note, foodInput is the 'name' attribute of the form in form.php
	}
	include 'views/feelings.php';
	

?></body></html>