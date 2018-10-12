<?php 
include('functions.php');
include('header.php');


?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="jumbotron">
				<div class="container">
					<h1 class="text-center">SPK Pemesanan & Rekomendasi Pemilihan Tempat Wisata</h1>
					<h3 class="text-center">Menggunakan Metode Fuzzy Sugeno</h3>
					<p class="text-center">
						<a href="laporan.php" class="text-center btn btn-danger btn-lg">Selanjutnya</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row"> 


		<form class="form" action="rekomendasi.php" method="POST" role="form">
				   
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<legend>Rekomendasi Pemilihan Tempat Wisata</legend>

				  	<div class="row">

				  		<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
					  		<div class="form-group" style="width:100%">
					  			<label for="waktu">Budget Anda</label><br/>
					  			<input type="text" name="budget" id="budget" placeholder="Masukkan Budget Anda" class="form-control input-lg" style="width:100%" required="required"  title="">
					   		</div>
						</div>
						
						
						<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					  		<div class="form-group" style="width:100%">
					  			<label for="waktu">Pengunjung</label><br/>
					  			<input type="text" name="visitor" id="visitor" placeholder="Pengunjung" class="form-control input-lg" style="width:100%" required="required" title="">
					   		</div>
						</div>
						<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					  		<?php include('durasi-waktu.php'); ?>
						</div>
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<label for="waktu">&nbsp;</label><br/>

							<button type="submit" name="submit" class="btn btn-lg btn-block btn-primary">Lihat Paket</button>
	
						</div>
						
				  	</div>
				</div>
			</div>
			
		</div>

			</form>
	</div>
</div>
<?php include('footer.php'); ?>