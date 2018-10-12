<?php 
include('functions.php');
include('header.php');

if(isset($_POST['submit'])):
	
	$username= isset($_POST['username']) ? clean(htmlspecialchars($_POST['username'])) : '';
	$password= isset($_POST['password']) ? clean(htmlspecialchars($_POST['password'])) : '';
	if($username==='admin' && $password==='admin'):
		$_SESSION['login_user']= $username;  // Initializing Session with value of PHP Variable
		$_SESSION['loggedin']= true;  // Initializing Session with value of PHP Variable
		$_SESSION['isadmin']=true;  // Initializing Session with value of PHP Variable
		// echo $_SESSION['login_user'];
		header('location:index.php');
	elseif($username==='guest' && $password==='guest'):
		$_SESSION['login_user']= $username;  // Initializing Session with value of PHP Variable
		$_SESSION['loggedin']=true;  // Initializing Session with value of PHP Variable
		$_SESSION['isadmin']=false;  // Initializing Session with value of PHP Variable
		header('location:index.php');
		// echo $_SESSION['login_user'];
	endif;
endif;


include('footer.php');
?>

