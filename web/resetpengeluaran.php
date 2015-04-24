<?php
include 'sql_connect.php';

// Insert into menu
$sql="TRUNCATE TABLE pengeluaran";

if (!mysqli_query($con,$sql)) {
    echo "Error";
	die('Error: ' . mysqli_error($con));
}
else {
	echo "Success";
}
mysqli_close($con);

?>