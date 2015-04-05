<!DOCTYPE html>
<html lang="en"></html>

<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link href="../assets/css/home.css" rel="stylesheet">
<link href="../assets/css/bootstrap-datepicker.css" rel="stylesheet">
<script type="text/javascript" src="../assets/js/ajax.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap-datepicker.js"></script>
<head>
	<title>Ganesha Mocktail</title>
</head>
<body onload="loadlaporankeuangan();">
	<div id="header">
		<p id="white" style="font-size:20px" class="text-center bg-danger">
			<strong>
				Ganesha Mocktail
				<br>
				Jalan Gelap Nyawang 3, Bandung
				<br>
				RT 02 RW 04 Kelurahan Lebak Siliwangi Kecamatan Coblong
				<br>
			</strong>
		</p>
	</div>
	<div id="menubutton">
		<div id="menu" class="pull-left">
			<button type="button" class="btn btn-success" onclick="return loadlaporankeuangan();">Laporan keuangan</button>
			<button type="button" class="btn btn-warning" onclick="return loadlaporanmenu();">Laporan per menu</button>
		</div>
		<div id="menu2" class="pull-right">
			<button type="button" class="btn btn-primary" onclick="return masukkanpenjualan();">Memasukkan data penjualan</button>
			<button type="button" class="btn btn-info" onclick="return masukkanpengeluaran();">Memasukkan data pengeluaran</button>
			<button type="button" class="btn btn-danger">Logout</button>
		</div>
	</div>
	<div id="content">

	</div>	
</body>