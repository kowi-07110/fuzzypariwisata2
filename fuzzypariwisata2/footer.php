			
			<!-- Bootstrap CSS -->
			<link href="<?php echo $baseurl; ?>css/bootstrap.min.css" rel="stylesheet" media="all">
			<link href="<?php echo $baseurl; ?>css/bootstrap-multiselect.css" rel="stylesheet" media="all">
			<link href="<?php echo $baseurl; ?>css/print.css" rel="stylesheet" media="print">
			<link href="<?php echo $baseurl; ?>css/style.css" rel="stylesheet" media="print">
			<!-- jQuery -->
			<script src="<?php echo $baseurl; ?>js/jquery.min.js"></script>
			<!-- Bootstrap JavaScript -->
			<script src="<?php echo $baseurl; ?>js/bootstrap.min.js"></script>
			<script src="<?php echo $baseurl; ?>js/bootstrap-multiselect.js"></script>
			<script src="<?php echo $baseurl; ?>js/pariwisata.js"></script>
			<script type="text/javascript">
				    $(document).ready(function() {	
				    $('button.print').click(function() {
					    window.print();
					    	return false;
					    });
				    });
			</script>
			<style type="text/css">
			@media print
				{    
				    .no-print, .no-print *
				    {
				        display: none !important;
				    }
				}
			</style>
		</body>
	</html>	