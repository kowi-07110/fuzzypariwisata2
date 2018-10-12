<div class="form-group">
	<label for="id_akomodasi">Akomodasi</label>
	<div class="input-group">
 	<span class="input-group-btn"><a class="btn btn-success " href="../akomodasi/akomodasi.php"><i class="glyphicon glyphicon-plus"></i></a>
    </span>	
	<select name="id_akomodasi" id="id_akomodasi" class="form-control" required="required">
		<option value='0'>Pilih Akomodasi</option>
		<?php 
			$sql="select * from akomodasi";
			$hasil=mysql_query($sql) or die("Query Error:".$sql);
			if($hasil==true){
				while($row=mysql_fetch_array($hasil)){
					if(empty($id_akomodasi)){
						echo "<option value='".$row['id_akomodasi']."'>".$row['nama']."</option>";
					}elseif(!empty($id_akomodasi)){
					
						if($row['id_akomodasi']==$id_akomodasi){
							echo "<option value='".$id_akomodasi."' selected='selected'>".$row['nama']."</option>";
							$id_akomodasi='';
						}else{
							echo "<option value='".$id_akomodasi."'>".$row['nama'].$id_akomodasi."</option>";
						}
					}
				}
			}
	?>
	</select>
					 
</div>
		
					 
				</div>