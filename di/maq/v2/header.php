<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Servicios</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
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
                <h1><img src="img/logo.png" alt="diDigital"></h1>
                <ul>
                    <li><a href="#" title="Inicio">Inicio</a></li>
                    <li><a href="#" title="Servicios">Servicios</a></li>
                    <li><a href="#" title="Metodología">Metodología</a></li>
                    <li><a href="#" title="Proyectos">Proyectos</a></li>
                    <li><a href="#" title="Clientes">Clientes</a></li>
                    <li><a href="#" title="Equipo">Equipo</a></li>
                    <li><a href="#" title="Contactanos"><img src="img/logo_correo_he.png" alt="Contactanos"></a></li>
                </ul>
            </div>
        </header>
</body>
</html>