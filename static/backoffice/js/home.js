function validate_usd(value){
    var currency = document.getElementById("currency").value;
    
    if(currency == "bitcoin"){
        var cripto_price = document.getElementById("btc_price").value;
    }else if(currency == "dash"){
        var cripto_price = document.getElementById("dash_price").value;
    }else if(currency == "ethereum"){
        var cripto_price = document.getElementById("eth_price").value;
    }else if(currency == "litecoin"){
        var cripto_price = document.getElementById("litecoin_price").value;
    }else if(currency == "bitcoincash"){
        var cripto_price = document.getElementById("bch_price").value;
    }else if(currency == "cardano"){
        var cripto_price = document.getElementById("cardano_price").value;
    }else if(currency == "monero"){
        var cripto_price = document.getElementById("monero_price").value;
    }else if(currency == "ripple"){
        var cripto_price = document.getElementById("ripple_price").value;
    }else if(currency == "verge"){
        var cripto_price = document.getElementById("verge_price").value;
    }else if(currency == "zcash"){
        var cripto_price = document.getElementById("zcash_price").value;
    }else if(currency == "tron"){
        var cripto_price = document.getElementById("tron_price").value;
    }else if(currency == "omisego"){
        var cripto_price = document.getElementById("omisego_price").value;
    }else if(currency == "siacoin"){
        var cripto_price = document.getElementById("siacoin_price").value;
    }else if(currency == "nxt"){
        var cripto_price = document.getElementById("nxt_price").value;
    }else{
        var cripto_price = document.getElementById("btc_price").value;
    }
    
    var img = "";
        $.ajax({
        type: "post",
        url: site + "buy/validate_usd",
        dataType: "json",
        data: {value: value,price: cripto_price,img: img},
        success:function(data){  
           $("#amount_cripto").val(data.amount_btc).html(data.amount_btc);
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

function change_cripto(cripto, img){
    document.getElementById("crypto-container").style.display = "none";
    document.getElementById("span-dropdown-arrow_up").style.display = "block";
    document.getElementById("span-dropdown-arrow_down").style.display = "none";
    var price_dolar = document.getElementById("price_dolar").value;
    
    if(cripto == 1){
        var cripto_price = document.getElementById("btc_price").value;
        $("#currency").val("bitcoin");
    }else if(cripto == 2){
        var cripto_price = document.getElementById("dash_price").value;
        $("#currency").val("dash");
    }else if(cripto == 3){
        var cripto_price = document.getElementById("eth_price").value;
        $("#currency").val("ethereum");
    }else if(cripto == 4){
        var cripto_price = document.getElementById("litecoin_price").value;
        $("#currency").val("litecoin");
    }else if(cripto == 5){
        var cripto_price = document.getElementById("bch_price").value;
        $("#currency").val("bitcoincash");
    }else if(cripto == 6){
        var cripto_price = document.getElementById("cardano_price").value;
        $("#currency").val("cardano");
    }else if(cripto == 7){
        var cripto_price = document.getElementById("monero_price").value;
        $("#currency").val("monero");
    }else if(cripto == 8){
        var cripto_price = document.getElementById("ripple_price").value;
        $("#currency").val("ripple");
    }else if(cripto == 9){
        var cripto_price = document.getElementById("verge_price").value;
        $("#currency").val("verge");
    }else if(cripto == 10){
        var cripto_price = document.getElementById("zcash_price").value;
        $("#currency").val("zcash");
    }else if(cripto == 11){
        var cripto_price = document.getElementById("tron_price").value;
        $("#currency").val("tron");
    }else if(cripto == 12){
        var cripto_price = document.getElementById("omisego_price").value;
        $("#currency").val("omisego");
    }else if(cripto == 13){
        var cripto_price = document.getElementById("siacoin_price").value;
        $("#currency").val("siacoin");
    }else if(cripto == 14){
        var cripto_price = document.getElementById("nxt_price").value;
        $("#currency").val("nxt");
    }
    
    $.ajax({
        type: "post",
        url: site + "buy/validate_usd",
        dataType: "json",
        data: {value: price_dolar,price: cripto_price, img: img},
        success:function(data){  
           $("#amount_cripto").val(data.amount_btc).html(data.amount_btc);
           $("#img_currency").html(data.img);
           if(price_dolar < 10){
            document.getElementById("message").style.display = "block";
            document.getElementById("submit").disabled = true;
           }else{
            document.getElementById("message").style.display = "none";   
            document.getElementById("submit").disabled = false;
           }
        }            
    });
    
}