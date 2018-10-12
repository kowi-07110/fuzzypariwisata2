<?php 
	$id= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($id) || isset($id)){
	
		$sqlnet="select * from `pesan` where id_pesan='$id'";
		$hasil=mysql_query($sqlnet)or die('Query pesan Error:'.mysql_error());
		while($rows=mysql_fetch_array($hasil)){
			$id_wisata=$rows['id_wisata']; 
			$id_paket=$rows['id_paket']; 
			$nama=$rows['nama']; 
			$alamat=$rows['alamat']; 
			$ktp=$rows['ktp']; 
			$telp=$rows['telp']; 
			$tanggal=$rows['tanggal']; 
			$status=$rows['status']; 
			$datetime=$rows['datetime']; 
			
                        
			
		}
		
	} ?> 
<form action="pesan_proses.php" method="POST" role="form">
				<legend>Form pesan</legend>
				<input type="hidden" name="form" value="pesan">
				<input type="hidden" name="id_pesan" value="<?php echo (!empty($id_pesan)?$id_pesan:''); ?>">
				
				<div class="form-group">
					<label for="id_wisata">Id_wisata</label>
					<input name="id_wisata" type="text" class="form-control" id="id_wisata" required placeholder="Masukkan id_wisata" value="<?php echo (!empty($id_wisata)?$id_wisata:''); ?>">
				</div>
				<div class="form-group">
					<label for="id_paket">Id_paket</label>
					<input name="id_paket" type="text" class="form-control" id="id_paket" required placeholder="Masukkan id_paket" value="<?php echo (!empty($id_paket)?$id_paket:''); ?>">
				</div>
				<div class="form-group">
					<label for="nama">Nama</label>
					<input name="nama" type="text" class="form-control" id="nama" required placeholder="Masukkan nama" value="<?php echo (!empty($nama)?$nama:''); ?>">
				</div>
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<input name="alamat" type="text" class="form-control" id="alamat" required placeholder="Masukkan alamat" value="<?php echo (!empty($alamat)?$alamat:''); ?>">
				</div>
				<div class="form-group">
					<label for="ktp">Ktp</label>
					<input name="ktp" type="text" class="form-control" id="ktp" required placeholder="Masukkan ktp" value="<?php echo (!empty($ktp)?$ktp:''); ?>">
				</div>
				<div class="form-group">
					<label for="telp">Telp</label>
					<input name="telp" type="text" class="form-control" id="telp" required placeholder="Masukkan telp" value="<?php echo (!empty($telp)?$telp:''); ?>">
				</div>
				<div class="form-group">
					<label for="tanggal">Tanggal</label>
					<input name="tanggal" type="text" class="form-control" id="tanggal" required placeholder="Masukkan tanggal" value="<?php echo (!empty($tanggal)?$tanggal:''); ?>">
				</div>
				<div class="form-group">
					<label for="status">Status</label>
					<input name="status" type="text" class="form-control" id="status" required placeholder="Masukkan status" value="<?php echo (!empty($status)?$status:''); ?>">
				</div>
				
				<button name="<?php echo !empty($id_pesan)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="pesan.php" class="btn btn-warning">Batal</a>
	
</form>