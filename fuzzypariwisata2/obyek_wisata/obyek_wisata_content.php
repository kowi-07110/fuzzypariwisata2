<div class="container">
	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php include('obyek_wisata_form.php'); ?>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<span class="pull-right"><a href="obyek_wisata.php" class="btn btn-success btn-lg" >Tambah Obyek Wisata Baru</a></span>
			<table class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>No.</th>
						
						<th>Jenis</th>
						
						<th>Nama</th>
						
						<th>Alamat</th>
						
						<th>Lokasi</th>
						
						<th>Kota</th>
						
						<th>Keterangan</th>
				
												
						<th>Aksi</th>
					</tr>
				</thead>
				<?php include('obyek_wisata_list.php'); 
					show_fuzzy('all');
					//rule_fuzzy();
				?>
			</table>
		</div>
		
	</div>

</div>
