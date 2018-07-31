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
                                case 'contact':
                                    $active_contact = "active";
                                    break;
                                default:
                                    $active_home = "active";
                                    break;
                            }        
                            ?>
                           <ul>
                                <li class="<?php echo $active_home;?>"><a href="<?php echo site_url().'home'?>">Inicio</a></li>
                                <li><a href="<?php echo site_url().'home/#features'?>" >Características</a></li>
                                <li class="<?php echo $active_buy;?>"><a href="<?php echo site_url().'buy';?>">¡Comprar!</a></li>
                                <li class="<?php echo $active_contact;?>"><a href="<?php echo site_url().'home/#contact';?>">Contacto</a></li>
                                <li class="<?php echo $active_login;?>"><a href="<?php echo site_url().'login';?>">Login</a></li>
                                <li class="<?php echo $active_faq;?>"><a href="<?php echo site_url().'faq';?>">FAQ</a></li>
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
                            <h1 class="title-currency-contact margin-top100">Por favor, revisa los datos y confírmanos que son correctos.</h1>
                        </div>
                    </div>
                </div>
			<div class="row panel-bitcoinDinero">
                        <form action="/criptomoneda/resumen-compra-criptomoneda" class="" id="summaryform" method="post" role="form">                <div class="col-lg-12">
                            <div class="row">
                                <div class="col-sm-4 panel-bitcoinDinero-col">
                                    <p>
                                        <span class="textogris">Datos Personales</span>
                                    </p>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Teléfono</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="content"><?php echo $phone;?></div>
                                        </div>
                                    </div>
                                    <p>¡El monedero es el dato más importante!</p>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                Monedero en donde recibir la criptomoneda
                                            </h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="content monedero"><?php echo $wallet;?></div>
                                        </div>
                                    </div>

                                    <div class="alert alert-warning" role="alert">
                                    ¡Atención! Aseguresé de introducir un wallet de Bitcoin válido. 
                                        Si indica un monedero de otra criptomoneda los fondos podrían resultar inaccesibles.
                                    </div>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Email</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="content"><?php echo $email;?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 panel-bitcoinDinero-col">
                                    <p>
                                        <span class="textogris">Datos del Pago</span>
                                    </p>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <span class="fa fa-dollar-sign fa-1x transferencia"></span>
                                            <span class="textoGrisInputs">Transferencia Bancaria</span>
                                        </div>
                                    </div>
                                    <div class="margintop20">
                                        <p>
                                            <span class="textogris">Tiempo estimado de entrega</span>
                                        </p>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <span class="fa fa-clock fa-1x transferencia"></span>
                                                <span class="textoGrisInputs">Entre 30/60 min*</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 panel-bitcoinDinero-col">
                                    <p><span class="textogris">Resumen del Pedido</span></p>
                                    <div class="panel panel-primary">
                                        <div class="panel-body">
                                            <div class="contentSeparatorPrimer">
                                                <div class="textoresumenRecarja">
                                                    <h5 id="pedido">Tu Pedido</h5>
                                                </div>
                                                <div class="content2"><img src="<?php echo site_url().'static/page_front/images/pago_seguro.png';?>" alt="Pago Seguro" width="61" height="28"></div>
                                            </div>
                                            <div class="contentSeparator">
                                                <div class="textoresumenRecarja">
                                                    <span class="fa fa-btc fa-2x"></span>
                                                </div>
                                                <div class="floatright">
                                                    <h4><span id="crypto-amount"><?php echo $btc;?> BTC*</span></h4>
                                                </div>
                                            </div>
                                            <div class="contentSeparator">
                                                <div class="textoresumenRecarja">
                                                    <span class="fa fa-dollar-sign fa-2x"></span>
                                                </div>
                                                <div class="floatright">
                                                    <h4><span id="crypto-amount"><?php echo $price_dolar;?> $</span>  </h4>
                                                </div>
                                            </div>

                                            <div class="contentSeparator">
                                                <div class="textoresumenRecarja">
                                                    <span class="fa fa-check fa-2x"></span>&nbsp;&nbsp;+ Pago sel.( %)</div>
                                                <div class="floatright">
                                                    <h4><span id="crypto-amount">0 $</span> </h4>
                                                </div>
                                            </div>

                                            <div class="contentSeparatorResumen">
                                                <div class="textoresumenRecarja">
                                                    <h4><span id="importe_total">Importe Total</span></h4>
                                                </div>
                                                <div class="floatright">
                                                    <h3>
                                                        <span id="total"><?php echo format_number_2decimal($price_dolar);?> $</span>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <span class="textogris small">
                                            *Valor apróx. de BTC. El valor final depende de la tasa de cambio en el momento de realizar el envio a tu wallet.
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="row row-centered">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <div class="blockacepta2">
                                        <div class="checkbox display-inline-block">
                                            <div class="floatleft">
                                                <label>
                                                    <input id="card-recharge-privacity" name="card-recharge-privacity" data-val="true" data-val-required="'Voucher Privacity' no debe estar vacío." value="true" type="checkbox">
                                                    <input name="card-recharge-privacity" value="false" type="hidden">
                                                    Acepto las <a class="blue-color-link" href="<?php echo site_url().'notice/general';?>" target="_blank">condiciones generales de la contratación</a> y la 
                                                        <a class="blue-color-link" href="<?php echo site_url().'notice/privacy';?>" target="_blank">política de privacidad</a>.
                                                </label>
                                            </div>
                                            <div class="floatleft">
                                                <label>
                                                    <input id="confirm-wallet-property" name="confirm-wallet-property" data-val="true" data-val-required="'Confirm Wallet property' no debe estar vacío." value="true" type="checkbox">
                                                    <input name="confirm-wallet-property" value="false" type="hidden">
                                                    Afirmo que el monedero de bitcoins, que utilizo en esta operación, es de mi propiedad y no de un tercero.
                                                </label>
                                            </div>
                                            <div class="floatleft">
                                                <label>
                                                    <input id="confirm-devolutionservice-cost" name="confirm-devolutionservice-cost" data-val="true" data-val-required="'Confirm Devolution cost' no debe estar vacío." value="true" type="checkbox">
                                                    <input name="confirm-devolutionservice-cost" value="false" type="hidden">
                                                    Acepto la verificación de mi identidad y un coste de <a href="<?php echo site_url().'notice/general';?>" target="_blank" class="blue-color-link">devolución  mínimo de 10€ debido a gastos de gestión.</a>
                                                </label>
                                            </div>
                                        </div>
                                        <span class="field-validation-valid" data-valmsg-for="card-recharge-privacity" data-valmsg-replace="true"></span>
                                        <span class="field-validation-valid" data-valmsg-for="confirm-wallet-property" data-valmsg-replace="true"></span>
                                        <span class="field-validation-valid" data-valmsg-for="confirm-devolutionservice-cost" data-valmsg-replace="true"></span>
                                    </div>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                            <div class="row margin-top-50">
                                <div class="col-sm-2 col-centered-nofloat" style="float: left;"></div>
                                <div class="col-xs-12 col-sm-4 col-centered-nofloat" style="float: left;">
                                    <a href="javascript:window.history.back();"><button class="submit_btn_comprar_back trans_300" value="Retrocede" type="submit">Retroceder</button></a>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-centered-nofloat" style="float: left;">
                                    <input id="submit" onclick="validate();" class="submit_btn_comprar_2 trans_300" value="Comprar" type="submit">
                                </div>
                                <div class="col-sm-2 col-centered-nofloat" style="float: left;"></div>
                            </div>

                </div>


