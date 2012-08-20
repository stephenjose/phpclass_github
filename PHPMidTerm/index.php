<?php 

/*active record import for database connection*/
require '../ActiveRecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
	$cfg->set_model_directory('model');
	$cfg->set_connections(
			array(
					'development' => 'mysql://root:@localhost/phpmidterm',
					'test' => 'mysql://username:password@localhost/test_database_name',
					'production' => 'mysql://username:password@localhost/production_database_name'
			)
	);
});
/*end active record import for database connection*/


//handling adding to db
if(array_key_exists('add', $_POST)){
	$oMeal = new Meal;	//create a new object to store purchase values
	$oMeal->date = $_POST['dateInput'];   //assigning the date field of the post array to the $oMeal object variable
	$oMeal->members = $_POST['membersInput'];	
	$oMeal->save();	//save object to database	
}



include 'view/list.php';

?>

