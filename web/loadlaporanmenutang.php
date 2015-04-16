<?php

include 'sql_connect.php';
$tang1 = $_GET['tanggal1'];
$datetime = date_create_from_format("d-m-Y", $tang1);
$tanggal1 = $datetime->format('Y-m-d');

$tang2 = $_GET['tanggal2'];
$datetime = date_create_from_format("d-m-Y", $tang2);
$tanggal2 = $datetime->format('Y-m-d');

$query = "SELECT *,SUM(jumlah) AS jum FROM penjualan,menu WHERE penjualan.id_menu=menu.id_menu AND tanggal>=\"".$tanggal1."\" AND tanggal<=\"".$tanggal2."\" GROUP BY menu.id_menu";

$result = $con->query($query);

?>
	<h1 class ="text-center">Laporan per Menu</h1>
	<br><br>
	
			<?php
				if(mysqli_num_rows($result)==0){
					echo '<h1 class ="text-center">Database Kosong</h1>';
				}
				else{
			?>
			<div class="form-group">
				<label class="col-sm-1 control-label">Pilih range tanggal</label>
					<div class="input-daterange form-group">
						<div class="col-sm-2">
							<input type="text" type="text" class="form-control" id="inputtanggal9" name="">
						</div>
						<div class="col-sm-1">
							hingga tanggal
						</div>
						<div class="col-sm-2">
							<input type="text" type="text" class="form-control" id="inputtanggal10" name="">
						</div>
						<div class="col-sm-1">
							<button type="submit" class="btn btn-default">Oke</button>
						</div>
					</div>
				</div>
			</div>
	
		<table class="table table-striped table-hover">
			<tr>
				<strong>
					<th>Nomor</th>
					<th>Menu</th>
					<th>Jumlah</th>
					<th>Harga</th>
					<th>Total</th>
				</strong>
			</tr>
			<?php
				$i=1;
				while($arr = $result->fetch_assoc()){
					echo '<tr class="warning">';
					echo '<td>'.$i.'</td>';
					echo '<td>'.$arr['nama'].'</td>';
					echo '<td>'.$arr['jum'].'</td>';
					echo '<td>'.$arr['harga'].'</td>';
					echo '<td>'.$arr['jum']*$arr['harga'].'</td>';
					echo '</tr>';
					$i++;
				}
			}
			?>
		</table>
	;
<?php
// }
?>