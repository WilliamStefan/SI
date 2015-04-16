	<h1 class ="text-center">Masukkan Data Pengeluaran</h1>
	<br><br>
	<div id="sukses-tambah-data-pengeluaran" class="container"></div>
	<form class="form-horizontal" method="post" action="#" id="form-pengeluaran-baru">
		<div class="form-group">
			<label class="col-sm-5 control-label">Tanggal</label>
			<div class="col-sm-3">
				<input type="text" type="text" class="form-control" id="inputtanggal2" name="inputtanggalpengeluaran" placeholder="dd-mm-yyyy">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-5 control-label">Jumlah</label>
			<div class="col-sm-3">
				<input type="number" class="form-control" id="inputjumlahpengeluaran" name="inputjumlahpengeluaran" placeholder="Masukkan jumlah pengeluaran" min="1">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-5 control-label">Keterangan</label>
			<div class="col-sm-3">
				<input type="text" class="form-control" id="inputketeranganpengeluaran" name="inputketeranganpengeluaran" placeholder="Keterangan penjualan" value="N/A">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-5 col-sm-7">
				<submit class="btn btn-default" id="submit-data-pengeluaran" href="#">Masukkan</submit>
			</div>
		</div>
	</form>