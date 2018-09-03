function new_faq(){
        var url= 'dashboard/faq/load';
	location.href = site+url;
}
function edit_faq(dinamic_id){    
     var url = 'dashboard/faq/load/'+dinamic_id;
     location.href = site+url;   
}
function cancelar_faq(){
	var url= 'dashboard/faq';
	location.href = site+url;
}
function delete_faq(dinamic_id){
    bootbox.dialog("Confirma que desea elimiar el faq del sistema", [        
        { "label" : "Cancelar"},
        {
            "label" : "Confirmar",
            "class" : "btn-danger",
            "callback": function() {
           $.ajax({
               type: "post",
               url: site+"dashboard/faq/delete",
               dataType: "json",
               data: {dinamic_id : dinamic_id},
               success:function(data){                             
               location.reload();
               }         
           });
           }
        }
    ]);
}