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
                <nav class="main_nav justify-self-end text-left">
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
                        <li class="<?php echo $active_home;?>"><a href="<?php echo site_url().'home';?>#features"><?=lang('idioma.nav_caracteristicas');?></a></li>
                        <li class="<?php echo $active_buy;?>"><a href="<?php echo site_url().'buy';?>"><?=lang('idioma.nav_comprar');?></a></li>
                        <li class="<?php echo $active_contact;?>"><a href="<?php echo site_url().'home';?>#contact"><?=lang('idioma.nav_contacto');?></a></li>
                        <li class="<?php echo $active_login;?>"><a href="<?php echo site_url().'login';?>"><?=lang('idioma.nav_login');?></a></li>
                        <li class="<?php echo $active_faq;?>"><a href="<?php echo site_url().'faq';?>"><?=lang('idioma.nav_faq');?></a></li>
                        <li>
                            <a href='<?php echo site_url()."es/contact/invest";?>' style="display: inline-block"><img src="<?php echo site_url().'static/page_front/images/language/es.png';?>" alt="espanol" width="40"/></a>
                            <a href="<?php echo site_url()."en/contact/invest";?>" style="display: inline-block"><img src="<?php echo site_url().'static/page_front/images/language/en.png';?>" alt="espanol" width="40"/></a>
                        </li>
                    </ul>
                </nav>
		<!-- Hamburger -->
		<div class="hamburger_container bez_1">
                    <i class="fa fa-bars trans_200"></i>
		</div>
	</header>
	<!-- Menu -->
	<div class="menu_container">
		<div class="menu menu_mm text-right">
			<div class="menu_close"><i class="fa fa-times-circle trans_200"></i></div>
                        
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
			<div class="row">
                            <div class="col-md-4 hidden-xs panel-bitcoinDinero-col">
                        <div class="panelporqueComprar">
                            <div class="porqueComprar">
                                <span class="icon-PagoSeguro">
                                    <i id="safe" class="fa fa-shield fa-2x"></i>
                                </span>
                                <span class="textoGrisInputs">
                                    <?=lang('idioma.buy_pago_seguro');?>
                                </span>
                            </div>
                        </div>
                        <div class="panelporqueComprar">
                            <div class="porqueComprar">
                                <span class="icon-Soporte">
                                    <i id="support" class="fa fa-ticket fa-2x"></i>
                                </span>
                                <span class="textoGrisInputs">
                                    <?=lang('idioma.buy_soporte_personalizado');?>
                                </span>
                            </div>
                        </div>
                        <div class="panelporqueComprar">
                            <div class="porqueComprar">
                                <span class="icon-Competitivos">
                                    <i id="price" class="fa fa-certificate fa-2x"></i>
                                </span>
                                <span class="textoGrisInputs">
                                    <?=lang('idioma.buy_precios_competitivos');?>
                                </span>
                            </div>
                        </div>

                    </div>
                            <div class="col-md-8 panel-bitcoinDinero-col">
                                <form method="post" action="javascript:void(0);" onsubmit="send_messages();" enctype="multipart/form-data">                        
                                    <div class="form-group">
                                        <label for="exampleInputPassword1" class="active"><?=lang('idioma.contact_nombre');?></label>
                                        <input class="form-control" onkeyup="fade_name(this.value);" id="name" name="name" placeholder="<?=lang('idioma.indicar_nombre');?>" type="text">
                                        <span id="message_name" class="field-validation-error" style="display:none;"><?=lang('idioma.nombre_requerido');?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="active"><?=lang('idioma.contact_email');?></label>
                                        <input autocomplete="off" onkeyup="fade_email(this.value);" class="form-control" id="email" name="email" placeholder="<?=lang('idioma.indicar_email');?>" type="email">
                                        <span id="message_email" class="field-validation-error" style="display:none;"><?=lang('idioma.email_requerido');?></span>
                                    </div>
                                    <div class="form-group">
                                        <label><?=lang('idioma.contact_telefono');?></label>
                                        <input autocomplete="off" onkeyup="fade_phone(this.value);" class="form-control" id="phone" name="phone" placeholder="<?=lang('idioma.indicar_telefono');?>" type="phone">
                                        <span id="message_phone" class="field-validation-error" style="display:none;"><?=lang('idioma.telefono_valido');?></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="active"><?=lang('idioma.contact_empresa');?></label>
                                        <input autocomplete="off" class="form-control" id="company" name="company" placeholder="<?=lang('idioma.indicar_empresa');?>" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1"><?=lang('idioma.contact_comentarios');?></label>
                                        <textarea class="form-control" onkeyup="fade_comments(this.value);" cols="20" data-val="true" id="comments" name="comments" rows="3"></textarea>
                                        <span id="message_comments" class="field-validation-error" style="display:none;"><?=lang('idioma.comentario_requerido');?></span>
                                    </div>
                                    <div class="form-group">
                                        <div class="g-recaptcha" data-sitekey="6LdaVHAUAAAAAMF_YlocobAIEftI1olTSkdxOW3H">
                                        </div>
                                        <span id="message_capcha" class="field-validation-error" style="display:none;">Captcha no verificado</span>
                                        
                                    </div>
                                    <div class="blockacepta">
                                        <div class="checkbox">
                                            <label>
                                                <input data-val="true" id="term" name="term"  onClick="fade_term(this.value);"value="true" type="checkbox"><input name="AceptoTerminos" value="false" type="hidden">
                                               <?=lang('idioma.acepto_privacidad');?>&nbsp;<a class="blue-color-link" href="<?php echo site_url().'notice/privacy'?>" target="_blank"><?=lang('idioma.buy_ver');?></a>.
                                            </label>
                                            <span id="message_term" class="field-validation-error" style="display:none;"><?=lang('idioma.privacidad_requerida');?></span>
                                        </div>
                                    </div>
                                    <button type="submit" class="reply_submit_btn trans_300"><?=lang('idioma.enviar_formulario');?></button>
                                </form>
                                <br/>
                                <div id="messages" class="alert alert-success" style="text-align: center; display: none;"><?=lang('idioma.enviado_correctamente');?></div>
                    </div>
                    </div>
            </div>
        </header>
        <!--END CRYPTOCURRENCY-->
	<!-- Footer -->
	<?php $this->load->view("footer");?>
        <!--END FOOTER-->
    </div>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="<?php echo site_url().'static/page_front/js/contact_invest.js';?>"></script>
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