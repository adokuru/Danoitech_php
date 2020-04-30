$(document).ready(function(){
	$('#searchBtn').click(function() { 
		var searchVal = $('#search').val();
		$.ajax({
			type: 'GET',
			url: 'getFlickr.php',
			data: 'search=' + searchVal,
			dataType: 'html',
			beforeSend: function() {
				$('#result').html('<div data-loader="dual-ring"></div>');
				if(!searchVal[0]) {
					$('#result').html('<p>Please enter a keyword as search value.</p>');   	
					return false;
				} 	
			},
			success: function(response) {
				$('#result').html(response);
				tb_init('a.thickbox');
			}
		});
	});
});