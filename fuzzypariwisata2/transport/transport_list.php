<?php 
// require('koneksi.php');
$sql="select * from `01-view-transport`";
$result=mysql_query($sql)or die('Maaf, Query transport Salah:'.mysql_error());

function show_fuzzy($show){
	global $result;

	if($result==true){
		$i=1;
		while($row=mysql_fetch_array($result)):
			?>
				<tr>
					<td><?php echo $i;?></td>
					
					<td><?php echo $row['nama'] ?></td>
					<td ><?php echo $row['max'] ?></td>
					<td>
					<span class='label label-default'>AC: <?php echo $row['ac'] ?></span>
					
					<span class='label label-default'>BBM: <?php echo $row['bbm'] ?></span>
					<span class='label label-default'>Sopir: <?php echo $row['driver'] ?></span>
					<span class='label label-default'>Hiburan: <?php echo $row['hiburan'] ?></span>
					<span class='label label-default'>Recleaning Seat: <?php echo $row['recleaning'] ?></span>
					<span class='label label-default'>Air Mineral: <?php echo $row['mineral'] ?></span>
					</td>
					
					
						
					
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td><div class="btn-group">
								<a href="transport_proses.php?form=transport&a=edit&id=<?php echo $row['id_transport'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="transport_proses.php?form=transport&a=delete&id=<?php echo $row['id_transport'] ?>" class="btn btn-xs btn-danger">Delete</a>
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

