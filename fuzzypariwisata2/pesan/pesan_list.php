<?php 
// require('koneksi.php');
$sql="select * from pesan";
$result=mysql_query($sql)or die('Maaf, Query pesan Salah:'.mysql_error());

function show_fuzzy($show){
	global $result;

	if($result==true){
		$i=1;
		while($row=mysql_fetch_array($result)):
			?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $row['id_wisata'] ?></td>
					<td><?php echo $row['id_paket'] ?></td>
					<td><?php echo $row['nama'] ?></td>
					<td><?php echo $row['alamat'] ?></td>
					<td><?php echo $row['ktp'] ?></td>
					<td><?php echo $row['telp'] ?></td>
					<td><?php echo $row['tanggal'] ?></td>
					<td><?php echo $row['status'] ?></td>
					
					
						
					
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td><div class="btn-group">
								<a href="pesan_proses.php?form=pesan&a=edit&id=<?php echo $row['id_pesan'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="pesan_proses.php?form=pesan&a=delete&id=<?php echo $row['id_pesan'] ?>" class="btn btn-xs btn-danger">Delete</a>
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

