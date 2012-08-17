<html><body>

<ul>
<?php 
	
	foreach($aMyCDs as $aCD){   //the foreach loop echos out the name of each cd in the database  $aCD is the local name of the variable for this loop only.
		echo '<li>' . $aCD['name'] . '</li>';		//echos out a record in the name field of the database for each iteration of the loop
	}
	

?>
</ul>

<form action='.' method="post">  <!-- action '.' referenced the controller file, in this case index.php -->

	<input type="text" name="title" /><input type="submit" value="Add" />

</form>

</body></html>