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
        <!--CRIPTOCURRENCY-->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center margin-bottom-30">
                        <div class="icon_box_title">
                            <h1 class="title-currency-contact margin-top100"><?=lang('idioma.buy_revisa_datos');?></h1>
                        </div>
                    </div>
                </div>
			<div class="row">
                            <form action="<?php echo site_url().'buy/bank/confirm_bank';?>" method="post">
                            <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-4 hidden-xs panel-bitcoinDinero-col">
                                    <p>
                                        <span class="textogris"><?=lang('idioma.buy_datos_personales');?></span>
                                    </p>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><?=lang('idioma.buy_telefono');?></h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="content"><?php echo $phone;?></div>
                                            <input type="hidden" name="phone" id="phone" value="<?php echo $phone;?>"/>
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
                                            <span class="textoGrisInputs"><?=lang('idioma.buy_transferencia_bancaria');?></span>
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
                                                    <img src='<?php echo site_url()."static/page_front/images/monedas/$img";?>' alt="criptomoneda" width="30"/>
                                                </div>
                                                <div class="floatright">
                                                    <h4><span id="crypto-amount"><?php echo $btc;?></span></h4>
                                                    <input type="hidden" name="btc" id="btc" value="<?php echo $btc;?>"/>
                                                    <input type="hidden" name="img" id="img" value="<?php echo $img;?>"/>
                                                    <input type="hidden" name="currency" id="currency" value="<?php echo $currency;?>"/>
                                                </div>
                                            </div>
                                            <div class="contentSeparator">
                                                <div class="textoresumenRecarja">
                                                    <span class="fa fa-eur fa-2x" style="color: #F7921A !important;"></span>
                                                </div>
                                                <div class="floatright">
                                                    <h4><span id="crypto-amount"><?php echo format_number_2decimal($price_dolar);?> $</span></h4>
                                                    <input type="hidden" name="price_dolar" id="price_dolar" value="<?php echo $price_dolar;?>"/>
                                                </div>
                                            </div>

                                            <div class="contentSeparator">
                                                <div class="textoresumenRecarja">
                                                    <span class="fa fa-check fa-2x"></span>&nbsp;&nbsp;<?=lang('idioma.buy_pay_sel');?></div>
                                                <div class="floatright">
                                                    <h4><span id="crypto-amount">0 $</span> </h4>
                                                    <input type="hidden" name="iva" id="iva" value="0"/>
                                                </div>
                                            </div>

                                            <div class="contentSeparatorResumen">
                                                <div class="textoresumenRecarja">
                                                    <h4><span id="importe_total"><?=lang('idioma.buy_importe_total');?></span></h4>
                                                </div>
                                                <div class="floatright">
                                                    <h3>
                                                        <span id="total"><?php echo format_number_2decimal($price_dolar);?> $</span>
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
                            <div class="row row-centered">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <div class="margin-top-20">
                                        <div class="checkbox display-inline-block">
                                            <div class="floatleft leter_size margin-top-5">
                                                <label>
                                                    <input id="card-recharge-privacity" name="card-recharge-privacity" data-val="true" data-val-required="'Voucher Privacity' no debe estar vacío." value="true" type="checkbox" required="">
                                                    <input name="card-recharge-privacity" value="false" type="hidden">
                                                        <?=lang('idioma.buy_acepto_condiciones');?>&nbsp;<a class="blue-color-link" href="<?php echo site_url().'notice/privacy';?>" target="_blank"><?=lang('idioma.buy_ver');?></a>
                                                </label>
                                            </div>
                                            <div class="floatleft leter_size margin-top-5">
                                                <label>
                                                    <input id="confirm-wallet-property" name="confirm-wallet-property" data-val="true" data-val-required="'Confirm Wallet property' no debe estar vacío." value="true" type="checkbox" required="">
                                                    <input name="confirm-wallet-property" value="false" type="hidden">
                                                    <?=lang('idioma.buy_afirmo');?>
                                                </label>
                                            </div>
                                            <div class="floatleft leter_size margin-top-5">
                                                <label>
                                                    <input id="confirm-devolutionservice-cost" name="confirm-devolutionservice-cost" data-val="true" data-val-required="'Confirm Devolution cost' no debe estar vacío." value="true" type="checkbox" required="">
                                                    <input name="confirm-devolutionservice-cost" value="false" type="hidden">
                                                    <?=lang('idioma.buy_acepto_verificacion');?>&nbsp;<a href="<?php echo site_url().'notice/general';?>" target="_blank" class="blue-color-link"><?=lang('idioma.buy_ver');?></a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 col-centered-nofloat" style="float: left;"></div>
                                <div class="col-xs-12 col-sm-4 col-centered-nofloat margin-top-50" style="float: left;">
                                    <a href="<?php echo site_url().'buy/bank';?>"><button class="submit_btn_comprar_back trans_300"><?=lang('idioma.boton_retroceder');?></button></a>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-centered-nofloat margin-top-50" style="float: left;">
                                    <button type="submit" class="submit_btn_comprar_2"><?=lang('idioma.boton_comprar');?></button>
                                </div>
                                <div class="col-sm-2 col-centered-nofloat" style="float: left;"></div>
                            </div>
                    </div>
                </form>        
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