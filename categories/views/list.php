<html>
	<body>
		<h1>
			<?php
			
				/*foreach($categories as $category):				
					echo $category;
				endforeach;*/
			
				echo "hello world".'<br>'.'<br>';
				
				foreach($categories as $category)
				{
					echo $category['categoryName'].'<br>';
				}
				
				echo '<br>';
				
				foreach($products as $product)
				{
					echo $product['productName'].'<br>';
					
				}
			
			?>
		</h1>
	</body>
</html>