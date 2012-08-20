<html>
	<body>	
	
		<h1>Meals Together</h1>	
		
		<table>			
			<tr>
				<th>DATE</th>
				<th>MEMBERS</th>				
			</tr>
			
			<?php foreach(Meal::find('all') as $oMeals){ ?>  
				<tr>
					<td><?php echo date_format($oMeals->date, 'Y-m-d') ?> </td>
					<td><?php echo $oMeals->members ?> </td>					
				</tr>		 
			<?php } ?>		
		</table>			
			
	</body>
</html>