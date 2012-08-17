<?php
require '../richActiveRecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
	$cfg->set_model_directory('model');
	$cfg->set_connections(
			array(
					'development' => 'mysql://root:@localhost/richcds',
					'test' => 'mysql://username:password@localhost/test_database_name',
					'production' => 'mysql://username:password@localhost/production_database_name'
			)
	);
});

if(array_key_exists('label', $_POST)){
	$oCD = new CD;
	$oCD->name = $_POST['label'];
	$oCD->save(); 
}

include 'views/list.php';

?>
