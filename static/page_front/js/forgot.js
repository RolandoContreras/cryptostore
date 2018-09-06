function forgot(){
    var email = document.getElementById("email").value;
    if(email == ""){
        document.getElementById("message_email").style.display = "block";
        $("#email").focus();
        $("#email").addClass('error');
    }else{
        var email_2 = validar_email(email);
        if(email_2 == true){
                $.ajax({
               type: "post",
               url: site+"forgot/send_messages",
               dataType: "json",
               data: {email : email},
               success:function(data){          
                   if(data.status == "true"){
                       document.getElementById("messages").style.display = "block";
                   }else{
                       document.getElementById("no_messages").style.display = "block";
                   }
               }         
             });
        }else{
            document.getElementById("message_email").style.display = "block";
            $("#email").focus();
            $("#email").addClass('error');
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