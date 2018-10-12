<?php 
require('koneksi.php'); //dibutuhkan file koneksi.php untuk koneksi ke database
include('functions.php');
include('header.php'); //termasuk file header.php
?>
<?php //session_start(); ?>
<?php 
	if(isset($_SESSION['loggedin'])):
		if(isset($_SESSION['login_user'])):
			if(isset($_SESSION['isadmin'])):
				if($_SESSION['isadmin']==true):?>

<div class="container">
	<div class="row" style="margin-bottom:10px;">
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<h1 class="">SPK Pemesanan & Rekomendasi Pemilihan Tempat Wisata</h1>
					<h3 class="	">Menggunakan Metode Fuzzy Sugeno</h3>
				
			<hr>
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<button type="button" class="print pull-right btn-lg btn btn-info no-print"><i class="glyphicon glyphicon-print"></i> Cetak</button>

		</div>
	</div>
	<?php 
	$sql="select * from `view-fuzzy-sugeno`";
	$hasil=mysql_query($sql)or die('Query Fuzzy Sugeno Error:'.mysql_error());
	?>
	<table class="table table-hover table-bordered table-striped table-condensed">
		<thead>
			<tr>
				<th>No.</th>
				<th>ID Wisata</th>
				<th>Nama Paket</th>
				<th>Budget</th>
				<th>Durasi Waktu</th>
				<th>Jumlah Pengunjung</th>
				<th>Nilai Fuzzy</th>
				<th>Hasil Fuzzy Sugeno</th>
				<th class="no-print">Aksi</th>
			</tr>
		</thead>
		<tbody>
			
		
	<?php
	if($hasil!=null){
		$i=1;
		while($row=mysql_fetch_array($hasil)){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row['id_wisata']."</td>";
			echo "<td><a href='".$baseurl."paket/paket_proses.php?detail=true&id=".$row['id_paket']."'>".$row['nama']."</a></td>";
			echo "<td>".$row['budgetminta']."</td>";
			echo "<td>".$row['waktuminta']." Jam </td>";
			echo "<td>".$row['visitorminta']."</td>";
			echo "<td>".$row['defuzzy']."</td>";
			echo "<td>".$row['fuzzy_output_sugeno']."</td>";
			echo "<td class='no-print'><div class='btn-group'><a class='btn btn-xs btn-success' href='wisata/wisata_proses.php?form=wisata&a=edit&id=".$row['id_wisata']."'><i class='glyphicon glyphicon-pencil'></i> Edit</a>
			<a class='btn btn-danger btn-xs' href='wisata/wisata_proses.php?form=wisata&a=delete&id=".$row['id_wisata']."'><i class='glyphicon glyphicon-remove'></i> Hapus</a></td>";
			echo "</tr>";
			$i++;
		}
	}
	?>
		</tbody>
	</table>


<?php
else:?>
		<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="alert alert-danger"><strong>Perhatian!</strong>
					<p>Untuk melihat halaman ini silakan login dulu sebagai Administrator	</p> 
					<p><span class=""><a class="btn btn-success btn-md" href='<?php echo $baseurl ?>login.php'><i class="glyphicon glyphicon-off"></i> Login disini</a></span></p></div>
			</div>
		</div>	
		</div>

		<?php
			endif;
		
		endif;
	
	endif;
	else:
?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="alert alert-danger"><strong>Perhatian!</strong>
				<p>Untuk melihat halaman ini silakan login dulu sebagai Administrator	</p> 
				<p><span class=""><a class="btn btn-success btn-md" href='<?php echo $baseurl ?>login.php'><i class="glyphicon glyphicon-off"></i> Login disini</a></span></p></div>
		</div>
	</div>	
</div>

	
<?php
	
endif;
include('footer.php');

 ?>		
