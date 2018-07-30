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
                            <h1 class="title-currency-contact margin-top100">Rellena el formulario, estaremos encantados de ayudarte.</h1>
                        </div>
                    </div>
                </div>
			<div class="row">
                            <div class="col-md-4 hidden-xs panel-bitcoinDinero-col">
                        <div class="panelporqueComprar">
                            <div class="porqueComprar">
                                <span class="icon-PagoSeguro">
                                    <i id="safe" class="fa fa-shield fa-2x"></i>
                                </span>
                                <span class="textoGrisInputs">
                                    Pago seguro
                                </span>
                            </div>
                        </div>
                        <div class="panelporqueComprar">
                            <div class="porqueComprar">
                                <span class="icon-Soporte">
                                    <i id="support" class="fa fa-ticket fa-2x"></i>
                                </span>
                                <span class="textoGrisInputs">
                                    Soporte Personalizado
                                </span>
                            </div>
                        </div>
                        <div class="panelporqueComprar">
                            <div class="porqueComprar">
                                <span class="icon-Competitivos">
                                    <i id="price" class="fa fa-certificate fa-2x"></i>
                                </span>
                                <span class="textoGrisInputs">
                                    Los precios más competitivos
                                </span>
                            </div>
                        </div>

                    </div>
                            <div class="col-md-8 panel-bitcoinDinero-col">
                                <form id="form-invest">                        
                                    <div class="form-group">
                                        <label for="exampleInputPassword1" class="active">Nombre</label>
                                        <input class="form-control" data-val="true" data-val-required="El Nombre es requerido" id="name" name="name" placeholder="Indicanos tu nombre" type="text">
                                        <!--<span class="field-validation-valid" data-valmsg-for="Nombre" data-valmsg-replace="true"></span>-->
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="active">Email</label>
                                        <input autocomplete="off" class="form-control" data-val="true" data-val-email="Email inválido." data-val-required="Rellena el formulario, estaremos encantados de ayudarte." id="email" name="email" placeholder="Indicanos tu email" type="email">
                                        <!--<span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>-->
                                    </div>
                                    <div class="form-group">
                                        <label>Teléfono</label>
                                        <input autocomplete="off" class="form-control" id="phone" name="phone" placeholder="Teléfono" type="phone">
                                        <!--<span class="field-validation-valid" data-valmsg-for="Telefono" data-valmsg-replace="true"></span>-->
                                    </div>
                                    <div class="form-group">
                                        <label class="active">Empresa</label>
                                        <input autocomplete="off" class="form-control" id="company" name="company" placeholder="Empresa" type="text">
                                        <!--<span class="field-validation-valid" data-valmsg-for="Empresa" data-valmsg-replace="true"></span>-->
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Comentarios</label>
                                        <textarea class="form-control" cols="20" data-val="true" data-val-required="Debes introducirnos tus comentarios" id="comments" name="comments" rows="3"></textarea>
                                        <!--<span class="field-validation-valid" data-valmsg-for="Comentarios" data-valmsg-replace="true"></span>-->
                                    </div>
                                    <div class="captcha">
                                        <script src="https://www.google.com/recaptcha/api.js"></script>
                                        <div class="g-recaptcha" data-theme="light" data-sitekey="6LdDdQwTAAAAAHlVZCFGbkSgSI8pf4zm5dpyLhWw"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdDdQwTAAAAAHlVZCFGbkSgSI8pf4zm5dpyLhWw&amp;co=aHR0cHM6Ly93d3cuYml0bm92by5jb206NDQz&amp;hl=es&amp;v=v1531759913576&amp;theme=light&amp;size=normal&amp;cb=jsl2be4lq8xd" role="presentation" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" width="304" height="78" frameborder="0"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea></div></div>
                                    </div>
                                    <div class="blockacepta">
                                        <div class="checkbox">
                                            <label>
                                                <input data-val="true" data-val-required="'Acepto Terminos' no debe estar vacío." id="term" name="term" value="true" type="checkbox"><input name="AceptoTerminos" value="false" type="hidden">
                                                Acepto la <a class="blue-color-link" href="<?php echo site_url().'notice/privacy'?>" target="_blank">política de privacidad</a>.
                                            </label>
                                        </div>
                                        <!--<span class="field-validation-valid" data-valmsg-for="AceptoTerminos" data-valmsg-replace="true"></span>-->
                                    </div>

                            <button type="submit" class="btn btn-block btn-primary waves-effect waves-light">Enviar formulario <i class="fa fa-chevron-right"></i></button>
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
<script>
$(document).ready(function() {
    $("#form-invest").validate({
        rules: {
            name: { required: true, minlength: 2},
            company: { required: true, minlength: 2},
            phone: { required: true, number: true},
            email: { required:true, email: true},
            term: { required:true},
            comments: { required:true, minlength: 2}
        },
        messages: {
            name: "Por favor introduzca su nombre",
            email : "Por favor introduzca un e-mail válido.",
            subjet: "Por favor introduzca un título",
            phone: "Por favor introduzca un teléfono",
            message : "Por favor introduzca un mensaje."
        },
        submitHandler: function(form){
            var dataString = $('#name').val()+'&'+$('#email').val()+'&'+$('#subjet').val()+'&'+$('#message').val()+'&'+$('#phone').val();
            $.ajax({
                type: "POST",
                url:"<?php echo site_url().'home/send_messages';?>",
                data: {dataString : dataString},
                success: function(data){
                    $("#alert_message").html(data);
                }
            });
        }
    });
});    
</script>    
    
<script src="<?php echo site_url().'static/page_front/js/contact_invest.js';?>"></script>
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