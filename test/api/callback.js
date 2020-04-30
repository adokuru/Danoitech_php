
$(document).ready(function() {
    $('#recharge-bill').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'api/baxi.php',
            data: $(this).serialize(),
            dataType: "json",
            beforeSend: function() {
				$('#loader').removeClass('hidden');
			},
			success: function(response) {
			console.log(response);
               swal(response.message, response.data.transactionMessage, response.status);

			}
       });
     });
     $('#dataoperator').on('change', 'select', function(){
        var dataoperator = $('#form_stadt_kanton').serializeArray();
         $.ajax({
            type: "POST",
            url: 'api/baxi.php',
            data: dataoperator,
            dataType: "json",
            beforeSend: function() {
                $('#loader').removeClass('hidden');
            },
            success: function(response) {
            console.log(response);
            }
    });
});
});