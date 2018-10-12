<?php 
	$id= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($id) || isset($id)){
	
		$sqlnet="select * from `akomodasi` where id_akomodasi='$id'";
		$hasil=mysql_query($sqlnet)or die('Query akomodasi Error:'.mysql_error());
		while($rows=mysql_fetch_array($hasil)){
			$id_kamar=$rows['id_kamar']; 
			$id_bintang=$rows['id_bintang']; 
			$nama=$rows['nama']; 
			$lokasi=$rows['lokasi']; 
			$alamat=$rows['alamat']; 
			$kota=$rows['kota']; 
			$telp=$rows['telp']; 
			$fasilitas=$rows['fasilitas']; 
			$keterangan=$rows['keterangan']; 
		
                        
			
		}
		
	} ?> 
<form action="akomodasi_proses.php" method="POST" role="form">
				<legend>Form akomodasi</legend>
				<input type="hidden" name="form" value="akomodasi">
				<input type="hidden" name="id_akomodasi" value="<?php echo (!empty($id_akomodasi)?$id_akomodasi:''); ?>">
				
				<?php include('kamar.php') ?>	
				<?php include('bintang.php') ?>	
				
				
				<div class="form-group">
					<label for="nama">Nama</label>
					<input name="nama" type="text" class="form-control" id="nama" required placeholder="Masukkan nama" value="<?php echo (!empty($nama)?$nama:''); ?>">
				</div>
				<div class="form-group">
					<label for="lokasi">Lokasi</label>
					<input name="lokasi" type="text" class="form-control" id="lokasi" required placeholder="Masukkan lokasi" value="<?php echo (!empty($lokasi)?$lokasi:''); ?>">
				</div>
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<input name="alamat" type="text" class="form-control" id="alamat" required placeholder="Masukkan alamat" value="<?php echo (!empty($alamat)?$alamat:''); ?>">
				</div>
				<div class="form-group">
					<label for="kota">Kota</label>
					<input name="kota" type="text" class="form-control" id="kota" required placeholder="Masukkan kota" value="<?php echo (!empty($kota)?$kota:''); ?>">
				</div>
				<div class="form-group">
					<label for="telp">Telp</label>
					<input name="telp" type="text" class="form-control" id="telp" required placeholder="Masukkan telp" value="<?php echo (!empty($telp)?$telp:''); ?>">
				</div>
				<div class="form-group">
					<label for="fasilitas">Fasilitas</label>
					<input name="fasilitas" type="text" class="form-control" id="fasilitas" required placeholder="Masukkan fasilitas" value="<?php echo (!empty($fasilitas)?$fasilitas:''); ?>">
				</div>
				<div class="form-group">
					<label for="keterangan">Keterangan</label>
					<input name="keterangan" type="text" class="form-control" id="keterangan" required placeholder="Masukkan keterangan" value="<?php echo (!empty($keterangan)?$keterangan:''); ?>">
				</div>
				
				<button name="<?php echo !empty($id_akomodasi)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="akomodasi.php" class="btn btn-warning">Batal</a>
	
</form>