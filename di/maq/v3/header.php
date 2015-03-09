<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>diDigital</title>
        <link rel="stylesheet" href="css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/jquery.bxslider.css">
        <script src="js/jquery.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/global.js"></script>
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
                <h1><a href="index.php"><img src="img/logo.png" alt="diDigital"></a></h1>
                <ul>
                    <li><a href="index.php" title="Inicio">Inicio</a></li>
                    <li><a href="servicios.php" title="Servicios">Servicios</a></li>
                    <li><a href="metodologia.php" title="Metodología">Metodología</a></li>
                    <li><a href="proyectos.php" title="Proyectos">Proyectos</a></li>
                    <li><a href="clientes.php" title="Clientes">Clientes</a></li>
                    <li><a href="equipo.php" title="Equipo">Equipo</a></li>
                    <li><a href="contacto.php" title="Contactanos"><img src="img/logo_correo_he.png" alt="Contactanos"></a></li>
                </ul>
            </div>
        </header>