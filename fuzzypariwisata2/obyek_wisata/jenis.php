<div class="form-group">
	<label for="id_jenis">Jenis Wisata</label>
	<div class="input-group">
 	<span class="input-group-btn"><a class="btn btn-success " href="../jenis/jenis.php"><i class="glyphicon glyphicon-plus"></i></a>
    </span>	
	<select name="id_jenis" id="id_jenis" class="form-control" required="required">
		<option value='0'>Pilih Jenis Wisata</option>
		<?php 
			$sql="select * from jenis";
			$hasil=mysql_query($sql) or die("Query Error:".$sql);
			if($hasil==true){
				while($row=mysql_fetch_array($hasil)){
					if(empty($id_jenis)){
						echo "<option value='".$row['id_jenis']."'>".$row['nama']."</option>";
					}elseif(!empty($id_jenis)){
					
						if($row['id_jenis']==$id_jenis){
							echo "<option value='".$id_jenis."' selected='selected'>".$row['nama']."</option>";
							$id_jenis='';
						}else{
							echo "<option value='".$id_jenis."'>".$row['nama'].$id_jenis."</option>";
						}
					}
				}
			}
	?>
	</select>
					 
</div>
</div>