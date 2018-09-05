<?php 
    //INIT VAR
    $active_home = "";
    $active_buy = "";
    $active_login = "";
    $active_faq = "";
    $active_contact = "";

    $url = explode("/",uri_string());
    $nav = $url[1];
    
    if (isset($url[2])){
        $nav_2 = "/".$url[2];
    }else{
        $nav_2 = "";
    }
    
    switch ($nav) {
        case 'home':
            $active_home = "active";
            break;
        case 'buy':
            $active_buy = "active";
            break;
        case 'bank':
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
        <li class="<?php echo $active_home;?>"><a href="<?php echo site_url().'home'?>"><?=lang('idioma.nav_inicio');?></a></li>
        <li class="<?php echo $active_home;?>"><a href="<?php echo site_url().'home';?>#features"><?=lang('idioma.nav_caracteristicas');?></a></li>
        <li class="<?php echo $active_buy;?>"><a href="<?php echo site_url().'buy';?>"><?=lang('idioma.nav_comprar');?></a></li>
        <li class="<?php echo $active_contact;?>"><a href="<?php echo site_url().'home';?>#contact"><?=lang('idioma.nav_contacto');?></a></li>
        <li class="<?php echo $active_login;?>"><a href="<?php echo site_url().'login';?>"><?=lang('idioma.nav_login');?></a></li>
        <li class="<?php echo $active_faq;?>"><a href="<?php echo site_url().'faq';?>"><?=lang('idioma.nav_faq');?></a></li>
        <li>
            <a href='<?php echo site_url()."es/$nav$nav_2";?>' style="display: inline-block"><img src="<?php echo site_url().'static/page_front/images/language/es.png';?>" alt="espanol" width="40"/></a>
            <a href="<?php echo site_url()."en/$nav$nav_2";?>" style="display: inline-block"><img src="<?php echo site_url().'static/page_front/images/language/en.png';?>" alt="espanol" width="40"/></a>
        </li>
    </ul>
</nav>