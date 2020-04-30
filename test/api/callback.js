
$(document).ready(function() {
    $('#recharge').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'baxi.php',
            data: $(this).serialize(),
            beforeSend: function() {
				$('#result').html('<div data-loader="dual-ring"></div>'); 	
			},
			success: function(response) {
				$('#result').html(response);
				tb_init('a.thickbox');
			}
       });
     });
});