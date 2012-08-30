<html>
	<body>
		<form action="." method="POST">

			<?php //print_r($_POST); ?>
			<h1>I Love widgets - send me some!</h1>
			
			<p>
				We've prepackaged our widgets into a grab bag according to the type of riding you like to do.
			</p>
			
			<table id="widgetpics">															
			
				<?php foreach(widgetbundle::find('all') as $oWidgets){ ?>  
					
					<tr>
						<td id="widgettitle"><?php echo $oWidgets->type ?> </td>
						<td id="image"><img src=<?php echo './views/images/' . $oWidgets->image ?> width="100" height="100" /> </td>
						<td><span>Price: $</span><?php echo $oWidgets->price ?> </td>
						<td>Quantity: <?php echo $_POST[$oWidgets->id . "qtyinput"] ?></td><!-- returning quantity selected from input form -->										
					</tr>		 
				<?php } ?>										
			
			</table>
			
			<div id="contactform">
				<ul>
					<li><span>Name: </span><span><?php echo $_POST['name'] ?></span> <input type="hidden" name="name" value="<?php echo $_POST['name']?>" /></li>	<!-- this hidden input is resubmitted to _post when the form is confirmed -->
					<li><span>Email: </span><span><?php echo $_POST['email'] ?></span></li>
					<li><span>Phone: </span><span><?php echo $_POST['phone']?></span></li>	
				</ul>
				
				<ul>
					<li><span>Street Address: </span><span><?php echo $_POST['street'] ?></span></li>
					<li><span>City: </span><span><?php echo $_POST['city'] ?></span></li>
					<li><span>Province: </span><span><?php echo $_POST['province'] ?></span></li>
					<li><span>Post Code: </span><span><?php echo $_POST['postcode'] ?></span></li>
				</ul>
			</div>
			
			<input type="submit" name="submit" value="Submit Order" />					
			
			</form>
				
	</body>
</html>
