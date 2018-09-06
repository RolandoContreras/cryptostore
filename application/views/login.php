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
                                case 'contact':
                                    $active_contact = "active";
                                break;
                                case 'login':
                                    $active_login = "active";
                                    break;
                                case 'faq':
                                    $active_faq = "active";
                                    break;
                                default:
                                    $active_home = "active";
                                    break;
                            }         
                            ?>
                           <ul>
                                <li class="<?php echo $active_home;?>"><a href="<?php echo site_url().'home'?>"><?=lang('idioma.nav_inicio');?></a></li>
                                <li class="<?php echo $active_home;?>"><a href="#features"><?=lang('idioma.nav_caracteristicas');?></a></li>
                                <li class="<?php echo $active_buy;?>"><a href="<?php echo site_url().'buy';?>"><?=lang('idioma.nav_comprar');?></a></li>
                                <li class="<?php echo $active_contact;?>"><a href="<?php echo site_url().'home';?>#contact"><?=lang('idioma.nav_contacto');?></a></li>
                                <li class="<?php echo $active_login;?>"><a href="<?php echo site_url().'login';?>"><?=lang('idioma.nav_login');?></a></li>
                                <li class="<?php echo $active_faq;?>"><a href="<?php echo site_url().'faq';?>"><?=lang('idioma.nav_faq');?></a></li>
                                <li>
                                    <a href='<?php echo site_url()."es/$nav";?>' style="display: inline-block"><img src="<?php echo site_url().'static/page_front/images/language/es.png';?>" alt="espanol" width="40"/></a>
                                    <a href="<?php echo site_url()."en/$nav";?>" style="display: inline-block"><img src="<?php echo site_url().'static/page_front/images/language/en.png';?>" alt="espanol" width="40"/></a>
                                </li>  
                            </ul>
		</div>
	</div>
        <div class="services hero_slider_container margin-top-120">
        <div class="container" >
            <div class="row contact_row">
                <div class="col text-center">
                    <div class="section_title">
                        <h1><?=lang('idioma.login');?></h1>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- Reply -->
                    <div class="reply">
                        <div class="reply_form_container">
                            <!-- Reply Form -->
                            <!--<form>-->
                                <div class="row">
                                    <div class="col-xs-6 col-md-6">
                                        <div class="wow bounceInLeft animated animated padding-responsive" style="visibility: visible;">
                                            <input onkeyup="fade_email(this.value);" class="form-control form-control-2" id="email" name="email" placeholder="<?=lang('idioma.login_indicar_email');?>" type="text">
                                            <span id="message_email" class="field-validation-error" style="display:none;"><?=lang('idioma.login_ingrese_email_valido');?></span>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-6">
                                        <div class="wow bounceInLeft animated animated" style="visibility: visible;">
                                            <input onkeyup="fade_password(this.value);"  class="form-control form-control-2" id="password" name="password" placeholder="<?=lang('idioma.login_indicar_contraseña');?>" type="password">
                                        <span id="message_password" class="field-validation-error" style="display:none;"><?=lang('idioma.login_ingrese_contrasena_valida');?></span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row margin-top-20">
                                        <div class="col-xs-6 col-md-6">
                                            <button onclick="login();" class="submit_btn_comprar trans_300" id="submit"><?=lang('idioma.login_iniciar_sesion');?></button>
                                             <p><a href="<?php echo site_url().'forgot';?>"><?=lang('idioma.login_olvido_contrasena');?></a></p>
                                        </div>
                                    </div>
                                </div>
                            <!--</form>-->
                            <br/>
                            <div id="messages" class="alert alert-success" style="text-align: center; display: none;"><?=lang('idioma.login_bienvenido');?></div>
                            <div id="no_messages" class="alert alert-danger" style="text-align: center; display: none;"><?=lang('idioma.login_datos_invalidos');?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
	<!-- Footer -->
	<?php $this->load->view("footer");?>
        <!--END FOOTER-->
    </div>
<script src="<?php echo site_url().'static/page_front/js/login.js';?>"></script>
<script src="<?php echo site_url().'static/page_front/js/contact_home.js';?>"></script>
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