<!DOCTYPE html>
<html lang="en">
<!--START HEAD-->
<?php $this->load->view("head");?>
<!--END HEAD-->
<body>
<div class="super_container">
	<!-- Header -->
	<header class="header d-flex flex-row justify-content-end align-items-center trans_200">
		<!-- Logo -->
		<div class="logo mr-auto">
                    <img src="<?php echo site_url().'static/page_front/images/logo/logo.png';?>" alt="logo" width="130">
		</div>
		<!-- Navigation -->
                <?php $this->load->view("nav2");?>
		<!-- Hamburger -->
		<div class="hamburger_container bez_1">
                    <i class="fa fa-bars trans_200"></i>
		</div>
	</header>
	<!-- Menu -->
	<div class="menu_container">
		<div class="menu menu_mm text-right">
			<div class="menu_close"><i class="fa fa-times-circle trans_200"></i></div>
                        <?php 
                            //INIT VAR
                            $active_home = "";
                            $active_buy = "";
                            $active_login = "";
                            $active_faq = "";
                            $active_contact = "";

                            $url = explode("/",uri_string());
                            $nav = $url[1];
                            
                            if (isset($url[2])){
                                $nav_2 = "/".$url[2];
                            }else{
                                $nav_2 = "";
                            }
                            
                            switch ($nav) {
                                case 'home':
                                    $active_home = "active";
                                    break;
                                case 'buy':
                                    $active_buy = "active";
                                    break;
                                case 'bank':
                                    $active_buy = "active";
                                    break;
                                case 'login':
                                    $active_login = "active";
                                    break;
                                case 'faq':
                                    $active_faq = "active";
                                    break;
                                case 'contact':
                                    $active_contact = "active";
                                    break;
                                default:
                                    $active_home = "active";
                                    break;
                            }        
                            ?>
                           <ul>
                                <li class="<?php echo $active_home;?>"><a href="<?php echo site_url().'home'?>"><?=lang('idioma.nav_inicio');?></a></li>
                                <li><a href="<?php echo site_url().'home/#features'?>"><?=lang('idioma.nav_caracteristicas');?></a></li>
                                <li class="<?php echo $active_buy;?>"><a href="<?php echo site_url().'buy';?>"><?=lang('idioma.nav_comprar');?></a></li>
                                <li class="<?php echo $active_contact;?>"><a href="<?php echo site_url().'home/#contact';?>"><?=lang('idioma.nav_contacto');?></a></li>
                                <li class="<?php echo $active_login;?>"><a href="<?php echo site_url().'login';?>"><?=lang('idioma.nav_login');?></a></li>
                                <li class="<?php echo $active_faq;?>"><a href="<?php echo site_url().'faq';?>"><?=lang('idioma.nav_faq');?></a></li>
                                <li>
                                    <a href='<?php echo site_url()."es/$nav$nav_2";?>' style="display: inline-block"><img src="<?php echo site_url().'static/page_front/images/language/es.png';?>" alt="espanol" width="40"/></a>
                                    <a href="<?php echo site_url()."en/$nav$nav_2";?>" style="display: inline-block"><img src="<?php echo site_url().'static/page_front/images/language/en.png';?>" alt="espanol" width="40"/></a>
                                </li>
                            </ul>
		</div>
	</div>
	<!-- Home -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center margin-bottom-30">
                        <div class="icon_box_title">
                            <h1 class="title-currency-contact margin-top100"><?=lang('idioma.buy_revisa_datos');?></h1>
                        </div>
                    </div>
                </div>
			<div class="row panel-bitcoinDinero">
                            <div class="col-lg-12">
                            <div class="row">
                                <div class="col-sm-4 panel-bitcoinDinero-col">
                                    <p>
                                        <span class="textogris"><?=lang('idioma.buy_datos_personales');?></span>
                                    </p>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><?=lang('idioma.buy_nombres');?></h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="content"><?php echo $name;?></div>
                                            <input type="hidden" name="name" id="name" value="<?php echo $name;?>"/>
                                        </div>
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><?=lang('idioma.buy_apellidos');?></h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="content"><?php echo $last_name;?></div>
                                            <input type="hidden" name="last_name" id="last_name" value="<?php echo $last_name;?>"/>
                                        </div>
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><?=lang('idioma.buy_fecha_nacimiento');?></h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="content"><?php echo $day."/".$month."/".$year;?></div>
                                            <input type="hidden" name="day" id="day" value="<?php echo $day;?>"/>
                                            <input type="hidden" name="month" id="month" value="<?php echo $month;?>"/>
                                            <input type="hidden" name="year" id="year" value="<?php echo $year;?>"/>
                                        </div>
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><?=lang('idioma.buy_domicilio');?></h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="content"><?php echo $address;?></div>
                                            <input type="hidden" name="address" id="address" value="<?php echo $postal;?>"/>
                                        </div>
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><?=lang('idioma.buy_codigo_postal');?></h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="content"><?php echo $postal;?></div>
                                            <input type="hidden" name="postal" id="postal" value="<?php echo $postal;?>"/>
                                        </div>
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><?=lang('idioma.buy_poblacion_provincia_pais');?></h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="content"><?php echo $poblacion." / ".$provincia." / ".$country ;?></div>
                                            <input type="hidden" name="poblacion" id="poblacion" value="<?php echo $poblacion;?>"/>
                                            <input type="hidden" name="provincia" id="provincia" value="<?php echo $provincia;?>"/>
                                            <input type="hidden" name="country" id="country" value="<?php echo $country;?>"/>
                                        </div>
                                        
                                    </div>
                                    <p><?=lang('idioma.buy_monedero_importante');?></p>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                               <?=lang('idioma.buy_monedero_recibir');?>
                                            </h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="content monedero"><?php echo $wallet;?></div>
                                            <input type="hidden" name="wallet" id="wallet" value="<?php echo $wallet;?>"/>
                                        </div>
                                    </div>

                                    <div class="alert alert-warning" role="alert">
                                    <?=lang('idioma.buy_atencion');?>
                                    </div>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><?=lang('idioma.buy_email');?></h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="content"><?php echo $email;?></div>
                                            <input type="hidden" name="email" id="email" value="<?php echo $email;?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 panel-bitcoinDinero-col">
                                    <p>
                                        <span class="textogris"><?=lang('idioma.buy_datos_pago');?></span>
                                    </p>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <span class="fa fa-dollar-sign fa-1x transferencia"></span>
                                            <span class="textoGrisInputs">
                                                <?php 
                                                if($radio == 1){ ?>
                                                     <?=lang('idioma.buy_tarjeta_credito_debito');?>  
                                                <?php }else{ ?>
                                                    <?=lang('idioma.buy_transferencia_bancaria');?>
                                                <?php } ?>
                                            </span>
                                            <input type="hidden" name="radio" id="radio" value="<?php echo $radio;?>"/>
                                        </div>
                                    </div>
                                    <div class="margintop20">
                                        <p>
                                            <span class="textogris"><?=lang('idioma.buy_tiempo_entrega');?></span>
                                        </p>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <span class="fa fa-clock fa-1x transferencia"></span>
                                                <span class="textoGrisInputs"><?=lang('idioma.buy_tiempo_30_60');?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 panel-bitcoinDinero-col">
                                    <p><span class="textogris"><?=lang('idioma.buy_resumen_pedido');?></span></p>
                                    <div class="panel panel-primary">
                                        <div class="panel-body">
                                            <div class="contentSeparatorPrimer">
                                                <div class="textoresumenRecarja">
                                                    <h5 id="pedido"><?=lang('idioma.buy_tu_pedido');?></h5>
                                                </div>
                                                <div class="content2"><img src="<?php echo site_url().'static/page_front/images/pago_seguro.png';?>" alt="Pago Seguro" width="61" height="28"></div>
                                            </div>
                                            <div class="contentSeparator">
                                                <div class="textoresumenRecarja">
                                                    <img src='<?php echo site_url()."static/page_front/images/monedas/$img";?>' alt="criptomoneda" width="30" style="margin-left: -7px;"/>
                                                </div>
                                                <div class="floatright">
                                                    <h4><span id="crypto-amount"><?php echo $btc;?></span></h4>
                                                    <input type="hidden" name="btc" id="btc" value="<?php echo $btc;?>"/>
                                                </div>
                                            </div>
                                            <div class="contentSeparator">
                                                <div class="textoresumenRecarja">
                                                    <span class="fa fa-eur fa-2x" style="color: #F7921A !important;"></span>
                                                </div>
                                                <div class="floatright">
                                                    <h4><span id="crypto-amount"><?php echo format_number_2decimal($price_dolar);?> <i class="fa fa-eur"></i></span></h4>
                                                    <input type="hidden" name="price_dolar" id="price_dolar" value="<?php echo format_number_2decimal($price_dolar);?>"/>
                                                </div>
                                            </div>

                                            <div class="contentSeparator">
                                                <div class="textoresumenRecarja">
                                                    <span class="fa fa-check fa-2x"></span>&nbsp;&nbsp;<?=lang('idioma.buy_pay_sel');?></div>
                                                <div class="floatright">
                                                    <h4><span id="crypto-amount"><?php echo format_number_2decimal($subtotal);?> <i class="fa fa-eur"></i></span></h4>
                                                    <input type="hidden" name="tax" id="tax" value="<?php echo $subtotal;?>"/>
                                                </div>
                                            </div>

                                            <div class="contentSeparatorResumen">
                                                <div class="textoresumenRecarja">
                                                    <h4><span id="importe_total"><?=lang('idioma.buy_importe_total');?></span></h4>
                                                </div>
                                                <div class="floatright">
                                                    <h3>
                                                        <span id="total"><?php echo format_number_2decimal($total);?> <i class="fa fa-eur"></i></span>
                                                        <input type="hidden" name="total" id="total" value="<?php echo $total;?>"/>    
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <span class="textogris small">
                                            <?=lang('idioma.buy_valor_aproximado');?>
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-sm-2 col-centered-nofloat" style="float: left;"></div>
                                    <div class="col-xs-12 col-sm-8 col-centered-nofloat" style="float: left;">
                                         <?php 
                                            if(isset($message)){ ?>
                                            <span id="message_wallet" class="field-validation-error"><?php echo $message;?></span>
                                        <?php } ?>
                                    </div>
                                    <div class="col-sm-2 col-centered-nofloat" style="float: left;"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 col-centered-nofloat" style="float: left;"></div>
                                <div class="col-xs-12 col-sm-4 col-centered-nofloat" style="float: left;">
                                    <a href="<?php echo site_url().'bank/details_bank';?>"><button class="submit_btn_comprar_back trans_300"><?=lang('idioma.boton_retroceder');?></button></a>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-centered-nofloat" style="float: left;">
                                    <form action="<?php echo site_url().'charge_payment';?>" method="POST">
                                    <input type="hidden" name="total_card" value="<?php echo $total_card;?>"/>
                                    <input type="hidden" name="tax" value="<?php echo $subtotal;?>"/>
                                    <input type="hidden" name="total_db" value="<?php echo $total_db;?>"/>
                                    <script
                                      src="https://checkout.stripe.com/checkout.js" class="stripe-button submit_btn_comprar_2"
                                      data-key=""
                                      data-amount="<?php echo $total_card;?>"
                                      data-name="Easycripto"
                                      data-description="<?=lang('idioma.buy_ingreso_datos_tarjeta');?>"
                                      data-image="https://easycripto.com/static/page_front/images/easyxstripe.jpg"
                                      data-locale="auto"
				      data-currency="eur"
                                      data-zip-code="false">
                                    </script>
                                  </form>
                                </div>
                                <?php 
                                    $path = site_url().'static/page_front/images/easyx200.jpg';
                                    $img = "<img src='$path'/>"
                                ?>
                                <div class="col-sm-2 col-centered-nofloat" style="float: left;"></div>
                            </div>
                            
                    </div>
            </div>
                </div>
        </header>
        <!--END CRYPTOCURRENCY-->
	<!-- Footer -->
	<?php $this->load->view("footer");?>
        <!--END FOOTER-->
    </div>
<script src="<?php echo site_url().'static/page_front/js/bank.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/jquery-3.2.1.min.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/popper.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/bootstrap.min.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/TweenMax.min.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/TimelineMax.min.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/ScrollMagic.min.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/animation.gsap.min.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/ScrollToPlugin.min.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/slick.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/owl.carousel.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/jquery.scrollTo.min.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/easing.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/custom.js';?>"></script>
</body>
</html>