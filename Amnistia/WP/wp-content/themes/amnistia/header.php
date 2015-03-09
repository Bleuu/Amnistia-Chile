<?php $_SESSION['data-banners'] = get_sidebar_header(); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Defendemos los Derechos Humanos en todo el mundo. Entérate, indígnate, actúa. Santiago de Chile.">
        <meta name="keywords" content="Amnistia Internacional, Amnistia Internacional, Amnistia, Derechos Humanos">
        <meta name="author" content="diDigital">
        <?php if(!is_singular('nota')){
            echo '<meta name="robots" content="index, follow">';
        }else{
            echo '<meta name="robots" content="noindex, nofollow">';
        }?>
        
        <meta name="viewport" content="width=device-width">
        <!--FACEBOOK    -->
        <!-- 
<meta property="og:image" content="<?php bloginfo('url'); ?>/img/logo.png" />
<meta property="og:description" content="AQUI VA DESCRIPCION" />
<meta property="og:title" content="AQUI VA TITULO" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.amnistia.cl/" />
<meta property="og:site_name" content="Amnistia Internacional" />
<meta property="fb:admins" content="AQUI VA ALGO" />
-->
        <!--TWITTER-->
        <!--
<meta name="twitter:card" content="RELLENAR TWITTER" />
<meta name="twitter:site" content="@amnistiachile" />
<meta name="twitter:creator" content="@amnistiachile" />
<meta name="twitter:description" content="AQUI VA DESCRIPCION" />
<meta name="twitter:title" content="AQUI VA TITULO" />
<meta name="twitter:image" content="<?php bloginfo('url'); ?>/img/logo.png" />
-->
        <!--GOOGLE PLUS-->
        <!--
<meta property="og:title"        content="AQUI VA TITULO" />
<meta property="og:url"          content="http://www.amnistia.cl/" />
<meta property="og:type"         content="AQUI VA TIPO" />
<meta property="og:description"  content="AQUI VA DESCRIPCION" />
<meta property="og:site_name"    content="amnisita.com" />
<meta property="fb:app_id"       content="aqui va algo" />
<meta property="og:language"     content="es" />
<meta property="og:image"        content="<?php bloginfo('url'); ?>/img/logo.png" />
-->
        <title>
            <?php wp_title('|',true,'right'); ?>
            <?php bloginfo('name'); ?>
        </title>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
        <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/layout.css">
        <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/sections.css">
        <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/form.css">
        <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/ui-lightness/jquery-ui-1.10.3.custom.css">
        <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/style.css">

        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.2.min.js"></script>
        <?php //wp_enqueue_script('jquery'); ?>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.jcarousel.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.10.3.custom.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/datepicker-esp.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/form.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/global.js"></script>

        <?php wp_head(); ?>
    </head>
    <body>
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <header class="container">
            <div class="wrap">
                <div class="logo">
                    <a href="<?php bloginfo('url'); ?>" title="Volver al inicio">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" title="Amnistía Internacional" alt="logo" />
                    </a>
                </div>
                <a href="<?php bloginfo('url'); ?>" class="country"></a>
                <div class="bar_header">
                    <ul>
                        <li><a href="<?php bloginfo('url'); ?>/prensa">Prensa</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/documentos-importantes">Documentos</a></li>
                        <li><a href="http://www.amnesty.org/es" target="_blank">Secretariado Internacional</a></li>
                        <li>
                            <a href="https://www.facebook.com/pages/Amnist%C3%ADa-Internacional-Chile/126170624336" class="icon_social facebook" target="_blank" title="Facebook"></a>
                            <a href="https://twitter.com/amnistiachile" class="icon_social twitter" target="_blank" title="Twitter"></a>
                            <a href="https://www.youtube.com/user/aichile1" class="icon_social youtube" target="_blank" title="Youtube"></a>
                            <!--<a href="<?php bloginfo('rss2_url'); ?>" class="icon_social rss" target="_blank" title="RSS"></a>-->
                        </li>
                        <li>
                            <?php get_search_form(); ?> 
                        </li>
                    </ul>   
                </div><!--bar_header-->
                <div class="text_header">
                    Amnistía Internacional es un movimiento que promueve y defiende los derechos humanos en Chile y en el mundo.
                </div>
            </div>
        </header>
        <nav class="container">
            <div class="wrap">
                <ul>
                    <li>
                        <a href="<?php bloginfo('url'); ?>" title="Inicio" >Inicio</a>
                        <div class="submenu">
                            <a href="<?php bloginfo('url'); ?>" title="Inicio" class="nav_hover">Inicio</a>
                        </div>
                    </li>
                    <li>
                        <?php submenu_pageparent('quienes-somos') ?>
                    </li>
                    <li>
                        <?php submenu_pageparent('nuestro-trabajo') ?>
                    </li>
                    <li>
                        <?php submenu_pageparent('actua', 'col2-foto', '4') ?>
                    </li>
                    <li><a href="<?php bloginfo('url'); ?>/asociate" title="Asóciate" >Asóciate</a>
                        <div class="submenu">
                            <a href="<?php bloginfo('url'); ?>/asociate" title="Asóciate" class="nav_hover">Asóciate</a>
                        </div>
                    </li>
                </ul>
                <ul class="nav_right">
                    <li>
                        <a href="<?php bloginfo('url'); ?>/noticias" title="Noticias" >Noticias</a>
                        <div class="submenu">
                            <a href="<?php bloginfo('url'); ?>/noticias" title="Noticias" class="nav_hover nav_right">Noticias</a>
                        </div>
                    </li>
                    <li>
                        <a href="http://listado.mercadolibre.cl/amnist%C3%ADa" title="Tienda" >Tienda</a>
                        <div class="submenu">
                            <a href="http://listado.mercadolibre.cl/amnist%C3%ADa" title="Tienda" target="_blank" class="nav_hover nav_right">Tienda</a>
                        </div>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/trabaja-con-nosotros" title="Trabaja con nosotros" >Trabaja en AI</a>
                        <div class="submenu">
                            <a href="<?php bloginfo('url'); ?>/trabaja-con-nosotros" title="Trabaja con nosotros" class="nav_hover nav_right">Trabaja en AI</a>
                        </div>
                    </li>
                </ul>
            </div><!--wrap-->
        </nav><!--container-->
        <?php
            if(!is_search()){
        ?>
        <div class="container banner" <?php if( is_home()) echo 'style="display:none;"'?>>
            <div class="wrap">
                <?php
                    echo $_SESSION['data-banners'][0];
                ?>
            </div>
        </div>
        <?php }?>