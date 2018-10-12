<?php 
include('../functions.php');
require('../koneksi.php');
include('../header.php');


?>


<?php
if(isset($_POST['submit'])){
	$form=isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'rules':
					$rule_id= isset($_POST['rule_id']) ? clean(htmlspecialchars($_POST['rule_id'])) : '';
					$rulename=isset($_POST['rulename']) ? clean(htmlspecialchars($_POST['rulename'])) : '';
					$budget=isset($_POST['budget']) ? clean(htmlspecialchars($_POST['budget'])) : '';
					$durasi=isset($_POST['durasi']) ? clean(htmlspecialchars($_POST['durasi'])) : '';
					$visitor=isset($_POST['visitor']) ? clean(htmlspecialchars($_POST['visitor'])) : '';
					$fuzzy_output=isset($_POST['fuzzy_output']) ? clean(htmlspecialchars($_POST['fuzzy_output'])) : '';
					$datetime=date('Y-m-d H:m:s');
					
					$sql="insert into rules (rulename,budget,durasi,visitor,fuzzy_output,datetime) values ('".$rulename."','".$budget."','".$durasi."','".$visitor."','".$fuzzy_output."','".$datetime."')";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data rules Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','rules.php');
							
						}else{
							alert('danger','insert','rules.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'rules':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$rule_id= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('rules_content.php');
					# code...
					break;
				case 'delete':
					
					delete('rules','rule_id',$rule_id);
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
		case 'rules':
			$rule_id= isset($_POST['rule_id']) ? clean(htmlspecialchars($_POST['rule_id'])) : '';
			$rulename=isset($_POST['rulename']) ? clean(htmlspecialchars($_POST['rulename'])) : '';
				$budget=isset($_POST['budget']) ? clean(htmlspecialchars($_POST['budget'])) : '';
				$durasi=isset($_POST['durasi']) ? clean(htmlspecialchars($_POST['durasi'])) : '';
				$visitor=isset($_POST['visitor']) ? clean(htmlspecialchars($_POST['visitor'])) : '';
				$fuzzy_output=isset($_POST['fuzzy_output']) ? clean(htmlspecialchars($_POST['fuzzy_output'])) : '';
				$datetime=date('Y-m-d H:m:s');
				
			if(isset($rule_id)):
				$sql="update rules set rulename='".$rulename."',budget='".$budget."',durasi='".$durasi."',visitor='".$visitor."',fuzzy_output='".$fuzzy_output."',datetime='".$datetime."' where rule_id=".$rule_id;
					$update=mysql_query($sql)or die('Update Data rules Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','rules.php');
						}else{
							alert('danger','update','rules.php');
						}
					endif;
			break;
	}
}
function delete($table=null,$field=null,$id=null){
	$table=isset($table) ? $table : '';
	$field=isset($field) ? $field : '';
	$rule_id=isset($id) ? $id : '';
	if(isset($rule_id)):
		$sqldelete="delete from `".$table."` where ".$field."=".$rule_id;
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete rules ERROR: ".$sqldelete."-->".mysql_error());
		if($hasil==true){
			alert('success','delete',$table.".php");
		}
	endif;
}


include('../footer.php');
?>
