
$(document).ready(function() {
    $('#recharge-bill').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'api/baxi.php',
            data: $(this).serialize(),
            dataType: "json",
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
            success: function(response) {
            console.log(response);
            }
    });
});
     $body = $("body");
      $(document).on({
            ajaxStart: function() { $body.addClass("loading");    },
             ajaxStop: function() { $body.removeClass("loading"); }    
        });
});