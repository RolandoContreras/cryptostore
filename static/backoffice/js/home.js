function validate_usd(value){
    var price = document.getElementById("price").value;
        $.ajax({
        type: "post",
        url: site + "backoffice/validate_usd",
        dataType: "json",
        data: {value: value,price: price},
        success:function(data){  
           $("#btc").val(data).html(data.print);
        }            
    });
}
function validate_btc(value){
    var price = document.getElementById("price").value;
        $.ajax({
        type: "post",
        url: site + "backoffice/validate_btc",
        dataType: "json",
        data: {value: value,price: price},
        success:function(data){            
            $("#usd").val(data).html(data.print);
        }            
    });
}