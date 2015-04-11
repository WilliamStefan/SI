<?php

$tanggal= $_GET['tanggal'];

include 'sql_connect.php';
include 'print_tanggal.php';

	echo'
	<h1 class ="text-center">Detail Penjualan</h1>
	<h3 class ="text-center">'.PrintTanggal($tanggal).'</h2>
	<br><br>
	
		<table class="table table-striped table-hover">
			<tr>
				<strong>
					<th>Nomor</th>
					<th>Menu yang Terjual</th>
					<th>Jumlah yang Terjual</th>
					<th>Total Harga</th>
				</strong>
			</tr>
			
			<tr class="warning">
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
		<br><br>
	';
	
	echo'
	<h1 class ="text-center">Detail Pengeluaran</h1>
	<h3 class ="text-center">'.$tanggal.'</h2>
	<br><br>
	
		<table class="table table-striped table-hover">
			<tr>
				<strong>
					<th>Nomor</th>
					<th>Jumlah yang Dikeluarkan</th>
					<th>Keterangan</th>
				</strong>
			</tr>
			
			<tr class="warning">
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
	';
// }
?>