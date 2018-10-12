<?php 
	$id= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($id) || isset($id)){
	
		$sqlnet="select * from `jenis` where id_jenis='$id'";
		$hasil=mysql_query($sqlnet)or die('Query jenis Error:'.mysql_error());
		while($rows=mysql_fetch_array($hasil)){
			$nama=$rows['nama']; 
			$datetime=$rows['datetime']; 
			
                        
			
		}
		
	} ?> 
<form action="jenis_proses.php" method="POST" role="form">
				<legend>Form jenis</legend>
				<input type="hidden" name="form" value="jenis">
				<input type="hidden" name="id_jenis" value="<?php echo (!empty($id_jenis)?$id_jenis:''); ?>">
				
				<div class="form-group">
					<label for="nama">Nama</label>
					<input name="nama" type="text" class="form-control" id="nama" required placeholder="Masukkan nama" value="<?php echo (!empty($nama)?$nama:''); ?>">
				</div>
		
				<button name="<?php echo !empty($id_jenis)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="jenis.php" class="btn btn-warning">Batal</a>
	
</form>