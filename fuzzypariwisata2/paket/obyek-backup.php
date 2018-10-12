<?php if(empty($id)): ?>
<div class="form-group">
	<label for="id_obyek">Obyek Wisata</label>
	<div class="input-group">
 	<span class="input-group-btn"><a class="btn btn-success " href="../obyek_wisata/obyek_wisata.php"><i class="glyphicon glyphicon-plus"></i></a>
    </span>	
	<select name="id_obyek[]" id="paket_id_obyek" class="form-control" multiple="multiple">
		<option value='0'>Pilih Transportasi</option>
		<?php 
			$sql="select * from obyek_wisata";
			$hasil=mysql_query($sql) or die("Query Error:".$sql);
			if($hasil==true){
				while($row=mysql_fetch_array($hasil)){
					if(empty($id_obyek)){
						echo "<option value='".$row['id_obyek']."'>".$row['nama']."</option>";
					}elseif(!empty($id_obyek)){
					
						if($row['id_obyek']==$id_obyek){
							echo "<option value='".$id_obyek."' selected='selected'>".$row['nama']."</option>";
							$id_obyek='';
						}else{
							echo "<option value='".$id_obyek."'>".$row['namaobyek'].$id_obyek."</option>";
						}
					}
				}
			}
	?>
	</select>
					 
	</div>
</div>
<?php else: ?>

 <select name="id_obyek[]" id="paket_id_obyek" class="form-control" multiple="multiple">
		<option value='0'>Pilih Transportasi</option>
		<?php 
			$sql1="select * from `02-view-paket-obyek` where `id_paket`='$id'";
			// $sql1="select * from obyek_wisata";
			$hasil1=mysql_query($sql1) or die("Query Error:".$sql1);
			if($hasil1>0){
				while($row=mysql_fetch_array($hasil1)){
					$id_obyek=$row['id_obyek'];
					if(empty($id_obyek)){
						echo "<option value='".$row['id_obyek']."'>".$row['namaobyek']."</option>";
					}elseif(!empty($id_obyek)){
					
						if($row['id_obyek']==$id_obyek){
							echo "<option value='".$id_obyek."' selected='selected'>".$row['namaobyek']."</option>";
							$id_obyek='';
						}else{
							echo "<option value='".$id_obyek."'>".$row['namaobyek'].$id_obyek."</option>";
						}
					}
				}
			}
	?>
	</select>
<?php endif; ?>