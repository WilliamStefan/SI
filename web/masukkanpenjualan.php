<?php

include 'sql_connect.php';

	echo'
	<h1 class ="text-center">Masukkan Data Penjualan</h1>
	<br><br>
	
	<form class="form-horizontal" method="post" action="penjualan_baru.php">
		<div class="form-group">
			<label class="col-sm-5 control-label">Tanggal</label>
			<div class="col-sm-3">
				<input type="text" type="text" class="form-control" id="inputtanggal" name="inputtanggalpenjualan">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-5 control-label">Menu</label>
			<div class="col-sm-3">
				<select class="selectpicker form-control" name="inputmenupenjualan">
	';
					require 'listmenu.php';
	echo'
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-5 control-label">Jumlah</label>
			<div class="col-sm-3">
				<input type="number" class="form-control" name="inputjumlahpenjualan" placeholder="Masukkan jumlah menu yang terjual di sini" min="1">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-5 control-label">Keterangan</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" name="inputketeranganpenjualan" placeholder="Keterangan penjualan" value="N/A">
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