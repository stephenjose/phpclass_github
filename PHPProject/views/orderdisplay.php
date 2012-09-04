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
			
			<?php 
			
				include 'model/helpers.php';  //for the orderSubTotaller function 
				$dSubTotal = orderSubTotaller($_POST);				
				$dTAXRATE = 0.13;
				$dTax = $dSubTotal * $dTAXRATE;
				$dTotal = $dSubTotal + ($dSubTotal * $dTAXRATE);
			
			
			?>
			
			
			<div id="contactform">
				<ul>
					<li><span>Order Sub Total: </span><span><?php echo "$" . sprintf("%.2f", $dSubTotal) ?></span> <input type="hidden" name="subtotal" value="<?php echo $dSubTotal ?>" /></li>	<!-- this hidden input is resubmitted to _post when the form is confirmed -->
					<li><span>13% Tax: </span><span><?php echo "$" . sprintf("%.2f", $dTax) ?></span> <input type="hidden" name="tax" value="<?php echo $dTax ?>" /></li>
					<li><span>Order Total: </span><span><?php echo "$" . sprintf("%.2f", $dTotal) ?></span> <input type="hidden" name="total" value="<?php echo $dTotal ?>" /></li>
					
					
				</ul>
				
				<ul>
					<li><span>Name: </span><span><?php echo $_POST['name'] ?></span> <input type="hidden" name="name" value="<?php echo $_POST['name']?>" /></li>	<!-- this hidden input is resubmitted to _post when the form is confirmed -->
					<li><span>Email: </span><span><?php echo $_POST['email'] ?></span> <input type="hidden" name="email" value="<?php echo $_POST['email']?>" /></li></li>
					<li><span>Phone: </span><span><?php echo $_POST['phone']?></span> <input type="hidden" name="phone" value="<?php echo $_POST['phone']?>" /></li></li>	
				</ul>
				
				<ul>
					<li><span>Street Address: </span><span><?php echo $_POST['street'] ?></span> <input type="hidden" name="street" value="<?php echo $_POST['street']?>" /></li></li>
					<li><span>City: </span><span><?php echo $_POST['city'] ?></span> <input type="hidden" name="city" value="<?php echo $_POST['city']?>" /></li></li>
					<li><span>Province: </span><span><?php echo $_POST['province'] ?></span> <input type="hidden" name="province" value="<?php echo $_POST['province']?>" /></li></li>
					<li><span>Post Code: </span><span><?php echo $_POST['postcode'] ?></span> <input type="hidden" name="postcode" value="<?php echo $_POST['postcode']?>" /></li></li>
				</ul>
			</div>
			
			<input type="submit" name="confirm" value="Confirm Order" />				
			
		</form>
				
	</body>
</html>
