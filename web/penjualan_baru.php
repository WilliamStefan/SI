<?php
$tanggal = $_POST["inputtanggalpenjualan"];
$menu = $_POST["inputmenupenjualan"];
$jumlah = $_POST["inputjumlahpenjualan"];
$keterangan = $_POST["inputketeranganpenjualan"];

include 'sql_connect.php';

// Insert into menu
$sql="INSERT INTO penjualan (id_kasir, tanggal, id_menu, jumlah, keterangan)
VALUES ('1', '$tanggal', '$menu', '$jumlah', '$keterangan')";

if (!mysqli_query($con,$sql)) {
	die('Error: ' . mysqli_error($con));
}
mysqli_close($con);
?>