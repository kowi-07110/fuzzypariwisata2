<?php 
// require('koneksi.php');
$sql="select * from `01-4-view-obyek-wisata`";
$result=mysql_query($sql)or die('Maaf, Query obyek_wisata Salah:'.mysql_error());

function show_fuzzy($show){
	global $result;

	if($result==true){
		$i=1;
		while($row=mysql_fetch_array($result)):
			?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $row['namajenis'] ?></td>
					<td><?php echo $row['nama'] ?></td>
					<td><?php echo $row['alamat'] ?></td>
					<td><?php echo $row['lokasi'] ?></td>
					<td><?php echo $row['kota'] ?></td>
					<td><?php echo $row['keterangan'] ?></td>
			
				
					
					
						
					
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td><div class="btn-group">
								<a href="obyek_wisata_proses.php?form=obyek_wisata&a=edit&id=<?php echo $row['id_obyek'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="obyek_wisata_proses.php?form=obyek_wisata&a=delete&id=<?php echo $row['id_obyek'] ?>" class="btn btn-xs btn-danger">Delete</a>
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

