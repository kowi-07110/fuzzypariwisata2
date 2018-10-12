<?php 
	$id= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($id) || isset($id)){
	
		$sqlnet="select * from `paket_obyek` where id_paket_obyek='$id'";
		$hasil=mysql_query($sqlnet)or die('Query paket_obyek Error:'.mysql_error());
		while($rows=mysql_fetch_array($hasil)){
			$id_paket=$rows['id_paket']; 
			$id_obyek=$rows['id_obyek']; 
			$keterangan=$rows['keterangan']; 
			$datetime=$rows['datetime']; 
			
                        
			
		}
		
	} ?> 
<form action="paket_obyek_proses.php" method="POST" role="form">
				<legend>Form paket_obyek</legend>
				<input type="hidden" name="form" value="paket_obyek">
				<input type="hidden" name="id_paket_obyek" value="<?php echo (!empty($id_paket_obyek)?$id_paket_obyek:''); ?>">
				
				
				<?php include('paket.php'); ?>
				<?php include('obyek.php'); ?>
				<div class="form-group">
					<label for="keterangan">Keterangan</label>
					<input name="keterangan" type="text" class="form-control" id="keterangan" placeholder="Masukkan keterangan" value="<?php echo (!empty($keterangan)?$keterangan:''); ?>">
				</div>
			
				<button name="<?php echo !empty($id_paket_obyek)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="paket_obyek.php" class="btn btn-warning">Batal</a>
	
</form>