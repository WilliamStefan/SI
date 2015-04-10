<?php

include 'sql_connect.php';

// $resultPengaduan = mysqli_query($con,"SELECT * FROM pengaduan NATURAL JOIN taman WHERE status = 'ditolak' ORDER BY tanggal_dibuat DESC");

// if(mysqli_num_rows($resultPengaduan) != 0) {
	// while($rowPengaduan = mysqli_fetch_array($resultPengaduan)){
		// echo'	
			// <div class="contentBox" id="'.$rowPengaduan['status'].'"><a href="laporan_aduan.php?id='.$rowPengaduan['id_pengaduan'].'">
				// <font color="#FFFFFF">
				// <h1>'.$rowPengaduan['judul'].'</h1>
				// <hr color="white" />
				// <p>Lokasi : '.$rowPengaduan['nama'].'<br/>Status : '.$rowPengaduan['status'].'<br/>Tanggal Dibuat : '.PrintTanggal($rowPengaduan['tanggal_dibuat']).'</p>
			// </a>
				// </font>
			// </div>
		// ';
	// }
// }
// else {
	echo'
	<h1 class ="text-center">Masukkan Data Menu</h1>
	<br><br>
	
	<form class="form-horizontal">
		<div class="form-group">
			<label class="col-sm-5 control-label">Nama menu</label>
			<div class="col-sm-3">
				<input type="text" id="inputnamamenu" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-5 control-label">Harga</label>
			<div class="col-sm-3">
				<input type="number" class="form-control" id="inputharga" placeholder="Masukkan harga menu" min="1">
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