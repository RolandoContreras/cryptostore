function validate(){
    
    var btc =  document.getElementById("btc").value;
    var price_dolar =  document.getElementById("price_dolar").value;
    var phone = document.getElementById("phone").value;
    var wallet = document.getElementById("wallet").value;
    var email = document.getElementById("email").value;
    var radio = $('input[name=radio]:checked').val();
    
    if(wallet == ""){
        document.getElementById("message_wallet").style.display = "block";
        $("#name").focus();
    }else if(phone == ""){
        document.getElementById("message_phone").style.display = "block";
        $("#phone").focus();
    }else if(email == ""){
        document.getElementById("message_email").style.display = "block";
        $("#email").focus();
    }else{
        var email_2 = validar_email(email);
        if(email_2 == true){
            var wallet_2 = validar_wallet_btc(wallet);
                if(wallet_2 == true){
                     $.ajax({
                        type: "post",
                        url: site+"buy/bank/view_bank",
                        dataType: "json",
                        data: {btc : btc,
                               price_dolar : price_dolar,
                               phone : phone,
                               wallet : wallet,
                               email : email,
                               radio : radio},
                        success:function(data){          
                        location.href = site + "bank/details_bank";
                        }         
                      });
                }else{
                    document.getElementById("message_wallet").style.display = "block";
                }
               
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
function validar_wallet_btc(){
    var number;
    var wallet = document.getElementById("wallet").value;
    number = wallet.substr(0,1);
    if(number > 0 && number < 4){
        return true;
    }
}
function fade_wallet(wallet){
    var wallet = document.getElementById("wallet").value;
    if(wallet != ""){ 
        document.getElementById("message_wallet").style.display = "none";
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


