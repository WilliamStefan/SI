<?php
$tanggal = $_POST["inputtanggalpengeluaran"];
$jumlah = $_POST["inputjumlahpengeluaran"];
$keterangan = $_POST["inputketeranganpengeluaran"];

include 'sql_connect.php';

// Insert into menu
$sql="INSERT INTO pengeluaran (id_manajer, tanggal, jumlah, keterangan)
VALUES ('1', '$tanggal', '$jumlah', '$keterangan')";

if (!mysqli_query($con,$sql)) {
	die('Error: ' . mysqli_error($con));
}
mysqli_close($con);
?>