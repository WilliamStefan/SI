<?php

include 'sql_connect.php';

	echo'
	<h1 class ="text-center">Masukkan Data Pengeluaran</h1>
	<br><br>
	
	<form class="form-horizontal" method="post" action="pengeluaran_baru.php">
		<div class="form-group">
			<label class="col-sm-5 control-label">Tanggal</label>
			<div class="col-sm-3">
				<input type="text" type="text" class="form-control" id="inputtanggal2" name="inputtanggalpengeluaran">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-5 control-label">Jumlah</label>
			<div class="col-sm-3">
				<input type="number" class="form-control" name="inputjumlahpengeluaran" placeholder="Masukkan jumlah pengeluaran" min="1">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-5 control-label">Keterangan</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" name="inputketeranganpengeluaran" placeholder="Keterangan penjualan" value="N/A">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-5 col-sm-7">
				<button type="submit" class="btn btn-default">Masukkan</button>
			</div>
		</div>
	</form>
	';
// }
?>