<html>
	<body>
		<h1>
			<?php
			
				/*foreach($categories as $category):				
					echo $category;
				endforeach;*/
			
				echo "hello world".'<br>'.'<br>';
				foreach($bikeManufacturer as $bikes)
				{
					echo $bikes['manufacturer'].'<br>';
				}
				
				foreach($bikeModel as $bikes)
				{
					echo $bikes['model'],'<br>';
				}
				
				
				//foreach loop to loop through the $category array variable, printing out each value
				/*foreach($categories as $category)
				{
					echo $category['categoryName'].'<br>';
				}
				
				echo '<br>';
				
				foreach($products as $product)
				{
					echo $product['productName'].'<br>';
					
				}*/
			
			?>
		</h1>
	</body>
</html>