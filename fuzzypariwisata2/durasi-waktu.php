<div class="form-group" >
	<label for="waktu">Durasi Waktu</label><br/>
	
    <select name="waktu" id="waktu" class="form-control input-lg" >
		
		<?php 
			$array_waktu=array(
				'12'=>'1 Hari atau 1 Malam',
				'24'=>'1 Hari, 1 Malam',
				'36'=>'1 Hari, 2 Malam',
				'48'=>'2 Hari, 2 Malam',
				'60'=>'2 Hari, 3 Malam',
				'72'=>'3 Hari, 3 Malam',
				'96'=>'4 Hari, 4 Malam',
				'120'=>'5 Hari, 5 Malam',
				'144'=>'6 Hari, 6 Malam',
				'168'=>'7 Hari, 7 Malam',
				'192'=>'8 Hari, 8 Malam',
				'216'=>'9 Hari, 9 Malam',
				'240'=>'10 Hari, 10 Malam',
				'264'=>'11 Hari, 11 Malam',
				'288'=>'12 Hari, 12 Malam',
				'312'=>'13 Hari, 13 Malam',
				'336'=>'14 Hari, 14 Malam',
				);
				foreach ($array_waktu as $key=>$value) {
				

					if(!empty($waktu)):
						if($waktu==$key):
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
