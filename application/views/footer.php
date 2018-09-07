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
                    <p><?=lang('idioma.mejor_casa');?></p>
			<!-- Copyright -->
			<div class="footer_cr">
                        <script>document.write(new Date().getFullYear());</script> <?=lang('idioma.derechos_reservado');?> © 
                        </div>
		</div>
            </div>
            <!-- Footer Services -->
            <div class="col-lg-3">
                <div class="footer_col">
                    <div class="footer_col_title">Easycripto</div>
                    <ul>
                        <li class="circle"><a href="<?php echo site_url().'home'?>"><?=lang('idioma.nav_inicio');?></a></li>
                        <li class="circle"><a href="#features"><?=lang('idioma.nav_caracteristicas');?></a></li>
                        <li class="circle"><a href="<?php echo site_url().'buy';?>"><?=lang('idioma.nav_comprar');?></a></li>
                        <li class="circle"><a href="#contact"><?=lang('idioma.nav_contacto');?></a></li>
                        <li class="circle"><a href="<?php echo site_url().'login';?>"><?=lang('idioma.nav_login');?></a></li>
                        <li class="circle"><a href="<?php echo site_url().'faq';?>"><?=lang('idioma.nav_faq');?></a></li>
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
                    <div class="footer_col_title"><?=lang('idioma.social');?></div>
                        <ul>
                            <li><a href="javascript:void(0);"><i class="fa fa-facebook-f fa-2x"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-twitter fa-2x"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-youtube fa-2x"></i></a></li>
                        </ul>
                </div>
            </div>
            <!-- Footer Community -->
            <div class="col-lg-3">
                <div class="footer_col">
                    <div class="footer_col_title"><?=lang('idioma.legal');?></div>
                    <ul>
                        <li class="circle"><a href="<?php echo site_url().'notice/legal';?>"><?=lang('idioma.aviso_legal');?></a></li>
                        <li class="circle"><a href="<?php echo site_url().'notice/privacy';?>"><?=lang('idioma.aviso_privacidad');?></a></li>
                        <li class="circle"><a href="<?php echo site_url().'notice/general';?>"><?=lang('idioma.aviso_generales');?></a></li>
                        <li class="circle"><a href="<?php echo site_url().'notice/cookies';?>"><?=lang('idioma.aviso_cookies');?></a></li>
                    </ul>
                </div>
            </div>
	</div>
    </div>
</footer>