<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="En Easycripto puedes comprar Bitcoin de forma fácil, rápida y segura. ¡Sin necesidad de registro!">
<meta name="keywords" content="easycripto,bitcoin,comprar bitcoins,compra bitcoins,criptomonedas,adquirir bitcoins,vende bitcoin">
<title>EasyCripto | Compra Bitcoin</title>
<script src="https://use.fontawesome.com/3aa4a6fd0b.js"></script>
<link rel="shortcut icon" href="<?php echo site_url().'static/page_front/images/favicon/favicon.ico';?>" type="image/x-icon">
<link rel="icon" href="<?php echo site_url().'static/page_front/images/favicon/favicon.ico';?>" type="image/x-icon">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo site_url().'static/page_front/images/favicon/favicon.ico';?>">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo site_url().'static/page_front/images/favicon/favicon.ico';?>">
<link href="<?php echo site_url().'static/backoffice/css/assets/entypo.css';?>" rel="stylesheet">
<link href="<?php echo site_url().'static/backoffice/css/one/style_one.css';?>" rel="stylesheet">
<link href="<?php echo site_url().'static/backoffice/css/assets/bootstrap.min.css';?>" rel="stylesheet">
<link href="<?php echo site_url().'static/backoffice/css/assets/mouldifi-core.css';?>" rel="stylesheet">
<link href="<?php echo site_url().'static/backoffice/css/assets/mouldifi-forms.css';?>" rel="stylesheet">
<link href="<?php echo site_url().'static/backoffice/css/style_price.css';?>" rel="stylesheet" >
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->
<!--[if lte IE 8]>
	<script src="js/plugins/flot/excanvas.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var site = '<?php echo site_url();?>';
