function validate(){
    
    var btc =  document.getElementById("btc").value;
    var price_dolar =  document.getElementById("price_dolar").value;
    var phone = document.getElementById("phone").value;
    var wallet = document.getElementById("wallet").value;
    var email = document.getElementById("email").value;
    var radio = $('input[name=radio]:checked').val();
    
    if(wallet == ""){
        document.getElementById("message_wallet").style.display = "block";
        $("#wallet").focus();
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

function validate_credit_card(){
    var name =  document.getElementById("name").value;
    var last_name =  document.getElementById("last_name").value;
    var day = document.getElementById("day").value;
    var month = document.getElementById("month").value;
    var year = document.getElementById("year").value;
    var address = document.getElementById("address").value;
    var postal = document.getElementById("postal").value;
    var poblacion = document.getElementById("poblacion").value;
    var provincia = document.getElementById("provincia").value;
    //GET COMBO VALUE
    var combo = document.getElementById("country");
    var country = combo.options[combo.selectedIndex].value;
    
    if(name == ""){
        document.getElementById("message_name").style.display = "block";
        $("#name").focus();
    }else if(last_name == ""){
        document.getElementById("message_last_name").style.display = "block";
        $("#last_name").focus();
    }else if(day == ""){
        document.getElementById("message_day").style.display = "block";
        $("#day").focus();
    }else if(month == ""){
        document.getElementById("message_month").style.display = "block";
        $("#month").focus();
    }else if(year == ""){
        document.getElementById("message_year").style.display = "block";
        $("#year").focus();
    }else if(address == ""){
        document.getElementById("message_address").style.display = "block";
        $("#address").focus();
    }else if(postal == ""){
        document.getElementById("message_postal").style.display = "block";
        $("#postal").focus();
    }else if(poblacion == ""){
        document.getElementById("message_poblacion").style.display = "block";
        $("#poblacion").focus();
    }else if(provincia == ""){
        document.getElementById("message_provincia").style.display = "block";
        $("#provincia").focus();
    }else{
        //VALIDATE DAY
        var length_day = day.length;
        var length_month = month.length;
        var length_year = year.length;
        if(length_day != 2){
            document.getElementById("message_day").style.display = "block";
            $("#month").focus();
        }else{
            if(length_month != 2){
                document.getElementById("message_month").style.display = "block";
                $("#month").focus();
            }else{
                if(length_year != 4){
                    document.getElementById("message_year").style.display = "block";
                    $("#year").focus();
                }else{
                    //  get data pass
                    var btc =  document.getElementById("btc").value;
                    var price_dolar =  document.getElementById("price_dolar").value;
                    var phone = document.getElementById("phone").value;
                    var wallet = document.getElementById("wallet").value;
                    var email = document.getElementById("email").value;
                    var radio = document.getElementById("radio").value;
                     $.ajax({
                            type: "post",
                            url: site+"buy/bank/view_credit_card",
                            dataType: "json",
                            data: {btc : btc,
                                   price_dolar : price_dolar,
                                   phone : phone,
                                   wallet : wallet,
                                   email : email,
                                   radio : radio,
                                   name : name,
                                   last_name : last_name,
                                   day : day,
                                   month : month,
                                   year : year,
                                   address : address,
                                   postal : postal,
                                   poblacion : poblacion,
                                   provincia : provincia,
                                   country : country
                        },
                            success:function(data){          
                            location.href = site + "bank/details_credit_card";
                            }         
                    });
                }
            }
        }
        
    }
}
//FADE BANK
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
//FADE CREDIT CARD
function name(){
    var name = document.getElementById("name").value;
    if(name != ""){ 
        document.getElementById("message_term").style.display = "none";
    }
}
function fade_name(){
    var name = document.getElementById("name").value;
    if(name != ""){ 
        document.getElementById("message_name").style.display = "none";
    }
}
function fade_last_name(){
    var last_name = document.getElementById("last_name").value;
    if(last_name != ""){ 
        document.getElementById("message_last_name").style.display = "none";
    }
}
function fade_day(){
    var day = document.getElementById("day").value;

    if(day != ""){ 
        document.getElementById("message_day").style.display = "none";
    }
}
function fade_month(){
    var month = document.getElementById("month").value;
    if(month != ""){ 
        document.getElementById("message_month").style.display = "none";
    }
}function fade_year(){
    var year = document.getElementById("year").value;
    if(year != ""){ 
        document.getElementById("message_year").style.display = "none";
    }
}
function fade_address(){
    var address = document.getElementById("address").value;
    if(address != ""){ 
        document.getElementById("message_address").style.display = "none";
    }
}
function fade_postal(){
    var postal = document.getElementById("postal").value;
    if(postal != ""){ 
        document.getElementById("message_postal").style.display = "none";
    }
}
function fade_poblacion(){
    var poblacion = document.getElementById("poblacion").value;
    if(poblacion != ""){ 
        document.getElementById("message_poblacion").style.display = "none";
    }
}
function fade_provincia(){
    var provincia = document.getElementById("provincia").value;
    if(provincia != ""){ 
        document.getElementById("message_provincia").style.display = "none";
    }
}
function fade_country(){
    var country = document.getElementById("country").value;
    if(country != ""){ 
        document.getElementById("message_country").style.display = "none";
    }
}

