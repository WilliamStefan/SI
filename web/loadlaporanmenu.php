<?php

include 'sql_connect.php';

	echo'
	<h1 class ="text-center">Laporan per Menu</h1>
	<br><br>
	
	<form class="form-horizontal" method="post" action="">
			<div class="form-group">
				<label class="col-sm-1 control-label">Pilih range tanggal</label>
					<div class="input-daterange form-group">
						<div class="col-sm-2">
							<input type="text" type="text" class="form-control" id="inputtanggal5" name="">
						</div>
						<div class="col-sm-1">
							hingga tanggal
						</div>
						<div class="col-sm-2">
							<input type="text" type="text" class="form-control" id="inputtanggal6" name="">
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
					<th>Menu</th>
					<th>Jumlah</th>
					<th>Harga</th>
					<th>Total</th>
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
	';
// }
?>