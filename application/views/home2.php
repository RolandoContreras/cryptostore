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
                                <li><a href="<?php echo site_url().'buy';?>">¡Comprar!</a></li>
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
                    <div class="home_background prlx" style="background-image:url(<?php echo site_url().'static/page_front/images/slider_background.jpg';?>)"></div>
		</div>
		<!-- Hero Slider -->
		<div class="hero_slider_container">
			<!-- Slider -->
			<div class="owl-carousel owl-theme hero_slider">
				<!-- Slider Item -->
				<div class="owl-item hero_slider_item item_1 d-flex flex-column align-items-center justify-content-center">
					<span></span>
                                        <span></span>
					<span>CRIPTOMONEDAS</span>
					<span>seguro, facil y rápido</span>
                                        <div class="button with250 icon_box_button trans_200" style="border: solid 2px #FFF !important;">
                                            <a href="#" style="color:#FFF !important;"class="trans_200 font-size">COMPRAR</a>
					</div>
                                        <span id="compra">COMPRA CRIPTOMONEDAS DE MANERA SEGURA</span>
                                        <div class="align-items-center justify-content-center">
                                            <div class="double_arrow nav_links rotare270" data-scroll-to=".icon_boxes">
                                                <i class="fa fa-chevron-left trans_200"></i>
                                                <i class="fa fa-chevron-left trans_200"></i>
                                            </div>
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
<!--                    <div class="double_arrow_container d-flex flex-column align-items-center justify-content-center">
                        <div class="double_arrow nav_links padding_left_15" data-scroll-to=".icon_boxes">
                            <i class="fa fa-chevron-left trans_200"></i>
                            <i class="fa fa-chevron-left trans_200"></i>
                        </div>
                    </div>-->
                    <div class="hero_side_text">
                        <div class="col-lg-2">
                            <div class="footer_col rotare90">
                                    <ul>
                                        <li class="padding_top_15"><a href="#"><i class="fa fa-facebook-f fa-2x"></i></a></li>
                                        <li class="padding_top_15"><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                                        <li class="padding_top_15"><a href="#"><i class="fa fa-youtube fa-2x"></i></a></li>
                                    </ul>
                            </div>
                        </div>
                    </div>
		</div>
            <div class="next_section_scroll">
                <div class="next_section nav_links" data-scroll-to=".icon_boxes">
                        <i class="fas fa-chevron-down trans_200"></i>
                        <i class="fas fa-chevron-down trans_200"></i>
                </div>
            </div>
	</div>
	<!-- Icon Boxes -->
	<div class="icon_boxes">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                            <div class="icon_box_title">
                                <h1 class="future-adversing">SÉ PARTE DEL MUNDO DEL BITCOIN</h1>
                            </div>
                    </div>

                    <div class="col-lg-4 icon_box_col">
                            <!-- Icon Box Item -->
                            <div class="icon_box_item">
                                    <h2 class="atificial-text">DESCENTRALIZADO</h2>
                                    <p>no es controlada por ningún Estado, banco, institución financiera o empresa. Esto no quiere decir que los gobiernos sean eliminados (de hecho algunos han tratado de regular su uso), pero no son capaces de imponerse.</p>
                            </div>
                            <!-- Icon Box Item -->
                            <div class="icon_box_item">
                                    <h2 class="atificial-text">IMPOSIBLE SU FALSIFICACIÓN</h2>
                                    <p>gracias a un sofisticado sistema criptográfico que protege a los usuarios, al tiempo que simplifica las transacciones. Además de la propia red -ya segura de por sí- los usuarios cuentan con sus propios monederos, protegidos por ellos mismos.</p>
                            </div>
                    </div>
                    <div class="col-lg-4 icon_box_col">
                            <!-- Icon Box Item -->
                            <div class="icon_box_item">
                                    <h2 class="atificial-text">TRANSACCIONES IRREVERSIBLES</h2>
                                    <p> Una vez realizado un pago, no se puede anular. En todo caso, el receptor de la moneda podría realizar una transacción de vuelta al emisor. Al no existir un intermediario, la devolución depende del acuerdo alcanzado entre las dos partes de forma directa.</p>
                            </div>
                            <!-- Icon Box Item -->
                            <div class="icon_box_item">
                                    <h2 class="atificial-text">NO HAY INTERMEDIARIOS</h2>
                                    <p> Las transacciones se hacen directamente de persona a persona. Su funcionamiento peer-to-peer permite transacciones casi instantáneas, con unos costes muy bajos de procesamient</p>
                            </div>
                    </div>
                </div>
            </div>
	</div>
	<div class="services" id="features">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h1>¿POR QUÉ ELEGIR EASYCRIPTO?</h1>
					</div>
				</div>
			</div>
		</div>

		<div class="h_slider_container services_slider_container">
			<div class="service_slider_outer">
				<!-- Services Slider -->
				<div class="owl-carousel owl-theme services_slider">
					<!-- Services Slider Item-->
					<div class="owl-item services_item">
						<div class="services_item_inner">
							<div class="service_item_content">
								<div class="service_item_title">
									<div class="service_item_icon">
                                                                            <i class="fa fa-ticket icon" aria-hidden="true"></i>
									</div>
									<h2>Soporte Personalizado</h2>
								</div>
								<p>Atención personalizada para la compra de criptomonedas.</p>
							</div>
						</div>
					</div>
					<!-- Services Slider Item-->
					<div class="owl-item services_item">
						<div class="services_item_inner">
							<div class="service_item_content">
								<div class="service_item_title">
									<div class="service_item_icon">
                                                                                <i class="fa fa-certificate icon"></i>
									</div>
									<h2>Servicios Exclusivos</h2>
								</div>
								<p>Destinado a grandes inversionistas con una atención preferente.</p>
							</div>
						</div>
					</div>
					<!-- Services Slider Item-->
					<div class="owl-item services_item">
						<div class="services_item_inner">
							<div class="service_item_content">
								<div class="service_item_title">
									<div class="service_item_icon">
                                                                                <i class="fa fa-shield icon"></i> 
									</div>
									<h2>Plataforma Segura</h2>
								</div>
								<p>Plataforma 100% segura durante todo el proceso de compras de criptomonedas.</p>
							</div>
						</div>
					</div>
					<!-- Services Slider Item-->
					<div class="owl-item services_item">
						<div class="services_item_inner">
							<div class="service_item_content">
								<div class="service_item_title">
									<div class="service_item_icon">
                                                                                <i class="fa fa-area-chart icon"></i>
									</div>
									<h2>Innovaciones</h2>
								</div>
								<p>Conectado y adaptado a cualquier dispositivo para simplificar y agilizar los procesos de pago y gestión de la información.</p>
							</div>
						</div>
					</div>
					<!-- Services Slider Item-->
					<div class="owl-item services_item">
						<div class="services_item_inner">
							<div class="service_item_content">
								<div class="service_item_title">
									<div class="service_item_icon">
                                                                                <i class="fa fa-fighter-jet icon" aria-hidden="true"></i>
									</div>
									<h2>Rapidez</h2>
								</div>
								<p>Obtenga sus criptomonedas de la forma más rápida y eficiente.</p>
							</div>
						</div>
					</div>
					<!-- Services Slider Item-->
					<div class="owl-item services_item">
						<div class="services_item_inner">
							<div class="service_item_content">
								<div class="service_item_title">
									<div class="service_item_icon">
                                                                                <i class="fa fa-users icon"></i>
									</div>
									<h2>Equipo</h2>
								</div>
								<p>Profesionales del mundo de las criptomonedas y las finanzas analizan en todo momento el mercado para ofrecer la mejor atención al cliente.</p>
								<div class="button service_item_button trans_200">
									<a href="#" class="trans_200">discover more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="services_slider_nav services_slider_nav_left"><i class="fas fa-chevron-left trans_200"></i></div>
				<div class="services_slider_nav services_slider_nav_right"><i class="fas fa-chevron-right trans_200"></i></div>

			</div>
		</div>
	</div>
        
        
	<div class="cta">
		<div class="cta_background" style="background-color:#452b78"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-5 order-lg-1 order-2">
					<div class="cta_content">
						<h1>Servicio exclusivo para grandes inversores</h1>
						<p>Servicio exclusivo enfocado a clientes que quieran adquirir Criptomonedas por un valor igual o superior a 50.000€. Easycripto te brindará una atención preferente y personalizada para la gestión de sus activos.</p>
                                                 <div class="button icon_box_button trans_200" style="border: solid 2px #FFF !important;">
                                                    <a href="#" style="color:#FFF !important;"class="trans_200">CONTACTE CON NOSOTROS</a>
                                                </div>
					</div>
				</div>

				<div class="col-lg-6 offset-lg-1 order-lg-2 order-1">
					<div class="cta_image d-flex flex-column justify-content-end">
                                            <img src="<?php echo site_url().'static/page_front/images/tablet.png';?>" alt="clientes exclusivos">
					</div>
				</div>
			</div>
		</div>
	</div>
        
        <div class="services" id="contact">
        <div class="container" >
            <div class="row contact_row">
                <div class="col text-center">
                    <div class="section_title">
                        <h1>CONTACTO</h1>
                        <p class="under_header_p">Mantente en contacto con nosotros llenando el formulario de contacto <br>Realiza todas las preguntas que tengas y responderemos a la brevedad.</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- Reply -->
                    <div class="reply">
                        <div class="reply_form_container">
                            <!-- Reply Form -->
                            <form id="reply_form" action="post">
                                <div>
                                    <input id="reply_form_name" class="input_field reply_form_name" placeholder="Nombre" required="required" data-error="Name is required." type="text">
                                    <input id="reply_form_email" class="input_field reply_form_email" placeholder="E-mail" required="required" data-error="Valid email is required." type="email">
                                    <input id="reply_form_subject" class="input_field reply_form_subject" placeholder="Asunto" required="required" data-error="Subject is required." type="text">
                                    <textarea id="reply_form_message" class="text_field reply_form_message" name="Mensaje" placeholder="Message" rows="4" required="" data-error="Please, write us a message."></textarea>
                                </div>
                                <div>
                                    <button id="reply_form_submit" type="submit" class="reply_submit_btn trans_300" value="Submit">ENVIAR</button>
                                </div>
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
</body>
</html>