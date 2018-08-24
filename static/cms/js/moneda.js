function edit_moneda(currency_id){    
     var url = 'dashboard/monedas/load/'+currency_id;
     location.href = site+url;   
}
function cancelar_moneda(){
	var url= 'dashboard/monedas';
	location.href = site+url;
}
function delete_moneda(currency_id){
    bootbox.dialog("Confirma que desea elimiar la moneda del sistema", [        
        { "label" : "Cancelar"},
        {
            "label" : "Confirmar",
            "class" : "btn-success",
            "callback": function() {
           $.ajax({
               type: "post",
               url: site+"dashboard/monedas/delete",
               dataType: "json",
               data: {currency_id : currency_id},
               success:function(data){                             
               location.reload();
               }         
           });
           }
        }
    ]);
}