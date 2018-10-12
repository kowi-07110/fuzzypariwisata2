<?php
if(isset($_GET['detail'])):
if(isset($_GET['id'])){
	$id=isset($_GET['id']) ? clean(htmlspecialchars($_GET['id'])) : '';
	$sqlnet="select * from `01-5-view-paket` where id_paket='$id'";
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
			$durasi_hari=$rows['durasi_hari']; 
			$durasi_malam=$rows['durasi_malam']; 
			$id_obyek=$rows['id_obyek']; 
			$namatransport=$rows['namatransport']; 
			$namaobyek=$rows['namaobyek']; 
			$kamar=$rows['kamar']; 
			$bintang=$rows['bintang']; 
			$max=$rows['max']; 
			$jamdurasi=$rows['jamdurasi']; 
			
		}
	?>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3><?php echo ucfirst($nama) ?><span class='pull-right'><!-- <a class="btn btn-danger btn-md">Pesan Paket</a> --></span> </h3>
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

									echo '<a href="#" class="thumbnail img-responsive responsive-img" data-toggle="modal" data-target="#lightbox">';
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
							<tr><th>Obyek Wisata</th><td><a href="<?php echo $baseurl."obyek_wisata/obyek_wisata_proses.php?detail=true&id=".$id_obyek ?>"><?php echo $namaobyek ?></a></td></tr>
							<tr><th>Lokasi: </th><td><?php echo $lokasi ?></td></tr>
							<tr><th>Transportasi: </th><td><a href="<?php echo $id_transport ?>"><?php echo $namatransport." (maks. ".$max." orang)"; ?></a></td></tr>
							<tr><th>Akomodasi: </th><td><?php echo $id_akomodasi ?></td></tr>
							<tr><th>Biaya Per Orang: </th><td><?php echo $price_person ?></td></tr>
							<tr><th>Durasi: </th><td><?php echo $durasi_hari." hari, ".$durasi_malam." malam (".$jamdurasi." Jam)" ?></td></tr>
							<tr><th>Keterangan: </th><td><?php echo $keterangan ?></td></tr>
							<tr><th>Include: </th><td><?php echo $include ?></td></tr>
							<tr><th>Exclude: </th><td><?php echo $exclude ?></td></tr>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>	


	<?php

	
}
endif;