<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>diDigital</title>
        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css">
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/global.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script>
            function initialize() {
                //MAPA
                var myLatlng = new google.maps.LatLng(-33.432318, -70.622318);
                var thisLatlng = new google.maps.LatLng(-33.432299, -70.622345);
                var myOptions = {
                    zoom: 16, //nivel de zoom
                    center: myLatlng,
                    scrollwheel: true,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(document.getElementById("map"), myOptions);
                var image = 'img/mapa.png'; //imagen del marcador
                var marker = new google.maps.Marker({
                    position: thisLatlng,
                    map: map,
                    icon: image
                });
                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </head>
    <body>
        <header>
            <div class="wrap">
                <h1><a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="diDigital"></a></h1>
                <ul>
                    <li><a href="<?php echo site_url(); ?>" title="Inicio">Inicio</a></li>
                    <?php 
query_posts(array(
    'pagename'=>'servicios',
    'showposts'=>1
));
if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post();
                    ?>
                    <li><a href="<?php the_permalink(); ?> " title="<?php the_title(); ?> "><?php the_title(); ?></a></li>
                    <?php endwhile; endif; ?>
                    <li><a href="metodologia.php" title="Metodología">Metodología</a></li>
                    <li><a href="proyectos.php" title="Proyectos">Proyectos</a></li>
                    <?php 
query_posts(array(
    'pagename'=>'clientes',
    'showposts'=>1
));
if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post();
                    ?>
                    <li><a href="<?php the_permalink(); ?> " title="<?php the_title(); ?> "><?php the_title(); ?></a></li>
                    <?php endwhile; endif; ?>
                    <li><a href="equipo.php" title="Equipo">Equipo</a></li>
                    <li><a href="contacto.php" title="Contactanos"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_correo_he.png" alt="Contactanos"></a></li>
                </ul>
            </div>
        </header>