<?php

	require_once('model/database.php');
	
	
	
	// Get name for current category
	$query = "SELECT * FROM cds
	
	
	// Get all titles
	$query = 'SELECT * FROM cds
	ORDER BY titel';
	$cdrack = $db->query($query);
	

?>


<html><body>

 <h1>CD Rack</h1>
            <table>
                <tr>
                    <th>Title</th>
                    <th>Artist</th>
                    <th>Released</th>                   
                </tr>  
                             
                <?php foreach ($cdrack as $cdracks){
                <tr>
                    <td>echo $cdrack['titel']; </td>
                    <td>echo $cdrack['interpret']; </td>
                    <td>echo $cdrack['jahr']; </td>
                </tr>
                }   ?>
                
            </table>
</body></html>

