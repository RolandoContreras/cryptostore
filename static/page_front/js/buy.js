function validate_usd(value){
    var price = document.getElementById("price").value;
        $.ajax({
        type: "post",
        url: site + "buy/validate_usd",
        dataType: "json",
        data: {value: value,price: price},
        success:function(data){  
           $("#btc").val(data).html(data.print);
           if(value < 10){
            document.getElementById("message").style.display = "block";
            document.getElementById("submit").disabled = true;
           }else{
            document.getElementById("message").style.display = "none";   
            document.getElementById("submit").disabled = false;
           }
        }            
    });
}

function show_currency(){
    document.getElementById("crypto-container").style.display = "block";
    document.getElementById("span-dropdown-arrow_up").style.display = "none";
    document.getElementById("span-dropdown-arrow_down").style.display = "block";
}
function hide_currency(){
    document.getElementById("crypto-container").style.display = "none";
    document.getElementById("span-dropdown-arrow_up").style.display = "block";
    document.getElementById("span-dropdown-arrow_down").style.display = "none";
}

function change_cripto(cripto){
    document.getElementById("crypto-container").style.display = "none";
    document.getElementById("span-dropdown-arrow_up").style.display = "block";
    document.getElementById("span-dropdown-arrow_down").style.display = "none";
    var price_dolar = document.getElementById("price_dolar").value;
    
    if(cripto == 1){
        var cripto_price = document.getElementById("btc_price").value;
    }else if(cripto == 2){
        var cripto_price = document.getElementById("dash_price").value;
    }else if(cripto == 3){
        var cripto_price = document.getElementById("eth_price").value;
    }else if(cripto == 4){
        var cripto_price = document.getElementById("litecoin_price").value;
    }else if(cripto == 5){
        var cripto_price = document.getElementById("bch_price").value;
    }else if(cripto == 6){
        var cripto_price = document.getElementById("cardano_price").value;
    }else if(cripto == 7){
        var cripto_price = document.getElementById("monero_price").value;
    }else if(cripto == 8){
        var cripto_price = document.getElementById("ripple_price").value;
    }else if(cripto == 9){
        var cripto_price = document.getElementById("verge_price").value;
    }else if(cripto == 10){
        var cripto_price = document.getElementById("zcash_price").value;
    }else if(cripto == 11){
        var cripto_price = document.getElementById("tron_price").value;
    }else if(cripto == 12){
        var cripto_price = document.getElementById("omisego_price").value;
    }else if(cripto == 13){
        var cripto_price = document.getElementById("siacoin_price").value;
    }else if(cripto == 14){
        var cripto_price = document.getElementById("nxt_price").value;
    }
    
    console.log(cripto);
    console.log(cripto_price);
    
    
//    $.ajax({
//        type: "post",
//        url: site + "buy/validate_usd",
//        dataType: "json",
//        data: {value: value,price: price},
//        success:function(data){  
//           $("#btc").val(data).html(data.print);
//           if(value < 10){
//            document.getElementById("message").style.display = "block";
//            document.getElementById("submit").disabled = true;
//           }else{
//            document.getElementById("message").style.display = "none";   
//            document.getElementById("submit").disabled = false;
//           }
//        }            
//    });
    
}