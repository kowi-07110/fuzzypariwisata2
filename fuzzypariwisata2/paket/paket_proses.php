<?php 
include('../functions.php');
require('../koneksi.php');
include('../header.php');
include('paket-detail.php');
if(isset($_POST['submit'])){
	$form=isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'paket':
					$id_paket= isset($_POST['id_paket']) ? clean(htmlspecialchars($_POST['id_paket'])) : '';
					$nama=isset($_POST['nama']) ? clean(htmlspecialchars($_POST['nama'])) : '';
					$lokasi=isset($_POST['lokasi']) ? clean(htmlspecialchars($_POST['lokasi'])) : '';
					$keterangan=isset($_POST['keterangan']) ? clean(htmlspecialchars($_POST['keterangan'])) : '';
					$include=isset($_POST['include']) ? clean(htmlspecialchars($_POST['include'])) : '';
					$exclude=isset($_POST['exclude']) ? clean(htmlspecialchars($_POST['exclude'])) : '';
					$id_transport=isset($_POST['id_transport']) ? clean(htmlspecialchars($_POST['id_transport'])) : '';
					$id_akomodasi=isset($_POST['id_akomodasi']) ? clean(htmlspecialchars($_POST['id_akomodasi'])) : '';
					$price_person=isset($_POST['price_person']) ? clean(htmlspecialchars($_POST['price_person'])) : '';
					$price_group=isset($_POST['price_group']) ? clean(htmlspecialchars($_POST['price_group'])) : '';
					$id_obyek=isset($_POST['id_obyek']) ? clean(htmlspecialchars($_POST['id_obyek'])) : '';
					$durasi_hari=isset($_POST['durasi_hari']) ? clean(htmlspecialchars($_POST['durasi_hari'])) : '';
					$durasi_malam=isset($_POST['durasi_malam']) ? clean(htmlspecialchars($_POST['durasi_malam'])) : '';
					$durasi_jam=isset($_POST['durasi_jam']) ? clean(htmlspecialchars($_POST['durasi_jam'])) : '';
					$durasi_hari=isset($_POST['durasi_hari']) ? clean(htmlspecialchars($_POST['durasi_hari'])) : '';
					
					$datetime=date('Y-m-d H:m:s');
					
					$sql="insert into paket (nama,lokasi,keterangan,include,
						exclude,id_transport,id_akomodasi,price_person,
						price_group,datetime,durasi_jam,durasi_hari,durasi_malam,id_obyek) 
						values 
						('".$nama."','".$lokasi."','".$keterangan."',
							'".$include."','".$exclude."','".$id_transport."',
							'".$id_akomodasi."','".$price_person."','".$price_group."',
							'".$datetime."','".$durasi_jam."','".$durasi_hari."','".$durasi_malam."','".$id_obyek."')";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data paket Error:'.mysql_error());
						$insertpaket=mysql_insert_id();
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
								
							alert('success','insert','paket.php');
						}else{
							alert('danger','insert','paket.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'paket':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$id_paket= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('paket_content.php');
					# code...
					break;
				case 'delete':
					
					delete('paket','id_paket',$id_paket);
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
		case 'paket':
			$id_paket= isset($_POST['id_paket']) ? clean(htmlspecialchars($_POST['id_paket'])) : '';
			$nama=isset($_POST['nama']) ? clean(htmlspecialchars($_POST['nama'])) : '';
				$lokasi=isset($_POST['lokasi']) ? clean(htmlspecialchars($_POST['lokasi'])) : '';
				$keterangan=isset($_POST['keterangan']) ? clean(htmlspecialchars($_POST['keterangan'])) : '';
				$include=isset($_POST['include']) ? clean(htmlspecialchars($_POST['include'])) : '';
				$exclude=isset($_POST['exclude']) ? clean(htmlspecialchars($_POST['exclude'])) : '';
				$id_transport=isset($_POST['id_transport']) ? clean(htmlspecialchars($_POST['id_transport'])) : '';
				$id_akomodasi=isset($_POST['id_akomodasi']) ? clean(htmlspecialchars($_POST['id_akomodasi'])) : '';
				$price_person=isset($_POST['price_person']) ? clean(htmlspecialchars($_POST['price_person'])) : '';
				$price_group=isset($_POST['price_group']) ? clean(htmlspecialchars($_POST['price_group'])) : '';
				$id_obyek=isset($_POST['id_obyek']) ? clean(htmlspecialchars($_POST['id_obyek'])) : '';
					$durasi_hari=isset($_POST['durasi_hari']) ? clean(htmlspecialchars($_POST['durasi_hari'])) : '';
					$durasi_malam=isset($_POST['durasi_malam']) ? clean(htmlspecialchars($_POST['durasi_malam'])) : '';
					$durasi_jam=isset($_POST['durasi_jam']) ? clean(htmlspecialchars($_POST['durasi_jam'])) : '';
					
				$datetime=date('Y-m-d H:m:s');
				
			if(isset($id_paket)):
				$sql="update paket set nama='".$nama."',lokasi='".$lokasi."',
					keterangan='".$keterangan."',include='".$include."',
					exclude='".$exclude."',id_transport='".$id_transport."',
					id_akomodasi='".$id_akomodasi."',price_person='".$price_person."',
					price_group='".$price_group."',datetime='".$datetime."',
					id_obyek='".$id_obyek."',durasi_jam='".$durasi_jam."',
					durasi_hari='".$durasi_hari."',durasi_malam='".$durasi_malam."' 
					where id_paket=".$id_paket;
					$update=mysql_query($sql)or die('Update Data paket Error:'.mysql_error());
						if($update==true){
							

							alert('success','update','paket.php');
						}else{
							alert('danger','update','paket.php');
						}
					endif;
			break;
	}
}
function delete($table=null,$field=null,$id=null){
	$table=isset($table) ? $table : '';
	$field=isset($field) ? $field : '';
	$id_paket=isset($id) ? $id : '';
	if(isset($id_paket)):
		$sqldelete="delete from `".$table."` where ".$field."=".$id_paket;
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete paket ERROR: ".$sqldelete."-->".mysql_error());
		if($hasil==true){
			alert('success','delete',$table.".php");
		}
	endif;
}


include('../footer.php');
?>
