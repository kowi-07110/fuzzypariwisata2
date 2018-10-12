<?php 
	$id= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($id) || isset($id)){
	
		$sqlnet="select * from `rules` where rule_id='$id'";
		$hasil=mysql_query($sqlnet)or die('Query rules Error:'.mysql_error());
		while($rows=mysql_fetch_array($hasil)){
			$rulename=$rows['rulename']; 
			$budget=$rows['budget']; 
			$durasi=$rows['durasi']; 
			$visitor=$rows['visitor']; 
			$fuzzy_output=$rows['fuzzy_output']; 
			$datetime=$rows['datetime']; 
			
                        
			
		}
		
	} ?> 
<form action="rules_proses.php" method="POST" role="form">
				<legend>Form rules</legend>
				<input type="hidden" name="form" value="rules">
				<input type="hidden" name="rule_id" value="<?php echo (!empty($rule_id)?$rule_id:''); ?>">
				
				<div class="form-group">
					<label for="rulename">Rulename</label>
					<input name="rulename" type="text" class="form-control" id="rulename" required placeholder="Masukkan rulename" value="<?php echo (!empty($rulename)?$rulename:''); ?>">
				</div>
				<div class="form-group">
					<label for="budget">Biaya</label>
					<input name="budget" type="text" class="form-control" id="budget" required placeholder="Masukkan budget" value="<?php echo (!empty($budget)?$budget:''); ?>">
				</div>
				<div class="form-group">
					<label for="durasi">Waktu</label>
					<input name="durasi" type="text" class="form-control" id="durasi" required placeholder="Masukkan durasi" value="<?php echo (!empty($durasi)?$durasi:''); ?>">
				</div>
				<div class="form-group">
					<label for="visitor">Pengunjung</label>
					<input name="visitor" type="text" class="form-control" id="visitor" required placeholder="Masukkan visitor" value="<?php echo (!empty($visitor)?$visitor:''); ?>">
				</div>
				<div class="form-group">
					<label for="fuzzy_output">Fuzzy Sugeno Output</label>
					<input name="fuzzy_output" type="text" class="form-control" id="fuzzy_output" required placeholder="Masukkan fuzzy_output" value="<?php echo (!empty($fuzzy_output)?$fuzzy_output:''); ?>">
				</div>
				
				<button name="<?php echo !empty($rule_id)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="rules.php" class="btn btn-warning">Batal</a>
	
</form>