<html>
	<body>	
	
		<h1>Meals Together</h1>	
		
		<form action="." method="POST">
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
				
			<tr>
				<td><input type="text" name="dateInput" /></td>
				<td><input type="text" name="membersInput" /></td>
			</tr>				
				
		</table>	
		
			<input type="submit" name="add" value="Add" />
					
		</form>			
			
	</body>
</html>