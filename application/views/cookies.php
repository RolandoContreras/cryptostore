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
                    <?php echo $obj_dinamic->content;?>
                    <div class="row margintop15 borderbottom">
                    <div style="padding-top: 1em;" class="col-md-12">
                        <table class="table table-striped" style="border:1px solid #e5e5e5  ">
                            <thead>
                                <tr>
                                    <th>
                                        COOKIES  PROPIAS
                                    </th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-condensed">
                            <tbody><tr>
                                <td style="border:1px solid #e5e5e5" align="center">
                                    <strong>                                        
                                        Cookies
                                    </strong>
                                </td>
                                <td style="border:1px solid #e5e5e5  " align="center">
                                    <strong>                                        
                                        Finalidad
                                    </strong>
                                </td>
                                <td style="border:1px solid #e5e5e5  " align="center">
                                    <strong>                                        
                                        Opt-out
                                    </strong>
                                </td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #e5e5e5  ">                                    
                                    Cookies Técnicas
                                </td>
                                <td style="border:1px solid #e5e5e5  ">
                                    
                                    <p>
          Gestionan la correcta navegación a través de la Web y sus contenidos, permitiendo identificar las sesiones de usuario y proteger su uso.
      </p>
                                </td>
                                <td style="border:1px solid #e5e5e5  " align="center">
                                    N/A
                                </td>

                            </tr>
                            <tr>
                                <td style="border:1px solid #e5e5e5  ">                                    
                                    Cookies Personalización
                                </td>
                                <td style="border:1px solid #e5e5e5  ">                                    
                                    Permiten mejorar la experiencia del usuario almacenando variables personalizadas como el idioma o las preferencias en la navegación.
                                </td>
                                <td style="border:1px solid #e5e5e5" align="center">
                                    N/A
                                </td>
                            </tr>
                        </tbody></table>

                        <table class="table table-condensed" border="1">
                            <tbody><tr>
                                <td colspan="4" style="border:1px solid #e5e5e5">
                                    <strong>
                                        COOKIES DE TERCEROS
                                        (La información recogida a continuación ha sido facilitada por esos terceros)
                                    </strong>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border:1px solid #e5e5e5" align="center">
                                    <strong>
                                        Cookies
                                    </strong>
                                </td>
                                <td style="border:1px solid #e5e5e5  " align="center">
                                    <strong>
                                        Finalidad
                                    </strong>
                                </td>
                                <td style="border:1px solid #e5e5e5  " align="center">
                                    <strong>
                                        Opt-out
                                    </strong>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="3" style="border:1px solid #e5e5e5" valign="middle">
                                    <p>
                                         <strong>
                                            Cookies  de Análisis
                                        </strong>
                                    </p>
                                </td>
                                <td style="border:1px solid #e5e5e5">
                                    Google  Analytics
                                </td>
                                <td style="border:1px solid #e5e5e5">
                                    <p>
          La Web utiliza Google Analytics, un servicio analítico de  Web prestado por Google, Inc., una compañía de Delaware cuya oficina principal  está en 1600 Amphitheatre Parkway, Mountain View (California), CA 94043,  Estados Unidos ("Google"). La información que genera la cookie acerca  de su uso de la Web (incluyendo su dirección IP) será directamente transmitida  y archivada por Google en los servidores de Estados Unidos. Google usará esta  información por cuenta de SERFORTEC con el propósito de seguir la pista de  su uso de la Web, recopilando informes de actividad y prestando otros servicios  relacionados con la actividad y el uso de Internet. Google no asociará su  dirección IP con ningún otro dato del que disponga Google.
      </p>
                                    
                                </td>
                                <td style="border:1px solid #e5e5e5" align="center">
                                    <a target="_blank" class="enlacesNaranja" href="https://tools.google.com/dlpage/gaoptout">
                                        Ver enlace
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #e5e5e5">
                                    Clicky
                                </td>
                                <td style="border:1px solid #e5e5e5">
                                     <p>
                                        La web Click es otro sistema de estadísticas de  analítica web. estructuradas de distinta manera pero tan completas como las de  Analytics. Una web que pertenece a Roxr  Software Ltd. Con oficina principal en 4868 Se Harrison St Milwaukie, Oregon 97222-5275 United States<br>
                                        Muestran información en tiempo real de los  visitantes de tu sitio.
                                    </p>                                    
                                </td>
                                <td style="border:1px solid #e5e5e5" align="center">
                                    <a target="_blank" class="enlacesNaranja" href="https://clicky.com/help/faq/features/cookies">

                                        Ver enlace
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #e5e5e5">
                                    Zendesk
                                </td>
                                <td style="border:1px solid #e5e5e5">
                                     <p>
                                        Zendesk produce un software líder en atención al cliente  basado en la nube.<br>
                                        Una web que pertenece a Zendesk International Ltd.  1019 Market St., San Francisco, CA 94103 USA
                                    </p>

                                   
                                </td>
                                <td style="border:1px solid #e5e5e5" align="center">
                                    <a target="_blank" class="enlacesNaranja" href="https://www.zendesk.com/company/zendesk-cookies-retro/">
                                        Ver enlace
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td rowspan="4" style="border:1px solid #e5e5e5">
                                    <strong>
                                        Cookies de redes sociales
                                    </strong>
                                </td>
                                <td style="border:1px solid #e5e5e5">
                                    You Tube
                                </td>
                                <td style="border:1px solid #e5e5e5">
                                    You Tube  proporciona botones y otras funcionalidades para que puedas compartir enlaces a  nuestra web. La información enviada fuera de la UE a You Tube, son utilizadas  por You Tube conforme sus políticas de privacidad.                                    
                                </td>
                                <td style="border:1px solid #e5e5e5" align="center">
                                    <a target="_blank" class="enlacesNaranja" href="http://www.google.com/intl/es/policies/technologies/types/">
                                        Ver enlace
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td style="border:1px solid #e5e5e5">
                                    Google  Plus
                                </td>
                                <td style="border:1px solid #e5e5e5">
                                    Google  Plus proporciona botones y otras funcionalidades para que puedas compartir  enlaces a nuestra web. La información enviada fuera de la UE a Google Plus, son  utilizadas por Google Plus conforme sus políticas de privacidad.
                                    
                                </td>
                                <td style="border:1px solid #e5e5e5" align="center">
                                    <a target="_blank" class="enlacesNaranja" href="http://www.google.com/intl/es/policies/technologies/types/">
                                        Ver enlace
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #e5e5e5">
                                    Facebook
                                </td>
                                <td style="border:1px solid #e5e5e5">
                                    Facebook  proporciona botones y otras funcionalidades para que puedas compartir enlaces a  nuestra web en tu perfil. La información enviada fuera de la UE a Facebook,  relativa a las páginas que has visitado o sobre las cosas que te interesan, son  utilizadas por Facebook conforme sus políticas de privacidad.                                    
                                </td>
                                <td style="border:1px solid #e5e5e5" align="center">
                                    <a target="_blank" class="enlacesNaranja" href="https://www.facebook.com/help/cookies/">
                                        Ver enlace
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="border:1px solid #e5e5e5">Twitter</td>
                                <td style="border:1px solid #e5e5e5">
                                    Twitter  proporciona botones y otras funcionalidades para que puedas compartir enlaces a  nuestra web. La información enviada fuera de la UE a Twitter, son utilizadas  por Twitter conforme sus políticas de privacidad.
                                    
                                    
                                </td>
                                <td style="border:1px solid #e5e5e5" align="center">
                                    <a target="_blank" class="enlacesNaranja" href="https://twitter.com/privacy?lang=es">
                                        Ver enlace
                                    </a>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                        Los sistemas de opt-out específicos indicados en la tabla anterior respecto de la cookie de que se trate (estos sistemas pueden conllevar que se instale en su equipo una cookie "de rechazo" para que funcione su elección de desactivación); u otras herramientas de terceros, disponibles on line, que permiten a los usuarios detectar las cookies en cada sitio web que visita y gestionar su desactivación.

SERFORTEC no se hace responsable del contenido y veracidad de las políticas de privacidad de los terceros incluidas en esta política de cookies.
Cualquier duda o cuestión que tenga sobre esta política de cookies, puede contactar con SERFORTEC en contacto.
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