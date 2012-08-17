<html><body>


<?php 

foreach(CD::find('all') as $sCD){
	echo '<p>' . $sCD->name . '</p>';
}
?>

<form action='.' method="post">
<input type='text' name='label' /> <input type='submit' value='add' />

</form>

</body></html>
