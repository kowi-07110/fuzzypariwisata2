<div class="form-group">
	<label for="id_bintang">Hotel Berbintang</label>
	
    <select name="id_bintang" id="id_bintang" class="form-control" required="required">
		
		<?php 
			$bintang=array(
				1=>'Bintang 3',
				2=>'Bintang 4',
				3=>'Bintang 5',
				);
				foreach ($bintang as $key=>$value) {
				

					if(!empty($id_bintang)):
						if($id_bintang==$key):
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
