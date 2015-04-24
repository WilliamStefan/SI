<?php
require 'sql_connect.php';
require 'auth.php';

if(!cekCookie($con))
{
    header("location: login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en"></html>

<!-- CSS -->
<link href="../assets/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="../assets/bootstrap/css/bootstrap-datepicker.css" rel="stylesheet">
<link href="../assets/bootstrap/css/bootstrap-select.css" rel="stylesheet">
<link href="../assets/css/home.css" rel="stylesheet">

<!-- Scripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="../assets/js/ajax.js"></script>
<script type="text/javascript" src="../assets/bootstrap/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="../assets/bootstrap/js/bootstrap-select.js"></script>

<head>
	<title>Ganesha Mocktail</title>
</head>
<body onload="return loadlaporankeuangan();">
	<div id="header">
		<p id="white" style="font-size:40px" class="text-center">
			<strong>
				Ganesha Mocktail
			</strong>
		</p>
	</div>
	<div id="menubutton">
		<div id="menu" class="pull-left">
			<button type="button" class="btn btn-default" onclick="return loadlaporankeuangan();">Laporan keuangan</button>
			<button type="button" class="btn btn-default" onclick="return loadlaporanmenu();">Laporan per menu</button>
			<button type="button" class="btn btn-danger" onclick="return loadreset();">Reset data</button>
		</div>
		<div id="menu2" class="pull-right">
				<button type="button" class="btn btn-default" onclick="return masukkanmenu();">+ Menu</button>
				<button type="button" class="btn btn-default" onclick="return masukkanpenjualan();">+ Data penjualan</button>
				<button type="button" class="btn btn-default" onclick="return masukkanpengeluaran();">+ Data pengeluaran</button>
				<a class="btn btn-danger" href="logout.php">Logout</a>
			</ul>
		</div>
	</div>
	<div id="content">
	</div>	
</body>