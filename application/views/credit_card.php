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
                            <h1 class="title-currency-contact margin-top100"><?=lang('idioma.buy_rellena_formulario');?></h1>
                        </div>
                    </div>
                </div>
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
                            <div class="col-sm-4 panel-tarjeta-col">
                    <p>
                        <span class="textogris">
                            <?=lang('idioma.buy_datos_clientes');?>
                        </span>
                    </p>
                    <div class="form-group has-feedback">
                        <div class="input-group tarjetaDineroDatos">
                            <span class="input-group-addon">
                                <span id="nombre-faq" class="fa fa-question-circle"></span>
                            </span>
                            <input type="text" class="form-control" onkeyup="fade_name(this.value);"  id="name" name="name" placeholder="<?=lang('idioma.indicar_nombre');?>">
                        </div>
                        <span id="message_name" class="field-validation-error" style="display:none;"><?=lang('idioma.nombre_requerido');?></span>
                    </div>
                    <div class="form-group has-feedback">
                        <div class="input-group tarjetaDineroDatos">
                            <span class="input-group-addon">
                                <span class="fa fa-question-circle" id="apellido-faq"></span>
                            </span>
                            <input type="text" class="form-control" onkeyup="fade_last_name(this.value);" id="last_name" name="last_name" placeholder="<?=lang('idioma.indicar_apellido');?>">
                        </div>
                        <span id="message_last_name" class="field-validation-error" style="display:none;"><?=lang('idioma.apellido_requerido');?></span>
                    </div>
                    <div class="margin-top-43">
                        <p>
                            <span class="textogris">
                                <?=lang('idioma.fecha_nacimiento');?>
                            </span>
                        </p>
                    <div class="form-group has-feedback">
                        <div class="input-group tarjetaDineroDatos" style="width: 50% !important;">
                            <span class="input-group-addon">
                                <span id="nombre-faq" class="fa fa-question-circle"></span>
                            </span>
                            <input class="form-control" onkeyup="fade_day(this.value);" id="day" name="day" placeholder="DD" type="text" minlength="2" maxlength="2">
                        </div>
                       <span id="message_day" class="field-validation-error" style="display:none; width: 50% !important;"><?=lang('idioma.dia_valido');?></span> 
                    </div>
                    <div class="form-group has-feedback">
                        <div class="input-group tarjetaDineroDatos" style="width: 50% !important;">
                            <span class="input-group-addon">
                                <span id="nombre-faq" class="fa fa-question-circle"></span>
                            </span>
                            <input type="text" class="form-control" onkeyup="fade_month(this.value);" id="month" name="month" placeholder="MM" minlength="2" maxlength="2">
                        </div>
                        <span id="message_month" class="field-validation-error" style="display:none; width: 50% !important;"><?=lang('idioma.mes_valido');?></span> 
                    </div>
                    <div class="form-group has-feedback">
                        <div class="input-group tarjetaDineroDatos" style="width: 50% !important;">
                            <span class="input-group-addon">
                                <span id="nombre-faq" class="fa fa-question-circle"></span>
                            </span>
                            <input type="text" class="form-control" onkeyup="fade_year(this.value);" id="year" name="year" placeholder="<?=lang('idioma.ano');?>" minlength="4" maxlength="4">
                        </div>
                        <span id="message_year" class="field-validation-error" style="display:none; width: 50% !important;"><?=lang('idioma.ano_valido');?></span> 
                    </div>
                    </div>
                    </div>
                    <div class="col-sm-4 panel-tarjeta-col">
                    <p>
                        <span class="textogris">
                            <?=lang('idioma.buy_datos_clientes');?>
                        </span>
                    </p>
                    <div class="form-group has-feedback">
                        <div class="input-group tarjetaDineroDatos width-total">
                            <div class="input-group tarjetaDineroDatos width-total">
                                <input type="text" class="form-control border-radius-4" onkeyup="fade_address(this.value);" id="address" name="address" placeholder="<?=lang('idioma.indicar_domicilio');?>">
                            </div>
                        </div>
                        <span id="message_address" class="field-validation-error" style="display:none;"><?=lang('idioma.domicilio_requerido');?></span> 
                    </div>
                    <div class="form-group has-feedback">
                        <div class="input-group tarjetaDineroDatos width-total">
                            <input type="text" class="form-control border-radius-4" onkeyup="fade_postal(this.value);" id="postal" name="postal" placeholder="<?=lang('idioma.indicar_codigo_postal');?>" >
                        </div>
                        <span id="message_postal" class="field-validation-error" style="display:none;"><?=lang('idioma.codigo_postal_requerido');?></span> 
                    </div>
                    <div class="form-group has-feedback">
                        <div class="input-group tarjetaDineroDatos width-total">
                            <input type="text" class="form-control border-radius-4" onkeyup="fade_poblacion(this.value);" id="poblacion" name="poblacion" placeholder="<?=lang('idioma.indicar_poblacion');?>">
                        </div>
                        <span id="message_poblacion" class="field-validation-error" style="display:none;"><?=lang('idioma.poblacion_requerido');?></span> 
                    </div>
                    <div class="form-group has-feedback">
                        <div class="input-group tarjetaDineroDatos width-total">
                            <input type="text" class="form-control border-radius-4" id="provincia" name="provincia" placeholder="<?=lang('idioma.indicar_provincia');?>">
                        </div>
                        <span id="message_provincia" class="field-validation-error" style="display:none;"><?=lang('idioma.provincia_requerido');?></span> 
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
                            <div class="container" style="padding-top: 0px">
                            <div class="row row-centered">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <div class="margin-top-50">
                                        <div class="checkbox display-inline-block">
                                            <div class="floatleft leter_size margin-top-5">
                                                <label>
                                                    <input name="privacity" id="privacity" type="checkbox" value="1" >
                                                    <?=lang('idioma.buy_acepto_condiciones');?>&nbsp;<a class="blue-color-link" href="<?php echo site_url().'notice/privacy';?>" target="_blank"><?=lang('idioma.buy_ver');?></a>
                                                </label>
                                            </div>
                                            <div class="floatleft leter_size margin-top-5">
                                                <label>
                                                    <input id="property" name="property" type="checkbox" value="2">
                                                    <?=lang('idioma.buy_afirmo');?>
                                                </label>
                                            </div>
                                            <div class="floatleft leter_size margin-top-5">
                                                <label>
                                                    <input id="cost" name="cost" type="checkbox" value="3">
                                                    <?=lang('idioma.buy_acepto_verificacion');?>&nbsp;<a href="<?php echo site_url().'notice/general';?>" target="_blank" class="blue-color-link"><?=lang('idioma.buy_ver');?></a>
                                                </label>
                                                <span id="message_check" class="field-validation-error" style="display:none;"><?=lang('idioma.buy_debe_seleccionar');?></span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-sm-2"></div>
                            </div>
                                </div>
                     
                        <div class="col-sm-2"></div>
                        <div class="col-sm-4 panel-bitcoinDinero-col margin-top-50">
                            <a href="<?php echo site_url().'buy/bank';?>"><button class="submit_btn_comprar_back trans_300"><?=lang('idioma.boton_retroceder');?></button></a>
                        </div>
                        <div class="col-sm-4 panel-bitcoinDinero-col margin-top-50">
                            <button onclick="validate_credit_card();" class="submit_btn_comprar_2"><?=lang('idioma.boton_comprar');?></button>
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