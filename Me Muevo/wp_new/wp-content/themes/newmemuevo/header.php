<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url')?>/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url')?>/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url')?>/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url')?>/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url')?>/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url')?>/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url')?>/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url')?>/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url')?>/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/favicon-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/favicon-32x32.png" sizes="32x32">
        <meta name="msapplication-TileColor" content="#ffc40d">
        <meta name="msapplication-TileImage" content="mstile-144x144.png">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/normalize.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/style.css">
        <!--[if lt IE 9]>
            <script src="<?php bloginfo('template_url')?>/js/html5shiv.js"></script>
            <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/style_ie.css">
            <script src="<?php bloginfo('template_url')?>/js/respond.min.js"></script>
        <![endif]-->
        <script src="<?php bloginfo('template_url')?>/js/jquery.js"></script>
        <script src="<?php bloginfo('template_url')?>/js/jquery.bxslider.min.js"></script>
        <script src="<?php bloginfo('template_url')?>/js/global.js"></script>
        <meta name="google-site-verification" content="Zzps8AGwjgcgu87rOzE32XpkNVEUibaEiTOOerPg85g" />
        <!--FACEBOOK-->
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <div class="wrapper">
                <h1><a href="<?php echo bloginfo('url')?>" title="Fundación Me Muevo"><img src="<?php bloginfo('template_url')?>/img/logo.png" alt="Me Muevo"></a></h1>
                <nav>
                    <a href="<?php bloginfo('url')?>" title="Inicio" id="hm" <?php if($_SERVER['REQUEST_URI'] == '/') { echo 'class="active"'; } ?>><span></span>Inicio <div class="bar"></div></a>
                    <a href="<?php echo get_post_type_archive_link('articulos'); ?>" title="Articulos" id="art" <?php if($_SERVER['REQUEST_URI'] == '/articulos/' || $_SERVER['REQUEST_URI'] == '/articulos/'.get_queried_object()->post_name.'/'){ echo 'class="active"'; } ?>><span></span>Artículos <span class="bar"></span></a>
                    <a href="<?php echo get_post_type_archive_link('prensa'); ?>" title="Prensa" id="prn" <?php if($_SERVER['REQUEST_URI'] == '/prensa/' || $_SERVER['REQUEST_URI'] == '/prensa/'.get_queried_object()->post_name.'/') { echo 'class="active"'; } ?>><span></span>Prensa <span class="bar"></span></a>
                    <a href="<?php bloginfo('url')?>/quienes-somos" title="Quienes Somos" id="sm" <?php if($_SERVER['REQUEST_URI'] == '/quienes-somos/') { echo 'class="active"'; } ?>><span></span>Quiénes Somos <span class="bar"></span></a>
                    <a href="<?php bloginfo('url')?>/areas-de-trabajo" title="Áreas de trabajo" id="dir" <?php if($_SERVER['REQUEST_URI'] == '/areas-de-trabajo/') { echo 'class="active"'; } ?>><span></span>Áreas de trabajo <span class="bar"></span></a>
                    <a href="<?php bloginfo('url')?>/artritis-chile" title="Artritis Chile" id="arc" <?php if($_SERVER['REQUEST_URI'] == '/artritis-chile/') { echo 'class="active"'; } ?>><span></span>Artritis Chile <span class="bar"></span></a>
                    <a href="<?php bloginfo('url')?>/contacto" title="Contacto" id="cnt" <?php if($_SERVER['REQUEST_URI'] == '/contacto/') { echo 'class="active"'; } ?>><span></span>Contacto <span class="bar"></span></a>
                </nav>
                <?php //get_template_part('redes','sociales');?>
            </div> 
        </header>
