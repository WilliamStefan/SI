<?php

include 'sql_connect.php';
	echo'
	<h1 class ="text-center">Masukkan Data Menu</h1>
	<br><br>
	
	<form class="form-horizontal" method="post" action="menu_baru.php">
		<div class="form-group">
			<label class="col-sm-5 control-label">Nama menu</label>
			<div class="col-sm-3">
				<input type="text" name="inputnamamenu" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-5 control-label">Harga</label>
			<div class="col-sm-3">
				<input type="number" class="form-control" name="inputhargamenu" placeholder="Masukkan harga menu" min="1">
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