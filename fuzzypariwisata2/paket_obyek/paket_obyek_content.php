<div class="container">
	
	<div class="row">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<?php include('paket_obyek_form.php'); ?>
		</div>
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			<span class="pull-right"><a href="paket_obyek.php" class="btn btn-success btn-md" >Tambah Paket Obyek Baru</a></span>
			<table class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>No.</th>
						
						<th>Paket Wisata</th>
						
						<th>Obyek Wisata</th>
						
						<th>Keterangan</th>
						
										
						<th>Aksi</th>
					</tr>
				</thead>
				<?php include('paket_obyek_list.php'); 
					show_fuzzy('all');
					//rule_fuzzy();
				?>
			</table>
		</div>
	</div>

</div>
