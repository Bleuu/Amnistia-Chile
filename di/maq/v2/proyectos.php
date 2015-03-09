<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Proyectos</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <link rel="header" href="header.php">
        <link rel="footer" href="footer.php">
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
        <div class="cont_pro">
            <div class="wrap">
                <section class="bann">
                    <h2>Hemos estado involucrados en proyectos lorem ipsum opus dei.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque rutrum purus sit amet ornare. Morbi nec justo sagittis magna venenatis semper laoreet eu purus. Donec ante diam, suscipit ac lectus quis, dictum ornare ipsum. Morbi pharetra ipsum ac pharetra rutrum.</p>
                </section>
            </div>
        </div>

        <div class="serv_contact">
            <div class="wrap">
                <div class="dts_contact">
                    <div class="izq">
                        <h2>Contacto</h2>
                        <div class="datos">
                            <div class="img_dt"></div>
                            <div class="mail">
                                <a href="mailto:info@didigital.cl"><p>info@didigital.cl</p></a>
                            </div>
                        </div>
                        <div class="datos">
                            <div class="img_dt" id="phone"></div>
                            <p>+56 2 2235 26 59 </p>
                        </div>
                        <div class="datos">
                            <div class="img_dt" id="adress"></div>
                            <p>Huelen 164, Piso 2, Providencia, Santiago de Chile. </p>
                        </div>
                        <p class="baj_dreservados">Todos los derechos reservados © 2014 diDigital</p>
                    </div>
                    <div class="der">
                        <div class="map" id="map"></div>
                        <div class="icon_serv">
                            <a href="#" title="Facebook" id="face"></a>
                            <a href="#" title="Twitter" id="twit"></a>
                            <a href="#" title="Instagram" id="inst"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>