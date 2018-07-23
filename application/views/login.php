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
                <?php $this->load->view("nav");?>
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
                                <li class="active"><a href="<?php echo site_url().'home'?>">Inicio</a></li>
                                <li><a href="#features" >Características</a></li>
                                <li><a href="<?php echo site_url().'buy';?>" data-scroll-to=".icon_boxes">¡Comprar!</a></li>
                                <li><a href="#contact">Contacto</a></li>
                                <li><a href="<?php echo site_url().'login';?>">Login</a></li>
                                <li><a href="<?php echo site_url().'faq';?>">FAQ</a></li>
                                <li>
                                    <a style="display: inline-block"><img src="<?php echo site_url().'static/page_front/images/language/es.png';?>" alt="espanol" width="40"/></a>
                                    <a style="display: inline-block"><img src="<?php echo site_url().'static/page_front/images/language/en.png';?>" alt="espanol" width="40"/></a>
                                </li>
                            </ul>
		</div>
	</div>
	<!-- Home -->
	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(https://technext.github.io/rango/images/slider_background.jpg)"></div>
		</div>
		<!-- Hero Slider -->
		<div class="hero_slider_container">
			<!-- Slider -->
			<div class="owl-carousel owl-theme hero_slider">
				<!-- Slider Item -->
				<div class="owl-item hero_slider_item item_1 d-flex flex-column align-items-center justify-content-center">
					<span>COMPRA </span>
                                        <span></span>
					<span>Bitcoin</span>
					<span>seguro, facil y rápido</span>
                                        <div class="button icon_box_button trans_200" style="border: solid 2px #FFF !important;">
                                            <a href="#" style="color:#FFF !important;"class="trans_200">COMPRAR</a>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item hero_slider_item item_1 d-flex flex-column align-items-center justify-content-center">
					<span>Te acercamos al</span>
					<span></span>
					<span>MUNDO</span>
					<span>De las criptomonedas</span>
                                        <div class="button icon_box_button trans_200" style="border: solid 2px #FFF !important;">
                                            <a href="#" style="color:#FFF !important;"class="trans_200">COMPRAR</a>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item hero_slider_item item_1 d-flex flex-column align-items-center justify-content-center">
					<span>Esto es</span>
					<span></span>
					<span>EASY!</span>
					<span>Te enseñamos como comprar</span>
                                        <div class="button icon_box_button trans_200" style="border: solid 2px #FFF !important;">
                                            <a href="#" style="color:#FFF !important;"class="trans_200">COMPRAR</a>
					</div>
				</div>

			</div>
			
			<!-- Hero Slider Navigation Left -->
			<div class="hero_slider_nav hero_slider_nav_left">
				<div class="hero_slider_prev d-flex flex-column align-items-center justify-content-center trans_200">
					<i class="fa fa-chevron-left trans_200"></i>
				</div>
			</div>

			<!-- Hero Slider Navigation Right -->
			<div class="hero_slider_nav hero_slider_nav_right">
				<div class="hero_slider_next d-flex flex-column align-items-center justify-content-center trans_200">
					<i class="fa fa-chevron-right trans_200"></i>
				</div>
			</div>

		</div>
		<div class="hero_side_text_container">
                    <div class="double_arrow_container d-flex flex-column align-items-center justify-content-center">
                        <div class="double_arrow nav_links" data-scroll-to=".icon_boxes">
                            <i class="fa fa-chevron-left trans_200"></i>
                            <i class="fa fa-chevron-left trans_200"></i>
                        </div>
                    </div>
                    <div class="hero_side_text">
                        <h2>EASYCRIPT te acerca al mundo de las criptomonedas.</h2>
                        <p>¡Compra bitcoins de forma fácil, rápida y segura!. Aquí te mostramos como hacerlo, da click en las feclas de abajo</p>
                    </div>
		</div>
		
            <div class="next_section_scroll">
                <div class="next_section nav_links" data-scroll-to=".icon_boxes">
                        <i class="fas fa-chevron-down trans_200"></i>
                        <i class="fas fa-chevron-down trans_200"></i>
                </div>
            </div>
	</div>
	<div class="services" id="contact">
        <div class="container" >
            <div class="row contact_row">
                <div class="col text-center">
                    <div class="section_title">
                        <h1>LOGIN</h1>
                        <p class="under_header_p">Mantente en contacto con nosotros llenando el formulario de contacto <br>Realiza todas las preguntas que tengas y responderemos a la brevedad.</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- Reply -->
                    <div class="reply">
                        <div class="reply_form_container">
                            <!-- Reply Form -->
                            <form method="post" id="form-login">
                                <div>
                                    <input id="reply_form_name" class="input_field reply_form_name" placeholder="Usuario" required="required" data-error="Username is required." type="text">
                                    <input id="reply_form_email" class="input_field reply_form_name" placeholder="Contraseña" required="required" data-error="Password is required." type="password">
                                </div>
                                <div>
                                    <button id="reply_form_submit" type="submit" class="reply_submit_btn trans_300" value="Submit">INICIAR SESIÓN</button>
                                    <p><a href="<?php echo site_url().'forgot';?>">¿Olvidó su contraseña?</a></p>
                                </div>
                                <div id="alert_message"></div>
                            </form>
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