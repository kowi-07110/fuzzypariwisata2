<?php 
// require('koneksi.php');
$sql="select * from `02-view-paket-obyek`";
$result=mysql_query($sql)or die('Maaf, Query paket_obyek Salah:'.mysql_error());

function show_fuzzy($show){
	global $result;

	if($result==true){
		$i=1;
		while($row=mysql_fetch_array($result)):
			?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $row['namapaket'] ?></td>
					<td><?php echo $row['namaobyek'] ?></td>
					<td><?php echo $row['keterangan'] ?></td>
					
					
						
					
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td><div class="btn-group">
								<a href="paket_obyek_proses.php?form=paket_obyek&a=edit&id=<?php echo $row['id_paket_obyek'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="paket_obyek_proses.php?form=paket_obyek&a=delete&id=<?php echo $row['id_paket_obyek'] ?>" class="btn btn-xs btn-danger">Delete</a>
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

