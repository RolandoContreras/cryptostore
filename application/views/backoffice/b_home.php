<script src="<?php echo site_url().'static/cms/js/core/jquery-1.11.1.min.js';?>"></script>
<section>
    <div class="section-heading row">
        <div class=" col-lg-9 col-md-8 col-sm-7 col-xs-12">
            <h1 class="title text-uppercase">Tablero</h1>
        </div>
    </div> 
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="row fix-box-height package-box-fix mt-30">
            <!--SHOW ALERT MESSAGE INFORMATIVE --> 
            <div class="col-lg-12">
                <div class="panel-group" id="accordion">
                    <?php foreach ($messages_informative as $value) { ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-warning" style="color: #fff !important;background-color: #946c28 !important;">
                                            <header class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#accordion" id="collapseOne" href="#collapse_message"><i class="collapse-caret fa  fa-angle-up"></i> Informativo</a>
                                            </header>
                                            <div id="collapse_message" class="panel-collapse collapse in center">
                                                <div class="panel-heading clearfix"> 
                                                    <div class="panel-title">Mensaje: <b><?php echo $value->title;?></b></div> 
                                                </div> 
                                                <!-- panel body --> 
                                                <div class="panel-body"> 
                                                    <p><?php echo $value->text;?></p> 
                                                </div> 
                                            </div>
                                    </div> 
                                </div>
                            </div>
                    <?php } ?>
                </div>
            </div>
            <!--END SHOW ALERT INFORMATIVE MESSAGE--> 
            <!--START NEWS-->
            <?php if($obj_news){ ?>
                <div class="col-lg-12">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-warning" style="color: #fff !important;background-color: #946c28 !important;">
                                    <header class="panel-heading">
                                        <a data-toggle="collapse" data-parent="#accordion" id="collapseOne" href="#collapse61"><i class="collapse-caret fa  fa-angle-up"></i> Noticias</a>
                                    </header>
                                    <div id="collapse61" class="panel-collapse collapse in center">
                                        <div class="panel-body">
                                            <?php foreach ($obj_news as $value) { ?>
                                            <div>
                                                <img class="text-center img-rounded img-responsive" src="<?php echo site_url()."static/backoffice/images/new/$value->img";?>">
                                            </div>
                                            <hr>
                                        <?php } ?>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                    </div>
            <?php } ?>
            <!--END NEWS-->
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="col-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <!-- Package Price  -->
                            <div class="single-price-plan text-center">
                                <!-- Package Text  -->
                                <div class="package-plan">
                                    <img src="<?php echo site_url().'static/page_front/images/monedas/btc-logo.png';?>" alt="bitcoin" width="100">
                                    <h5 class="currency_text">BITCOIN</h5>
                                    <div class="ca-price d-flex justify-content-center">
                                        <h4><?php echo "$".format_number_6decimal($obj_btc);?></h4>                                   
                                    </div>
                                    <h6 style="color: #BCC0CA;">por moneda</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="col-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <!-- Package Price  -->
                            <div class="single-price-plan text-center">
                                <!-- Package Text  -->
                                <div class="package-plan">
                                    <img src="<?php echo site_url().'static/page_front/images/monedas/cash-logo.png';?>" alt="bitcoin" width="100">
                                    <h5 class="currency_text">BITCOIN CASH</h5>
                                    <div class="ca-price d-flex justify-content-center">
                                        <h4><?php echo "$".format_number_6decimal($obj_bch);?></h4>                                   
                                    </div>
                                    <h6 style="color: #BCC0CA;">por moneda</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="col-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <!-- Package Price  -->
                            <div class="single-price-plan text-center">
                                <!-- Package Text  -->
                                <div class="package-plan">
                                    <img src="<?php echo site_url().'static/page_front/images/monedas/eth-logo.png';?>" alt="bitcoin" width="85">
                                    <h5 class="currency_text">ETHEREUM</h5>
                                    <div class="ca-price d-flex justify-content-center">
                                        <h4><?php echo "$".format_number_6decimal($obj_eth);?></h4>                                   
                                    </div>
                                    <h6 style="color: #BCC0CA;">por moneda</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="col-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <!-- Package Price  -->
                            <div class="single-price-plan text-center">
                                <!-- Package Text  -->
                                <div class="package-plan">
                                    <img src="<?php echo site_url().'static/page_front/images/monedas/dash-logo.png';?>" alt="bitcoin" width="100">
                                    <h5 class="currency_text">DASH</h5>
                                    <div class="ca-price d-flex justify-content-center">
                                        <h4><?php echo "$".format_number_6decimal($obj_dash);?></h4>                                   
                                    </div>
                                    <h6 style="color: #BCC0CA;">por moneda</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="col-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <!-- Package Price  -->
                            <div class="single-price-plan text-center">
                                <!-- Package Text  -->
                                <div class="package-plan">
                                    <img src="<?php echo site_url().'static/page_front/images/monedas/lite-logo.png';?>" alt="bitcoin" width="100">
                                    <h5 class="currency_text">LITECOIN</h5>
                                    <div class="ca-price d-flex justify-content-center">
                                        <h4><?php echo "$".format_number_6decimal($obj_litecoin);?></h4>                                   
                                    </div>
                                    <h6 style="color: #BCC0CA;">por moneda</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="col-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <!-- Package Price  -->
                            <div class="single-price-plan text-center">
                                <!-- Package Text  -->
                                <div class="package-plan">
                                    <img src="<?php echo site_url().'static/page_front/images/monedas/cardano-logo.png';?>" alt="bitcoin" width="100">
                                    <h5 class="currency_text">CARDANO</h5>
                                    <div class="ca-price d-flex justify-content-center">
                                        <h4><?php echo "$".format_number_6decimal($obj_cardano);?></h4>                                   
                                    </div>
                                    <h6 style="color: #BCC0CA;">por moneda</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--SECOND LINE CURRENCY-->
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="col-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <!-- Package Price  -->
                            <div class="single-price-plan text-center">
                                <!-- Package Text  -->
                                <div class="package-plan">
                                    <img src="<?php echo site_url().'static/page_front/images/monedas/monero-logo.png';?>" alt="monero" width="100">
                                    <h5 class="currency_text">MONERO</h5>
                                    <div class="ca-price d-flex justify-content-center">
                                        <h4><?php echo "$".format_number_6decimal($obj_monero);?></h4>                                   
                                    </div>
                                    <h6 style="color: #BCC0CA;">por moneda</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="col-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <!-- Package Price  -->
                            <div class="single-price-plan text-center">
                                <!-- Package Text  -->
                                <div class="package-plan">
                                    <img src="<?php echo site_url().'static/page_front/images/monedas/ripple-logo.png';?>" alt="ripple" width="100">
                                    <h5 class="currency_text">RIPPLE</h5>
                                    <div class="ca-price d-flex justify-content-center">
                                        <h4><?php echo "$".format_number_6decimal($obj_ripple);?></h4>                                   
                                    </div>
                                    <h6 style="color: #BCC0CA;">por moneda</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="col-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <!-- Package Price  -->
                            <div class="single-price-plan text-center">
                                <!-- Package Text  -->
                                <div class="package-plan">
                                    <img src="<?php echo site_url().'static/page_front/images/monedas/verge-logo.png';?>" alt="verge" width="100">
                                    <h5 class="currency_text">VERGE</h5>
                                    <div class="ca-price d-flex justify-content-center">
                                        <h4><?php echo "$".format_number_6decimal($obj_verge);?></h4>                                   
                                    </div>
                                    <h6 style="color: #BCC0CA;">por moneda</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="col-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <!-- Package Price  -->
                            <div class="single-price-plan text-center">
                                <!-- Package Text  -->
                                <div class="package-plan">
                                    <img src="<?php echo site_url().'static/page_front/images/monedas/zcash-logo.png';?>" alt="ZCash" width="100">
                                    <h5 class="currency_text">ZCASH</h5>
                                    <div class="ca-price d-flex justify-content-center">
                                        <h4><?php echo "$".format_number_6decimal($obj_zcash);?></h4>                                   
                                    </div>
                                    <h6 style="color: #BCC0CA;">por moneda</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="col-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <!-- Package Price  -->
                            <div class="single-price-plan text-center">
                                <!-- Package Text  -->
                                <div class="package-plan">
                                    <img src="<?php echo site_url().'static/page_front/images/monedas/tron-logo.png';?>" alt="Tron " width="85">
                                    <h5 class="currency_text">TRON</h5>
                                    <div class="ca-price d-flex justify-content-center">
                                        <h4><?php echo "$".format_number_6decimal($obj_tron);?></h4>                                   
                                    </div>
                                    <h6 style="color: #BCC0CA;">por moneda</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="col-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <!-- Package Price  -->
                            <div class="single-price-plan text-center">
                                <!-- Package Text  -->
                                <div class="package-plan">
                                    <img src="<?php echo site_url().'static/page_front/images/monedas/omisego-logo.png';?>" alt="OmiseGo" width="100">
                                    <h5 class="currency_text">OMISEGO</h5>
                                    <div class="ca-price d-flex justify-content-center">
                                        <h4><?php echo "$".format_number_6decimal($obj_omisego);?></h4>                                   
                                    </div>
                                    <h6 style="color: #BCC0CA;">por moneda</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--TRHID LINE CURRENCY-->
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="col-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <!-- Package Price  -->
                            <div class="single-price-plan text-center">
                                <!-- Package Text  -->
                                <div class="package-plan">
                                    <img src="<?php echo site_url().'static/page_front/images/monedas/sia-logo.png';?>" alt="Siacoin" width="100">
                                    <h5 class="currency_text">SIACOIN</h5>
                                    <div class="ca-price d-flex justify-content-center">
                                        <h4><?php echo "$".format_number_6decimal($obj_siacoin);?></h4>                                   
                                    </div>
                                    <h6 style="color: #BCC0CA;">por moneda</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="col-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <!-- Package Price  -->
                            <div class="single-price-plan text-center">
                                <!-- Package Text  -->
                                <div class="package-plan">
                                    <img src="<?php echo site_url().'static/page_front/images/monedas/nht-logo.png';?>" alt="NXT" width="85">
                                    <h5 class="currency_text">NXT</h5>
                                    <div class="ca-price d-flex justify-content-center">
                                        <h4><?php echo "$".format_number_6decimal($obj_nxt);?></h4>                                   
                                    </div>
                                    <h6 style="color: #BCC0CA;">por moneda</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--BUY BITCOIN-->
            
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-sm-6">
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
                                                    <input class="form-control erroneous-input" onkeyup="validate_usd(this.value);" style="height: 44px; width: 50%;" data-val="true" id="price_dolar" name="price_dolar" placeholder="100" value="100" type="text">
                                                    <input name="currency" id="currency" value="bitcoin" type="hidden"> 
                                                    <input name="btc_price" id="btc_price" value="7432.599734901" type="hidden"> 
                                                    <input name="dash_price" id="dash_price" value="171.6961546564" type="hidden"> 
                                                    <input name="eth_price" id="eth_price" value="306.2005982783" type="hidden"> 
                                                    <input name="litecoin_price" id="litecoin_price" value="63.85403693625" type="hidden"> 
                                                    <input name="bch_price" id="bch_price" value="584.4639303767" type="hidden"> 
                                                    <input name="cardano_price" id="cardano_price" value="0.10853381561" type="hidden"> 
                                                    <input name="monero_price" id="monero_price" value="109.90393134985" type="hidden"> 
                                                    <input name="ripple_price" id="ripple_price" value="0.36325688938" type="hidden"> 
                                                    <input name="verge_price" id="verge_price" value="0.0157559182" type="hidden"> 
                                                    <input name="zcash_price" id="zcash_price" value="158.0588782168" type="hidden"> 
                                                    <input name="tron_price" id="tron_price" value="0.02663537063" type="hidden"> 
                                                    <input name="omisego_price" id="omisego_price" value="4.49511197971" type="hidden"> 
                                                    <input name="siacoin_price" id="siacoin_price" value="0.00641587188" type="hidden"> 
                                                    <input name="nxt_price" id="nxt_price" value="0.07609423327" type="hidden"> 
                                                </div>
                                                <span id="message" style="font-size:11px; display: none;" class="field-validation-error" data-valmsg-for="Nombre" data-valmsg-replace="true"> El importe introducido no esta dentro del rango permitido. Rango permitido: 10 - 10000000</span>
                                            </div>
                                        </div>
                                    </div>
                    </div>
                    <div class="col-sm-6">
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
                                                    <input class="form-control erroneous-input" onkeyup="validate_usd(this.value);" style="height: 44px; width: 50%;" data-val="true" id="price_dolar" name="price_dolar" placeholder="100" value="100" type="text">
                                                    <input name="currency" id="currency" value="bitcoin" type="hidden"> 
                                                    <input name="btc_price" id="btc_price" value="7432.599734901" type="hidden"> 
                                                    <input name="dash_price" id="dash_price" value="171.6961546564" type="hidden"> 
                                                    <input name="eth_price" id="eth_price" value="306.2005982783" type="hidden"> 
                                                    <input name="litecoin_price" id="litecoin_price" value="63.85403693625" type="hidden"> 
                                                    <input name="bch_price" id="bch_price" value="584.4639303767" type="hidden"> 
                                                    <input name="cardano_price" id="cardano_price" value="0.10853381561" type="hidden"> 
                                                    <input name="monero_price" id="monero_price" value="109.90393134985" type="hidden"> 
                                                    <input name="ripple_price" id="ripple_price" value="0.36325688938" type="hidden"> 
                                                    <input name="verge_price" id="verge_price" value="0.0157559182" type="hidden"> 
                                                    <input name="zcash_price" id="zcash_price" value="158.0588782168" type="hidden"> 
                                                    <input name="tron_price" id="tron_price" value="0.02663537063" type="hidden"> 
                                                    <input name="omisego_price" id="omisego_price" value="4.49511197971" type="hidden"> 
                                                    <input name="siacoin_price" id="siacoin_price" value="0.00641587188" type="hidden"> 
                                                    <input name="nxt_price" id="nxt_price" value="0.07609423327" type="hidden"> 
                                                </div>
                                                <span id="message" style="font-size:11px; display: none;" class="field-validation-error" data-valmsg-for="Nombre" data-valmsg-replace="true"> El importe introducido no esta dentro del rango permitido. Rango permitido: 10 - 10000000</span>
                                            </div>
                                        </div>
                                    </div>
                    </div>
                </div>
            </div>
            
        </div>
        </div>
   </section>
<script src="<?php echo site_url().'static/backoffice/js/home.js';?>"></script>
