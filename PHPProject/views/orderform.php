<html>
	<body>

		<form action="." method="POST">
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
						<td><label for='<?php echo $oWidgets->id . "qtyinput"?>'>qty: </label><input type="text" name='<?php echo $oWidgets->id . "qtyinput"?>' /></td>				
					</tr>		 
				<?php } ?>										
			
			</table>
			
			<div id="contactform">
				<ul>
					<li><label for="name">Name:</label><input type="text" name="name" /></li>	
					<li><label for="email">Email:</label><input type="text" name="email" /></li>
					<li><label for="phone">Phone:</label><input type="text" name="phone" /></li>	
				</ul>
				
				<ul>
					<li><label for="street">Street Address:</label><input type="text" name="street" /></li>	
					<li><label for="city">City:</label><input type="text" name="city" /></li>	
					<li><label for="province">Province:</label><input type="text" name="province" /></li>	
					<li><label for="postcode">Post Code:</label><input type="text" name="postcode" /></li>
				</ul>
			</div>
			
			<input type="submit" name="submit" value="Submit Order" />					
			
		</form>			
				
	</body>
</html>