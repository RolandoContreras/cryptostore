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
        case 'allcurrency':
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
        case 'forgot':
            $active_login = "active";
            break;
        default:
            $active_home = "active";
            break;
    }        
?>
<nav class="main_nav justify-self-end text-left">
    <ul>
        <li class="active"><a href="<?php echo site_url().'home'?>"><?=lang('idioma.nav_inicio');?></a></li>
        <li><a href="#features"><?=lang('idioma.nav_caracteristicas');?></a></li>
        <li><a href="<?php echo site_url().'buy';?>"><?=lang('idioma.nav_comprar');?></a></li>
        <li><a href="#contact"><?=lang('idioma.nav_contacto');?></a></li>
        <li><a href="<?php echo site_url().'login';?>"><?=lang('idioma.nav_login');?></a></li>
        <li><a href="<?php echo site_url().'faq';?>"><?=lang('idioma.nav_faq');?></a></li>
        <li>
            <a style="display: inline-block"><img src="<?php echo site_url().'static/page_front/images/language/es.png';?>" alt="espanol" width="40"/></a>
            <a style="display: inline-block"><img src="<?php echo site_url().'static/page_front/images/language/en.png';?>" alt="espanol" width="40"/></a>
        </li>
    </ul>
</nav>