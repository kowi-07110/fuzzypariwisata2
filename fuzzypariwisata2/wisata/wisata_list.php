<?php 
// require('koneksi.php');
$sql="select * from wisata";
$result=mysql_query($sql)or die('Maaf, Query wisata Salah:'.mysql_error());

function show_fuzzy($show){
	global $result;

	if($result!=null){
		$i=1;
		while($row=mysql_fetch_array($result)):
			?>
				<tr>
					<td><?php echo $i;?></td>
				
					<td><?php echo $row['budget'] ?></td>
					
					
					<td><?php echo $row['waktu'] ?> Jam</td>
					<td><?php echo $row['visitor'] ?></td>
								
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td><div class="btn-group">
								<a href="wisata_proses.php?form=wisata&a=edit&id=<?php echo $row['id_wisata'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="wisata_proses.php?form=wisata&a=delete&id=<?php echo $row['id_wisata'] ?>" class="btn btn-xs btn-danger">Delete</a>
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
	}else{
		echo "<tr>";
		echo "<td colspan='4'>Data tidak ada</td>";
		echo "</tr>";
	}
}


?>

