<?php 
	$id= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($id) || isset($id)){
	
		$sqlnet="select * from `paket` where id_paket='$id'";
		$hasil=mysql_query($sqlnet)or die('Query paket Error:'.mysql_error());
		while($rows=mysql_fetch_array($hasil)){
			$nama=$rows['nama']; 
			$lokasi=$rows['lokasi']; 
			$keterangan=$rows['keterangan']; 
			$include=$rows['include']; 
			$exclude=$rows['exclude']; 
			$id_transport=$rows['id_transport']; 
			$id_akomodasi=$rows['id_akomodasi']; 
			$price_person=$rows['price_person']; 
			$price_group=$rows['price_group']; 
			$datetime=$rows['datetime']; 
						
		}
		
	} ?> 
<form action="paket_proses.php" method="POST" role="form">
	<legend>Form paket</legend>
				<input type="hidden" name="form" value="paket">
				<input type="hidden" name="id_paket" value="<?php echo (!empty($id_paket)?$id_paket:''); ?>">
				
	<div class="row">
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<div class="form-group">
					<label for="nama">Nama</label>
					<input name="nama" type="text" class="form-control" id="nama" required placeholder="Masukkan nama" value="<?php echo (!empty($nama)?$nama:''); ?>">
				</div>
				<div class="form-group">
					<label for="lokasi">Lokasi</label>
					<input name="lokasi" type="text" class="form-control" id="lokasi" required placeholder="Masukkan lokasi" value="<?php echo (!empty($lokasi)?$lokasi:''); ?>">
				</div>
				
				<div class="form-group">
					<label for="keterangan ">Keterangan</label><br>
					<textarea name="keterangan" class="form-control" id="keterangan"  placeholder="Masukkan keterangan" ><?php echo (!empty($keterangan)?$keterangan:'');?></textarea>
				</div>
				<div class="form-group">
					<label for="include">Include</label>
					<textarea name="include" class="form-control" id="include"  placeholder="Masukkan include" ><?php echo (!empty($include)?$include:''); ?></textarea>
				</div>
				
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">		
			
			<div class="form-group">
				<label for="exclude">Exclude</label>
				<textarea name="exclude" class="form-control" id="exclude"  placeholder="Masukkan exclude" ><?php echo (!empty($exclude)?$exclude:''); ?></textarea>
			</div>	
			<div class="form-group"><label for="price_person">Biaya Per Orang</label>
				<div class="input-group">
				  	<span class="input-group-addon">Rp</span>
				  	<input name="price_person" id="price_person" type="text" class="form-control" aria-label="Jumlah (Dalam Rupiah)" value="<?php echo (!empty($price_person)?$price_person:''); ?>">
				  	<span class="input-group-addon">.00</span>
				</div>	
			</div>
			<div class="form-group"><label for="price_group">Biaya 5 - 10 Orang</label>
				<div class="input-group">
				  	<span class="input-group-addon">Rp</span>
				  	<input name="price_group" id="price_group" type="text" class="form-control" aria-label="Jumlah (Dalam Rupiah)" value="<?php echo (!empty($price_group)?$price_group:''); ?>">
				  	<span class="input-group-addon">.00</span>
				</div>	
			</div>
		</div>		
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				
			
			<?php include('transport.php') ?>
				<?php include('akomodasi.php') ?>
			<?php include('obyek.php') ?>		
		</div>		
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			

		</div>
				
	</div>
			
	<button name="<?php echo !empty($id_paket)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
	<a href="paket.php" class="btn btn-warning">Batal</a>
	
</form>