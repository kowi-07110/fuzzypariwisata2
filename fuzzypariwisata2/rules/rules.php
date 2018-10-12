<?php
include('../functions.php');
require('../koneksi.php'); 
include('../header.php'); 

if(isset($_SESSION['loggedin'])):
	if(isset($_SESSION['login_user'])):
		if(isset($_SESSION['isadmin'])):
			if($_SESSION['isadmin']==true):
				include('rules_content.php'); 

			endif;
		
		endif;
	
	endif;
	else:
		header('location:'.$baseurl.'index.php');
endif;
include('../footer.php'); 
?>