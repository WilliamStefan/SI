<?php
$nama = $_POST["inputnamamenu"];
$harga = $_POST["inputhargamenu"];

include 'sql_connect.php';

// Insert into menu
$sql="INSERT INTO menu (nama, harga)
VALUES ('$nama', '$harga')";

if (!mysqli_query($con,$sql)) {
	echo "Error";
	die('Error: ' . mysqli_error($con));
}
else {
	echo "Success";
}
mysqli_close($con);
?>