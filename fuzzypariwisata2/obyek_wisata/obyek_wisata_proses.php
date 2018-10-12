<?php 
include('../functions.php');
require('../koneksi.php');
include('../header.php');

include('obyek-detail.php');
if(isset($_POST['submit'])){
	$form=isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'obyek_wisata':
					$id_obyek= isset($_POST['id_obyek']) ? clean(htmlspecialchars($_POST['id_obyek'])) : '';
					$id_jenis=isset($_POST['id_jenis']) ? clean(htmlspecialchars($_POST['id_jenis'])) : '';
					$nama=isset($_POST['nama']) ? clean(htmlspecialchars($_POST['nama'])) : '';
					$alamat=isset($_POST['alamat']) ? clean(htmlspecialchars($_POST['alamat'])) : '';
					$lokasi=isset($_POST['lokasi']) ? clean(htmlspecialchars($_POST['lokasi'])) : '';
					$kota=isset($_POST['kota']) ? clean(htmlspecialchars($_POST['kota'])) : '';
					$keterangan=isset($_POST['keterangan']) ? clean(htmlspecialchars($_POST['keterangan'])) : '';
					$fasilitas=isset($_POST['fasilitas']) ? clean(htmlspecialchars($_POST['fasilitas'])) : '';
					$tiket_regular=isset($_POST['tiket_regular']) ? clean(htmlspecialchars($_POST['tiket_regular'])) : '';
					$tiket_weekend=isset($_POST['tiket_weekend']) ? clean(htmlspecialchars($_POST['tiket_weekend'])) : '';
					$visitor=isset($_POST['visitor']) ? clean(htmlspecialchars($_POST['visitor'])) : '';
					$datetime=date('Y-m-d H:m:s');
					
					$sql="insert into obyek_wisata (id_jenis,nama,alamat,lokasi,kota,keterangan,fasilitas,tiket_regular,tiket_weekend,visitor,datetime) values ('".$id_jenis."','".$nama."','".$alamat."','".$lokasi."','".$kota."','".$keterangan."','".$fasilitas."','".$tiket_regular."','".$tiket_weekend."','".$visitor."','".$datetime."')";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data obyek_wisata Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','obyek_wisata.php');
							
						}else{
							alert('danger','insert','obyek_wisata.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'obyek_wisata':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$id_obyek= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('obyek_wisata_content.php');
					# code...
					break;
				case 'delete':
					
					delete('obyek_wisata','id_obyek',$id_obyek);
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
		case 'obyek_wisata':
			$id_obyek= isset($_POST['id_obyek']) ? clean(htmlspecialchars($_POST['id_obyek'])) : '';
			$id_jenis=isset($_POST['id_jenis']) ? clean(htmlspecialchars($_POST['id_jenis'])) : '';
				$nama=isset($_POST['nama']) ? clean(htmlspecialchars($_POST['nama'])) : '';
				$alamat=isset($_POST['alamat']) ? clean(htmlspecialchars($_POST['alamat'])) : '';
				$lokasi=isset($_POST['lokasi']) ? clean(htmlspecialchars($_POST['lokasi'])) : '';
				$kota=isset($_POST['kota']) ? clean(htmlspecialchars($_POST['kota'])) : '';
				$keterangan=isset($_POST['keterangan']) ? clean(htmlspecialchars($_POST['keterangan'])) : '';
				$fasilitas=isset($_POST['fasilitas']) ? clean(htmlspecialchars($_POST['fasilitas'])) : '';
				$tiket_regular=isset($_POST['tiket_regular']) ? clean(htmlspecialchars($_POST['tiket_regular'])) : '';
				$tiket_weekend=isset($_POST['tiket_weekend']) ? clean(htmlspecialchars($_POST['tiket_weekend'])) : '';
				$visitor=isset($_POST['visitor']) ? clean(htmlspecialchars($_POST['visitor'])) : '';
				$datetime=date('Y-m-d H:m:s');
				
			if(isset($id_obyek)):
				$sql="update obyek_wisata set id_jenis='".$id_jenis."',nama='".$nama."',alamat='".$alamat."',lokasi='".$lokasi."',kota='".$kota."',keterangan='".$keterangan."',fasilitas='".$fasilitas."',tiket_regular='".$tiket_regular."',tiket_weekend='".$tiket_weekend."',visitor='".$visitor."',datetime='".$datetime."' where id_obyek=".$id_obyek;
					$update=mysql_query($sql)or die('Update Data obyek_wisata Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','obyek_wisata.php');
						}else{
							alert('danger','update','obyek_wisata.php');
						}
					endif;
			break;
	}
}
function delete($table=null,$field=null,$id=null){
	$table=isset($table) ? $table : '';
	$field=isset($field) ? $field : '';
	$id_obyek=isset($id) ? $id : '';
	if(isset($id_obyek)):
		$sqldelete="delete from `".$table."` where ".$field."=".$id_obyek;
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete obyek_wisata ERROR: ".$sqldelete."-->".mysql_error());
		if($hasil==true){
			alert('success','delete',$table.".php");
		}
	endif;
}


include('../footer.php');
?>
