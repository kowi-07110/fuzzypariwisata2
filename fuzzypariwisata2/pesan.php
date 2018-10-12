<?php include('functions.php') ?>
<?php include('header.php') ?>
<?php include('koneksi.php') ?>
		
<?php
// if(isset($_POST['submit'])){
	$id_wisata=isset($_POST['id_wisata']) ? clean(htmlspecialchars($_POST['id_wisata'])) : '';
	$id_paket=isset($_POST['id_paket']) ? clean(htmlspecialchars($_POST['id_paket'])) : '';
	$nama=isset($_POST['nama']) ? clean(htmlspecialchars($_POST['nama'])) : '';
	$alamat=isset($_POST['alamat']) ? clean(htmlspecialchars($_POST['alamat'])) : '';
	$telp=isset($_POST['telp']) ? clean(htmlspecialchars($_POST['telp'])) : '';
	$tanggal=isset($_POST['tanggal']) ? clean(htmlspecialchars($_POST['tanggal'])) : '';
	$status=1;
	$ktp=isset($_POST['ktp']) ? clean(htmlspecialchars($_POST['ktp'])) : '';
	$datetime=date('Y-m-d H:m:s');
					
	$sql="insert into pesan (id_wisata,id_paket,nama,alamat,ktp,telp,tanggal,status,datetime) values ('".$id_wisata."','".$id_paket."','".$nama."','".$alamat."','".$ktp."','".$telp."','".$tanggal."','".$status."','".$datetime."')";
	// echo $sql;
	$insert=mysql_query($sql)or die('Insert Data pesan Error:'.mysql_error());
	// $numrows=mysql_num_rows($insert);
	if($insert>0){
		// echo $sql;
		alert('success','insert','index.php');
	}else{
		alert('danger','insert','index.php');
	}				
include('footer.php');
?>