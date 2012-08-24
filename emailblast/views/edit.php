<html>
	<body>
		<form action="." method="POST">
		
			<ol>
			<?php 			
				foreach(Email::find('all') as $sEmail){ ?>   <!--  the foreach loop echos out the name of each cd in the database  $aCD is the local name of the variable for this loop only.  -->
					<li>
						<?php echo $sEmail->email; ?>
						<a href="?action=Delete&email=<?php echo $sEmail->email; ?>">	<!-- Note the anchor here constructs the $_GET url to trigger the Unsubscribe code in index.php -->
							<img src="views/images/cross.png" alt="Unsubscribe" />  
						</a>
					</li>
					
				<?php	
				}//end foreach ?>
			 </ol>
		
		
		<input type="text" name="email" />
		
		<input type="submit" name="action" value="Subscribe" />
		
		</form>
	</body>
</html>