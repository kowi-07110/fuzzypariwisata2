<?php 
include('../functions.php');
require('../koneksi.php');
include('../header.php');


?>


<?php
if(isset($_POST['submit'])){
	$form=isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'wisata':
					$id_wisata= isset($_POST['id_wisata']) ? clean(htmlspecialchars($_POST['id_wisata'])) : '';
					$id_paket=isset($_POST['id_paket']) ? clean(htmlspecialchars($_POST['id_paket'])) : '';
					$budget=isset($_POST['budget']) ? clean(htmlspecialchars($_POST['budget'])) : '';
					$waktu=isset($_POST['waktu']) ? clean(htmlspecialchars($_POST['waktu'])) : '';
					$visitor=isset($_POST['visitor']) ? clean(htmlspecialchars($_POST['visitor'])) : '';
					$datetime=date('Y-m-d H:m:s');
					
					$sql="insert into wisata (id_paket,budget,waktu,visitor,datetime) values ('".$id_paket."','".$budget."','".$waktu."','".$visitor."','".$datetime."')";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data wisata Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','wisata.php');
							
						}else{
							alert('danger','insert','wisata.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'wisata':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$id_wisata= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('wisata_content.php');
					# code...
					break;
				case 'delete':
					
					delete('wisata','id_wisata',$id_wisata);
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
		case 'wisata':
			$id_wisata= isset($_POST['id_wisata']) ? clean(htmlspecialchars($_POST['id_wisata'])) : '';
			$id_paket=isset($_POST['id_paket']) ? clean(htmlspecialchars($_POST['id_paket'])) : '';
				$budget=isset($_POST['budget']) ? clean(htmlspecialchars($_POST['budget'])) : '';
				$waktu=isset($_POST['waktu']) ? clean(htmlspecialchars($_POST['waktu'])) : '';
				$visitor=isset($_POST['visitor']) ? clean(htmlspecialchars($_POST['visitor'])) : '';
				$datetime=date('Y-m-d H:m:s');				
			if(isset($id_wisata)):
				$sql="update wisata set id_paket='".$id_paket."',budget='".$budget."',waktu='".$waktu."',visitor='".$visitor."',datetime='".$datetime."' where id_wisata=".$id_wisata;
					$update=mysql_query($sql)or die('Update Data wisata Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','wisata.php');
						}else{
							alert('danger','update','wisata.php');
						}
					endif;
			break;
	}
}
function delete($table=null,$field=null,$id=null){
	$table=isset($table) ? $table : '';
	$field=isset($field) ? $field : '';
	$id_wisata=isset($id) ? $id : '';
	if(isset($id_wisata)):
		$sqldelete="delete from `".$table."` where ".$field."=".$id_wisata;
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete wisata ERROR: ".$sqldelete."-->".mysql_error());
		if($hasil==true){
			alert('success','delete',$table.".php");
		}
	endif;
}


include('../footer.php');
?>
