<?php 
// require('koneksi.php');
$sql="select * from paket";
$result=mysql_query($sql)or die('Maaf, Query paket Salah:'.mysql_error());

function show_fuzzy($show){
	global $result;

	if($result==true){
		$i=1;
		while($row=mysql_fetch_array($result)):
			?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $row['id_paket'] ?></td>
					<td><?php echo $row['nama'] ?></td>
					<td><?php echo $row['lokasi'] ?></td>
					<td><?php echo $row['keterangan'] ?></td>
					
					<td><?php echo $row['price_person'] ?></td>
					<td><?php echo $row['price_group'] ?></td>
					
					
						
					
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td><div class="btn-group">
								<a href="paket_proses.php?form=paket&a=edit&id=<?php echo $row['id_paket'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="paket_proses.php?form=paket&a=delete&id=<?php echo $row['id_paket'] ?>" class="btn btn-xs btn-danger">Delete</a>
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

