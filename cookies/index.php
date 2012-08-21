
<?php
//this is an example of cookie handling
//if there is no cookie set, a form will appear to enter cookie name (form.php)
//if there is a cookie set, the cookie name is displayed to screen (hello.php)

	if(!isset($_SERVER['HTTPS'])){	//if the server is not on https then the url is converted to https
		$url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	
		header("Location: " . $url);  //this redirect constructs http message header 'location' field with https version of the url
		exit();
	}//end if

	
	/*active record import for database connection*/
	require '../ActiveRecord/ActiveRecord.php';
	
	ActiveRecord\Config::initialize(function($cfg)
	{
		$cfg->set_model_directory('model');
		$cfg->set_connections(
				array(
						'development' => 'mysql://root:@localhost/users',
						'test' => 'mysql://username:password@localhost/test_database_name',
						'production' => 'mysql://username:password@localhost/production_database_name'
				)
		);
	});
	/*end active record import for database connection*/
	
	
	//controller logic
	if(array_key_exists('action', $_POST)){
		if($_POST['action'] == 'signup'){
			include 'view/signup.php';
			exit();
		}//end if
		elseif($_POST['action'] == 'save'){
			addUser($_POST);
			addCookie($_POST['username']);
		}//end elseif
		elseif($_POST['action'] == 'signin'){
			if(validateUser($_POST)){
				
			}//end if
		}//end elseif
		
	}//end if
	
	if(array_key_exists('signup', $_POST) && isset($_POST['signup'])){
		include 'view/signup.php';
	}//end if	
	elseif(array_key_exists('save', $_POST) && isset($_POST['save'])){	//check for a value in the $_POST array (ie - has a form been submitted)
												//this is where the password will be validated
		if($_POST['password'] == 'Secret55'){
			
			setcookie('username', $_POST['nameInput']);		//setcookie creates a cookie file on the local machine
			$_COOKIE['username'] = $_POST['nameInput'];		//the $_COOKIE array variable is set using hte value from $_POST, so it can be used below (and elsewhere)
		
		}//end if
		else{
			echo 'Incorrect Password';
		}//end else
			
	}//end elseif
	

	if(array_key_exists('username', $_COOKIE)){  //'username' here is an index into the $_COOKIE array
		include 'view/hello.php';	
	}//end if
	
	include 'view/form.php';
	
	
	

?>