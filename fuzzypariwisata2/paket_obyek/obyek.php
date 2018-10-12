<div class="form-group">
	<label for="id_obyek">Obyek Wisata</label>
	<div class="input-group">
 	<span class="input-group-btn"><a class="btn btn-success " href="../obyek_wisata/obyek_wisata.php"><i class="glyphicon glyphicon-plus"></i></a>
    </span>	
	<select name="id_obyek" id="id_obyek" class="form-control" required="required">
		<option value='0'>Pilih obyek_wisata</option>
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
							echo "<option value='".$id_obyek."'>".$row['nama'].$id_obyek."</option>";
						}
					}
				}
			}
	?>
	</select>
					 
</div>
</div>