<?php
$tit = 'Desarrollo Web, Softwares y Tecnología | OXUS';
$desc_orig = 'Empresa de desarrollo web y softwares a la medida, configuración de servidores, conexiones con API de redes sociales y Google Maps';
$desc = $desc_orig;
$keys = 'desarrollo web, desarrollo medida, softwares, agencia digital, configuración servidores';
if(defined('PAGE')){
    switch(PAGE){
        case 'contacto':
//            $tit='Contacto | OXUS';
            $desc = 'Contáctate con nosotros para conocernos más, enviarnos una cotización, trabajar con nosotros o simplemente conversar.';
            $keys = 'contacto, cotizacion desarrollo, desarrollo web, desarrollo medida, softwares, agencia digital, configuración servidores';
            $jquery = '#contacto';
        break;
        case 'que-hacemos':
//            $tit='Servicios | OXUS';
            $desc = 'Desarrollo a la medida, desarrollo web, configuración de servidores, conexiones con API de redes sociales y Google Maps.';
            $keys = 'servicios oxus, desarrollo web, desarrollo medida, softwares, agencia digital, configuración servidores';
            $jquery = '#hacemos';
        break;
        case 'clientes':
//            $tit='Clientes | OXUS';
            $desc = 'Conoce nuestros clientes, quienes han confiado en nuestras capacidades y actitudes.';
            $keys = 'clientes oxus, clientes desarrollo, desarrollo web, desarrollo medida, softwares, agencia digital, configuración servidores';
            $jquery = '#clientes';
        break;
        case 'experiencia':
//            $tit='Casos de éxito | OXUS';
            $desc = 'Desarrollo sitio web Clínica MEDS, desarrollo para señales de paradas Transantiago, desarrollo prueba SimceTIC';
            $keys = 'casos exito, portafolio, clientes, clinica meds, transantiago, señales de paradas, prueba simce, simce tic, desarrollo web, desarrollo medida, softwares';
            $jquery = '#experiencia';
       break;
        default:
            $tit=$tit;
            $desc=$desc;
            $keys=$keys;
    }
}
?>
<?php define('PAGE_URL', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $tit; ?></title>
        <meta name="description" content="<?php echo $desc; ?>">
        <meta name="keywords" content="<?php echo $keys; ?>">
        <meta property="og:locale" content="es_ES" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php echo $tit; ?>" />
        <meta property="og:description" content="<?php echo $desc_orig; ?>" />
        <meta property="og:url" content="<?php $_SERVER['REQUEST_URI']?>" />
        <meta property="og:site_name" content="OXUS" />
        <meta property="og:image" content="<?php echo PAGE_URL; ?>img/oxus_shared.jpg" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
        <!--FAVICON-->
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo BASE; ?>apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo BASE; ?>apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo BASE; ?>apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo BASE; ?>apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo BASE; ?>apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo BASE; ?>apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo BASE; ?>apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo BASE; ?>apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASE; ?>apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="<?php echo BASE; ?>favicon-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="<?php echo BASE; ?>favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="<?php echo BASE; ?>favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php echo BASE; ?>favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="<?php echo BASE; ?>favicon-32x32.png" sizes="32x32">
        <meta name="msapplication-TileColor" content="#2b5797">
        <meta name="msapplication-TileImage" content="<?php echo BASE; ?>mstile-144x144.png">
        <!-- jQuery library (served from Google) -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <!-- bxSlider Javascript file -->
        <script src="<?php echo BASE; ?>js/jquery.bxslider.min.js"></script>
        <!-- bxSlider CSS file -->
        <link href="<?php echo BASE; ?>css/jquery.bxslider.css" rel="stylesheet" />
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="<?php echo BASE; ?>js/parallax.js"></script>
        <script src="<?php echo BASE; ?>js/jquery.easing.js"></script>
        <script src="<?php echo BASE; ?>js/global.js"></script>
        <script src="<?php echo BASE; ?>js/contact.js"></script>
        <link rel="stylesheet" href="<?php echo BASE; ?>css/style.css">
        <?php if (isset($jquery)) {?>
        <script type="text/javascript">
            $(function(){
                $('html, body').animate({scrollTop:$('<?php echo $jquery; ?>').offset().top-$('header').outerHeight()}, 'slow')
            });
        </script>
        <?php } ?>
        <script>
            function initialize() {
                //MAPA

                var myLatlng = new google.maps.LatLng(-33.432299, -70.632345);
                var thisLatlng = new google.maps.LatLng(-33.432299, -70.622345);

                var myOptions = {
                    zoom: 15, //nivel de zoom
                    center: myLatlng,
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }

                var map = new google.maps.Map(document.getElementById("map"), myOptions);

                var image = '<?php echo BASE; ?>img/mapa.png'; //imagen del marcador

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
            <div class="wrapper">
                <h1>
                    <a href="#inicio" class="logo" title="Oxus"><img src="<?php echo BASE; ?>img/logo.png" alt="OXUS, Innovacion y tecnologia"></a>
                </h1>
                <nav>
                    <a href="#inicio" title="Inicio" data-slug="/" class="active">Inicio</a>
                    <a href="#hacemos" title="Qué Hacemos" data-slug="/que-hacemos/">¿Qué Hacemos?</a>
                    <a href="#experiencia" title="Experiencia" data-slug="/experiencia/">Experiencia</a>
                    <a href="#clientes" title="Clientes" data-slug="/clientes/">Clientes</a>
                    <a href="#contacto" title="Contacto" data-slug="/contacto/">Contacto</a>
                </nav>
            </div>
        </header>