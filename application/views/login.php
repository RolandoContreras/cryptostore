<!DOCTYPE html>
<html lang="es">
<?php $this->load->view("head");?>
<body>
<div id="wrap">
<!--NAV-->
<?php $this->load->view("nav")?>
<!--END NAV-->
<!-- future-adversing -->
<!--START CONTACT-->
<section class="" id="contact">
    <div class="container">
        <div class="future-adversing__text_block">
            <h3>Login</h3>
        </div>
        <div class="lrf-block__form-login">
                <form method="post" id="form-login">
                    <input class="lrf-block__form-input-login" name="username" id="username" type="text" placeholder="Usuario">
                    <label class="lrf-block__form-label">
                    <input class="lrf-block__form-input-login" name="password" id="password" type="password" placeholder="Contraseña">
                    </label>
                    <button class="lrf-block__form-submit" type="submit">Iniciar Sesión</button>
                    <p><a href="<?php echo site_url().'forgot';?>">¿Olvidó su contraseña?</a></p>
                    <label class="lrf-block__form-label"></label>
                    <div id="alert_message"></div>
                </form>
        </div>
    </div>
</section>
<!--END CONTACT-->
<!-- future-adversing END-->



<!-- advisers END-->
<div class="bottom_bg">
<!-- footer -->
<?php $this->load->view("footer");?>
<!-- footer END -->
</div>
<!-- sign-up -->

</div>
<!-- video_modal-start -->
<section class="popup_block__modal"  id="popup-lang" >
<a href="javascript:;" class="popup_bg"></a>
<div class="popup_block centered_block">
<div class=" clearfix">
<a href="javascript:;" class="popup_block__close "  data-dismiss="modal">&times;</a>
<div class="popup_block__overflow popup-lang_content">
<ul>
<li><a href="javascript:void(0);"><img src="<?php echo site_url().'static/page_front/images/lang/lang_en.png';?>" alt=""> English</a></li>
<li><a href="javascript:void(0);"><img src="<?php echo site_url().'static/page_front/images/lang/lang_es.png';?>" alt=""> Español</a></li>
</ul>
</div>
</div>
</div>
</section>
<!-- lang-popup END -->
<!-- lang-popup -->
<script src="<?php echo site_url().'static/page_front/js/jquery-2.2.4.min.js'?>"></script>
<script src="<?php echo site_url().'static/page_front/js/bootstrap.min.js'?>"></script>
<script src="<?php echo site_url().'static/page_front/js/plugins.js?3'?>"></script>
<script src="<?php echo site_url().'static/page_front/js/owl.carousel.min.js'?>"></script>
<link rel="stylesheet" href="<?php echo site_url().'static/page_front/css/owl.carousel.css'?>" />
<script src="<?php echo site_url().'static/page_front/js/script.js?3266'?>"></script>
<script src="<?php echo site_url().'static/page_front/js/webforms.min.js?v3772b61f1ec61c541c401d4eadfdd02f'?>"></script>
<script src="<?php echo site_url().'static/page_front/js/login.js';?>"></script>
<!-- End Alexa Certify Javascript -->
<a href="javascript:;" class="mobile_bag_clicker"></a>
<!-- popup-menu-end -->
</body>
</html>