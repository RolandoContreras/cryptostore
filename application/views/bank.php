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
                                    <a href='<?php echo site_url()."es/$nav";?>' style="display: inline-block"><img src="<?php echo site_url().'static/page_front/images/language/es.png';?>" alt="espanol" width="40"/></a>
                                    <a href="<?php echo site_url()."en/$nav";?>" style="display: inline-block"><img src="<?php echo site_url().'static/page_front/images/language/en.png';?>" alt="espanol" width="40"/></a>
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
                            <h1 class="title-currency-contact margin-top100"><?=lang('idioma.buy_rellena_formulario');?></h1>
                        </div>
                    </div>
                </div>
                <form method="post" action="javascript:void(0);" onsubmit="validate();" enctype="multipart/form-data">
			<div class="row">
                            <div class="col-md-4 hidden-xs panel-bitcoinDinero-col">
                                <p><span class="textogris"><?=lang('idioma.buy_porque_esy');?></span></p>
                                <div class="panelporqueComprar">
                                    <div class="porqueComprar">
                                        <span class="icon-PagoSeguro">
                                            <i id="safe" class="fa fa-shield fa-2x"></i>
                                        </span>
                                        <span class="textoGrisInputs"><?=lang('idioma.buy_pago_seguro');?></span>
                                    </div>
                                </div>
                                <div class="panelporqueComprar">
                                    <div class="porqueComprar">
                                        <span class="icon-Soporte">
                                            <i id="support" class="fa fa-ticket fa-2x"></i>
                                        </span>
                                        <span class="textoGrisInputs"><?=lang('idioma.buy_soporte_personalizado');?></span>
                                    </div>
                                </div>
                                <div class="panelporqueComprar">
                                    <div class="porqueComprar">
                                        <span class="icon-Competitivos">
                                            <i id="support" class="fa fa-trophy fa-2x"></i>
                                        </span>
                                        <span class="textoGrisInputs"><?=lang('idioma.buy_precios_competitivos');?></span>
                                    </div>
                                </div>
                                <div class="panelporqueComprar">
                                    <div class="porqueComprar">
                                        <span class="icon-PagoSeguro">
                                            <i id="price" class="fa fa-check-circle fa-2x"></i>
                                        </span>
                                        <span class="textoGrisInputs"><?=lang('idioma.buy_sin_registro');?></span>
                                    </div>
                                </div>
                                <div class="panelporqueComprar">
                                    <div class="porqueComprar">
                                        <span class="icon-Soporte">
                                            <i id="record" class="fa fa-space-shuttle fa-2x"></i>
                                        </span>
                                        <span class="textoGrisInputs"><?=lang('idioma.buy_tiempo_record');?></span>
                                    </div>
                                </div>
                                <div class="panelporqueComprar">
                                    <div class="porqueComprar">
                                        <span class="icon-Competitivos">
                                            <i id="price" class="fa fa-certificate fa-2x"></i>
                                        </span>
                                        <span class="textoGrisInputs"><?=lang('idioma.buy_bitcoin_garantizados');?></span>
                                    </div>
                                </div>
                                <div class="panelporqueComprar">
                                    <div class="porqueComprar">
                                        <span class="icon-Competitivos">
                                            <i id="safe" class="fa fa-user fa-2x"></i>
                                        </span>
                                        <span class="textoGrisInputs"><?=lang('idioma.buy_faciles_comprar');?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 panel-bitcoinDinero-col">
                            <p><span class="textogris"><?=lang('idioma.buy_datos_clientes');?></span></p>
                                    <div class="form-group has-feedback">
                                        <div class="input-group bitcoinDineroDatos">
                                            <span class="input-group-addon">
                                                <span id="btcwallet-faq" class="fa fa-google-wallet fa-2x"></span>
                                            </span>
                                            <input type="text" onkeyup="fade_wallet(this.value);" class="form-control padding-right-27" id="wallet" name="wallet" placeholder="<?=lang('idioma.indicar_wallet');?>" value="<?php echo isset($_SESSION['buy'])? $_SESSION['buy']['wallet']:"";?>">
                                        </div>
                                        <span id="message_wallet" class="field-validation-error" style="display:none;" data-valmsg-for="Nombre" data-valmsg-replace="true"><?=lang('idioma.wallet_valida');?></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <div class="input-group bitcoinDineroDatos">
                                            <span class="input-group-addon">
                                                <span id="email-faq" class="fa fa-check fa-2x sweet-11"></span>
                                            </span>
                                            <input type="text" onkeyup="fade_phone(this.value);" class="form-control" id="phone" name="phone" placeholder="<?=lang('idioma.indicar_telefono');?>" value="<?php echo isset($_SESSION['buy'])? $_SESSION['buy']['phone']:"";?>">
                                        </div>
                                        <span id="message_phone" class="field-validation-error" style="display:none;" data-valmsg-for="Nombre" data-valmsg-replace="true"><?=lang('idioma.telefono_valido');?></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <div class="input-group bitcoinDineroDatos">
                                            <span class="input-group-addon">
                                                <span id="email-faq" class="fa fa-envelope fa-2x sweet-11"></span>
                                            </span>
                                            <input type="email" onkeyup="fade_email(this.value);" class="form-control" id="email" name="email" placeholder="<?=lang('idioma.indicar_email');?>" value="<?php echo isset($_SESSION['buy'])? $_SESSION['buy']['email']:"";?>">
                                        </div>
                                        <span id="message_email" class="field-validation-error" style="display:none;" data-valmsg-for="Nombre" data-valmsg-replace="true"><?=lang('idioma.email_valido');?></span>
                                    </div>

                                    <p><span class="textogris"><?=lang('idioma.buy_metodo_pago');?></span></p>
                                    <div class="form-group has-feedback">
                                        <div class="input-group bitcoinDineroDatos">
                                            <span class="input-group-addon" style="padding-top: 13px;">
                                                <input type="radio" name="radio" id="radio" value="1" 
                                                       <?php 
                                                       if(isset($_SESSION['buy'])){
                                                           if($_SESSION['buy']['radio'] == 1){
                                                                echo "checked='checked'";
                                                           }
                                                       }else{
                                                           echo "checked='checked'";
                                                       }
                                                       ?>
                                                       />
                                            </span>
                                            <span class="input-group-addon" style="padding-top: 13px;">
                                                <span id="telephone-faq" class="fa fa-credit-card fa-lg"></span>
                                            </span>
                                            <input type="text" class="form-control" disabled="disabled" placeholder="<?=lang('idioma.buy_tarjeta');?>">
                                        </div>
                                    </div>    
                                        <div class="form-group has-feedback">
                                        <div class="input-group bitcoinDineroDatos">
                                            <span class="input-group-addon" style="padding-top: 13px;">
                                                <input type="radio" name="radio" id="radio" value="2" 
                                                    <?php 
                                                       if(isset($_SESSION['buy'])){
                                                           if($_SESSION['buy']['radio'] == 2){
                                                                echo "checked='checked'";
                                                           }
                                                       }
                                                       ?>/>
                                            </span>
                                            <span class="input-group-addon" style="padding-top: 13px;">
                                                <span id="telephone-faq" class="fa fa-university fa-lg"></span>
                                            </span>
                                            <input  type="text" class="form-control" disabled="disabled" placeholder="<?=lang('idioma.buy_tranferencia');?>"/>
                                        </div>
                                    </div>
                                </div>
                            
                            <div class="col-sm-4 panel-bitcoinDinero-col">
                            <p><span class="textoAzulClaro"><?=lang('idioma.buy_importe_compra');?></span></p>
                            <div class="form-group has-feedback">
                                        <div class="input-group bitcoinDineroDatos">
                                            <span class="input-group-addon">
                                                <span id="btcwallet-faq" class="fa fa-eur fa-2x"></span>
                                            </span>
                                            <input disabled="disabled" type="text" class="form-control padding-right-27"  value="<?php echo isset($_SESSION['buy'])? format_number_2decimal($_SESSION['buy']['price_dolar']):format_number_2decimal($price_dolar);?>">
                                            <input  type="hidden" id="price_dolar" name="price_dolar" value="<?php echo isset($_SESSION['buy'])? $_SESSION['buy']['price_dolar']:$price_dolar;?>">
                                        </div>
                                    </div>
                            <div class="form-group has-feedback">
                                        <div class="input-group bitcoinDineroDatos">
                                            <span class="input-group-addon" id="img_currency">
                                                <img src='<?php echo site_url()."static/page_front/images/monedas/$img";?>' alt="criptomoneda" width="30"/>
                                                <input  type="hidden" id="img" name="img" value="<?php echo isset($_SESSION['buy'])? $_SESSION['buy']['img']:$img;?>">
                                                <input  type="hidden" id="currency" name="currency" value="<?php echo isset($_SESSION['buy'])? $_SESSION['buy']['currency']:$currency;?>">
                                            </span>
                                            <input type="text" disabled="disabled" class="form-control padding-right-27" value="<?php echo isset($_SESSION['buy'])? $_SESSION['buy']['btc']:$btc;?>">
                                            <input  type="hidden" id="btc" name="btc" value="<?php echo isset($_SESSION['buy'])? $_SESSION['buy']['btc']:$btc;?>">
                                        </div>
                                    </div>
                             <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="6LdaVHAUAAAAAMF_YlocobAIEftI1olTSkdxOW3H">
                                </div>
                                <span id="message_capcha" class="field-validation-error" style="display:none;">Captcha no verificado</span>
                            </div>
                        </div>
                           
                        <div class="col-sm-2"></div>
                        <div class="col-sm-4 panel-bitcoinDinero-col margin-top-50">
                            <a href="<?php echo site_url().'buy';?>"><button class="submit_btn_comprar_back trans_300"><?=lang('idioma.boton_retroceder');?></button></a>
                        </div>
                        <div class="col-sm-4 panel-bitcoinDinero-col margin-top-50">
                            <button type="submit" class="submit_btn_comprar_2"><?=lang('idioma.boton_comprar');?></button>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    </form>
                </div>
        </header>
        <!--END CRYPTOCURRENCY-->
	<!-- Footer -->
	<?php $this->load->view("footer");?>
        <!--END FOOTER-->
    </div>
<script src='https://www.google.com/recaptcha/api.js'></script>
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