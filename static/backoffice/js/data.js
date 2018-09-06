function alter_dni(){
    var customer_id = document.getElementById("customer_id").value;
    var dni = document.getElementById("dni").value;
        $.ajax({
        type: "post",
        url: site +"b_data/update_dni",
        dataType: "json",
        data: {dni: dni,
               customer_id: customer_id},
        success:function(data){            
              if(data.message == "true"){
                  document.getElementById("dni_success").style.display = "block";
            }
        }            
    });
}

function alter_password(){
        var customer_id = document.getElementById("customer_id").value;
        var password = document.getElementById("password").value;
        var password_one = document.getElementById("password_one").value;
        var password_two = document.getElementById("password_two").value;
        
        if(password_one == password_two){
                $.ajax({
                    type: "post",
                    url: site + "b_data/update_password",
                    dataType: "json",
                    data: {customer_id: customer_id,
                           password: password,
                           password_one: password_one,
                           password_two: password_two
                       },
                    success:function(data){            
                            if(data.message == "true"){         
                            document.getElementById("password_success").style.display = "block";
                        }else{
                            document.getElementById("password_no_success").style.display = "block";
                        }
                    }            
                });
        }else{
           $("#alert_message_password").html('<div class="alert alert-danger" style="text-align: center">Las contraseñas no coinciden.</div>'); 
        }
}

function validate_password(password){
        var customer_id = document.getElementById("customer_id").value;
        $.ajax({
        type: "post",
        url: site + "b_data/validate_password",
        dataType: "json",
        data: {password: password,
               customer_id: customer_id},
        success:function(data){            
                if(data.message == "true"){         
                    document.getElementById("message").style.display = "none";
                    document.getElementById("message_success").style.display = "block";
                    document.form.password_one.disabled = false;
                    document.form.password_two.disabled = false;
            }else{
                document.getElementById("message").style.display = "block";
                document.getElementById("message_success").style.display = "none";
            }
        }            
    });
}