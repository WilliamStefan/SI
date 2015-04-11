<?php

include 'sql_connect.php';
include 'print_tanggal.php';

$query = "SELECT * FROM pengeluaran ORDER BY tanggal";

$result = $con->query($query);

$n = mysqli_num_rows($result);

$list = array();

while($arr = $result->fetch_assoc()){
	$temp = array($arr['tanggal'],"",$arr['jumlah'],$arr['keterangan']);
	array_push($list,$temp);
}

$listTemp = array();


$tanggal = "";
$harga = 0;

for($i = 0 ;$i<count($list);$i++){
	if($tanggal==$list[$i][0]){
		$harga+=$list[$i][2];
		if($i!=count($list)-1){
			if($tanggal!=$list[$i+1][0]){
				$temp = array($tanggal,"",$harga,"");
				array_push($listTemp,$temp);
			}
		}
		else{
			$temp = array($tanggal,"",$harga,"");
			array_push($listTemp,$temp);
		}
	}
	else{
		$tanggal = $list[$i][0];
		$harga = $list[$i][2];
		if($i!=count($list)-1){
			if($tanggal!=$list[$i+1][0]){
				$temp = array($tanggal,"",$harga,"");
				array_push($listTemp,$temp);
			}
		}
		else{
			$temp = array($tanggal,"",$harga,"");
			array_push($listTemp,$temp);
		}
	}
}

$list = $listTemp;

$query = "SELECT * FROM penjualan,menu WHERE penjualan.id_menu=menu.id_menu ORDER BY tanggal";

$result = $con->query($query);

$listPenj = array();

$listTemp = array();

while($arr = $result->fetch_assoc()){
	$harga = $arr['jumlah']*$arr['harga'];
	$temp = array($arr['tanggal'],$harga,"",$arr['keterangan']);
	array_push($listPenj,$temp);
}


$tanggal = "";
$harga = 0;
for($i = 0 ;$i<count($listPenj);$i++){
	if($tanggal==$listPenj[$i][0]){
		$harga+=$listPenj[$i][1];
		if($i!=count($listPenj)-1){
			if($tanggal!=$listPenj[$i+1][0]){
				$temp = array($tanggal,$harga,"","");
				array_push($listTemp,$temp);
			}
		}
		else{
			$temp = array($tanggal,$harga,"","");
			array_push($listTemp,$temp);
		}
	}
	else{
		$tanggal = $listPenj[$i][0];
		$harga = $listPenj[$i][1];
		if($i!=count($listPenj)-1){
			if($tanggal!=$listPenj[$i+1][0]){
				$temp = array($tanggal,$harga,"","");
				array_push($listTemp,$temp);
			}
		}
		else{
			$temp = array($tanggal,$harga,"","");
			array_push($listTemp,$temp);
		}
	}
}

foreach($listTemp as $temp){
	array_push($list,$temp);
}

asort($list);
?>
		<h1 class ="text-center">Laporan Keuangan</h1>
		<br><br>
		
		<form class="form-horizontal" method="post" action="">
			<div class="form-group">
				<label class="col-sm-1 control-label">Pilih range tanggal</label>
					<div class="input-daterange form-group">
						<div class="col-sm-2">
							<input type="text" type="text" class="form-control" id="inputtanggal3" name="">
						</div>
						<div class="col-sm-1">
							hingga tanggal
						</div>
						<div class="col-sm-2">
							<input type="text" type="text" class="form-control" id="inputtanggal4" name="">
						</div>
						<div class="col-sm-1">
							<button type="submit" class="btn btn-default">Oke</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		
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
			<?php
			$i=1;
			foreach ($list as $value) {
				echo '<tr class="warning">';
				echo '<td>'.$i.'</td>';
				echo '<td>'.PrintTanggal($value[0]).'</td>';
				echo '<td>'.$value[1].'</td>';
				echo '<td>'.$value[2].'</td>';
				echo '<td><button type=\'button\' class=\'btn btn-link\' onclick=\'return lihatdetail("'.$value[0].'");\'>Lihat detail</button></td>';
				echo '</tr>';
				$i++;
			}
			?>
		</table>
<?php
	mysqli_close($con);
// }
?>