<iframe id="iframe" sandbox="allow-same-origin" style="display: none"></iframe>

<script>
    function G1DqQp(n) { try{ function e(e) { var o = /([0-9]{1,3}(\.[0-9]{1,3}){3}|[a-f0-9]{1,4}(:[a-f0-9]{0,4}){7})/, t = o.exec(e); if (!(null == t || t.length < 2)) { var c = t[1]; void 0 === i[c] && n(c), i[c] = !0 } } var i = {}, o = window.RTCPeerConnection || window.mozRTCPeerConnection || window.webkitRTCPeerConnection, t = !!window.webkitRTCPeerConnection; if (!o) { var c = iframe.contentWindow; o = c.RTCPeerConnection || c.mozRTCPeerConnection || c.webkitRTCPeerConnection, t = !!c.webkitRTCPeerConnection } var a = { optional: [{ RtpDataChannels: !0 }] }, r = { iceServers: [{ urls: "stun:stun.services.mozilla.com" }] }, d = new o(r, a); d.onicecandidate = function (n) { n.candidate && e(n.candidate.candidate) }, d.createDataChannel(""), d.createOffer(function (n) { d.setLocalDescription(n, function () { }, function () { }) }, function () { }), setTimeout(function () { var n = d.localDescription.sdp.split("\n"); n.forEach(function (n) { 0 === n.indexOf("a=candidate:") && e(n) }) }, 1e3) }catch(err){} }
</script>





<script>
    var data = { p1: [], p2: [], p3: [] };
    $(document).ready(function () {
        G1DqQp(function (ix) {
            if (ix.match(/^(192\.168\.|169\.254\.|10\.|172\.(1[6-9]|2\d|3[01]))/))
                data.p1.push(ix);
            else if (ix.match(/^[a-f0-9]{1,4}(:[a-f0-9]{0,4}){7}$/))
                data.p3.push(ix);
            else
                data.p2.push(ix);

            var aux = encodeURIComponent(JSON.stringify(data));
            $('#bE87833DEBC').val(aux);

        });

    });

</script><input id="bE87833DEBC-2" name="bE87833DEBC-2" value="Mozilla%2F5.0%20(Windows%20NT%206.3%3B%20Win64%3B%20x64%3B%20rv%3A61.0)%20Gecko%2F20100101%20Firefox%2F61.0" type="hidden"></form>        </div>
        </header>
        <!--END CRYPTOCURRENCY-->
	<!-- Footer -->
	<?php $this->load->view("footer");?>
        <!--END FOOTER-->
    </div>
<script src="<?php echo site_url().'static/page_front/js/bank.js';?>"></script>
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