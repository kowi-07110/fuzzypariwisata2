<?php 
	$id= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($id) || isset($id)){
	
		$sqlnet="select * from `wisata` where id_wisata='$id'";
		$hasil=mysql_query($sqlnet)or die('Query wisata Error:'.mysql_error());
		while($rows=mysql_fetch_array($hasil)){
			$id_paket=$rows['id_paket']; 
			$budget=$rows['budget']; 
			$waktu=$rows['waktu']; 
			$visitor=$rows['visitor']; 
			$datetime=$rows['datetime']; 
			
                        
			
		}
		
	} ?> 
<form action="wisata_proses.php" method="POST" role="form">
				<legend>Form wisata</legend>
				<input type="hidden" name="form" value="wisata">
				<input type="hidden" name="id_wisata" value="<?php echo (!empty($id_wisata)?$id_wisata:''); ?>">
			
				<div class="form-group">
					<label for="budget">Budget</label>
					<input name="budget" type="text" class="form-control" id="budget" required placeholder="Masukkan budget" value="<?php echo (!empty($budget)?$budget:''); ?>">
				</div>
				<?php include('durasi.php'); ?>
				<div class="form-group">
					<label for="visitor">Visitor</label>
					<input name="visitor" type="text" class="form-control" id="visitor" required placeholder="Masukkan visitor" value="<?php echo (!empty($visitor)?$visitor:''); ?>">
				</div>
			
				<button name="<?php echo !empty($id_wisata)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="wisata.php" class="btn btn-warning">Batal</a>
	
</form>