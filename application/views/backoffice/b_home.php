<script src="<?php echo site_url().'static/cms/js/core/jquery-1.11.1.min.js';?>"></script>
<section>
    <div class="section-heading row">
        <div class=" col-lg-9 col-md-8 col-sm-7 col-xs-12">
            <h1 class="title text-uppercase"><?=lang('idioma.b_tit_tablero');?></h1>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 pull-right count-down-box">
            <a class="white"><?=lang('idioma.b_precio_bitcoin');?> <span style='color:#D4AF37'><?php echo format_number_6decimal($price_btc);?> <i class="fa fa-eur"></i></span></a>
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
                                                <a data-toggle="collapse" data-parent="#accordion" id="collapseOne" href="#collapse_message"><i class="collapse-caret fa  fa-angle-up"></i><?=lang('idioma.b_informativo');?></a>
                                            </header>
                                            <div id="collapse_message" class="panel-collapse collapse in center">
                                                <div class="panel-heading clearfix"> 
                                                    <div class="panel-title"><?=lang('idioma.b_mensaje');?>&nbsp;<b><?php echo $value->title;?></b></div> 
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
                                        <a data-toggle="collapse" data-parent="#accordion" id="collapseOne" href="#collapse61"><i class="collapse-caret fa  fa-angle-up"></i><?=lang('idioma.b_noticias');?></a>
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
                                        <h4><?php echo format_number_6decimal($obj_btc);?> <i class="fa fa-eur"></i></h4>                                   
                                    </div>
                                    <h6><?=lang('idioma.por_moneda');?></h6>
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
                                        <h4><?php echo format_number_6decimal($obj_bch);?> <i class="fa fa-eur"></i></h4>                                   
                                    </div>
                                    <h6><?=lang('idioma.por_moneda');?></h6>
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
                                        <h4><?php echo format_number_6decimal($obj_eth);?> <i class="fa fa-eur"></i></h4>                                   
                                    </div>
                                    <h6><?=lang('idioma.por_moneda');?></h6>
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
                                        <h4><?php echo format_number_6decimal($obj_dash);?> <i class="fa fa-eur"></i></h4>                                   
                                    </div>
                                    <h6><?=lang('idioma.por_moneda');?></h6>
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
                                        <h4><?php echo format_number_6decimal($obj_litecoin);?> <i class="fa fa-eur"></i></h4>                                   
                                    </div>
                                    <h6><?=lang('idioma.por_moneda');?></h6>
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
                                        <h4><?php echo format_number_6decimal($obj_cardano);?> <i class="fa fa-eur"></i></h4>                                   
                                    </div>
                                    <h6><?=lang('idioma.por_moneda');?></h6>
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
                                        <h4><?php echo format_number_6decimal($obj_monero);?> <i class="fa fa-eur"></i></h4>                                   
                                    </div>
                                    <h6><?=lang('idioma.por_moneda');?></h6>
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
                                        <h4><?php echo format_number_6decimal($obj_ripple);?> <i class="fa fa-eur"></i></h4>                                   
                                    </div>
                                    <h6><?=lang('idioma.por_moneda');?></h6>
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
                                        <h4><?php echo format_number_6decimal($obj_verge);?> <i class="fa fa-eur"></i></h4>                                   
                                    </div>
                                    <h6><?=lang('idioma.por_moneda');?></h6>
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
                                        <h4><?php echo format_number_6decimal($obj_zcash);?> <i class="fa fa-eur"></i></h4>                                   
                                    </div>
                                    <h6><?=lang('idioma.por_moneda');?></h6>
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
                                        <h4><?php echo format_number_6decimal($obj_tron);?> <i class="fa fa-eur"></i></h4>                                   
                                    </div>
                                    <h6><?=lang('idioma.por_moneda');?></h6>
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
                                        <h4><?php echo format_number_6decimal($obj_omisego);?> <i class="fa fa-eur"></i></h4>                                   
                                    </div>
                                    <h6><?=lang('idioma.por_moneda');?></h6>
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
                                        <h4><?php echo format_number_6decimal($obj_siacoin);?> <i class="fa fa-eur"></i></h4>                                   
                                    </div>
                                    <h6><?=lang('idioma.por_moneda');?></h6>
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
                                        <h4><?php echo format_number_6decimal($obj_nxt);?> <i class="fa fa-eur"></i></h4>                                   
                                    </div>
                                    <h6><?=lang('idioma.por_moneda');?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--BUY BITCOIN-->
             <div class="col-lg-12">
                <div class="section-heading row">
                    <div class=" col-lg-9 col-md-8 col-sm-7 col-xs-12">
                        <h1 class="title text-uppercase"><?=lang('idioma.nav_comprar');?></h1>
                    </div>
                </div> 
            </div>    
            <div class="container">
            <div class="col-lg-12">
                <div class="row margin-top-50">
                    <div class="col-sm-6 margin-top-10 bloqueGris_1">
                        <div id="bloqueGris-original" class="col-lg-12 bloqueGris_1">
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
                                                        <i class="fa fa-eur"></i>
                                                    </span>
                                                    <input class="form-control" onkeyup="validate_usd(this.value);" style="height: 44px;" data-val="true" id="price_dolar" name="price_dolar" placeholder="100" value="100" type="text">
                                                    <input name="currency" id="currency" value="bitcoin" type="hidden"> 
                                                    <input name="btc_price" id="btc_price" value="<?php echo $obj_btc_10;?>" type="hidden"> 
                                                    <input name="dash_price" id="dash_price" value="<?php echo $obj_dash_10;?>" type="hidden"> 
                                                    <input name="eth_price" id="eth_price" value="<?php echo $obj_eth_10;?>" type="hidden"> 
                                                    <input name="litecoin_price" id="litecoin_price" value="<?php echo $obj_litecoin_10;?>" type="hidden"> 
                                                    <input name="bch_price" id="bch_price" value="<?php echo $obj_bch_10;?>" type="hidden"> 
                                                    <input name="cardano_price" id="cardano_price" value="<?php echo $obj_cardano_10;?>" type="hidden"> 
                                                    <input name="monero_price" id="monero_price" value="<?php echo $obj_monero_10;?>" type="hidden"> 
                                                    <input name="ripple_price" id="ripple_price" value="<?php echo $obj_ripple_10;?>" type="hidden"> 
                                                    <input name="verge_price" id="verge_price" value="<?php echo $obj_verge_10;?>" type="hidden"> 
                                                    <input name="zcash_price" id="zcash_price" value="<?php echo $obj_zcash_10;?>" type="hidden"> 
                                                    <input name="tron_price" id="tron_price" value="<?php echo $obj_tron_10;?>" type="hidden"> 
                                                    <input name="omisego_price" id="omisego_price" value="<?php echo $obj_omisego_10;?>" type="hidden"> 
                                                    <input name="siacoin_price" id="siacoin_price" value="<?php echo $obj_siacoin_10;?>" type="hidden"> 
                                                    <input name="nxt_price" id="nxt_price" value="<?php echo $obj_nxt_10;?>" type="hidden"> 
                                                </div>
                                                <span id="message" style="font-size:11px; display: none;" class="field-validation-error"><?=lang('idioma.buy_el_importe');?></span>
                                            </div>
                                        </div>
                                    </div>
                    </div>
                    <div class="col-sm-6 margin-top-10 bloke_change">
                        <div id="bloqueGris-original" class="col-lg-12 bloqueGris_2">
                            <div class="col-lg-12">
                                <h4 class="question_currency"><?=lang('idioma.buy_que_moneda_quieres');?></h4>
                                <p class="p_currency"><?=lang('idioma.buy_selecciona_moneda');?></p>
                            </div>
                            <div class="col-lg-12">
                                <div class="calculador">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="img_currency" style="width: 10%;" width="50">
                                            <img src='<?php echo site_url()."static/page_front/images/monedas/btc-logo.png";?>' alt="bitcoin" style="margin-bottom: 3px;"/>
                                        </span>
                                        <input id="amount_cripto" readonly="readonly" name="amount_cripto" class="form-control erroneous-input" style="height: 44px;"  placeholder="0" value="<?php echo $obj_btc_10;?>" type="text">
                                    </div>
                                    <span style="cursor:pointer" onclick="show_currency();" id="span-dropdown-arrow_up" class="fa fa-2x icono-dropdown-cryptocurrency floatright fa-caret-down"></span>
                                    <span style="cursor:pointer;display:none" onclick="hide_currency();" id="span-dropdown-arrow_down" class="fa fa-2x icono-dropdown-cryptocurrency floatright fa-caret-up"></span>
                                </div>
                            </div>
                            <div id="crypto-container" class="box-dropdown-cryptocurrency deplegable-criptomonedas" style="width: 92%; display: none; margin-top: 22%;">
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
                    </div>
                   
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-sm-6 margin-top-10">
                        <button class="submit_btn_comprar" id="submit" type="submit"><?=lang('idioma.boton_comprar');?></button>
                    </div>
                </div>
            </div>
        </div>
   </section>
<script src="<?php echo site_url().'static/backoffice/js/home.js';?>"></script>