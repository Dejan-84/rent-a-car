$(document).ready(function() {

    $(document).on('submit', '#register-form', function(event) {
        event.preventDefault();

        

        var form = $(this).serialize();
         
        $.ajax({

            url: 'ajax/car_matching.php',
            method: 'post',
            dataType: 'json',
            data: {form},

            success: function(response) {

                console.log(response);

                if(response.status) {
                    
                    alert(response.message);
                    window.location.href = response.redirect_url;
                }
                else{

                    $('.text-white').html(response.message);
                }
            }

        });

    
        
    });
});
