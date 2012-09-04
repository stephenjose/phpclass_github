<?php
/*active record import for database connection*/
require '../ActiveRecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
	$cfg->set_model_directory('model');
	$cfg->set_connections(
			array(
					'development' => 'mysql://root:@localhost/widgets',
					'test' => 'mysql://username:password@localhost/test_database_name',
					'production' => 'mysql://username:password@localhost/production_database_name'
			)
	);
});
/*end active record import for database connection*/
?>

<!DOCTYPE html>

<!--
	Website:  		Cycling Widgets
	Page:			index.html
	Developer:      Stephen Jose
	Languages Used: HTML 5
	Date Created:   2012-08-28
	Last Revised:   

	Website Description:	
		Fictional page for php course project
	
	External files:
		./css/main.css
-->	


	
<html lang="en">
<head>
	<meta charset="utf-8" />

	<title>Cycling Widgets</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<meta name="description" 
		content="" />	
		
	<meta name="keywords" 
		content="" />
	
	<!-- Favicon links 
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="apple-touch-icon" href="apple-touch-icon.png" />
	-->
	
	<!-- JavaScript link 
	<script src="./js/filename.js"></script>
	-->
	
	<!-- CSS link-->
	<link rel="stylesheet" href="./views/css/main.css" />
	<!-- Google Webfonts Link -->
	<link href="http://fonts.googleapis.com/css?family=Pompiere" rel="stylesheet" />
	
	
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="page_wrap">
		<div id="container">
			<header>
				<h1>
					Widgets!
				</h1>		
			</header> <!-- header -->
			
			<div id="main">
				<div id="widgets">
					<img src="./views/images/true-mountain-biker.jpg" alt="Cycling Widgets" title="" width="960"
						height="295" />
				</div>
				
				<section>
					<h2>Widgets for Cyclists!</h2>
					<p>
						We sell all kinds of things for dedicated cyclists of all types.
					</p>
					<p>
						Whether you like white knuckling down a hillside or powering down a stretch of pavement, we have a widget for you!
						Just select which widget pack most interests you and fill out the purchase form below.
					</p>
					<p>
						Widgets!  Yes!
					</p>
				</section>
								
				<?php 
					if(array_key_exists('confirm', $_POST)){
						include 'views/orderthanks.php';
					}elseif(array_key_exists('submit', $_POST)){
						include 'views/orderdisplay.php';
					}else{
						include 'views/orderform.php';
					}//end else
				?>
				
				
				
			</div> <!-- main -->
			
			<footer>
						
				<div class="social">
					<ul>
						<li><a href="#" class="facebook">Facebook</a></li>
						<li><a href="#" class="twitter">Twitter</a></li>
						<li><a href="#" class="flickr">Flickr</a></li>
					</ul>
				</div>
			
				<p>
					<small>&copy; 2012 Stephen Jose</small>
				</p>
			</footer> <!-- footer -->
			
		</div> <!-- container -->
	</div> <!-- page_wrap -->
</body>
</html>