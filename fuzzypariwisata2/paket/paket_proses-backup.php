<?php 
include('../functions.php');
require('../koneksi.php');
include('../header.php');


if(isset($_POST['id_obyek'])):
	foreach ($_POST['id_obyek'] as $key => $value) {
		# code...
		$obyek[]=$value;
	}
endif;
// echo json_encode($id_obyek);

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
					$datetime=date('Y-m-d H:m:s');
					
					$sql="insert into paket (nama,lokasi,keterangan,include,exclude,id_transport,id_akomodasi,price_person,price_group,datetime) values ('".$nama."','".$lokasi."','".$keterangan."','".$include."','".$exclude."','".$id_transport."','".$id_akomodasi."','".$price_person."','".$price_group."','".$datetime."')";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data paket Error:'.mysql_error());
						$insertpaket=mysql_insert_id();
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							foreach ($obyek as $val) {
								# code...
							
								$sql1="insert into paket_obyek (id_paket,id_obyek,datetime) values ('".$insertpaket."','".$val."','".$datetime."')";
								// echo $sql;
								$insert1=mysql_query($sql1)or die('Insert Data paket_obyek Error:'.mysql_error());
								// $numrows=mysql_num_rows($insert);
								
							}
								
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
				$datetime=date('Y-m-d H:m:s');
				
			if(isset($id_paket)):
				$sql="update paket set nama='".$nama."',lokasi='".$lokasi."',keterangan='".$keterangan."',include='".$include."',exclude='".$exclude."',id_transport='".$id_transport."',id_akomodasi='".$id_akomodasi."',price_person='".$price_person."',price_group='".$price_group."',datetime='".$datetime."' where id_paket=".$id_paket;
					$update=mysql_query($sql)or die('Update Data paket Error:'.mysql_error());
						if($update==true){
							if(!empty($obyek)):
								foreach($obyek as $val){
									$id_obyek=$val;
									$sqlu="update paket_obyek set id_obyek='".$id_obyek."' where id_paket='".$id_paket."'";
									$update=mysql_query($sqlu) or die('Update Error:'.mysql_error());
									/*if($update!=null):
										alert('success','update','#');
									endif;*/
								}
							else:
								delete('paket_obyek','id_paket',$id_paket);
							endif;

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
