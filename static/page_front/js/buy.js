function validate_usd(value){
    var price = document.getElementById("price").value;
        $.ajax({
        type: "post",
        url: site + "buy/validate_usd",
        dataType: "json",
        data: {value: value,price: price},
        success:function(data){  
           $("#btc").val(data).html(data.print);
        }            
    });
}