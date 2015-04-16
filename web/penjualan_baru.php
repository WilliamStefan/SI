<?php
$tanggal = $_POST["inputtanggalpenjualan"];
$menu = $_POST["inputmenupenjualan"];
$jumlah = $_POST["inputjumlahpenjualan"];
$keterangan = $_POST["inputketeranganpenjualan"];
$datetime = date_create_from_format("d-m-Y", $tanggal);

include 'sql_connect.php';

// Insert into menu
$sql="INSERT INTO penjualan (id_kasir, tanggal, id_menu, jumlah, keterangan)
VALUES ('1', '". $datetime->format('Y-m-d') ."', '$menu', '$jumlah', '$keterangan')";

if (!mysqli_query($con,$sql)) {
    echo "Error";
	die('Error: ' . mysqli_error($con));
}

echo "Success";
mysqli_close($con);

?>