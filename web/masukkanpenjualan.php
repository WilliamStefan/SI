<?php

include 'sql_connect.php';
?>

	<h1 class ="text-center">Masukkan Data Penjualan</h1>
	<br><br>
	<div id="sukses-tambah-data-penjualan" class="container"></div>
	<form class="form-horizontal" method="post" action="penjualan_baru.php">
		<div class="form-group">
			<label class="col-sm-5 control-label">Tanggal</label>
			<div class="col-sm-3">
				<input type="text" type="text" class="form-control" id="inputtanggal" name="inputtanggalpenjualan" placeholder="dd-mm-yyyy">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-5 control-label">Menu</label>
			<div class="col-sm-3">
				<select class="selectpicker form-control" name="inputmenupenjualan">
<?php
					require 'listmenu.php';
?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-5 control-label">Jumlah</label>
			<div class="col-sm-3">
				<input type="number" class="form-control" id="inputjumlahpenjualan" name="inputjumlahpenjualan" placeholder="Masukkan jumlah menu yang terjual di sini" min="1">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-5 control-label">Keterangan</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id='inputketeranganpenjualan' name="inputketeranganpenjualan" placeholder="Keterangan penjualan" value="N/A">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-5 col-sm-7">
				<button type="submit" class="btn btn-default" id="data-penjualan-submit">Masukkan</button>
			</div>
		</div>
	</form>