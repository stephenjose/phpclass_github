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
	<link rel="stylesheet" href="./view/css/main.css" />
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
					<img src="./view/images/true-mountain-biker.jpg" alt="Cycling Widgets" title="" width="960"
						height="295" />
				</div>
				
				<section>
					<h2>Widgets for Cyclists!</h2>
					<p>
						We sell all kinds of things for dedicated cyclists of all types.
					</p>
					<p>
						Whether you like white knuckling it down a hillside or powering down a stretch of pavement, we have a widget for you!
						Just select which widget pack most interests you and fill out the purchase form below.
					</p>
					<p>
						Widgets!  Yes!
					</p>
				</section>
				
				<form action="." method="POST">
					I Love widgets - send me some!
					
					<div id="widgetpics">
						<img src="./view/images/mountainbike.jpg" width="100" height="100" /><input type="radio" name="widgetradio" />
						<img src="./view/images/roadbike.jpg" width="100" height="100" /><input type="radio" name="widgetradio" />
						<img src="./view/images/commuterbike.jpg" width="100" height="100" /><input type="radio" name="widgetradio" />
						<img src="./view/images/dirtjumperbike.jpg" width="100" height="100" /><input type="radio" name="widgetradio" />
					
					
					</div>
				
					<label for="name">Name: </label><input type="text" name="name" />					
					
					Address Information
					<label for="street">Street: </label><input type="text" name="street" />
					<label for="city">City: </label><input type="text" name="city" />
					<label for="province">Province: </label><input type="text" name="province" />
					
					Contact Information
					<label for="phone">Phone Number: </label><input type="text" name="phone" />
					<label for="email">Email Address: </label><input type="text" name="email" />
				
				</form>
				
				
				
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