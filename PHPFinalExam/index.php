<?php
/*active record import for database connection*/
require '../ActiveRecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
	$cfg->set_model_directory('model');
	$cfg->set_connections(
			array(
					'development' => 'mysql://root:@localhost/jobsearch',
					'test' => 'mysql://username:password@localhost/test_database_name',
					'production' => 'mysql://username:password@localhost/production_database_name'
			)			
	);	
});
/*end active record import for database connection*/

?>

<html>
	<body>	
	
		<h1>Job Search</h1>			
		
		<!-- check if jobsearch db has been updated today, and run screenscrape to update if needed -->
		<?php	

			$dLastUpdate = Update::find(1);	//pulling the lastupdate field from the active record db connection	
		
			if (strtotime($dLastUpdate->lastupdate) < strtotime('today')){  //strtotime converts the dates into a unix date format for like comparison
				echo '<p> old data </p>';
			}else{
				echo '<p> current data </p>';
				
			}		
			
		?>
		
		
		
		<form action="." method="POST">
			<table>			
				<tr>
					<th>POSTED DATE</th>
					<th>JOB TITLE</th>
					<th>LINK</th>
					<th>NEXT ACTION</th>
					<th>NEXT ACTION ENTRY</th>								
				</tr>
				
				<?php foreach(Job::find('all') as $oJobs){ ?>  
					<tr>
						<td><?php echo date_format($oJobs->pubdate, 'Y-m-d') ?> </td>
						<td><?php echo $oJobs->title ?> </td>	
						<td><?php echo $oJobs->link ?> </td>
						<td><?php echo $oJobs->nextaction ?> </td>	
						<td><input type="text" name="<?php echo $oJobs->id . 'actionentry' ?>" /></td>		
					</tr>		 
				<?php } ?>	
						
			</table>
			
			<input type="submit" name="submit" value="Submit" />
			
		</form>	
		
		
		
				
			
	</body>
</html>
