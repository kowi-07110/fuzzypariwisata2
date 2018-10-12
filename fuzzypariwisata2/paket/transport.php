<div class="form-group">
	<label for="id_transport">Transport</label>
	<div class="input-group">
 	<span class="input-group-btn"><a class="btn btn-success " href="../transport/transport.php"><i class="glyphicon glyphicon-plus"></i></a>
    </span>	
	<select name="id_transport" id="id_transport" class="form-control" required="required">
		<option value='0'>Pilih Transportasi</option>
		<?php 
			$sql="select * from transport";
			$hasil=mysql_query($sql) or die("Query Error:".$sql);
			if($hasil==true){
				while($row=mysql_fetch_array($hasil)){
					if(empty($id_transport)){
						echo "<option value='".$row['id_transport']."'>".$row['nama']."(".$row['max']." orang)</option>";
					}elseif(!empty($id_transport)){
					
						if($row['id_transport']==$id_transport){
							echo "<option value='".$id_transport."' selected='selected'>".$row['nama']."(".$row['max']." orang)</option>";
							$id_transport='';
						}else{
							echo "<option value='".$id_transport."'>".$row['nama'].$id_transport."(".$row['max']." orang)</option>";
						}
					}
				}
			}
	?>
	</select>
					 
</div>
</div>