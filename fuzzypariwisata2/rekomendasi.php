<?php include('functions.php') ?>
<?php include('header.php') ?>
<?php include('koneksi.php') ?>
		
<?php
if(isset($_POST['submit'])):
	
		
					$budget=isset($_POST['budget']) ? clean(htmlspecialchars($_POST['budget'])) : '';
					$waktu=isset($_POST['waktu']) ? clean(htmlspecialchars($_POST['waktu'])) : '';
					$visitor=isset($_POST['visitor']) ? clean(htmlspecialchars($_POST['visitor'])) : '';
					$datetime=date('Y-m-d H:m:s');
					
					$sql0="select * from wisata where budget='".$budget."' and waktu='".$waktu."' and visitor='".$visitor."'";
					$hasil=mysql_query($sql0)or die('Select Wisata Error:'.mysql_error());
					$numrows=mysql_num_rows($hasil);
					if($numrows>0){
						alert('danger','insert','index.php');
						while($row0=mysql_fetch_array($hasil)){
							$myid=$row0['id_wisata'];
						}
					}else{
						$sql="insert into wisata (budget,waktu,visitor,datetime) values ('".$budget."','".$waktu."','".$visitor."','".$datetime."')";
							// echo $sql;
							$insert=mysql_query($sql)or die('Insert Data wisata Error:'.mysql_error());
							// $numrows=mysql_num_rows($insert);
							if($insert>0){
								// echo $sql;
								alert('success','insert','index.php');
								
							}else{
								alert('danger','insert','index.php');
							}
						
						$myid=mysql_insert_id();
						
					}
						

						$sql1="select * from `view-fuzzy-sugeno` where id_wisata=".$myid;
						$result=mysql_query($sql1)or die('Select Data Error:'.mysql_error());
						if($result>0){
							$div='';
							$div.="<div class='container'>";
							$div.="<div class='row' style='margin-top:20px;margin-bottom:20px'>";
							$div.="<div class='col-md-4 col-lg-4'>";
							$div.="<table class='table table-hovered table-striped table-condesed'>";
							$div.="<tr><th>Budget</th><td colspan='3'>".rupiah($budget)."</td><td></td><td></td></tr>";
							$div.="<tr><th>Durasi Waktu</th><td colspan='3'>".$waktu." Jam</td><td></td><td></td></tr>";
							$div.="<tr><th>Pengunjung</th><td colspan='3'>".$visitor."</td><td></td><td></td></tr>";
							$div.="<tr><th>ID Wisata</th><td colspan='3'>".$myid."</td><td></td><td></td></tr>";
							
							$div.="</table>";
							$div.="</div>";
							$div.="<div class='col-md-8 col-lg-8'>";
							$div.="</div>";
							$div.="<div class='col-md-12 col-lg-12'>";
							$div.="<table class='small table table-hovered table-striped table-condesed'>";

							$div.="<tr>";
							$div.="<th>Paket</th>";
							$div.="<th>Obyek Wisata</th>";
							$div.="<th>Durasi Waktu</th>";
							$div.="<th>Biaya</th>";
							$div.="<th>Akomodasi</th>";
							$div.="<th>Pengunjung</th>";
							$div.="<th>Transportasi</th>";
							$div.="<th>Rekomendasi</th>";
							$div.="<th>Nilai</th>";
							$div.="<th>Aksi</th>";
							
							$div.="</tr>";
							while($row=mysql_fetch_array($result)){
								$div.="<tr>";
								
								
								$div.="<td><a href='".$baseurl."paket/detail-paket.php?detail=true&id=".$row['id_paket']."'>".$row['nama']."</a></td>";
								$div.="<td><a href='".$baseurl."obyek_wisata/detail-obyek.php?detail=true&id=".$row['id_obyek']."'>".$row['namaobyek']."</a></td>";
								$totaldurasi=(($row['durasi_hari']+$row['durasi_malam'])*12);
								$div.="<td>".$row['durasi_hari']." Hari, ".$row['durasi_malam']." Malam (".$totaldurasi." Jam)</td>";
								$div.="<td>".rupiah($row['price_person'])."</td>";
								$div.="<td>".$row['namaakomodasi']."</td>";
								$div.="<td>".$row['visitor']."</td>";
								$div.="<td>".$row['namatransport']." (Maks. ".$row['max']." Orang)</td>";
								$div.="<td>".$row['fuzzy_output_sugeno']."</td>";
								$div.="<td>".$row['defuzzy']."</td>";
								if($row['fuzzy_output_sugeno']=='Memungkinkan'):
								$div.="<td>";
								$div.="<a id='btnpesan' class='btn btn-sm btn-success' data-paket=".$row['id_paket']." data-wisata='".$row['id_wisata']."' >Pesan Paket Ini</a>";
								$div.="</td>";
								?>
								<?php
								else:
								$div.="<td></td>";
								endif;
								$div.="</tr>";
							}
							$div.="</table>";
							$div.="</div>";
							$div.="</div>";
							$div.="</div>";

							echo $div;
						}
					// }
					?>


					

					<div class="modal fade" id="modal-id">
						<div class="modal-dialog">
							<form id="form-pesan" action="pesan.php" method="POST" role="form">

							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">Form Pemesanan</h4>
								</div>
								<div class="modal-body">
										<legend>Pemesanan Paket Wisata</legend>
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="form-group">
													<label for="">Nama</label>
													<input name="nama" type="text" class="form-control" id="nama" placeholder="Nama">
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<div class="form-group">
													<label for="">No.KTP/SIM</label>
													<input name="ktp" type="text" class="form-control" id="ktp" placeholder="No. Identitas">
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<div class="form-group">
													<label for="">No.Telp/HP</label>
													<input name="telp" type="text" class="form-control" id="telp" placeholder="No. Telp/HP">
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="form-group">
													<label for="">Alamat</label>
													<textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat"></textarea>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
												<div class="form-group">
													
													<input name="id_paket" type="hidden" class="form-control" id="id_paket">
													<input name="id_wisata" type="hidden" class="form-control" id="id_wisata">
												</div>
											</div>
										</div>
																		
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-primary">Submit</button>

									<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								</div>
								</form>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- /.modal -->
<?php
else:

endif;
 include('footer.php') ?>