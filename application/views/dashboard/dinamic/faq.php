<script src="static/cms/js/core/bootstrap-modal.js"></script>
<script src="static/cms/js/core/bootbox.min.js"></script>
<script src="static/cms/js/core/jquery-1.11.1.min.js"></script>
<script src="static/cms/js/core/jquery.dataTables.min.js"></script>
<link href="static/cms/css/core/jquery.dataTables.css" rel="stylesheet"/>

<!-- main content -->
<div id="main_content" class="span9">
    <div class="row-fluid">
        <div class="widget_container" style="width: 110%;">
            <div class="well">
                    <div class="navbar navbar-static navbar_as_heading">
                            <div class="navbar-inner">
                                    <div class="container" style="width: 110%;">
                                            <a class="brand">LISTADO DE  FAQ</a>
                                            <button class="btn btn-small" onclick="new_faq();"><i class="fa fa-plus-square"></i> Nuevo</button>
                                    </div>
                            </div>
                    </div>
                <div class="well nomargin" style="width: 100%;">
                   <table id="table" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>CODIGO</th>
                                <th>FECHA</th>
                                <th>TÍTULO</th>
                                <th>CONTENIDO</th>
                                <th>ESTADO</th> 
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php foreach ($obj_faq as $value): ?>
                                <td align="center"><b><?php echo $value->dinamic_id;?></b></td>
                                <td><?php echo formato_fecha_barras($value->date);?></td>
                                <td class="label-success" align="center" style="color:#fff" align="center"><b><?php echo $value->title;?></b></td>
                                <td align="center">
                                    <textarea name="content" id="content" rows="10" cols="80">
                                        <?php echo $value->content;?>
                                    </textarea>
                                </td>
                                <td align="center">
                                    <?php if ($value->active == 1) {
                                        $valor = "Activo";
                                        $stilo = "label label-success";
                                    }elseif($value->active == 0){
                                        $valor = "Inactivo";
                                        $stilo = "label label-important";
                                    } ?>
                                    <span class="<?php echo $stilo ?>"><?php echo $valor;?></span>
                                </td>
                                <td>
                                    <div class="operation">
                                        <div class="btn-group">
                                                <button class="btn btn-small" onclick="edit_faq('<?php echo $value->dinamic_id;?>');"><i class="fa fa-edit"></i> Editar</button>
                                                <button class="btn btn-small" onclick="delete_faq('<?php echo $value->dinamic_id;?>');"><i class="fa fa-trash"></i> Eliminar</button>
                                          </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
            </div>
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
<script src="static/cms/js/faq.js"></script>