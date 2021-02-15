<?php include('config.php'); ?>

		<center><font size="6">Add AMD Graphic</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$code			= $_POST['code'];
			$processor		= $_POST['processor'];
			$list		= $_POST['list'];

			$cek = mysqli_query($koneksi, "SELECT * FROM pro_hardware WHERE code='$code'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO pro_hardware(code, processor, list) VALUES('$code', '$processor', '$list')") or die(mysqli_error($koneksi));

				if($sql){
					echo '<script>alert("Adding Successfull."); document.location="base.php?page=show_pro";</script>';
				}else{
					echo '<div class="alert alert-warning">Adding was failure.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Code is exist !.</div>';
			}
		}
		?>

		<form action="base.php?page=add_pro" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Code Name</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="code" class="form-control" size="4" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Processor Name</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="processor" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Description</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="list" class="form-control" required>
				</div>
			</div>
			
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Save">
			</div>
		</form>
	</div>
