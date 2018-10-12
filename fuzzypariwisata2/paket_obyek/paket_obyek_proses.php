<?php 
include('../functions.php');
require('../koneksi.php');
include('../header.php');


?>


<?php
if(isset($_POST['submit'])){
	$form=isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'paket_obyek':
					$id_paket_obyek= isset($_POST['id_paket_obyek']) ? clean(htmlspecialchars($_POST['id_paket_obyek'])) : '';
					$id_paket=isset($_POST['id_paket']) ? clean(htmlspecialchars($_POST['id_paket'])) : '';
					$id_obyek=isset($_POST['id_obyek']) ? clean(htmlspecialchars($_POST['id_obyek'])) : '';
					$keterangan=isset($_POST['keterangan']) ? clean(htmlspecialchars($_POST['keterangan'])) : '';
					$datetime=date('Y-m-d H:m:s');
					
					$sql="insert into paket_obyek (id_paket,id_obyek,keterangan,datetime) values ('".$id_paket."','".$id_obyek."','".$keterangan."','".$datetime."')";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data paket_obyek Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','paket_obyek.php');
							
						}else{
							alert('danger','insert','paket_obyek.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'paket_obyek':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$id_paket_obyek= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('paket_obyek_content.php');
					# code...
					break;
				case 'delete':
					
					delete('paket_obyek','id_paket_obyek',$id_paket_obyek);
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
		case 'paket_obyek':
			$id_paket_obyek= isset($_POST['id_paket_obyek']) ? clean(htmlspecialchars($_POST['id_paket_obyek'])) : '';
			$id_paket=isset($_POST['id_paket']) ? clean(htmlspecialchars($_POST['id_paket'])) : '';
				$id_obyek=isset($_POST['id_obyek']) ? clean(htmlspecialchars($_POST['id_obyek'])) : '';
				$keterangan=isset($_POST['keterangan']) ? clean(htmlspecialchars($_POST['keterangan'])) : '';
				$datetime=date('Y-m-d H:m:s');
			if(isset($id_paket_obyek)):
				$sql="update paket_obyek set id_paket='".$id_paket."',id_obyek='".$id_obyek."',keterangan='".$keterangan."',datetime='".$datetime."' where id_paket_obyek=".$id_paket_obyek;
					$update=mysql_query($sql)or die('Update Data paket_obyek Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','paket_obyek.php');
						}else{
							alert('danger','update','paket_obyek.php');
						}
					endif;
			break;
	}
}
function delete($table=null,$field=null,$id=null){
	$table=isset($table) ? $table : '';
	$field=isset($field) ? $field : '';
	$id_paket_obyek=isset($id) ? $id : '';
	if(isset($id_paket_obyek)):
		$sqldelete="delete from `".$table."` where ".$field."=".$id_paket_obyek;
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete paket_obyek ERROR: ".$sqldelete."-->".mysql_error());
		if($hasil==true){
			alert('success','delete',$table.".php");
		}
	endif;
}


include('../footer.php');
?>
