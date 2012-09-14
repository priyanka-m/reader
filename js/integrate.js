$(document).ready(function() {
	// See if url conatins the index 'reader'
	if(location.href.indexOf("reader")!=-1) {
		// If an anchor tag with class = 'name', is clicked, render PDF view.
		$('.name').click(function() {
			var filename=$(this).parent().parent().attr('data-file');
			var dir = $('#dir').val();
			showPDFviewer(dir,filename);
		});
	}
});

