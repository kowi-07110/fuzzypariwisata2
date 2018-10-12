<?php 
	$id= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($id) || isset($id)){
	
		$sqlnet="select * from `transport` where id_transport='$id'";
		$hasil=mysql_query($sqlnet)or die('Query transport Error:'.mysql_error());
		while($rows=mysql_fetch_array($hasil)){
			$id_tipe=$rows['id_tipe']; 
			$nama=$rows['nama']; 
			$max=$rows['max']; 
			$is_ac=$rows['is_ac']; 
			$is_recleaning=$rows['is_recleaning']; 
			$is_mineral=$rows['is_mineral']; 
			$is_hiburan=$rows['is_hiburan']; 
			$is_bbm=$rows['is_bbm']; 
			$is_driver=$rows['is_driver']; 
			$datetime=$rows['datetime']; 
			
                        
			
		}
		
	} ?> 
<form action="transport_proses.php" method="POST" role="form">
				<legend>Form transport</legend>
				<input type="hidden" name="form" value="transport">
				<input type="hidden" name="id_transport" value="<?php echo (!empty($id_transport)?$id_transport:''); ?>">
				
				
				<div class="form-group">
					<label for="nama">Nama</label>
					<input name="nama" type="text" class="form-control" id="nama" required placeholder="Masukkan nama" value="<?php echo (!empty($nama)?$nama:''); ?>">
				</div>
				<div class="form-group">
					<label for="max">Max</label>
					<input name="max" type="text" class="form-control" id="max" required placeholder="Masukkan max" value="<?php echo (!empty($max)?$max:''); ?>">
				</div>
				
				
				<div class="form-group"><label for="is_ac">AC</label>
					<div class="">
						<label class="radio-inline">
							<input type="radio" name="is_ac" id="is_ac" value="1" <?php if(!empty($is_ac)&&$is_ac=='1'){ echo "checked='checked'";} ?>>
							Ya
						</label>
						<label class="radio-inline">
							<input type="radio" name="is_ac" id="is_ac" value="0" <?php if(!empty($is_ac)&&$is_ac=='0'){ echo "checked='checked'";} ?>>
							Tidak
						</label>
					</div>
				</div>
				<div class="form-group"><label for="is_recleaning">Recleaning Seat</label>
					<div class="">
						<label class="radio-inline">
							<input type="radio" name="is_recleaning" id="is_recleaning" value="1" <?php if(!empty($is_recleaning)&&$is_recleaning=='1'){ echo "checked='checked'";} ?>>
							Ya
						</label>
						<label class="radio-inline">
							<input type="radio" name="is_recleaning" id="is_recleaning" value="0" <?php if(!empty($is_recleaning)&&$is_recleaning=='0'){ echo "checked='checked'";} ?>>
							Tidak
						</label>
					</div>
				</div>
				
				<div class="form-group"><label>Air Mineral</label>
					<div>
					
					<label class='radio-inline'>
					<input name="is_mineral" type="radio" class="" id="is_mineral"  value="1" <?php if(!empty($is_mineral)&&$is_mineral=='1'){echo "checked='checked'";} ?>>
					Ya
					</label>
					<label class='radio-inline'>
					<input name="is_mineral" type="radio" class="" id="is_mineral"  value="0"<?php if(!empty($is_mineral)&&$is_mineral=='0'){echo "checked='checked'";} ?>>
					Tidak
					</label>
					</div>
				</div>
				<div class="form-group"><label>Hiburan Musik dan Film</label>
					<div>
					
					<label class='radio-inline'>
					<input name="is_hiburan" type="radio" class="" id="is_hiburan"  value="1" <?php if(!empty($is_hiburan)&&$is_hiburan=='1'){echo "checked='checked'";} ?>>
					Ya
					</label>
					<label class='radio-inline'>
					<input name="is_hiburan" type="radio" class="" id="is_hiburan"  value="0"<?php if(!empty($is_hiburan)&&$is_hiburan=='0'){echo "checked='checked'";} ?>>
					Tidak
					</label>
					</div>
				</div>
				<div class="form-group"><label>BBM</label>
					<div>
					
					<label class='radio-inline'>
					<input name="is_bbm" type="radio" class="" id="is_bbm"  value="1" <?php if(!empty($is_bbm)&&$is_bbm=='1'){echo "checked='checked'";} ?>>
					Ya
					</label>
					<label class='radio-inline'>
					<input name="is_bbm" type="radio" class="" id="is_bbm"  value="0"<?php if(!empty($is_bbm)&&$is_bbm=='0'){echo "checked='checked'";} ?>>
					Tidak
					</label>
					</div>
				</div>
				<div class="form-group"><label>Pengemudi</label>
					<div>
					
					<label class='radio-inline'>
					<input name="is_driver" type="radio" class="" id="is_driver"  value="1" <?php if(!empty($is_driver)&&$is_driver=='1'){echo "checked='checked'";} ?>>
					Ya
					</label>
					<label class='radio-inline'>
					<input name="is_driver" type="radio" class="" id="is_driver"  value="0"<?php if(!empty($is_driver)&&$is_driver=='0'){echo "checked='checked'";} ?>>
					Tidak
					</label>
					</div>
				</div>
			
				<button name="<?php echo !empty($id_transport)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="transport.php" class="btn btn-warning">Batal</a>
	
</form>