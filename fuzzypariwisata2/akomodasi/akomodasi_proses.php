<?php 
include('../functions.php');
require('../koneksi.php');
include('../header.php');


?>


<?php
if(isset($_POST['submit'])){
	$form=isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'akomodasi':
					$id_akomodasi= isset($_POST['id_akomodasi']) ? clean(htmlspecialchars($_POST['id_akomodasi'])) : '';
					$id_kamar=isset($_POST['id_kamar']) ? clean(htmlspecialchars($_POST['id_kamar'])) : '';
					$id_bintang=isset($_POST['id_bintang']) ? clean(htmlspecialchars($_POST['id_bintang'])) : '';
					$nama=isset($_POST['nama']) ? clean(htmlspecialchars($_POST['nama'])) : '';
					$lokasi=isset($_POST['lokasi']) ? clean(htmlspecialchars($_POST['lokasi'])) : '';
					$alamat=isset($_POST['alamat']) ? clean(htmlspecialchars($_POST['alamat'])) : '';
					$kota=isset($_POST['kota']) ? clean(htmlspecialchars($_POST['kota'])) : '';
					$telp=isset($_POST['telp']) ? clean(htmlspecialchars($_POST['telp'])) : '';
					$fasilitas=isset($_POST['fasilitas']) ? clean(htmlspecialchars($_POST['fasilitas'])) : '';
					$keterangan=isset($_POST['keterangan']) ? clean(htmlspecialchars($_POST['keterangan'])) : '';
					$datetime=date('Y-m-d H:m:s');
					
					$sql="insert into akomodasi (id_kamar,id_bintang,nama,lokasi,alamat,kota,telp,fasilitas,keterangan,datetime) values ('".$id_kamar."','".$id_bintang."','".$nama."','".$lokasi."','".$alamat."','".$kota."','".$telp."','".$fasilitas."','".$keterangan."','".$datetime."')";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data akomodasi Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','akomodasi.php');
							
						}else{
							alert('danger','insert','akomodasi.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'akomodasi':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$id_akomodasi= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('akomodasi_content.php');
					# code...
					break;
				case 'delete':
					
					delete('akomodasi','id_akomodasi',$id_akomodasi);
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
		case 'akomodasi':
			$id_akomodasi= isset($_POST['id_akomodasi']) ? clean(htmlspecialchars($_POST['id_akomodasi'])) : '';
			$id_kamar=isset($_POST['id_kamar']) ? clean(htmlspecialchars($_POST['id_kamar'])) : '';
				$id_bintang=isset($_POST['id_bintang']) ? clean(htmlspecialchars($_POST['id_bintang'])) : '';
				$nama=isset($_POST['nama']) ? clean(htmlspecialchars($_POST['nama'])) : '';
				$lokasi=isset($_POST['lokasi']) ? clean(htmlspecialchars($_POST['lokasi'])) : '';
				$alamat=isset($_POST['alamat']) ? clean(htmlspecialchars($_POST['alamat'])) : '';
				$kota=isset($_POST['kota']) ? clean(htmlspecialchars($_POST['kota'])) : '';
				$telp=isset($_POST['telp']) ? clean(htmlspecialchars($_POST['telp'])) : '';
				$fasilitas=isset($_POST['fasilitas']) ? clean(htmlspecialchars($_POST['fasilitas'])) : '';
				$keterangan=isset($_POST['keterangan']) ? clean(htmlspecialchars($_POST['keterangan'])) : '';
				$datetime=date('Y-m-d H:m:s');
				
			if(isset($id_akomodasi)):
				$sql="update akomodasi set id_kamar='".$id_kamar."',id_bintang='".$id_bintang."',nama='".$nama."',lokasi='".$lokasi."',alamat='".$alamat."',kota='".$kota."',telp='".$telp."',fasilitas='".$fasilitas."',keterangan='".$keterangan."',datetime='".$datetime."' where id_akomodasi=".$id_akomodasi;
					$update=mysql_query($sql)or die('Update Data akomodasi Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','akomodasi.php');
						}else{
							alert('danger','update','akomodasi.php');
						}
					endif;
			break;
	}
}
function delete($table=null,$field=null,$id=null){
	$table=isset($table) ? $table : '';
	$field=isset($field) ? $field : '';
	$id_akomodasi=isset($id) ? $id : '';
	if(isset($id_akomodasi)):
		$sqldelete="delete from `".$table."` where ".$field."=".$id_akomodasi;
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete akomodasi ERROR: ".$sqldelete."-->".mysql_error());
		if($hasil==true){
			alert('success','delete',$table.".php");
		}
	endif;
}


include('../footer.php');
?>
