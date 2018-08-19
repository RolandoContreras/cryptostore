<script src="static/cms/js/core/bootstrap-modal.js"></script>
<script src="static/cms/js/core/bootbox.min.js"></script>
<script src="static/cms/js/core/jquery-1.11.1.min.js"></script>
<script src="static/cms/js/core/jquery.dataTables.min.js"></script>
<link href="static/cms/css/core/jquery.dataTables.css" rel="stylesheet"/>

<!-- main content -->
<div id="main_content" class="span11">
    <div class="row-fluid">
        <div class="widget_container">
            <div class="well">
                    <div class="navbar navbar-static navbar_as_heading">
                            <div class="navbar-inner">
                                    <div class="container" style="width: 100%;">
                                            <a class="brand">LISTADO DE VENTAS</a>
                                    </div>
                            </div>
                    </div>
                
             <!--<form>-->
                <div class="well nomargin" style="width: 100% !important;">
                    <!--- INCIO DE TABLA DE RE4GISTRO -->
                   <table id="table" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>CODE</th>
                                <th>FECHA</th>
                                <th>MONTO</th>
                                <th>WALLET BTC</th>
                                <th>EMAIL</th>
                                <th>TELÉFONO</th>
                                <th>ESTADO</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($obj_pay as $value): ?>
                            <tr>
                                <td align="center"><b><?php echo $value->code;?></b></td>
                                <td align="center"><?php echo formato_fecha_barras($value->date);?></td>
                                <td align="center" style="color:#fff;" class="label-success"><?php echo "$".$value->amount;?></td>
                                <td align="center" style="color:#fff;" class="label-info"><?php echo $value->wallet;?></td>
                                <td align="center"><?php echo $value->email;?></td>
                                <td align="center"><?php echo $value->phone;?></td>
                                <td align="center">
                                    <?php if ($value->active == 1) {
                                        $valor = "Pendiente";
                                        $stilo = "label label-warning";
                                    }elseif($value->active == 0){
                                        $valor = "Procesado";
                                        $stilo = "label label-success";
                                    } ?>
                                    <span class="<?php echo $stilo ?>"><?php echo $valor; ?></span>
                                </td>
                                <td align="center">
                                    <div class="operation">
                                            <div class="btn-group">
                                                    <button class="btn btn-small" onclick="edit_pay('<?php echo $value->sell_id;?>');"><i class="fa fa-edit"></i>  Editar</button>
                                                    <button class="btn btn-small" onclick="process_pay('<?php echo $value->sell_id;?>');"><i class="fa fa-check"></i>  Procesado</button>
                                          </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
            </div>
           <!--</form>-->         
        </div>
    </div>
</div><!-- main content -->
</div>
<script type="text/javascript">
   $(document).ready(function() {
    $('#table').dataTable( {
         "order": [[ 0, "desc" ]]
    } );
} );
</script>
<script src="static/cms/js/cobros.js"></script>