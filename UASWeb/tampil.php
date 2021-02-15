<?php
//memasukkan file config.php
include('config.php');
?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">List Processor</font></center>
		<hr>
		<a href="base.php?page=add_pro"><button class="btn btn-dark right">Add</button></a>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>No.</th>
					<th>Code.</th>
					<th>Processor Name.</th>
					<th>Description.</th>
					<th>Action.</th>
				</tr>
			</thead>
			<tbody>
				<?php
				//query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM pro_hardware ORDER BY code DESC") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['code'].'</td>
							<td>'.$data['processor'].'</td>
							<td>'.$data['list'].'</td>
							<td>
								<a href="base.php?page=edit_pro&code='.$data['code'].'" class="btn btn-secondary btn-sm">Edit</a>
								<a href="delete.php?code='.$data['code'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure to replace this?\')">Delete</a>
							</td>
						</tr>
						';
						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Table is empty.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
	</div>
	</div>
