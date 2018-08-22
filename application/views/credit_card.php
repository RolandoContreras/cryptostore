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
                            $nav = $url[0];
                            switch ($nav) {
                                case 'home':
                                    $active_home = "active";
                                    break;
                                case 'buy':
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
                                <li class="<?php echo $active_home;?>"><a href="<?php echo site_url().'home'?>">Inicio</a></li>
                                <li><a href="<?php echo site_url().'home/#features'?>" >Características</a></li>
                                <li class="<?php echo $active_buy;?>"><a href="<?php echo site_url().'buy';?>">¡Comprar!</a></li>
                                <li class="<?php echo $active_contact;?>"><a href="<?php echo site_url().'home/#contact';?>">Contacto</a></li>
                                <li class="<?php echo $active_login;?>"><a href="<?php echo site_url().'login';?>">Login</a></li>
                                <li class="<?php echo $active_faq;?>"><a href="<?php echo site_url().'faq';?>">FAQ</a></li>
                                <li>
                                    <a style="display: inline-block"><img src="<?php echo site_url().'static/page_front/images/language/es.png';?>" alt="espanol" width="40"/></a>
                                    <a style="display: inline-block"><img src="<?php echo site_url().'static/page_front/images/language/en.png';?>" alt="espanol" width="40"/></a>
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
                            <h1 class="title-currency-contact margin-top100">Rellena el formulario, estaremos encantados de ayudarte.</h1>
                        </div>
                    </div>
                </div>
			<div class="row">
                            <div class="col-md-4 hidden-xs panel-bitcoinDinero-col">
                                <p><span class="textogris">Porqué Easycripto</span></p>
                                <div class="panelporqueComprar">
                                    <div class="porqueComprar">
                                        <span class="icon-PagoSeguro">
                                            <i id="safe" class="fa fa-shield fa-2x"></i>
                                        </span>
                                        <span class="textoGrisInputs">Pago seguro</span>
                                    </div>
                                </div>
                                <div class="panelporqueComprar">
                                    <div class="porqueComprar">
                                        <span class="icon-Soporte">
                                            <i id="support" class="fa fa-ticket fa-2x"></i>
                                        </span>
                                        <span class="textoGrisInputs">Soporte Personalizado</span>
                                    </div>
                                </div>
                                <div class="panelporqueComprar">
                                    <div class="porqueComprar">
                                        <span class="icon-Competitivos">
                                            <i id="support" class="fa fa-trophy fa-2x"></i>
                                        </span>
                                        <span class="textoGrisInputs">Los precios más competitivos</span>
                                    </div>
                                </div>
                                <div class="panelporqueComprar">
                                    <div class="porqueComprar">
                                        <span class="icon-PagoSeguro">
                                            <i id="price" class="fa fa-check-circle fa-2x"></i>
                                        </span>
                                        <span class="textoGrisInputs">Sin necesidad de registro</span>
                                    </div>
                                </div>
                                <div class="panelporqueComprar">
                                    <div class="porqueComprar">
                                        <span class="icon-Soporte">
                                            <i id="record" class="fa fa-space-shuttle fa-2x"></i>
                                        </span>
                                        <span class="textoGrisInputs">Tus Bitcoins en tiempo record</span>
                                    </div>
                                </div>
                                <div class="panelporqueComprar">
                                    <div class="porqueComprar">
                                        <span class="icon-Competitivos">
                                            <i id="price" class="fa fa-certificate fa-2x"></i>
                                        </span>
                                        <span class="textoGrisInputs">Tus Bitcoins garantizados</span>
                                    </div>
                                </div>
                                <div class="panelporqueComprar">
                                    <div class="porqueComprar">
                                        <span class="icon-Competitivos">
                                            <i id="safe" class="fa fa-user fa-2x"></i>
                                        </span>
                                        <span class="textoGrisInputs">Muy fáciles de comprar</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 panel-tarjeta-col">
                    <p>
                        <span class="textogris">
                            Datos del pago.
                        </span>
                    </p>
                    <div class="form-group has-feedback">
                        <div class="input-group tarjetaDineroDatos">
                            <span class="input-group-addon">
                                <span id="nombre-faq" class="fa fa-question-circle"></span>
                            </span>
                            <input type="text" class="form-control" onkeyup="fade_name(this.value);"  id="name" name="name" placeholder="Ingresa tus Nombres">
                        </div>
                        <span id="message_name" class="field-validation-error" style="display:none;">Ingrese sus Nombres</span>
                    </div>
                    <div class="form-group has-feedback">
                        <div class="input-group tarjetaDineroDatos">
                            <span class="input-group-addon">
                                <span class="fa fa-question-circle" id="apellido-faq"></span>
                            </span>
                            <input type="text" class="form-control" onkeyup="fade_last_name(this.value);" id="last_name" name="last_name" placeholder="Ingresa tus Apellidos">
                        </div>
                        <span id="message_last_name" class="field-validation-error" style="display:none;">Ingrese sus Apellidos</span>
                    </div>
                    <div class="margin-top-43">
                        <p>
                            <span class="textogris">
                                Fecha de nacimiento.
                            </span>
                        </p>
                    <div class="form-group has-feedback">
                        <div class="input-group tarjetaDineroDatos" style="width: 50% !important;">
                            <span class="input-group-addon">
                                <span id="nombre-faq" class="fa fa-question-circle"></span>
                            </span>
                            <input class="form-control" onkeyup="fade_day(this.value);" id="day" name="day" placeholder="dd" type="text">
                        </div>
                       <span id="message_day" class="field-validation-error" style="display:none; width: 50% !important;" >Ingrese Día valido</span> 
                    </div>
                    <div class="form-group has-feedback">
                        <div class="input-group tarjetaDineroDatos" style="width: 50% !important;">
                            <span class="input-group-addon">
                                <span id="nombre-faq" class="fa fa-question-circle"></span>
                            </span>
                            <input type="text" class="form-control" onkeyup="fade_month(this.value);" id="month" name="month" placeholder="mm">
                        </div>
                        <span id="message_month" class="field-validation-error" style="display:none; width: 50% !important;">Ingrese Mes valido</span> 
                    </div>
                    <div class="form-group has-feedback">
                        <div class="input-group tarjetaDineroDatos" style="width: 50% !important;">
                            <span class="input-group-addon">
                                <span id="nombre-faq" class="fa fa-question-circle"></span>
                            </span>
                            <input type="text" class="form-control" onkeyup="fade_year(this.value);" id="year" name="year" placeholder="aaaa">
                        </div>
                        <span id="message_year" class="field-validation-error" style="display:none; width: 50% !important;">Ingrese Año valido</span> 
                    </div>
                    </div>
                    </div>
                    <div class="col-sm-4 panel-tarjeta-col">
                    <p>
                        <span class="textogris">
                            Datos del pago.
                        </span>
                    </p>
                    <div class="form-group has-feedback">
                        <div class="input-group tarjetaDineroDatos width-total">
                            <div class="input-group tarjetaDineroDatos width-total">
                                <input type="text" class="form-control border-radius-4" onkeyup="fade_address(this.value);" id="address" name="address" placeholder="Ingrese Domicilio">
                            </div>
                        </div>
                        <span id="message_address" class="field-validation-error" style="display:none;">Ingrese Domicilio</span> 
                    </div>
                    <div class="form-group has-feedback">
                        <div class="input-group tarjetaDineroDatos width-total">
                            <input type="text" class="form-control border-radius-4" onkeyup="fade_postal(this.value);" id="postal" name="postal" placeholder="Ingrese Código postal" >
                        </div>
                        <span id="message_postal" class="field-validation-error" style="display:none;">Ingrese Código Postal</span> 
                    </div>
                    <div class="form-group has-feedback">
                        <div class="input-group tarjetaDineroDatos width-total">
                            <input type="text" class="form-control border-radius-4" onkeyup="fade_poblacion(this.value);" id="poblacion" name="poblacion" placeholder="Ingrese Población" >
                        </div>
                        <span id="message_poblacion" class="field-validation-error" style="display:none;">Ingrese Código Postal</span> 
                    </div>
                    <div class="form-group has-feedback">
                        <div class="input-group tarjetaDineroDatos width-total">
                            <input type="text" class="form-control border-radius-4" id="provincia" name="provincia" placeholder="Ingrese Provincia" >
                        </div>
                        <span id="message_provincia" class="field-validation-error" style="display:none;">Ingrese Provincia</span> 
                    </div>
                    <div class="form-group has-feedback">
                        <div class="form-group">
                            <select class="form-control" id="country" name="country">
                                <?php foreach ($obj_paises as $value) { ?>
                                <option value="<?php echo $value->id;?>" <?php echo $value->id == 28 ? 'selected' : "";?>><?php echo $value->nombre;?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <input  type="hidden" id="price_dolar" name="price_dolar" value="<?php echo $price_dolar;?>">
                        <input  type="hidden" id="btc" name="btc" value="<?php echo $btc;?>">
                        <input  type="hidden" id="img" name="img" value="<?php echo $img;?>">
                        <input  type="hidden" id="currency" name="currency" value="<?php echo $currency;?>">
                        <input type="hidden" name="phone" id="phone" value="<?php echo $phone;?>"/>
                        <input type="hidden" name="wallet" id="wallet" value="<?php echo $wallet;?>"/>
                        <input type="hidden" name="email" id="email" value="<?php echo $email;?>"/>
                        <input type="hidden" name="radio" id="radio" value="<?php echo $radio;?>"/>
                    </div>
                </div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-4 panel-bitcoinDinero-col margin-top-50">
                            <a href="<?php echo site_url().'bank';?>"><button class="submit_btn_comprar_back trans_300" value="Retrocede" type="submit">Retroceder</button></a>
                        </div>
                        <div class="col-sm-4 panel-bitcoinDinero-col margin-top-50">
                            <input onclick="validate_credit_card();" class="submit_btn_comprar_2 trans_300" value="Comprar">
                        </div>
                        <div class="col-sm-2"></div>
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