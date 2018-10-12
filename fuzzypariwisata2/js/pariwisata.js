
$(document).ready(function() {
	/*$('#paket_id_obyek').multiselect({
		includeSelectAllOption: true,
		enableFiltering: true,
		buttonWidth: '100%',
	});*/
	
	$("body").on("click","#btn-upload",function(e){
  		e.preventDefault();
  		var id_paket=$(this).attr('data-paket');
  		var id_obyek=$(this).attr('data-obyek');
  		// alert(uri);
  		// $("#modal-upload .modal-body").css({'width': '80%', 'margin-left':'auto', 'margin-right':'auto', 'left':'10%'});
  		$('#modal-upload .modal-body').load('../upload-form.php?id_obyek='+id_obyek,function(result){
	    	// $('form#fileupload').append('<input type="text" id="id_obyek" name="id_obyek[]" value='+ id_obyek + ' />'); 
	    	// $('form#fileupload').find('#id_obyek').val(id_obyek);
	    	// $('#id_obyek').val(id_obyek);
	    	$('#modal-upload').modal({show:true});
		});
  	});

	$("body").on("click","#btnpesan",function(e){
            e.preventDefault();
  			var id_paket=$(this).attr('data-paket');
  			var id_wisata=$(this).attr('data-wisata');
  			// alert(id_paket);
  			// $('.modal-body').load('../upload-form.php',function(result){
	    	$('#id_paket').val(id_paket);
	    	$('#id_wisata').val(id_wisata);
	    	// $('#form-pesan .modal-body ').append('<input type="text" id="id_wisata" name="id_wisata" value='+ id_wisata + ' /><input type="text" id="id_paket" name="id_paket" value='+ id_paket + ' />'); 
	    	$('#modal-id').modal({show:true});
		// });
  
	
	});

	var $lightbox = $('#lightbox');
    
    $('[data-target="#lightbox"]').on('click', function(event) {
        var $img = $(this).find('img'), 
            src = $img.attr('src'),
            alt = $img.attr('alt'),
            css = {
                'maxWidth': $(window).width() - 100,
                'maxHeight': $(window).height() - 100
            };
    
        $lightbox.find('.close').addClass('hidden');
        $lightbox.find('img').attr('src', src);
        $lightbox.find('img').attr('alt', alt);
        $lightbox.find('img').css(css);
    });
    
    $lightbox.on('shown.bs.modal', function (e) {
        var $img = $lightbox.find('img');
            
        $lightbox.find('.modal-dialog').css({'width': $img.width() + 30});
        $lightbox.find('.close').removeClass('hidden');
    });
});

