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
                                <li><a href="<?php echo site_url().'home'?>">Inicio</a></li>
                                <li><a href="#features" >Características</a></li>
                                <li class="active"><a href="<?php echo site_url().'buy';?>">¡Comprar!</a></li>
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
        <!--CRIPTOCURRENCY-->
        <header id="comprarBitcoin">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center margin-bottom-30">
                        <div class="icon_box_title">
                            <h1 class="title-currency margin-top100">Comprar criptomonedas nunca fue tan fácil! </h1>
                        </div>
                    </div>
                </div>
			<div class="row">
                            <div class="col-xs-6 col-md-6">
                                <div class="col-md-6 hidden-sm  hidden-xs  margin-top-30 wow bounceInLeft animated animated" style="visibility: visible;">
                                    <img src="<?php echo site_url().'static/page_front/images/compra_btc.png';?>" alt="Comprar criptomoneda" title="Comprar criptomoneda" width="600">
                                </div>
                            </div>
                            <div class="col-md-1"> </div>
                            <div class="col-xs-5 col-md-5">
                                <div class="col-md-12 marginbottom15">
                                    <div id="bloqueGris-original" class="col-lg-12 bloqueGris">
                                        <div class="col-lg-12">
                                            <h4 class="question_currency">
                                                ¿Cuánto quieres comprar?
                                            </h4>
                                            <p class="p_currency">
                                                Introduce la cantidad en dólares que deseas comprar en criptomonedas.
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="calculador">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-usd fa-2x"></i>
                                                    </span>
                                                    <input class="form-control erroneous-input" style="height: 44px; width: 50%;" data-val="true" data-val-number="El campo ImporteSolicitadoEur debe ser un número." data-val-required="El importe no puede estar vacío." id="ImporteSolicitadoEur" name="ImporteSolicitadoEur" placeholder="100" value="100.00" type="text">                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 height-15"></div>    
                                    <div id="bloqueGris-original" class="col-lg-12 bloqueGris">
                                        <div class="col-lg-12">
                                            <h4 class="question_currency">¿Qué criptomoneda quieres?</h4>
                                            <p class="p_currency">Por el momento estamos trabajando con bitocon.</p>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="calculador">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-btc fa-2x"></i>
                                                    </span>
                                                    <input class="form-control erroneous-input" style="height: 44px; width: 50%;" data-val="true" data-val-number="El campo ImporteSolicitadoEur debe ser un número." data-val-required="El importe no puede estar vacío." id="ImporteSolicitadoEur" name="ImporteSolicitadoEur" placeholder="100" value="100.00" type="text">
                                                </div>
                                            </div>
                                            <span class="field-validation-valid error-message" data-valmsg-for="ImporteSolicitadoEur" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 height-15"></div>    
                                        <div class="single-price-plan text-center">
                                            <div class="plan-button">
                                                <a class="criptomonedas" href="">COMPRAR <i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="margin-top-15">
                                                <a class="texto-enlace" href="#" target="_blank">
                                                    ¿Todavía sin monedero?
                                                </a>
                                        </div>
                                </div>
                            </div>
                    </div>
            </div>
        </header>
        <!--END CRYPTOCURRENCY-->
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