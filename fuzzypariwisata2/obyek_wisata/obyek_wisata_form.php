<?php 
	$id= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($id) || isset($id)){
	
		$sqlnet="select * from `obyek_wisata` where id_obyek='$id'";
		$hasil=mysql_query($sqlnet)or die('Query obyek_wisata Error:'.mysql_error());
		while($rows=mysql_fetch_array($hasil)){
			$id_obyek=$rows['id_obyek']; 
			$id_jenis=$rows['id_jenis']; 
			$nama=$rows['nama']; 
			$alamat=$rows['alamat']; 
			$lokasi=$rows['lokasi']; 
			$kota=$rows['kota']; 
			$keterangan=$rows['keterangan']; 
			$fasilitas=$rows['fasilitas']; 
			$tiket_regular=$rows['tiket_regular']; 
			$tiket_weekend=$rows['tiket_weekend']; 
			$visitor=$rows['visitor']; 
			$datetime=$rows['datetime']; 
			
                        
			
		}
		
	} ?> 
<form action="obyek_wisata_proses.php" method="POST" role="form">
	<div class="row">
		<legend>Form obyek_wisata</legend>
				<input type="hidden" name="form" value="obyek_wisata">
				<input type="hidden" name="id_obyek" value="<?php echo (!empty($id_obyek)?$id_obyek:''); ?>">
				
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<?php include('jenis.php') ?>
				<div class="form-group">
					<label for="nama">Nama</label>
					<input name="nama" type="text" class="form-control" id="nama" required placeholder="Masukkan nama" value="<?php echo (!empty($nama)?$nama:''); ?>">
				</div>
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<input name="alamat" type="text" class="form-control" id="alamat" required placeholder="Masukkan alamat" value="<?php echo (!empty($alamat)?$alamat:''); ?>">
				</div>
				<div class="form-group">
					<label for="lokasi">Lokasi</label>
					<input name="lokasi" type="text" class="form-control" id="lokasi" required placeholder="Masukkan lokasi" value="<?php echo (!empty($lokasi)?$lokasi:''); ?>">
				</div>
				<div class="form-group">
					<label for="kota">Kota</label>
					<input name="kota" type="text" class="form-control" id="kota" required placeholder="Masukkan kota" value="<?php echo (!empty($kota)?$kota:''); ?>">
				</div>
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="form-group">
					<label for="keterangan">Keterangan</label>
					<textarea name="keterangan" class="form-control" id="keterangan"  placeholder="Masukkan keterangan" ><?php echo (!empty($keterangan)?$keterangan:''); ?></textarea>
				</div>
				<div class="form-group">
					<label for="fasilitas">Fasilitas</label>
					<textarea name="fasilitas" class="form-control" id="fasilitas"  placeholder="Masukkan fasilitas" ><?php echo (!empty($fasilitas)?$fasilitas:''); ?></textarea>
				</div>
				<div class="form-group">
					<label for="tiket_regular">Tiket_regular</label>
					<input name="tiket_regular" type="text" class="form-control" id="tiket_regular" placeholder="Masukkan tiket_regular" value="<?php echo (!empty($tiket_regular)?$tiket_regular:''); ?>">
				</div>
				<div class="form-group">
					<label for="tiket_weekend">Tiket_weekend</label>
					<input name="tiket_weekend" type="text" class="form-control" id="tiket_weekend" placeholder="Masukkan tiket_weekend" value="<?php echo (!empty($tiket_weekend)?$tiket_weekend:''); ?>">
				</div><div class="form-group">
					<label for="visitor">visitor</label>
					<input name="visitor" type="text" class="form-control" id="visitor" placeholder="Masukkan visitor" value="<?php echo (!empty($visitor)?$visitor:''); ?>">
				</div>
				
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<!-- <a id="btn-upload" class="btn btn-primary" data-toggle="" href='<?php echo $baseurl ?>upload-form.php' data-target="" data-id="<?php echo !empty($id_obyek)?$id_obyek:'' ?>">Upload Foto</a> -->
			<a id="btn-upload" class="btn btn-primary" data-toggle="modal" href='#modal-upload' data-target="" data-obyek="<?php echo !empty($id_obyek)?$id_obyek:'' ?>">Upload Foto</a>
			<?php $sqli="select * from files where id_obyek='$id'"; 
			$hasil=mysql_query($sqli) or die('Lihat data Gambar Error:');
			$num=mysql_num_rows($hasil);
			if($num>0){
				echo "<div class='row' style='margin-top:10px'>";
					echo "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>";

						while($row=mysql_fetch_array($hasil)){
							echo '<a href="#" class="thumbnail col-md-6 col-lg-6" data-toggle="modal" data-target="#lightbox">';
							echo "<img src='".$baseurl."files/".$row['name']."' class=''>";
							echo "</a>";
						}
					echo "</div>";
				echo "</div>";	

			}

			?>	
			<div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			    <div class="modal-dialog">
			        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
			        <div class="modal-content">
			            <div class="modal-body">
			                <img src="" alt="" />
			            </div>
			        </div>
			    </div>
			</div>
			<div id="modal-upload" class="modal fade" >
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
				
		</div>
	</div>
				
				
			
				
				<button name="<?php echo !empty($id_obyek)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="obyek_wisata.php" class="btn btn-warning">Batal</a>
	
</form>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="files">

		</div>
	</div>
</div>