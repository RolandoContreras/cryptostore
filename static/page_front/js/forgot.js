$(document).ready(function() {
    $("#form-forgot").validate({
        rules: {
            username: { required: true, minlength: 2}
        },
        messages: {
            username: "Por favor introduzca su usuario",
        },
        submitHandler: function(form){
            var username = $('#username').val();
            $.ajax({
                type: "POST",
                url: site + "forgot/send_messages",
                data: {username : username},
                success: function(data){
                    if(data.status == "true"){
                        $("#alert_message").html('<div class="alert alert-success" style="text-align: center">Bienvenido.</div>');
                    }else{
                        $("#alert_message").html(data);
                    }
                    
                }
            });
        }
    });
});