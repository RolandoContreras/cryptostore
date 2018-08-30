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
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="icon_box_title">
                            <h1 class="notice_title margin-top100"><?php echo $obj_dinamic->title;?></h1>
                        </div>
                    </div>
                </div>
                <section class="notice">
                    <div class="col-md-12">
                        <?php echo $obj_dinamic->content;?>
                    </div>
                </section>
            </div>
        </header>
	<!-- Footer -->
	<?php $this->load->view("footer");?>
        <!--END FOOTER-->
    </div>
<script src="<?php echo site_url().'static/page_front/js/buy.js';?>"></script>
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


<script src="https://www.ubex.com/js/script.js?8213" type="text/javascript"></script>

</body>
</html>