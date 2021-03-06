<!DOCTYPE html>
<html lang="es">
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
                        <li class="active"><a href="<?php echo site_url().'home'?>"><?=lang('idioma.nav_inicio');?></a></li>
                        <li><a href="#features" ><?=lang('idioma.nav_caracteristicas');?></a></li>
                        <li><a href="<?php echo site_url().'buy';?>"><?=lang('idioma.nav_comprar');?></a></li>
                        <li><a href="#contact"><?=lang('idioma.nav_contacto');?></a></li>
                        <li><a href="<?php echo site_url().'login';?>"><?=lang('idioma.nav_login');?></a></li>
                        <li><a href="<?php echo site_url().'faq';?>"><?=lang('idioma.nav_faq');?></a></li>
                        <li>
                            <a href="<?php echo site_url().'es/home';?>" style="display: inline-block"><img src="<?php echo site_url().'static/page_front/images/language/es.png';?>" alt="espanol" width="40"/></a>
                            <a href="<?php echo site_url().'en/home';?>" style="display: inline-block"><img src="<?php echo site_url().'static/page_front/images/language/en.png';?>" alt="espanol" width="40"/></a>
                        </li>
                    </ul>
            </div>
	</div>
	<!-- Home -->
	<div class="home">
		<div class="home_background_container prlx_parent">
                    <div class="home_background prlx" style="background-image:url(<?php echo site_url().'static/page_front/images/bg_header.jpg';?>)"></div>
		</div>
		<!-- Hero Slider -->
		<div class="hero_slider_container margin-top-50">
				<div class="hero_slider_item item_1 d-flex flex-column align-items-center justify-content-center">
					<span></span>
                                        <span></span>
					<span><?=lang('idioma.home_criptmonedas')?></span>
                                        <span><?=lang('idioma.home_seguro_facil')?></span>
                                        <form action="<?php echo site_url().'buy/bank';?>" method="post">
                                        <div class="with500 margin-top-50">
                                            <div class="input-group">
                                                <span class="input-group-addon" style="font-size: 14px !important;color: #F7921A;">
                                                        <i class="fa fa-eur fa-2x"></i>
                                                    </span>
                                                    <input class="form-control erroneous-input" onkeyup="validate_usd(this.value);" style="height: 44px; width: 50%; border-bottom-right-radius: .25rem;border-top-right-radius: .25rem;" data-val="true" id="price_dolar" name="price_dolar" placeholder="100" value="<?php echo $number_price?>" type="text">
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
                                            <span id="message_home" style="font-size:11px; display: none;" class="field-validation-error" data-valmsg-for="Nombre" data-valmsg-replace="true"><?=lang('idioma.buy_el_importe');?></span>
                                            <div class="input-group">
                                                <span class="input-group-addon" id="img_currency" style="font-size: 18px;">
                                                    <?php 
                                                        if(isset($img)){ ?>
                                                            <img src='<?php echo site_url()."static/page_front/images/monedas/$img";?>' alt="criptomoneda" width="30"/>
                                                        <?php  }else{ ?>
                                                            <img src='<?php echo site_url()."static/page_front/images/monedas/btc-logo.png";?>' alt="criptomoneda" width="30"/>
                                                        <?php }  ?>
                                                </span>
                                                <input id="amount_cripto" readonly="readonly" name="amount_cripto" class="form-control erroneous-input" style="height: 44px; width: 50%;" placeholder="0" value="<?php echo $btc_price_10;?>" type="text">
                                            </div>
                                            <span style="cursor:pointer; margin-top: -21px; font-size: 25px; color: #000;" onclick="show_currency();" id="span-dropdown-arrow_up" class="fa fa-2x icono-dropdown-cryptocurrency floatright fa-caret-down cursor_arrow"></span>
                                            <span style="cursor:pointer; margin-top: -27px; color: #000; display:none" onclick="hide_currency();" id="span-dropdown-arrow_down" class="fa fa-2x icono-dropdown-cryptocurrency floatright fa-caret-up cursor_down"></span>
                                            <div id="crypto-container" class="width-crypto box-dropdown-cryptocurrency deplegable-criptomonedas">
                                            <?php foreach ($obj_currency as $value) { ?>
                                            <div class="selecformaspago-desplegable" onclick="change_cripto('<?php echo $value->currency_id;?>','<?php echo $value->img;?>');">
                                                            <span>
                                                                <img class="img_cripto" src='<?php echo site_url()."static/page_front/images/monedas/$value->img";?>' alt="<?php echo $value->name;?>" width="20"/>
                                                            </span>
                                                            <span class="textoGrisInputsDropdown" style="font-size: 14px;color:#000 !important">
                                                                <?php echo $value->name;?>
                                                            </span>
                                                       </div>                      
                                            <?php } ?>
                                        </div>
                                            <div class="text-center">
                                                <input id="submit" type="submit" class="submit_btn_comprar trans_300" value="<?=lang('idioma.boton_comprar');?>">
                                            </div>
                                        </div>
                                        </form>
                                        <span id="compra"><?=lang('idioma.home_compra_criptomonedas');?></span>
                                        <div class="align-items-center justify-content-center">
                                            <div class="double_arrow nav_links rotare270" data-scroll-to=".icon_boxes">
                                                <i class="fa fa-chevron-left trans_200"></i>
                                                <i class="fa fa-chevron-left trans_200"></i>
                                            </div>
                                        </div>
				</div>
		</div>
		<div class="hero_side_text_container">
                    <div class="hero_side_text">
                        <div class="col-lg-2">
                            <div class="footer_col rotare90">
                                    <ul>
                                        <li class="padding_top_15"><a class="redes" href="#"><i class="fa fa-facebook-f fa-2x "></i></a></li>
                                        <li class="padding_top_15"><a class="redes" href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                                        <li class="padding_top_15"><a class="redes" href="#"><i class="fa fa-youtube fa-2x"></i></a></li>
                                    </ul>
                            </div>
                        </div>
                    </div>
		</div>
	</div>
        <!--CRIPTOCURRENCY-->
        <div class="icon_boxes">
        <section class="pricing-plane-area section_padding_100_70 clearfix padding_top_50 icon_boxes">    
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Heading Text  -->
                        <div class="section-heading text-center" id="coins">
                            <h1 class="title-currency"><?=lang('idioma.home_comprar_monedas');?></h1>
                            <div class="line-shape"></div>
                        </div>
                    </div>
                </div>
                
                <div class="row no-gutters">
                    <div class="col-12 col-md-6 col-lg-3 wow fadeInUp" style="padding: 10px; visibility: visible; animation-name: fadeInUp;">
                        <!-- Package Price  -->
                        <div class="single-price-plan text-center">
                            <!-- Package Text  -->
                            <div class="package-plan">
                                <img src="<?php echo site_url().'static/page_front/images/monedas/btc-logo.png';?>" alt="bitcoin" width="90">
                                <h5 class="currency_text">BITCOIN</h5>
                                <div class="ca-price d-flex justify-content-center">
                                    <h4><?php echo format_number_6decimal($btc);?>&nbsp;<i class="fa fa-eur"></i></h4>                                   
                                </div>
                                <h6 style="color: #BCC0CA;"><?=lang('idioma.por_moneda');?></h6>
                            </div>
                            <!-- Plan Button  -->
                            <div class="plan-button">
                                <a href="<?php echo site_url().'buy/bitcoin';?>"><?=lang('idioma.boton_comprar');?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 wow fadeInUp" style="padding: 10px; visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;" data-wow-delay="0.3s">
                        <!-- Package Price  -->
                        <div class="single-price-plan text-center">
                            <!-- Package Text  -->
                            <div class="package-plan">
                                <img src="<?php echo site_url().'static/page_front/images/monedas/cash-logo.png';?>" alt="bitcoin" width="90">
                                <h5 class="currency_text">BITCOIN CASH</h5>
                                <div class="ca-price d-flex justify-content-center">
                                    <h4><?php echo format_number_6decimal($bch);?>&nbsp;<i class="fa fa-eur"></i></h4>
                                </div>
                                <h6 style="color: #BCC0CA;"><?=lang('idioma.por_moneda');?></h6>
                            </div>
                            <!-- Plan Button  -->
                            <div class="plan-button">
                                <a href="<?php echo site_url().'buy/bitcoincash';?>"><?=lang('idioma.boton_comprar');?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 wow fadeInUp" style="padding: 10px; visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;" data-wow-delay="0.6s">
                        <!-- Package Price  -->
                        <div class="single-price-plan text-center">
                            <!-- Package Text  -->
                            <div class="package-plan">
                                <img src="<?php echo site_url().'static/page_front/images/monedas/eth-logo.png';?>" alt="bitcoin" width="90">
                                <h5 class="currency_text">ETHEREUM</h5>
                                <div class="ca-price d-flex justify-content-center">
                                    <h4><?php echo format_number_6decimal($eth);?>&nbsp;<i class="fa fa-eur"></i></h4>
                                </div>
                                <h6 style="color: #BCC0CA;"><?=lang('idioma.por_moneda');?></h6>
                            </div>
                            <!-- Plan Button  -->
                            <div class="plan-button">
                                <a href="<?php echo site_url().'buy/ethereum';?>"><?=lang('idioma.boton_comprar');?></a>
                            </div>
                        </div>
                    </div> 
                    <div class="col-12 col-md-6 col-lg-3 wow fadeInUp" style="padding: 10px; visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;" data-wow-delay="0.9s">
                        <!-- Package Price  -->
                        <div class="single-price-plan text-center">
                            <!-- Package Text  -->
                            <div class="package-plan">
                                <img src="<?php echo site_url().'static/page_front/images/monedas/dash-logo.png';?>" alt="bitcoin" width="90">
                                <h5 class="currency_text">DASH</h5>
                                <div class="ca-price d-flex justify-content-center">
                                    <h4><?php echo format_number_6decimal($dash);?>&nbsp;<i class="fa fa-eur"></i></h4>
                                </div>
                                <h6 style="color: #BCC0CA;"><?=lang('idioma.por_moneda');?></h6>
                            </div>
                            <!-- Plan Button  -->
                            <div class="plan-button">
                                <a href="<?php echo site_url().'buy/dash';?>"><?=lang('idioma.boton_comprar');?></a>
                            </div>
                        </div>
                    </div>
                   <div class="col-12  col-md-3 col-lg-3 ">
                        <!-- Package Price  -->
                        <div class="single-price-plan text-center">
                            <div class="plan-button">
                            </div>
                        </div>
                    </div>
                   <div class="col-12  col-md-6 col-lg-6 wow fadeInUp" style="padding: 10px; visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;" data-wow-delay="0.9s">
                        <!-- Package Price  -->
                        <div class="single-price-plan text-center">
                            <div class="plan-button">
                                <a class="criptomonedas" href="<?php echo site_url().'allcurrency';?>"><?=lang('idioma.home_ver_todas_monedas');?></a>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </section>
            </div>
        <!--END CRYPTOCURRENCY-->
	<!-- Icon Boxes -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                            <div class="icon_box_title">
                                <h2 class="future-adversing"><?=lang('idioma.home_forma_parte');?></h2>
                            </div>
                    </div>
                    <div class="col-lg-6 icon_box_col">
                            <!-- Icon Box Item -->
                            <div class="icon_box_item" style="text-align:center">
                                    <h2 class="atificial-text"><?=lang('idioma.home_rapido_sencillo');?></h2>
                                    <p><img class="img_home" src="<?php echo site_url().'static/page_front/images/rapido.png';?>" alt="rápido" width="400"/> </p>
                            </div>
                            <!-- Icon Box Item -->
                            <div class="icon_box_item" style="text-align:center">
                                    <h2 class="atificial-text"><?=lang('idioma.home_cobertura_servicio');?></h2>
                                    <p><img class="img_home" src="<?php echo site_url().'static/page_front/images/cobertura.png';?>" alt="cobertura" width="400"/> </p>
                            </div>
                    </div>
                    <div class="col-lg-6 icon_box_col">
                            <!-- Icon Box Item -->
                            <div class="icon_box_item" style="text-align:center">
                                    <h2 class="atificial-text"><?=lang('idioma.home_seguridad_confianza');?></h2>
                                    <p><img class="img_home" src="<?php echo site_url().'static/page_front/images/seguridad_btc.png';?>" alt="seguridad" width="400"/> </p>
                            </div>
                            
                            <!-- Icon Box Item -->
                            <div class="icon_box_item" style="text-align:center">
                                    <h2 class="atificial-text"><?=lang('idioma.home_intermediario');?></h2>
                                    <p><img class="img_home" src="<?php echo site_url().'static/page_front/images/intermediarios.png';?>" alt="intermediarios" width="400"/> </p>
                            </div>
                    </div>
                </div>
            </div>
	<div class="services" id="features">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h1><?=lang('idioma.home_porque_easycripto');?></h1>
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
									<h2><?=lang('idioma.home_soporte_personalizado');?></h2>
								</div>
								<p><?=lang('idioma.home_atencion_personalizada');?></p>
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
									<h2><?=lang('idioma.home_servicios_exclusivos');?></h2>
								</div>
								<p><?=lang('idioma.home_destinado_inversionistas');?></p>
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
									<h2><?=lang('idioma.home_plataforma_segura');?></h2>
								</div>
								<p><?=lang('idioma.home_plataforma_100');?></p>
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
									<h2><?=lang('idioma.home_innovaciones');?></h2>
								</div>
								<p><?=lang('idioma.home_conectado_adaptado');?></p>
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
									<h2><?=lang('idioma.home_rapidez');?></h2>
								</div>
								<p><?=lang('idioma.home_obtenga_monedas');?></p>
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
									<h2><?=lang('idioma.home_equipo');?></h2>
								</div>
								<p><?=lang('idioma.home_profesionales_mundo');?></p>
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
		<div class="cta_background"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-5 order-lg-1 order-2">
					<div class="cta_content">
						<h1><?=lang('idioma.home_servicio_exclusivo');?></h1>
						<p><?=lang('idioma.home_exclusivo_clientes');?></p>
                                                 <div class="button icon_box_button trans_200 with250" style="border: solid 2px #FFF !important;">
                                                     <a href="<?php echo site_url().'contact/invest';?>" style="color:#FFF !important;" class="trans_200 "><?=lang('idioma.contacte_nosotros');?></a>
                                                </div>
					</div>
				</div>
				<div class="col-lg-6 offset-lg-1 order-lg-2 order-1">
					<div class="cta_image d-flex flex-column justify-content-end">
                                            <img src="<?php echo site_url().'static/page_front/images/vip.png';?>" alt="clientes exclusivos">
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
                        <h1><?=lang('idioma.contacto');?></h1>
                        <p class="under_header_p"><?=lang('idioma.home_mantener_contacto');?></p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- Reply -->
                    <div class="reply">
                        <div class="reply_form_container">
                            <!-- Reply Form -->
                            <form id="reply_form">
                                <div class="row">
                                    <div class="col-xs-6 col-md-6">
                                        <div class="wow bounceInLeft animated animated padding-responsive" style="visibility: visible;">
                                            <input class="form-control form-control-2" onkeyup="fade_name(this.value);" id="name" name="name" placeholder="<?=lang('idioma.indicar_nombre');?>" type="text">
                                            <span id="message_name" class="field-validation-error" style="display:none;"><?=lang('idioma.nombre_requerido');?></span>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-6">
                                        <div class="wow bounceInLeft animated animated" style="visibility: visible;">
                                            <input class="form-control form-control-2" onkeyup="fade_email(this.value);" id="email" name="email" placeholder="<?=lang('idioma.indicar_email');?>" type="email">
                                        <span id="message_email" class="field-validation-error" style="display:none;"><?=lang('idioma.email_requerido');?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 margin-top-20"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-12">
                                        <div class="wow bounceInLeft animated animated" style="visibility: visible;">
                                            <input class="form-control form-control-2" onkeyup="fade_subject(this.value);" id="subject" name="subject" placeholder="<?=lang('idioma.indicar_asunto');?>" type="text">
                                            <span id="message_subject" class="field-validation-error" style="display:none;"><?=lang('idioma.asunto_requerido');?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 margin-top-20"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-12">
                                        <div class="wow bounceInLeft animated animated" style="visibility: visible;">
                                            <textarea class="form-control form-control-2" onkeyup="fade_comments(this.value);" cols="20" data-val="true" id="comments" name="comments" rows="3" placeholder="<?=lang('idioma.indicar_comentario');?>"></textarea>
                                            <span id="message_comments" class="field-validation-error" style="display:none;"><?=lang('idioma.comentario_requerido');?></span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <input onclick="send_messages_home();"  style="cursor: pointer" class="reply_submit_btn trans_300" value="<?=lang('idioma.enviar_formulario');?>"/>
                                </div>
                            </form>
                            <br/>
                            <div id="messages" class="alert alert-success" style="text-align: center; display: none;"><?=lang('idioma.enviado_correctamente');?></div>
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
<script src="<?php echo site_url().'static/page_front/js/home.js';?>"></script>
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