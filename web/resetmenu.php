<?php
include 'sql_connect.php';

$sql="SET FOREIGN_KEY_CHECKS = 0;";
if (!mysqli_query($con,$sql)) {
    echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Error!</strong> Menu gagal dihapus. Pesan kesalahan: ' .mysqli_error($con). '</div>';
    die('Error: ' . mysqli_error($con));
}

$sql1="TRUNCATE TABLE menu";
if (!mysqli_query($con,$sql1)) {
    echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Error!</strong> Menu gagal dihapus. Pesan kesalahan: ' .mysqli_error($con). '</div>';
    die('Error: ' . mysqli_error($con));
}

$sql2="TRUNCATE TABLE penjualan";
if (!mysqli_query($con,$sql2)) {
    echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Error!</strong> Menu gagal dihapus. Pesan kesalahan: ' .mysqli_error($con). '</div>';
    die('Error: ' . mysqli_error($con));
}

$sql3="SET FOREIGN_KEY_CHECKS = 1;";
if (!mysqli_query($con,$sql3)) {
    echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Error!</strong> Menu gagal dihapus. Pesan kesalahan: ' .mysqli_error($con). '</div>';
    die('Error: ' . mysqli_error($con));
}

echo '<div class="alert alert-success alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><b>Sukses!</b> Data menu berhasil dihapus.</div>';

mysqli_close($con);