</script>
</head>
<body>
<!-- Page container -->
<div class="page-container">
	<!-- Page Sidebar -->
	<div class="page-sidebar">
		<!-- Site header  -->
		<header class="site-header">
		  <div class="site-logo">
                      <a href="<?php echo site_url().'backoffice';?>">
                          <img style="margin-left: -20% !important" src="<?php echo site_url().'static/page_front/images/logo/logo.png';?>" width="115px" alt="Logo EasyCripto">
                      </a>
                  </div>
		  <div class="sidebar-collapse hidden-xs">
                      <a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a>
                  </div>
		  <div class="sidebar-mobile-menu visible-xs">
                      <a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#">
                          <i class="icon-menu"></i>
                      </a>
                  </div>
		</header>
		<!-- /site header -->
		<!-- Main navigation -->
		<ul id="side-nav" class="main-menu navbar-collapse collapse">
                     <?php 
                            if($_SESSION['customer']['active']==1){
                                $title_active='Cliente Activo';
                                $style_active='label-success';
                            }else{
                                $title_active='Cliente Inactivo';
                                $style_active='label-danger';
                            }
                            ?>
                     <?php 
                                    $url = explode("/",uri_string()); 
                                    $style_inicio = "";
                                    $style_misdatos = "";
                                    $style_soporte = "";
                                    $style_sell = "";
                                    if(isset($url[1])){
                                        switch ($url[1]) {
                                            ////////
                                                    case "profile":
                                                        $style_misdatos = "a_active";
                                                        break;
                                                    case "sell":
                                                        $style_sell = "a_active";
                                                        break;
                                                    case "soporte":
                                                        $style_soporte = "a_active";
                                                        break;
                                                    default:
                                                         $title = "Inicio";
                                            }
                                    }else{
                                        $style_inicio = "a_active";
                                    }
                                    ?>  
                        <li class="has-sub"><a class="<?php echo $style_active;?>"><em class="icon-star"></em><span class="title"><?php echo $title_active;?></span></a></li>
                        <li class="has-sub"><a href="<?php echo site_url().'backoffice'?>" class="<?php echo $style_inicio;?>"><i class="fa fa-tachometer fa-lg"></i><span class="title">Dashboard</span></a></li>
                        <li class="has-sub"><a href="<?php echo site_url().'backoffice/profile'?>" class="<?php echo $style_misdatos;?>"><i class="fa fa-address-book fa-lg"></i><span class="title">Mi Perfil</span></a></li>
                        <li class="has-sub"><a href="<?php echo site_url().'backoffice/sell'?>" class="<?php echo $style_sell;?>"><i class="fa fa-shopping-bag fa-lg"></i><span class="title">Compras</span></a></li>
                        <li class="has-sub"><a href="<?php echo site_url().'backoffice/soporte'?>" class="<?php echo $style_soporte;?>"><i class="fa fa-commenting"></i><span class="title">Contacto</span></a></li>
		</ul>
		<!-- /main navigation -->		
  </div>
  <!-- Main container -->
  <div class="main-container gray-bg">
		<!-- Main header -->
		<div class="main-header row">
		  <div class="col-sm-6 col-xs-7">
		  
			<!-- User info -->
			<ul class="user-info pull-left">          
                            <li class="profile-info dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"> 
                                    <img width="44" class="img-circle avatar" alt="" src="<?php echo site_url().'static/backoffice/images/avatar/avatar.png';?>"><?php echo $_SESSION['customer']['name'];?> &nbsp;&nbsp;<i class="fa fa-arrow-down" aria-hidden="true"></i>
                                </a>
                              <!-- User action menu -->
                              <ul class="dropdown-menu">

                                  <li><a href="<?php echo site_url().'backoffice/profile';?>"><i class="fa fa-user-circle-o" aria-hidden="true"></i>My profile</a></li>
                                  <li class="divider"></li>
                                  <li><a href="<?php echo site_url().'login/logout';?>"><i class="fa fa-sign-out fa-lg"></i>Salir</a></li>
                              </ul>
                              <!-- /user action menu -->
                            </li>
                          </ul>
			<!-- /user info -->
		  </div>
		</div>
		<!-- /main header -->
	<!-- Main section-->
            <?php echo $body;?> 
      <!--START FOOTER-->
      <div class="row">
     <footer class="footer bottom_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- Footer Intro -->
                        <div class="footer_intro">
                            <!-- Logo -->
                            <div class="logo footer_logo">
                                <img src="<?php echo site_url().'static/page_front/images/logo/logo.png';?>" alt="logo" width="130">
                            </div>
                            <p>Para tener la mejor casa de Cambio de Criptomonedas es necesario tener un equipo serio, profesional, contar con una seguridad impecable, transacciones sólidas y confiables. Para todo ello, EASYCRIPTO.</p>
                                <!-- Copyright -->
                                <div class="footer_cr">
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                All rights reserved  Easycripto© <br/>
                                <script>document.write(new Date().getFullYear());</script> All rights reserved
                                </div>
                        </div>
                    </div>
                    <!-- Footer Services -->
                    <div class="col-lg-3">
                        <div class="footer_col">
                            <div class="footer_col_title">Easycripto</div>
                            <ul>
                                <li class="circle"><a href="<?php echo site_url().'home'?>">Inicio</a></li>
                                <li class="circle"><a href="#features" >Características</a></li>
                                <li class="circle"><a href="<?php echo site_url().'buy';?>">¡Comprar!</a></li>
                                <li class="circle"><a href="#contact">Contacto</a></li>
                                <li class="circle"><a href="<?php echo site_url().'login';?>">Login</a></li>
                                <li class="circle"><a href="<?php echo site_url().'faq';?>">FAQ</a></li>
                            </ul>
                        </div>
                        <div class="footer_col">
                            <ul>
                                <li><img src="<?php echo site_url().'static/page_front/images/tarjetas-aceptadas.png';?>" alt="tarjetas aceptadas"/></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer_col">
                            <div class="footer_col_title">Social</div>
                            <ul>
                                <ul style="margin-left: -38px;">
                                    <li><a href="javascript:void(0);"><i class="fa fa-facebook-f fa-2x"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-twitter fa-2x"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-youtube fa-2x"></i></a></li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Community -->
                    <div class="col-lg-3">
                        <div class="footer_col">
                            <div class="footer_col_title">Legal</div>
                            <ul>
                                <li class="circle"><a href="<?php echo site_url().'notice/legal';?>">Aviso Legal</a></li>
                                <li class="circle"><a href="<?php echo site_url().'notice/privacy';?>">Política de Privacidad</a></li>
                                <li class="circle"><a href="<?php echo site_url().'notice/general';?>">Condiciones Generales</a></li>
                                <li class="circle"><a href="<?php echo site_url().'notice/cookies';?>">Política de Cookies</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
      </footer>	
    </div>      
  <!-- /main container -->
</div>
</div>
<!--Load JQuery-->
<script src="static/cms/plugins/wysiwyg/wysihtml5-0.3.0_rc3.min.js"></script>
<script src="<?php echo site_url().'static/backoffice/js/assets/bootstrap.min.js';?>"></script>

<script src="<?php echo site_url().'static/backoffice/js/assets/jquery.metisMenu.js';?>"></script>
<script src="<?php echo site_url().'static/backoffice/js/assets/jquery-ui.js';?>"></script>
<script src="<?php echo site_url().'static/backoffice/js/assets/jquery.blockUI.js';?>"></script>
<!--Float Charts-->
<script src="<?php echo site_url().'static/backoffice/js/assets/jquery.flot.min.js';?>"></script>
<script src="<?php echo site_url().'static/backoffice/js/assets/jquery.flot.tooltip.min.js';?>"></script>
<script src="<?php echo site_url().'static/backoffice/js/assets/jquery.flot.resize.min.js';?>"></script>
<script src="<?php echo site_url().'static/backoffice/js/assets/jquery.flot.selection.min.js';?>"></script>        
<script src="<?php echo site_url().'static/backoffice/js/assets/jquery.flot.pie.min.js';?>"></script>
<script src="<?php echo site_url().'static/backoffice/js/assets/jquery.flot.time.min.js';?>"></script>
</body>
</html>
