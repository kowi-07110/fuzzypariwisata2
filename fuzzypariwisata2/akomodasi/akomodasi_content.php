<div class="container">
	
	<div class="row">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<?php include('akomodasi_form.php'); ?>
		</div>
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			<span class="pull-right"><a href="akomodasi.php" class="btn btn-success btn-lg" >Tambah Akomodasi Baru</a></span>
			<table class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>No.</th>
						
						<th>Kamar</th>
						
						<th>Bintang</th>
						
						<th>Nama</th>
						
						<th>Lokasi</th>
						
						<th>Alamat</th>
						
						<th>Kota</th>
						
						<th>Telp</th>
					
												
						<th>Aksi</th>
					</tr>
				</thead>
				<?php include('akomodasi_list.php'); 
					show_fuzzy('all');
					//rule_fuzzy();
				?>
			</table>
		</div>
	</div>

</div>
