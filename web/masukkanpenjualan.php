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
	<form class="form-horizontal">
		<div class="form-group">
			<label class="col-sm-2 control-label">Tanggal</label>
			<div class="col-sm-10">
				<input type="text" type="text" class="form-control" id="inputtanggal">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Menu</label>
			<div class="col-sm-10">
				<select>
					<option value="volvo">Ayam goreng</option>
					<option value="saab">Ayam bakar</option>
					<option value="mercedes">Ayam madu</option>
					<option value="audi">Ayam cola</option>
				</select> 
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Jumlah</label>
			<div class="col-sm-3">
				<input type="number" class="form-control" id="inputjumlah" placeholder="Masukkan jumlah menu yang terjual di sini" min="1">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Masukkan</button>
			</div>
		</div>
	</form>
	';
// }
?>