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
                    <div class="col-lg-12 text-center margin-bottom-30">
                        <div class="icon_box_title">
                            <h1 class="title-currency margin-top100">NUESTRAS CRIPTOMONEDAS</h1>
                        </div>
                    </div>
                </div>
                <div class="row separador-cripto-all-top">
                    <div class="col-lg-12 col-sm-12 height-15"></div>  
                    <div class="col-lg-2 col-sm-3  hidden-xs"></div>  
                    <div class="col-xs-6 col-md-1 wow bounceInLeft animated animated" style="visibility: visible;"><img src="<?php echo site_url().'static/page_front/images/monedas/btc-logo.png';?>" alt="bitcoin" width="40"/></div>
                    <div class="col-xs-6 col-md-2"><span class="currency_text_all">Bitcoin</span></div>
                    <div class="col-xs-6 col-md-2"><span class="prince_all"><?php echo format_number_6decimal($btc_price);?>&nbsp;<i class="fa fa-eur"></i></span></div>
                    <div class="col-xs-6 col-md-1"><?php echo $btc_color;?></div>
                    <div class="col-xs-6 col-md-2">
                        <div class="single-price-plan text-center">
                            <div class="plan-button">
                                <a class="criptomonedas_2" href="<?php echo site_url().'buy/bitcoin';?>">COMPRAR</a>
                            </div>
                        </div>
                    </div>  
                </div>


                <div class="row separador-cripto-all-top">
                    <div class="col-lg-12 col-sm-12 height-15"></div>
                    <div class="col-lg-2 col-sm-3  hidden-xs"></div>  
                    <div class="col-xs-6 col-md-1 wow bounceInLeft animated animated" style="visibility: visible;"><img src="<?php echo site_url().'static/page_front/images/monedas/dash-logo.png';?>" alt="bitcoin" width="40"/></div>
                    <div class="col-xs-6 col-md-2"><span class="currency_text_all">Dash</span></div>
                    <div class="col-xs-6 col-md-2"><span class="prince_all"><?php echo format_number_6decimal($dash_price);?>&nbsp;<i class="fa fa-eur"></i></span></div>
                    <div class="col-xs-6 col-md-1"><?php echo $dash_color;?></div>
                    <div class="col-xs-6 col-md-2">
                        <div class="single-price-plan text-center">
                            <div class="plan-button">
                                <a class="criptomonedas_2" href="<?php echo site_url().'buy/dash';?>">COMPRAR</a>
                            </div>
                        </div>
                    </div>  
                </div>

                <div class="row separador-cripto-all-top">
                    <div class="col-lg-12 col-sm-12 height-15"></div>
                    <div class="col-lg-2 col-sm-3  hidden-xs"></div>  
                    <div class="col-xs-6 col-md-1 wow bounceInLeft animated animated" style="visibility: visible;"><img src="<?php echo site_url().'static/page_front/images/monedas/eth-logo.png';?>" alt="bitcoin" width="40"/></div>
                    <div class="col-xs-6 col-md-2"><span class="currency_text_all">Ethereum</span></div>
                    <div class="col-xs-6 col-md-2"><span class="prince_all"><?php echo format_number_6decimal($eth_price);?>&nbsp;<i class="fa fa-eur"></i></span></div>
                    <div class="col-xs-6 col-md-1"><?php echo $eth_color;?></div>
                    <div class="col-xs-6 col-md-2">
                        <div class="single-price-plan text-center">
                            <div class="plan-button">
                                <a class="criptomonedas_2" href="<?php echo site_url().'buy/ethereum';?>">COMPRAR</a>
                            </div>
                        </div>
                    </div>  
                </div>

                <div class="row separador-cripto-all-top">
                    <div class="col-lg-12 col-sm-12 height-15"></div>
                    <div class="col-lg-2 col-sm-3  hidden-xs"></div>  
                    <div class="col-xs-6 col-md-1 wow bounceInLeft animated animated" style="visibility: visible;"><img src="<?php echo site_url().'static/page_front/images/monedas/lite-logo.png';?>" alt="bitcoin" width="40"/></div>
                    <div class="col-xs-6 col-md-2"><span class="currency_text_all">LiteCoin</span></div>
                    <div class="col-xs-6 col-md-2"><span class="prince_all"><?php echo format_number_6decimal($ltc_price);?>&nbsp;<i class="fa fa-eur"></i></span></div>
                    <div class="col-xs-6 col-md-1"><?php echo $ltc_color;?></div>
                    <div class="col-xs-6 col-md-2">
                        <div class="single-price-plan text-center">
                            <div class="plan-button">
                                <a class="criptomonedas_2" href="<?php echo site_url().'buy/litecoin';?>">COMPRAR</a>
                            </div>
                        </div>
                    </div> 
                </div>

                <div class="row separador-cripto-all-top">
                    <div class="col-lg-12 col-sm-12 height-15"></div>
                    <div class="col-lg-2 col-sm-3  hidden-xs"></div>  
                    <div class="col-xs-6 col-md-1 wow bounceInLeft animated animated" style="visibility: visible;"><img src="<?php echo site_url().'static/page_front/images/monedas/cash-logo.png';?>" alt="Bitcoin Cash" width="40"/></div>
                    <div class="col-xs-6 col-md-2"><span class="currency_text_all">Bitcoin Cash</span></div>
                    <div class="col-xs-6 col-md-2"><span class="prince_all"><?php echo format_number_6decimal($bch_price);?>&nbsp;<i class="fa fa-eur"></i></span></div>
                    <div class="col-xs-6 col-md-1"><?php echo $bch_color;?></div>
                    <div class="col-xs-6 col-md-2">
                        <div class="single-price-plan text-center">
                            <div class="plan-button">
                                <a class="criptomonedas_2" href="<?php echo site_url().'buy/bitcoincash';?>">COMPRAR</a>
                            </div>
                        </div>
                    </div>  
                </div>

                <div class="row separador-cripto-all-top">
                    <div class="col-lg-12 col-sm-12 height-15"></div>
                    <div class="col-lg-2 col-sm-3  hidden-xs"></div>  
                    <div class="col-xs-6 col-md-1 wow bounceInLeft animated animated" style="visibility: visible;"><img src="<?php echo site_url().'static/page_front/images/monedas/cardano-logo.png';?>" alt="CardanoCoin" width="40"/></div>
                    <div class="col-xs-6 col-md-2"><span class="currency_text_all">Cardano</span></div>
                    <div class="col-xs-6 col-md-2"><span class="prince_all"><?php echo format_number_6decimal($car_price);?>&nbsp;<i class="fa fa-eur"></i></span></div>
                    <div class="col-xs-6 col-md-1"><?php echo $car_color;?></div>
                    <div class="col-xs-6 col-md-2">
                        <div class="single-price-plan text-center">
                            <div class="plan-button">
                                <a class="criptomonedas_2" href="<?php echo site_url().'buy/cardano';?>">COMPRAR</a>
                            </div>
                        </div>
                    </div>  
                </div>

                <div class="row separador-cripto-all-top">
                    <div class="col-lg-12 col-sm-12 height-15"></div>
                    <div class="col-lg-2 col-sm-3  hidden-xs"></div>  
                    <div class="col-xs-6 col-md-1 wow bounceInLeft animated animated" style="visibility: visible;"><img src="<?php echo site_url().'static/page_front/images/monedas/monero-logo.png';?>" alt="MoneroCoin" width="40"/></div>
                    <div class="col-xs-6 col-md-2"><span class="currency_text_all">Monero</span></div>
                    <div class="col-xs-6 col-md-2"><span class="prince_all"><?php echo format_number_6decimal($mnr_price);?>&nbsp;<i class="fa fa-eur"></i></span></div>
                    <div class="col-xs-6 col-md-1"><?php echo $mnr_color;?></div>
                    <div class="col-xs-6 col-md-2">
                        <div class="single-price-plan text-center">
                            <div class="plan-button">
                                <a class="criptomonedas_2" href="<?php echo site_url().'buy/monero';?>">COMPRAR</a>
                            </div>
                        </div>
                    </div>  
                </div>

                <div class="row separador-cripto-all-top">
                    <div class="col-lg-12 col-sm-12 height-15"></div>
                    <div class="col-lg-2 col-sm-3  hidden-xs"></div>  
                    <div class="col-xs-6 col-md-1 wow bounceInLeft animated animated" style="visibility: visible;"><img src="<?php echo site_url().'static/page_front/images/monedas/ripple-logo.png';?>" alt="RippleCoin" width="40"/></div>
                    <div class="col-xs-6 col-md-2"><span class="currency_text_all">Ripple</span></div>
                    <div class="col-xs-6 col-md-2"><span class="prince_all"><?php echo format_number_6decimal($rrp_price);?>&nbsp;<i class="fa fa-eur"></i></span></div>
                    <div class="col-xs-6 col-md-1"><?php echo $rrp_color;?></div>
                    <div class="col-xs-6 col-md-2">
                        <div class="single-price-plan text-center">
                            <div class="plan-button">
                                <a class="criptomonedas_2" href="<?php echo site_url().'buy/ripple';?>">COMPRAR</a>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="row separador-cripto-all-top">
                    <div class="col-lg-12 col-sm-12 height-15"></div>
                    <div class="col-lg-2 col-sm-3  hidden-xs"></div>  
                    <div class="col-xs-6 col-md-1 wow bounceInLeft animated animated" style="visibility: visible;"><img src="<?php echo site_url().'static/page_front/images/monedas/verge-logo.png';?>" alt="VergeCoin" width="40"/></div>
                    <div class="col-xs-6 col-md-2"><span class="currency_text_all">Verge</span></div>
                    <div class="col-xs-6 col-md-2"><span class="prince_all"><?php echo format_number_6decimal($verge_price);?>&nbsp;<i class="fa fa-eur"></i></span></div>
                    <div class="col-xs-6 col-md-1"><?php echo $verge_color;?></div>
                    <div class="col-xs-6 col-md-2">
                        <div class="single-price-plan text-center">
                            <div class="plan-button">
                                <a class="criptomonedas_2" href="<?php echo site_url().'buy/verge';?>">COMPRAR</a>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="row separador-cripto-all-top">
                    <div class="col-lg-12 col-sm-12 height-15"></div>
                    <div class="col-lg-2 col-sm-3  hidden-xs"></div>  
                    <div class="col-xs-6 col-md-1 wow bounceInLeft animated animated" style="visibility: visible;"><img src="<?php echo site_url().'static/page_front/images/monedas/zcash-logo.png';?>" alt="ZCash" width="40"/></div>
                    <div class="col-xs-6 col-md-2"><span class="currency_text_all">ZCash</span></div>
                    <div class="col-xs-6 col-md-2"><span class="prince_all"><?php echo format_number_6decimal($zch_price);?>&nbsp;<i class="fa fa-eur"></i></span></div>
                    <div class="col-xs-6 col-md-1"><?php echo $zch_color;?></div>
                    <div class="col-xs-6 col-md-2">
                        <div class="single-price-plan text-center">
                            <div class="plan-button">
                                <a class="criptomonedas_2" href="<?php echo site_url().'buy/zcash';?>">COMPRAR</a>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="row separador-cripto-all-top">
                    <div class="col-lg-12 col-sm-12 height-15"></div>
                    <div class="col-lg-2 col-sm-3  hidden-xs"></div>  
                    <div class="col-xs-6 col-md-1 wow bounceInLeft animated animated" style="visibility: visible;"><img src="<?php echo site_url().'static/page_front/images/monedas/tron-logo.png';?>" alt="Tron" width="40"/></div>
                    <div class="col-xs-6 col-md-2"><span class="currency_text_all">Tron</span></div>
                    <div class="col-xs-6 col-md-2"><span class="prince_all"><?php echo format_number_6decimal($tron_price);?>&nbsp;<i class="fa fa-eur"></i></span></div>
                    <div class="col-xs-6 col-md-1"><?php echo $tron_color;?></div>
                    <div class="col-xs-6 col-md-2">
                        <div class="single-price-plan text-center">
                            <div class="plan-button">
                                <a class="criptomonedas_2" href="<?php echo site_url().'buy/tron';?>">COMPRAR</a>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="row separador-cripto-all-top">
                    <div class="col-lg-12 col-sm-12 height-15"></div>
                    <div class="col-lg-2 col-sm-3  hidden-xs"></div>  
                    <div class="col-xs-6 col-md-1 wow bounceInLeft animated animated" style="visibility: visible;">
                            <img src="<?php echo site_url().'static/page_front/images/monedas/omisego-logo.png';?>" alt="OmiseGo" width="40"/></div>
                    <div class="col-xs-6 col-md-2"><span class="currency_text_all">OmiseGo</span></div>
                    <div class="col-xs-6 col-md-2"><span class="prince_all"><?php echo format_number_6decimal($omg_price);?>&nbsp;<i class="fa fa-eur"></i></span></div>
                    <div class="col-xs-6 col-md-1"><?php echo $omg_color;?></div>
                    <div class="col-xs-6 col-md-2">
                        <div class="single-price-plan text-center">
                            <div class="plan-button">
                                <a class="criptomonedas_2" href="<?php echo site_url().'buy/omisego';?>">COMPRAR</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row separador-cripto-all-top">
                    <div class="col-lg-12 col-sm-12 height-15"></div>
                    <div class="col-lg-2 col-sm-3  hidden-xs"></div>  
                    <div class="col-xs-6 col-md-1 wow bounceInLeft animated animated" style="visibility: visible;"><img src="<?php echo site_url().'static/page_front/images/monedas/sia-logo.png';?>" alt="SiaCoin" width="40"/></div>
                    <div class="col-xs-6 col-md-2"><span class="currency_text_all">Siacoin</span></div>
                    <div class="col-xs-6 col-md-2"><span class="prince_all"><?php echo format_number_6decimal($sia_price);?>&nbsp;<i class="fa fa-eur"></i></span></div>
                    <div class="col-xs-6 col-md-1"><?php echo $sia_color;?></div>
                    <div class="col-xs-6 col-md-2">
                        <div class="single-price-plan text-center">
                            <div class="plan-button">
                                <a class="criptomonedas_2" href="<?php echo site_url().'buy/siacoin';?>">COMPRAR</a>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="row separador-cripto-all-top">
                    <div class="col-lg-12 col-sm-12 height-15"></div>
                    <div class="col-lg-2 col-sm-3  hidden-xs"></div>  
                    <div class="col-xs-6 col-md-1 wow bounceInLeft animated animated" style="visibility: visible;"><img src="<?php echo site_url().'static/page_front/images/monedas/nht-logo.png';?>" alt="NXT" width="40"/></div>
                    <div class="col-xs-6 col-md-2"><span class="currency_text_all">NXT</span></div>
                    <div class="col-xs-6 col-md-2"><span class="prince_all"><?php echo format_number_6decimal($nxt_price);?>&nbsp;<i class="fa fa-eur"></i></span></div>
                    <div class="col-xs-6 col-md-1"><?php echo $nxt_color;?></div>
                    <div class="col-xs-6 col-md-2">
                        <div class="single-price-plan text-center">
                            <div class="plan-button">
                                <a class="criptomonedas_2" href="<?php echo site_url().'buy/nxt';?>">COMPRAR</a>
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