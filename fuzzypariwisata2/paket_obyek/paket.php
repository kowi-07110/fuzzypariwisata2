<div class="form-group">
	<label for="id_paket">Paket</label>
	<div class="input-group">
 	<span class="input-group-btn"><a class="btn btn-success " href="../paket/paket.php"><i class="glyphicon glyphicon-plus"></i></a>
    </span>	
	<select name="id_paket" id="id_paket" class="form-control" required>
		<option value='0'>Pilih paket</option>
		<?php 
			$sql="select * from paket";
			$hasil=mysql_query($sql) or die("Query Error:".$sql);
			if($hasil==true){
				while($row=mysql_fetch_array($hasil)){
					if(empty($id_paket)){
						echo "<option value='".$row['id_paket']."'>".$row['nama']."</option>";
					}elseif(!empty($id_paket)){
					
						if($row['id_paket']==$id_paket){
							echo "<option value='".$id_paket."' selected='selected'>".$row['nama']."</option>";
							$id_paket='';
						}else{
							echo "<option value='".$id_paket."'>".$row['nama'].$id_paket."</option>";
						}
					}
				}
			}
	?>
	</select>
					 
</div>
</div>