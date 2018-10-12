<div class="container">
	
	<div class="row" style="margin-top:20px;margin-bottom:20px;">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php include('paket_form.php'); ?>
		</div>
	</div><div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<span class="pull-right"><a href="paket.php" class="btn btn-success btn-lg" >Tambah Paket Baru</a></span>
			<table class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>No.</th>
						
						<th>Nama</th>
						
						<th>Lokasi</th>
						
						<th>Keterangan</th>
						
						
						
						<th>Price_person</th>
						
						<th>Price_group</th>
						
												
						<th>Aksi</th>
					</tr>
				</thead>
				<?php include('paket_list.php'); 
					show_fuzzy('all');
					//rule_fuzzy();
				?>
			</table>
		</div>
	</div>

</div>
