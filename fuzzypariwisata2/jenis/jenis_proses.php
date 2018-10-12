<?php 
include('../functions.php');
require('../koneksi.php');
include('../header.php');


?>


<?php
if(isset($_POST['submit'])){
	$form=isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'jenis':
					$id_jenis= isset($_POST['id_jenis']) ? clean(htmlspecialchars($_POST['id_jenis'])) : '';
					$nama=isset($_POST['nama']) ? clean(htmlspecialchars($_POST['nama'])) : '';
					$datetime=date('Y-m-d H:m:s');
					
					$sql="insert into jenis (nama,datetime) values ('".$nama."','".$datetime."')";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data jenis Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','jenis.php');
							
						}else{
							alert('danger','insert','jenis.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'jenis':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$id_jenis= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('jenis_content.php');
					# code...
					break;
				case 'delete':
					
					delete('jenis','id_jenis',$id_jenis);
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
		case 'jenis':
			$id_jenis= isset($_POST['id_jenis']) ? clean(htmlspecialchars($_POST['id_jenis'])) : '';
			$nama=isset($_POST['nama']) ? clean(htmlspecialchars($_POST['nama'])) : '';
				$datetime=date('Y-m-d H:m:s');
				
			if(isset($id_jenis)):
				$sql="update jenis set nama='".$nama."',datetime='".$datetime."' where id_jenis=".$id_jenis;
					$update=mysql_query($sql)or die('Update Data jenis Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','jenis.php');
						}else{
							alert('danger','update','jenis.php');
						}
					endif;
			break;
	}
}
function delete($table=null,$field=null,$id=null){
	$table=isset($table) ? $table : '';
	$field=isset($field) ? $field : '';
	$id_jenis=isset($id) ? $id : '';
	if(isset($id_jenis)):
		$sqldelete="delete from `".$table."` where ".$field."=".$id_jenis;
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete jenis ERROR: ".$sqldelete."-->".mysql_error());
		if($hasil==true){
			alert('success','delete',$table.".php");
		}
	endif;
}


include('../footer.php');
?>
