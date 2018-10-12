<?php 
include('../functions.php');
require('../koneksi.php');
include('../header.php');


?>


<?php
if(isset($_POST['submit'])){
	$form=isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'pesan':
					$id_pesan= isset($_POST['id_pesan']) ? clean(htmlspecialchars($_POST['id_pesan'])) : '';
					$id_wisata=isset($_POST['id_wisata']) ? clean(htmlspecialchars($_POST['id_wisata'])) : '';
					$id_paket=isset($_POST['id_paket']) ? clean(htmlspecialchars($_POST['id_paket'])) : '';
					$nama=isset($_POST['nama']) ? clean(htmlspecialchars($_POST['nama'])) : '';
					$alamat=isset($_POST['alamat']) ? clean(htmlspecialchars($_POST['alamat'])) : '';
					$ktp=isset($_POST['ktp']) ? clean(htmlspecialchars($_POST['ktp'])) : '';
					$telp=isset($_POST['telp']) ? clean(htmlspecialchars($_POST['telp'])) : '';
					$tanggal=isset($_POST['tanggal']) ? clean(htmlspecialchars($_POST['tanggal'])) : '';
					$status=isset($_POST['status']) ? clean(htmlspecialchars($_POST['status'])) : '';
					$datetime=date('Y-m-d H:m:s');
					
					$sql="insert into pesan (id_wisata,id_paket,nama,alamat,ktp,telp,tanggal,status,datetime) values ('".$id_wisata."','".$id_paket."','".$nama."','".$alamat."','".$ktp."','".$telp."','".$tanggal."','".$status."','".$datetime."')";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data pesan Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','pesan.php');
							
						}else{
							alert('danger','insert','pesan.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'pesan':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$id_pesan= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('pesan_content.php');
					# code...
					break;
				case 'delete':
					
					delete('pesan','id_pesan',$id_pesan);
					break;
				
				}
			break;
		default:
		# code...
		break;
	}
}
if(isset($_POST['save'])){
	$form= isset($_POST['form']) ? $_POST['form'] : '';
	switch ($form) {
		case 'pesan':
			$id_pesan= isset($_POST['id_pesan']) ? clean(htmlspecialchars($_POST['id_pesan'])) : '';
			$id_wisata=isset($_POST['id_wisata']) ? clean(htmlspecialchars($_POST['id_wisata'])) : '';
				$id_paket=isset($_POST['id_paket']) ? clean(htmlspecialchars($_POST['id_paket'])) : '';
				$nama=isset($_POST['nama']) ? clean(htmlspecialchars($_POST['nama'])) : '';
				$alamat=isset($_POST['alamat']) ? clean(htmlspecialchars($_POST['alamat'])) : '';
				$ktp=isset($_POST['ktp']) ? clean(htmlspecialchars($_POST['ktp'])) : '';
				$telp=isset($_POST['telp']) ? clean(htmlspecialchars($_POST['telp'])) : '';
				$tanggal=isset($_POST['tanggal']) ? clean(htmlspecialchars($_POST['tanggal'])) : '';
				$status=isset($_POST['status']) ? clean(htmlspecialchars($_POST['status'])) : '';
				$datetime=date('Y-m-d H:m:s');
				
			if(isset($id_pesan)):
				$sql="update pesan set id_wisata='".$id_wisata."',id_paket='".$id_paket."',nama='".$nama."',alamat='".$alamat."',ktp='".$ktp."',telp='".$telp."',tanggal='".$tanggal."',status='".$status."',datetime='".$datetime."' where id_pesan=".$id_pesan;
					$update=mysql_query($sql)or die('Update Data pesan Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','pesan.php');
						}else{
							alert('danger','update','pesan.php');
						}
					endif;
			break;
	}
}
function delete($table=null,$field=null,$id=null){
	$table=isset($table) ? $table : '';
	$field=isset($field) ? $field : '';
	$id_pesan=isset($id) ? $id : '';
	if(isset($id_pesan)):
		$sqldelete="delete from `".$table."` where ".$field."=".$id_pesan;
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete pesan ERROR: ".$sqldelete."-->".mysql_error());
		if($hasil==true){
			alert('success','delete',$table.".php");
		}
	endif;
}


include('../footer.php');
?>
