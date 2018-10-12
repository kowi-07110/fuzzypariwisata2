<?php
if(isset($_GET['detail'])):
if(isset($_GET['id'])){
		$detail=isset($_GET['detail']) ? clean(htmlspecialchars($_GET['detail'])) : '';
		$id=isset($_GET['id']) ? clean(htmlspecialchars($_GET['id'])) : '';
		$sqlnet="select * from `01-4-view-obyek-wisata` where id_obyek='$id'";
		$hasil=mysql_query($sqlnet)or die('Query paket Error:'.mysql_error());
		while($rows=mysql_fetch_array($hasil)){
			$id_obyek=$rows['id_obyek']; 
			$jenis=$rows['namajenis']; 
			$nama=$rows['nama']; 
			$alamat=$rows['alamat']; 
			$lokasi=$rows['lokasi']; 
			$kota=$rows['kota']; 
			$keterangan=$rows['keterangan']; 
			$fasilitas=$rows['fasilitas']; 
			$visitor=$rows['visitor']; 
			
		}
	?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3><?php echo ucfirst($nama) ?><span class='pull-right'><!-- <a class="btn btn-danger btn-md" href="obyek_wisata.php">Daftar Paket</a> --></span> </h3>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="row">
				<?php $sqli="select * from files where id_obyek='$id_obyek'"; 
					$hasil=mysql_query($sqli) or die('Lihat data Gambar Error:');
					$num=mysql_num_rows($hasil);
					if($num>0){
							
								while($row=mysql_fetch_array($hasil)){
									echo "<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>";

									echo '<a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">';
									echo "<img src='".$baseurl."files/".$row['name']."' class=''>";
									echo "</a>";
									echo "</div>";
								}
							

					}

					?>	
				</div>
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
			</div>
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<table class="table table-hover">
					
					<tbody>
						<tr>
							<th style='width:20%'>Nama:</th><td><?php echo $nama ?></td></tr>
							<tr><th>Jenis Wisata</th><td><a href="<?php echo $id_obyek ?>"><?php echo $jenis ?></a></td></tr>
							<tr><th>Lokasi: </th><td><?php echo $lokasi ?></td></tr>
							<tr><th>Alamat: </th><td><?php echo $alamat; ?></td></tr>
							<tr><th>Kota: </th><td><?php echo $kota ?></td></tr>
							<tr><th>Pengunjung: </th><td><?php echo $visitor?></td></tr>
							<tr><th>Keterangan: </th><td><?php echo $keterangan ?></td></tr>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>	


	<?php


}
endif;
?>