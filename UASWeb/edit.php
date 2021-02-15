<?php include('config.php'); ?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Edit Data</font></center>

		<hr>

		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['code'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$code = $_GET['code'];

			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM pro_hardware WHERE code='$code'") or die(mysqli_error($koneksi));

			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>

		<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$processor			  = $_POST['processor'];
			$list	= $_POST['list'];

			$sql = mysqli_query($koneksi, "UPDATE pro_hardware SET processor='$processor',  list='$list' WHERE code='$code'") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="base.php?page=show_pro";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>

		<form action="base.php?page=edit_pro&code=<?php echo $code; ?>" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Code Name</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="code" class="form-control" size="4" value="<?php echo $data['code']; ?>" readonly required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Graphic Name</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="processor" class="form-control" value="<?php echo $data['processor']; ?>" required>
				</div>
			</div>

			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Graphic Name</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="list" class="form-control" value="<?php echo $data['list']; ?>" required>
				</div>
			</div>
			
			<!-- <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Graphic Type</label>
				<div class="col-md-6 col-sm-6">
					<select name="list" class="form-control" required>
						<option value="">Choose Graphic Type</option>
						<option value="AMD Radeon HD" <?php if($data['list'] == 'AMD Radeon HD'){ echo 'selected'; } ?>>AMD Radeon HD</option>
						<option value="AMD Radeon RX" <?php if($data['list'] == 'AMD Radeon RX'){ echo 'selected'; } ?>>AMD Radeon RX</option>
						<option value="AMD Radeon Vega" <?php if($data['list'] == 'AMD Radeon HD'){ echo 'selected'; } ?>>AMD Radeon Vega</option>
						<option value="AMD Radeon Vega Mobile" <?php if($data['list'] == 'AMD Radeon Vega'){ echo 'selected'; } ?>>AMD Radeon Vega Mobile</option>
						<option value="AMD Radeon 500 Series" <?php if($data['list'] == 'AMD Radeon 500 Series'){ echo 'selected'; } ?>>AMD Radeon 500 Series</option>
						<option value="AMD Radeon 400 Series" <?php if($data['list'] == 'AMD Radeon 400 Series'){ echo 'selected'; } ?>>AMD Radeon 400 Series</option>
					</select>
				</div>
			</div> -->
			<div class="item form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Save">
					<a href="base.php?page=show_pro" class="btn btn-warning">Back</a>
				</div>
			</div>
		</form>
	</div>
