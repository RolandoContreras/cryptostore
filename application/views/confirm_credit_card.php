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
                        case 'charge_payment':
                            $active_buy = "active";
                            break;
                        case 'allcurrency':
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
                        case 'forgot':
                            $active_login = "active";
                            break;
                        default:
                            $active_home = "active";
                            break;
                    }        
                ?>
                <nav class="main_nav justify-self-end text-left">
                    <ul>
                        <li class="<?php echo $active_home;?>"><a href="<?php echo site_url().'home'?>"><?=lang('idioma.nav_inicio');?></a></li>
                        <li class="<?php echo $active_home;?>"><a href="<?php echo site_url().'home';?>#features"><?=lang('idioma.nav_caracteristicas');?></a></li>
                        <li class="<?php echo $active_buy;?>"><a href="<?php echo site_url().'buy';?>"><?=lang('idioma.nav_comprar');?></a></li>
                        <li class="<?php echo $active_contact;?>"><a href="<?php echo site_url().'home';?>#contact"><?=lang('idioma.nav_contacto');?></a></li>
                        <li class="<?php echo $active_login;?>"><a href="<?php echo site_url().'login';?>"><?=lang('idioma.nav_login');?></a></li>
                        <li class="<?php echo $active_faq;?>"><a href="<?php echo site_url().'faq';?>"><?=lang('idioma.nav_faq');?></a></li>
                        <li>
                            <a href='<?php echo site_url()."es/$nav$nav_2";?>' style="display: inline-block"><img src="<?php echo site_url().'static/page_front/images/language/es.png';?>" alt="espanol" width="40"/></a>
                            <a href="<?php echo site_url()."en/$nav$nav_2";?>" style="display: inline-block"><img src="<?php echo site_url().'static/page_front/images/language/en.png';?>" alt="espanol" width="40"/></a>
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
                <div class="row margin-top-50">
                <div class="col-sm-3 panel-bitcoinDinero-col"></div>
                <div class="col-sm-6 panel-bitcoinDinero-col">
                <div class="enhorabuenaTarjeta">
                        <img src="<?php echo site_url().'static/page_front/images/criptos.png';?>" width="530"/>
                </div>
                <div class="center margin-top-140">
                    <h3 class="textogrisOscuro" id="title">
                        <?=lang('idioma.verificar_datos');?>
                    </h3>
                </div>

                <div class="panel panel-primary invertido2 paddingtopbottom10px margintop20">
                    <div class="panel-heading invertido ">
                        <h3 class="panel-title textogrisOscuro ">
                            <b><span class="textoNaranja"><?=lang('idioma.importante');?></span></b>
                            <b>
                                <?=lang('idioma.confirmacion_pago');?>
                            </b>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="contentTransfer textogrisOscuro">
                            <?=lang('idioma.gracias_confianza');?>
                        </div>
                    </div>
                </div>
                    <a class="margin-top-70" href="<?php echo site_url();?>"><input class="submit_btn_comprar_2 trans_300" value="<?=lang('idioma.finalizar');?>"></a>
                </div>
                <div class="col-sm-3 panel-bitcoinDinero-col"></div>
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