<html><body>

<ul>
<?php 

foreach(CD::find('all') as $sCD){
	echo '<li>' . $sCD->name . '</li>';
}
?>
</ul>

<form action='.' method="post">
<input type='text' name='label' /> <input type='submit' value='add' />

</form>

</body></html>
