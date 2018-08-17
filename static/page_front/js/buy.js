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