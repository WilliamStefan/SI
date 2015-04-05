<?php

$con=mysqli_connect("localhost", "root", "", "ppl_proyek_1");
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	echo "<br>";
}
?>