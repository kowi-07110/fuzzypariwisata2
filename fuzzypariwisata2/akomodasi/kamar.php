<div class="form-group">
	<label for="id_kamar">Tipe Kamar</label>
	
    <select name="id_kamar" id="id_kamar" class="form-control" required="required">
		
		<?php 
			$kamar=array(
				1=>'Standard Room',
				2=>'Suite Room',
				);
				foreach ($kamar as $key=>$value) {
				

					if(!empty($id_kamar)):
						if($id_kamar==$key):
							echo "<option value='".$key."' selected='selected'>".$value."</option>";
						else:
							echo "<option value='".$key."'>".$value."</option>";
						endif;
						
					else:
							echo "<option value='".$key."'>".$value."</option>";
						
					endif;
				}
			
	?>
	</select>
					 
</div>
