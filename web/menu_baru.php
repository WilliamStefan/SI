<?php
$nama = $_POST["inputnamamenu"];
$harga = $_POST["inputhargamenu"];

include 'sql_connect.php';

// Insert into menu
$sql="INSERT INTO menu (nama, harga)
VALUES ('$nama', '$harga')";

if (!mysqli_query($con,$sql)) {
	echo '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button> <strong>Gagal!</strong> Menu gagal ditambahkan. Error:'.mysqli_error($con).' </div>';
	die();
}
else {
	echo '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button> <strong>Sukses!</strong> Menu '. $nama . ' berhasil ditambahkan</div>';
}
mysqli_close($con);