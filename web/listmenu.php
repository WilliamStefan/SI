<?php

include 'sql_connect.php';

$query = mysqli_query($con, "SELECT * FROM menu ORDER BY nama ASC");

while($row = mysqli_fetch_array($query))
{
	$idmenu = $row['id_menu'];
	$namamenu = $row['nama'];
	echo '<option value="'. $idmenu .'">'. $namamenu .'</option>';
}

?>