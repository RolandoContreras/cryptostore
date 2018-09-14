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
	<!-- Home -->
        <!--CRIPTOCURRENCY-->
        <header id="comprarBitcoin">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center margin-bottom-30">
                        <div class="icon_box_title">
                            <h1 class="title-currency margin-top100"><?=lang('idioma.buy_comprar_monedas');?></h1>
                        </div>
                    </div>
                </div>
			<div class="row">
                            <div class="col-xs-6 col-md-6">
                                <div class="col-md-6 hidden-sm  hidden-xs  margin-top-30 wow bounceInLeft animated animated" style="visibility: visible;">
                                    <img class="img_buy" src="<?php echo site_url().'static/page_front/images/compra_btc.png';?>" alt="Comprar criptomoneda" title="Comprar criptomoneda" width="600">
                                </div>
                            </div>
                            <div class="col-md-1"> </div>
                            <div class="col-xs-5 col-md-5">
                                <form action="<?php echo site_url().'buy/bank';?>" method="post">
                                <div class="col-md-12 marginbottom15">
                                    <div id="bloqueGris-original" class="col-lg-12 bloqueGris">
                                        <div class="col-lg-12">
                                            <h4 class="question_currency">
                                                <?=lang('idioma.buy_cuanto_comprar');?>
                                            </h4>
                                            <p class="p_currency">
                                                <?=lang('idioma.buy_introduce_cantidad');?>
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="calculador">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-eur fa-2x"></i>
                                                    </span>
                                                    <input class="form-control erroneous-input" onkeyup="validate_usd(this.value);" style="height: 44px; width: 50%;" data-val="true" id="price_dolar" name="price_dolar" placeholder="100" value="<?php echo $number_price?>" type="text">
                                                    <input type="hidden" name="currency" id="currency" value="<?php echo $currency;?>"/> 
                                                    <input type="hidden" name="btc_price" id="btc_price" value="<?php echo $btc_price;?>"/> 
                                                    <input type="hidden" name="dash_price" id="dash_price" value="<?php echo $dash_price;?>"/> 
                                                    <input type="hidden" name="eth_price" id="eth_price" value="<?php echo $eth_price;?>"/> 
                                                    <input type="hidden" name="litecoin_price" id="litecoin_price" value="<?php echo $litecoin_price;?>"/> 
                                                    <input type="hidden" name="bch_price" id="bch_price" value="<?php echo $bch_price;?>"/> 
                                                    <input type="hidden" name="cardano_price" id="cardano_price" value="<?php echo $cardano_price;?>"/> 
                                                    <input type="hidden" name="monero_price" id="monero_price" value="<?php echo $monero_price;?>"/> 
                                                    <input type="hidden" name="ripple_price" id="ripple_price" value="<?php echo $ripple_price;?>"/> 
                                                    <input type="hidden" name="verge_price" id="verge_price" value="<?php echo $verge_price;?>"/> 
                                                    <input type="hidden" name="zcash_price" id="zcash_price" value="<?php echo $zcash_price;?>"/> 
                                                    <input type="hidden" name="tron_price" id="tron_price" value="<?php echo $tron_price;?>"/> 
                                                    <input type="hidden" name="omisego_price" id="omisego_price" value="<?php echo $omisego_price;?>"/> 
                                                    <input type="hidden" name="siacoin_price" id="siacoin_price" value="<?php echo $siacoin_price;?>"/> 
                                                    <input type="hidden" name="nxt_price" id="nxt_price" value="<?php echo $nxt_price;?>"/> 
                                                </div>
                                                <span id="message" style="font-size:11px; display: none;" class="field-validation-error" data-valmsg-for="Nombre" data-valmsg-replace="true"><?=lang('idioma.buy_el_importe');?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 height-15"></div>    
                                    <div id="bloqueGris-original" class="col-lg-12 bloqueGris">
                                        <div class="col-lg-12">
                                            <h4 class="question_currency"><?=lang('idioma.buy_que_moneda_quieres');?></h4>
                                            <p class="p_currency"><?=lang('idioma.buy_selecciona_moneda');?></p>
                                            
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="calculador">
                                                <div class="input-group">
                                                    <span class="input-group-addon" id="img_currency">
                                                        <?php 
                                                        if(isset($img)){ ?>
                                                            <img src='<?php echo site_url()."static/page_front/images/monedas/$img";?>' alt="criptomoneda" width="30"/>
                                                        <?php  }else{ ?>
                                                            <img src='<?php echo site_url()."static/page_front/images/monedas/btc-logo.png";?>' alt="criptomoneda" width="30"/>
                                                        <?php }  ?>
                                                        
                                                    </span>
                                                    <input id="amount_cripto" readonly="readonly" name="amount_cripto" class="form-control erroneous-input" style="height: 44px; width: 50%;"  placeholder="0" value="<?php echo $btc_price_10;?>" type="text">
                                                </div>
                                                
                                                <span style="cursor:pointer" onclick="show_currency();" id="span-dropdown-arrow_up" class="fa fa-2x icono-dropdown-cryptocurrency floatright fa-caret-down"></span>
                                                <span style="cursor:pointer;display:none" onclick="hide_currency();" id="span-dropdown-arrow_down" class="fa fa-2x icono-dropdown-cryptocurrency floatright fa-caret-up"></span>
                                            </div>
                                            
                                        </div>
                                        <div id="crypto-container" class="box-dropdown-cryptocurrency deplegable-criptomonedas" style="width: 381px; display: none;">
                                            <?php foreach ($obj_currency as $value) { ?>
                                            <div class="selecformaspago-desplegable" onclick="change_cripto('<?php echo $value->currency_id;?>','<?php echo $value->img;?>');">
                                                            <span>
                                                                <img class="img_cripto" src='<?php echo site_url()."static/page_front/images/monedas/$value->img";?>' width="20"/>
                                                            </span>
                                                            <span class="textoGrisInputsDropdown">
                                                                <?php echo $value->name;?>
                                                            </span>
                                                       </div>                      
                                            <?php } ?>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 height-15"></div>  
                                    <p>
                                        <span class="textogris small">
                                            <?=lang('idioma.buy_compra_verificada');?>
                                        </span>
                                    </p>
                                        <div class="text-center">
                                            <button class="submit_btn_comprar trans_300" id="submit" type="submit"><?=lang('idioma.boton_comprar');?></button>
                                        </div>
                                        <div class="margin-top-15">
                                            <a class="texto-enlace" href="<?php echo site_url().'faq';?>" target="_blank">
                                                    <?=lang('idioma.buy_sin_monedero');?>
                                                </a>
                                        </div>
                                </div>
                                    </form>
                            </div>
                    </div>
            </div>
        </header>
        <!--END CRYPTOCURRENCY-->
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
</body>
</html>