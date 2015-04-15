<?php

$tanggal= $_GET['tanggal'];
$pendapatan = $_GET['pendapatan'];

include 'sql_connect.php';
include 'print_tanggal.php';





if($pendapatan==1){
	$query = "SELECT * FROM penjualan,menu WHERE penjualan.id_menu=menu.id_menu AND tanggal=\"".$tanggal."\"";

	$result = $con->query($query);
	
	?>

	<h1 class ="text-center">Detail Penjualan</h1>
	<?php
		echo '<h3 class ="text-center">'.PrintTanggal($tanggal).'</h2>';
	?>
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
				
			
			<?php
			$i=1;
			$jum = 0;
			$harga = 0;
			while($arr = $result->fetch_assoc()){
				$tempjum =$arr['jumlah'];
				$tempharg =$arr['jumlah']*$arr['harga'];
				echo '<tr class="warning">';
				echo '<td>'.$i.'</td>';
				echo '<td>'.$arr['nama'].'</td>';
				echo '<td>'.$tempjum.'</td>';
				echo '<td>'.$tempharg.'</td>';
				echo '</tr>';
				$i++;
				$jum+=$tempjum;
				$harga+=$tempharg;
			}
			?>
			<tr>
				<strong>
					<th>Total</th>
					<th></th>
					<?php echo '<th>'.$jum.'</th>' ?>
					<?php echo '<th>'.$harga.'</th>' ?>
				</strong>
			</tr>
		</table>
		<br><br>

	
<?php
}
else{
	$query = "SELECT * FROM pengeluaran WHERE tanggal=\"".$tanggal."\"";

	$result = $con->query($query);
?>
	<h1 class ="text-center">Detail Pengeluaran</h1>
	<?php
		echo '<h3 class ="text-center">'.PrintTanggal($tanggal).'</h2>';
	?>
	<br><br>

		<table class="table table-striped table-hover">
			<tr>
				<strong>
					<th>Nomor</th>
					<th>Jumlah yang Dikeluarkan</th>
					<th>Keterangan</th>
				</strong>
			</tr>
	<?php		
		$i=1;
		$jum = 0;
		while($arr = $result->fetch_assoc()){
			echo '<tr class="warning">';
			echo '<td>'.$i.'</td>';
			echo '<td>'.$arr['jumlah'].'</td>';
			echo '<td>'.$arr['keterangan'].'</td>';
			echo '</tr>';
			$i++;
			$jum+=$arr['jumlah'];
		}
	?>
	<tr>
		<strong>
			<th>Total</th>
			<?php echo '<th>'.$jum.'</th>' ?>
			<th></th>
		</strong>
	</tr>
	</table>
<?php
}


// }
?>