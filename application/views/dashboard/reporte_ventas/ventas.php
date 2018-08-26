<script src="static/cms/js/core/bootstrap-modal.js"></script>
<script src="static/cms/js/core/bootbox.min.js"></script>
<script src="static/cms/js/core/jquery-1.11.1.min.js"></script>
<script src="static/cms/js/core/jquery.dataTables.min.js"></script>
<link href="static/cms/css/core/jquery.dataTables.css" rel="stylesheet"/>

<div id="main_content" class="span10">
<div class="row-fluid">
        <div class="widget_container">
            <div class="well nomargin" style="padding:10px;">
                            <div class="navbar navbar-static navbar_as_heading">
                                    <div class="navbar-inner">
                                            <div class="container" style="width: auto;">
                                                    <a class="brand">Vista Global de Ventas</a>
                                            </div>
                                    </div>
                            </div>
                            <table id="quick_view" class="table">
                                    <thead>
                                        <tr>
                                            <th>CONCEPTO</th>
                                            <th>TOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a><i class="fa fa-usd" aria-hidden="true"></i> Monto Total Ventas</a></td>
                                            <td><b><?php echo "$".format_number_2decimal($total_amount);?></b></td>
                                        </tr>
                                        <tr>
                                            <td><a><i class="fa fa-btc"></i> Monto Total Ventas en <?php echo $year;?></a></td>
                                            <td><b><?php echo "$".format_number_2decimal($total_amount_year);?></b></td>
                                        </tr>
                                        <tr>
                                            <td><a><i class="fa fa-btc"></i> Monto Total Ventas <?php echo $month;?></a></td>
                                            <td><b><?php echo "$".format_number_2decimal($obj_total_sell_amount_month);?></b></td>
                                        </tr>
                                        <tr>
                                            <td><a><i class="fa fa-btc"></i> Total Ventas</a></td>
                                            <td><b><?php echo $obj_total_sell;?></b></td>
                                        </tr>
                                        <tr>
                                            <td><a><i class="fa fa-btc"></i> Total Ventas Procesadas</a></td>
                                            <td><b><?php echo $obj_total_procesadas;?></b></td>
                                        </tr>
                                        <tr>
                                            <td><a><i class="fa fa-btc"></i> Total Ventas Canceladas</a></td>
                                            <td><b><?php echo $obj_total_canceladas;?></b></td>
                                        </tr>
                                        <tr>
                                            <td><a><i class="fa fa-btc"></i> Total Ventas en <?php echo $year;?></a></td>
                                            <td><b><?php echo $obj_total_sell_year;?></b></td>
                                        </tr>
                                        <tr>
                                            <td><a><i class="fa fa-btc"></i> Total Ventas <?php echo $month;?></a></td>
                                            <td><b><?php echo $obj_total_sell_month;?></b></td>
                                        </tr>
                                        
                                    </tbody>
                            </table>
                    </div>
        </div>
        <div class="widget_container">
                    <div class="well nomargin" style="padding:10px;">
                            <div class="chart-container">
                                <canvas id="chart"></canvas>
                            </div>
                    </div>
            </div>
    </div>
    <input type="hidden" id="ene" value="<?php echo format_number_2decimal($obj_sell_by_month->total_ene);?>"/>
    <input type="hidden" id="feb" value="<?php echo $obj_sell_by_month->total_feb;?>"/>
    <input type="hidden" id="mar" value="<?php echo $obj_sell_by_month->total_mar;?>"/>
    <input type="hidden" id="abr" value="<?php echo $obj_sell_by_month->total_abr;?>"/>
    <input type="hidden" id="may" value="<?php echo $obj_sell_by_month->total_may;?>"/>
    <input type="hidden" id="jun" value="<?php echo $obj_sell_by_month->total_jun;?>"/>
    <input type="hidden" id="jul" value="<?php echo $obj_sell_by_month->total_jul;?>"/>
    <input type="hidden" id="ago" value="<?php echo $obj_sell_by_month->total_ago;?>"/>
    <input type="hidden" id="set" value="<?php echo $obj_sell_by_month->total_set;?>"/>
    <input type="hidden" id="oct" value="<?php echo $obj_sell_by_month->total_oct;?>"/>
    <input type="hidden" id="nov" value="<?php echo $obj_sell_by_month->total_nov;?>"/>
    <input type="hidden" id="dic" value="<?php echo $obj_sell_by_month->total_dic;?>"/>
</div>
<script>
    var ene = document.getElementById('ene').value;
    var feb = document.getElementById('feb').value;
    var mar = document.getElementById('mar').value;
    var abr = document.getElementById('abr').value;
    var may = document.getElementById('may').value;
    var jun = document.getElementById('jun').value;
    var jul = document.getElementById('jul').value;
    var ago = document.getElementById('ago').value;
    var set = document.getElementById('set').value;
    var oct = document.getElementById('oct').value;
    var nov = document.getElementById('nov').value;
    var dic = document.getElementById('dic').value;
    
    var ctx = document.getElementById('chart').getContext('2d');
    var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Setiembre", "Octubre", "Noviembre", "Diciembre"],
        datasets: [{
            label: "Ventas por mes $",
            backgroundColor: 'transparent',
            borderColor: 'rgb(14, 11, 63)',
            borderWidth: 2,
            hoverBackgroundColor: "rgba(14, 11, 63,0.4)",
            hoverBorderColor: "rgba(14, 11, 63)",
            data: [ene, feb, mar, abr, may, jun, jul, ago, set, oct, nov, dic]
        }]
    },
    options: {}
});
</script>
<style>
canvas {
  border: 1px dotted blue;
}
.chart-container {
  position: relative;
  margin: auto;
  height: 60vh;
  width: 60vw;
}
</style>
<script src="static/cms/js/panel.js"></script>