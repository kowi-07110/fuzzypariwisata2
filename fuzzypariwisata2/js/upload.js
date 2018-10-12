$(document).ready(function(){
	$('#fileupload').fileupload({
    url: 'server/php/'
	}).on('fileuploadsubmit', function (e, data) {
	    data.formData = data.context.find(':input').serializeArray();
	});
});