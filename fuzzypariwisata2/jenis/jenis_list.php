<?php 
// require('koneksi.php');
$sql="select * from jenis";
$result=mysql_query($sql)or die('Maaf, Query jenis Salah:'.mysql_error());

function show_fuzzy($show){
	global $result;

	if($result==true){
		$i=1;
		while($row=mysql_fetch_array($result)):
			?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $row['nama'] ?></td>
					
					
						
					
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td><div class="btn-group">
								<a href="jenis_proses.php?form=jenis&a=edit&id=<?php echo $row['id_jenis'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="jenis_proses.php?form=jenis&a=delete&id=<?php echo $row['id_jenis'] ?>" class="btn btn-xs btn-danger">Delete</a>
							</div></td>
							<?php
							
							break;
						case 'no-edit':
							?>
								<td></td>
							<?php
						break;
						
					}
				?>
				</tr>
			<?php
			$i++;
		endwhile;
	}
}


?>

