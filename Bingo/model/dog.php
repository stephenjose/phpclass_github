<?php

class Animal
{
	public $sHungry = 'Very Hungry!';
	
	
	function eat($food){
		if($food == 'human flesh'){
			$this->sHungry = "great! I love " . $food . " nom nom nom.  I'm a killer!";  //note no $ before sHungry because this is a property of the variable $this, and not a variable declaration in it's own right.
		}
		else{
			$this->sHungry = "bad.  Blech - this " . $food . " tastes awful! I don't eat " . $food . "!";  //note $this->sBreed refers to the sBreed property of this dog object
		}
		
	}//end eat
	
	
}//end class


interface Gender{
	
	const MALE = 'm';
	const FEMALE = 'f';
	
}//end interface

interface Showable{
	
	public function show();
	
}//end interface


class Dog extends Animal implements Gender, Showable{
	
	function __construct($sBreed){  //constructor function for dog.php
			
		$this->sBreed = $sBreed;			
		$this->sGender = Gender::MALE;	//references the Gender interface and sets the variable sGender to MALE - note the :: notation for referencing a property of an interface.
		
		$this->show();			
			
		}//end constructor
		
		function show(){
			foreach($this as $name => $value){	// => is a php associative array operator
												// remember $this refers to the current instantiation of the object.
				echo "<li>$name = $value</li>";
			}//end foreach
		}//end  show
		
	
}//end class

?>