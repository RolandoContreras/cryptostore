$(document).ready(function() {
    $("#form-invest").validate({
        rules: {
            name: { required: true, minlength: 2},
            company: { required: true, minlength: 2},
            phone: { required: true, number: true},
            email: { required:true, email: true},
            term: { required:true},
            comments: { required:true, minlength: 2}
        },
        messages: {
            name: "Por favor introduzca su nombre",
            email : "Por favor introduzca un e-mail válido.",
            subjet: "Por favor introduzca un título",
            phone: "Por favor introduzca un teléfono",
            message : "Por favor introduzca un mensaje."
        },
        submitHandler: function(form){
            var dataString = $('#name').val()+'&'+$('#email').val()+'&'+$('#subjet').val()+'&'+$('#message').val()+'&'+$('#phone').val();
            $.ajax({
                type: "POST",
                url:"<?php echo site_url().'home/send_messages';?>",
                data: {dataString : dataString},
                success: function(data){
                    $("#alert_message").html(data);
                }
            });
        }
    });
});