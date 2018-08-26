function login(){
    
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    
    if(email == ""){
        document.getElementById("message_email").style.display = "block";
        $("#email").focus();
        $("#email").addClass('error');
    }else if(password == ""){
        document.getElementById("message_password").style.display = "block";
        $("#password").focus();
        $("#password").addClass('error');
    }else{
        var email_2 = validar_email(email);
        if(email_2 == true){
                $.ajax({
               type: "post",
               url: site+"login/validate",
               dataType: "json",
               data: {email : email,
                      password : password},
               success:function(data){          
                   if(data.status == "true"){
                       document.getElementById("no_messages").style.display = "none";
                       document.getElementById("messages").style.display = "block";
                       location.href = site + "backoffice";
                   }else{
                       document.getElementById("no_messages").style.display = "block";
                   }
               
               }         
             });
        }else{
            document.getElementById("message_email").style.display = "block";
            $("#email").focus();
        }
    }
}
function validar_email( email ){
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}
function fade_email(string){
    var string = document.getElementById("email").value;
    if(string != ""){ 
        document.getElementById("message_email").style.display = "none";
    }
}
function fade_password(string){
    var string = document.getElementById("password").value;
    if(string != ""){ 
        document.getElementById("message_password").style.display = "none";
    }
}