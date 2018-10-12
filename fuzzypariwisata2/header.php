<!DOCTYPE html>
	<html lang="">
		<head>
			<title>SPK Pemesanan & Rekomendasi Pemilihan Tempat Wisata Menggunakan Metode Fuzzy Sugeno</title>
			<meta charset="UTF-8">
			<meta name="description" content="">
			
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			
		</head>
		<body>

			<nav class="navbar  navbar-inverse navbar-static-top" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo $baseurl ?>index.php">SPK Wisata</a>
				</div>
			
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo $baseurl ?>index.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
					</ul>
							
					<ul class="nav navbar-nav navbar-right	">
						
						<?php session_start(); ?>
					<?php 
						if(isset($_SESSION['loggedin'])):
					 		if(isset($_SESSION['login_user'])):
					 			if(isset($_SESSION['isadmin'])):
									
									if($_SESSION['isadmin']==true):?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-chevron-down"></i> Kelola </b></a>
							
							<ul class="dropdown-menu">
								<li><a href="<?php echo $baseurl ?>wisata/wisata.php">Masukan Wisata</a></li>
								<li><a href="<?php echo $baseurl ?>paket/paket.php">Kelola Paket</a></li>
								<li><a href="<?php echo $baseurl ?>pesan/pesan.php">Kelola Pesanan</a></li>
								<li><a href="<?php echo $baseurl ?>obyek_wisata/obyek_wisata.php">Kelola Obyek Wisata</a></li>
								<li><a href="<?php echo $baseurl ?>jenis/jenis.php">Kelola Jenis Wisata</a></li>
								<li><a href="<?php echo $baseurl ?>rules/rules.php">Kelola Rules</a></li>
								
								
							</ul>
							
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-chevron-down"></i> Setting </a>
							<ul class="dropdown-menu">
								
								<li><a href="<?php echo $baseurl ?>rules/rules.php">Setting Rules</a></li>
								
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-chevron-down"></i> Laporan </a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo $baseurl ?>laporan.php">Laporan Fuzzy Sugeno</a></li>
								
							</ul>
						</li>
					
					
										<?php
										echo $_SESSION['isadmin'];
									endif;
								endif;
									// echo $_SESSION['loggedin'];
									// echo $_SESSION['login_user'];
							endif;
							?>
							<li class="dropdown">
								<a href="<?php echo $baseurl ?>logout.php" ><i class="glyphicon glyphicon-off"></i> Logout</a>
							</li>
							<?
						else:?>
							<li class="dropdown">
								<a href="<?php echo $baseurl ?>login.php" ><i class="glyphicon glyphicon-off"></i> Login</a>
							
							</li>
						<?php endif;
						?>
				
						
					
						
					
				
					</ul>
				</div></div><!-- /.navbar-collapse -->
			</nav>
