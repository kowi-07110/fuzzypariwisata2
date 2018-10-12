<?php 
include('../functions.php');
require('../koneksi.php');
include('../header.php');


?>


<?php
if(isset($_POST['submit'])){
	$form=isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'transport':
					$id_transport= isset($_POST['id_transport']) ? clean(htmlspecialchars($_POST['id_transport'])) : '';
					$id_tipe=isset($_POST['id_tipe']) ? clean(htmlspecialchars($_POST['id_tipe'])) : '';
					$nama=isset($_POST['nama']) ? clean(htmlspecialchars($_POST['nama'])) : '';
					$max=isset($_POST['max']) ? clean(htmlspecialchars($_POST['max'])) : '';
					$is_ac=isset($_POST['is_ac']) ? clean(htmlspecialchars($_POST['is_ac'])) : '';
					$is_recleaning=isset($_POST['is_recleaning']) ? clean(htmlspecialchars($_POST['is_recleaning'])) : '';
					$is_mineral=isset($_POST['is_mineral']) ? clean(htmlspecialchars($_POST['is_mineral'])) : '';
					$is_hiburan=isset($_POST['is_hiburan']) ? clean(htmlspecialchars($_POST['is_hiburan'])) : '';
					$is_bbm=isset($_POST['is_bbm']) ? clean(htmlspecialchars($_POST['is_bbm'])) : '';
					$is_driver=isset($_POST['is_driver']) ? clean(htmlspecialchars($_POST['is_driver'])) : '';
					$datetime=date('Y-m-d H:m:s');
					
					$sql="insert into transport (id_tipe,nama,max,is_ac,is_recleaning,is_mineral,is_hiburan,is_bbm,is_driver,datetime) values ('".$id_tipe."','".$nama."','".$max."','".$is_ac."','".$is_recleaning."','".$is_mineral."','".$is_hiburan."','".$is_bbm."','".$is_driver."','".$datetime."')";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data transport Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','transport.php');
							
						}else{
							alert('danger','insert','transport.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'transport':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$id_transport= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('transport_content.php');
					# code...
					break;
				case 'delete':
					
					delete('transport','id_transport',$id_transport);
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
		case 'transport':
			$id_transport= isset($_POST['id_transport']) ? clean(htmlspecialchars($_POST['id_transport'])) : '';
			$id_tipe=isset($_POST['id_tipe']) ? clean(htmlspecialchars($_POST['id_tipe'])) : '';
				$nama=isset($_POST['nama']) ? clean(htmlspecialchars($_POST['nama'])) : '';
				$max=isset($_POST['max']) ? clean(htmlspecialchars($_POST['max'])) : '';
				$is_ac=isset($_POST['is_ac']) ? clean(htmlspecialchars($_POST['is_ac'])) : '';
				$is_recleaning=isset($_POST['is_recleaning']) ? clean(htmlspecialchars($_POST['is_recleaning'])) : '';
				$is_mineral=isset($_POST['is_mineral']) ? clean(htmlspecialchars($_POST['is_mineral'])) : '';
				$is_hiburan=isset($_POST['is_hiburan']) ? clean(htmlspecialchars($_POST['is_hiburan'])) : '';
				$is_bbm=isset($_POST['is_bbm']) ? clean(htmlspecialchars($_POST['is_bbm'])) : '';
				$is_driver=isset($_POST['is_driver']) ? clean(htmlspecialchars($_POST['is_driver'])) : '';
				$datetime=date('Y-m-d H:m:s');
				
			if(isset($id_transport)):
				$sql="update transport set id_tipe='".$id_tipe."',nama='".$nama."',max='".$max."',is_ac='".$is_ac."',is_recleaning='".$is_recleaning."',is_mineral='".$is_mineral."',is_hiburan='".$is_hiburan."',is_bbm='".$is_bbm."',is_driver='".$is_driver."',datetime='".$datetime."' where id_transport=".$id_transport;
					$update=mysql_query($sql)or die('Update Data transport Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','transport.php');
						}else{
							alert('danger','update','transport.php');
						}
					endif;
			break;
	}
}
function delete($table=null,$field=null,$id=null){
	$table=isset($table) ? $table : '';
	$field=isset($field) ? $field : '';
	$id_transport=isset($id) ? $id : '';
	if(isset($id_transport)):
		$sqldelete="delete from `".$table."` where ".$field."=".$id_transport;
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete transport ERROR: ".$sqldelete."-->".mysql_error());
		if($hasil==true){
			alert('success','delete',$table.".php");
		}
	endif;
}


include('../footer.php');
?>
