<?php
include 'sql_connect.php';

// Insert into menu
$sql="TRUNCATE TABLE penjualan";

if (!mysqli_query($con,$sql)) {
    echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Error!</strong> Data penjualan gagal dihapus. Pesan kesalahan: ' .mysqli_error($con). '</div>';
	die();
}
else {
	echo '<div class="alert alert-success alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><b>Sukses!</b> Data penjualan berhasil dihapus.</div>';
}
mysqli_close($con);

?>