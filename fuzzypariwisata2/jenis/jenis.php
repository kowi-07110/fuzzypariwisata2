<?php
include('../functions.php');
require('../koneksi.php'); 
include('../header.php'); 
 
if(isset($_SESSION['loggedin'])):
	if(isset($_SESSION['login_user'])):
		if(isset($_SESSION['isadmin'])):
			if($_SESSION['isadmin']==true):
				include('jenis_content.php');
				
			endif;
		endif;
	endif;
endif;
include('../footer.php'); 
?>