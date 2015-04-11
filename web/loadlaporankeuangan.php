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
?>
		<h1 class ="text-center">Laporan Keuangan</h1>
		<br><br>
		<table class="table table-striped table-hover">
			<tr>
				<strong>
					<th>Nomor</th>
					<th>Tanggal</th>
					<th>Pendapatan</th>
					<th>Pengeluaran</th>
					<th>Keterangan</th>
				</strong>
			</tr>
			<tr class="warning">
				<td>Lorem ipsum</td>
				<td>Lorem ipsum</td>
				<td>Lorem ipsum</td>
				<td>Lorem ipsum</td>
				<td>Lorem ipsum</td>
			</tr>
		</table>
<?php
// }
?>