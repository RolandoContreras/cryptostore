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
                                case 'forgot':
                                    $active_login = "active";
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
                                <li><a href="<?php echo site_url().'home/#contact';?>"><?=lang('idioma.nav_contacto');?></a></li>
                                <li class="<?php echo $active_login;?>"><a href="<?php echo site_url().'login';?>"><?=lang('idioma.nav_login');?></a></li>
                                <li class="<?php echo $active_faq;?>"><a href="<?php echo site_url().'faq';?>"><?=lang('idioma.nav_faq');?></a></li>
                                <li>
                                    <a href="<?php echo site_url().'home/#features'?>" style="display: inline-block"><img src="<?php echo site_url().'static/page_front/images/language/es.png';?>" alt="es" width="40"/></a>
                                    <a href="<?php echo site_url().'home/#features'?>" style="display: inline-block"><img src="<?php echo site_url().'static/page_front/images/language/en.png';?>" alt="en" width="40"/></a>
                                </li>
                            </ul>
		</div>
	</div>
	<!-- Home -->
	<div class="home">
		<div class="hero_slider_container">
			<div class="owl-carousel owl-theme hero_slider">
				<div class="hero_slider_item item_1 d-flex flex-column align-items-center justify-content-center">
					<div class="container" >
                                            <div class="row contact_row">
                                                <div class="col text-center">
                                                    <div class="section_title">
                                                        <h1><?=lang('idioma.forgot');?></h1>
                                                        <p><?=lang('idioma.introduzca_email');?></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <!-- Reply -->
                                                    <div class="reply">
                                                        <div class="reply_form_container">
                                                            <!-- Reply Form -->
                                                            <form method="post" id="form-login">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-md-12">
                                                                            <div class="wow bounceInLeft animated animated">
                                                                                <input class="form-control form-control-2" id="reply_form_email" placeholder="<?=lang('idioma.login_indicar_email');?>" type="text">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <div class="row margintop20">
                                                                    <div class="col-xs-6 col-md-6">
                                                                            <div class="wow bounceInLeft animated animated">
                                                                                  <button id="reply_form_submit" type="submit" class="submit_btn_comprar trans_300" value="Submit"><?=lang('idioma.recuperar_contrasena');?></button>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                                <div id="alert_message"></div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
<script src="<?php echo site_url().'static/page_front/js/login.js';?>"></script>
</body>
</html>