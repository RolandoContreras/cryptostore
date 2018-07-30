function send_messages(){
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var company = document.getElementById("company").value;
    var comments = document.getElementById("comments").value;
    var term = document.getElementById("term").checked;
    
    if(name == ""){
        document.getElementById("message_name").style.display = "block";
        $("#name").focus();
    }else if(email == ""){
        document.getElementById("message_email").style.display = "block";
        $("#email").focus();
    }else if(phone == ""){
        document.getElementById("message_phone").style.display = "block";
        $("#phone").focus();
    }else if(comments == ""){
        document.getElementById("message_comments").style.display = "block";
        $("#comments").focus();
    }else if(term == ""){
        document.getElementById("message_term").style.display = "block";
        $("#term").focus();
    }else{
        var email_2 = validar_email(email);
        if(email_2 == true){
                $.ajax({
               type: "post",
               url: site+"contact/invest/send_messages",
               dataType: "json",
               data: {name : name,
                      email : email,
                      phone : phone,
                      company : company,
                      comments : comments},
               success:function(data){          
               document.getElementById("messages").style.display = "block";
               
               
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
function fade_name(name){
    var name = document.getElementById("name").value;
    if(name != ""){ 
        document.getElementById("message_name").style.display = "none";
    }
}
function fade_email(email){
    var email = document.getElementById("email").value;
    if(email != ""){ 
        document.getElementById("message_email").style.display = "none";
    }
}
function fade_phone(phone){
    var phone = document.getElementById("phone").value;
    if(phone != ""){ 
        document.getElementById("message_phone").style.display = "none";
    }
}
function fade_comments(comments){
    var comments = document.getElementById("comments").value;
    if(comments != ""){ 
        document.getElementById("message_comments").style.display = "none";
    }
}
function fade_term(term){
    var term = document.getElementById("term").checked;
    if(term == true){ 
        document.getElementById("message_term").style.display = "none";
    }
}


