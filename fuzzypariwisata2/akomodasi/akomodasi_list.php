<?php 
// require('koneksi.php');
$sql="select * from `04-view-akomodasi`";
$result=mysql_query($sql)or die('Maaf, Query akomodasi Salah:'.mysql_error());

function show_fuzzy($show){
	global $result;

	if($result==true){
		while($row=mysql_fetch_array($result)):
			?>
				<tr>
					<td><?php echo $row['id_akomodasi'] ?></td>
					<td><?php echo $row['kamar'] ?></td>
					<td><?php echo $row['bintang'] ?></td>
					<td><?php echo $row['nama'] ?></td>
					<td><?php echo $row['lokasi'] ?></td>
					<td><?php echo $row['alamat'] ?></td>
					<td><?php echo $row['kota'] ?></td>
					<td><?php echo $row['telp'] ?></td>
					
					
						
					
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td><div class="btn-group">
								<a href="akomodasi_proses.php?form=akomodasi&a=edit&id=<?php echo $row['id_akomodasi'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="akomodasi_proses.php?form=akomodasi&a=delete&id=<?php echo $row['id_akomodasi'] ?>" class="btn btn-xs btn-danger">Delete</a>
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
		endwhile;
	}
}


?>

