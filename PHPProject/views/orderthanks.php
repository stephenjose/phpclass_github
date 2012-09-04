<html>
	<body>
		<div id="main">
			
			<?php	
				if(array_key_exists('confirm', $_POST)){
		
					//print_r($_POST);
		
					$oCustomer = new Customer;	//create a new object to store purchase values
					$oCustomer->name = $_POST['name'];   //assigning the date field of the post array to the $oCustomer object variable
					$oCustomer->email = $_POST['email'];  
					$oCustomer->phone = $_POST['phone'];  
					$oCustomer->street = $_POST['street'];  
					$oCustomer->city = $_POST['city'];  
					$oCustomer->province = $_POST['province'];  
					$oCustomer->postcode = $_POST['postcode'];  
									
					$oCustomer->save();	//save object to database
					
					
					$oOrder = new Order;
					$oOrder->customer = $_POST['name'];
					$oOrder->price = $_POST['total'];
					
					$oOrder->save();
					
				}//end if
				
				
			?>
			
			<div id="thanksdiv">
				<h1>Thanks!</h1>
			
				<p>We're just sorting your order out now, and we'll get it right to you!</p>
			
			</div><!-- end thanksdiv -->
		</div><!-- end main -->				
	</body>
</html>
