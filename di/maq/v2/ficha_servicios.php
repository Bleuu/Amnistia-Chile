<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ficha Servicios</title>
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
        <div class="cont_fic_serv">
            <div class="wrap">
                <div class="banner_serv">
                    <p>Inicio › Servicios</p>
                    <h2>Estrategia Digital</h2>
                </div>
            </div>
            <div class="ban_serv_baj">
                <div class="wrap">
                    <p>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. </p>
                </div>
            </div>
            <div class="ficha_serv">
                <div class="wrap">
                    <div class="all_fi">
                        <div  class="izq">
                            <div class="txt">
                                <h3>Estrategia Digital lorem ipsum color morbi is justo purus of coalesed dumb it.</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque rutrum purus sit amet ornare. Morbi nec justo sagittis magna venenatis semper laoreet eu purus. Donec ante diam, suscipit ac lectus quis, dictum ornare ipsum. Morbi pharetra ipsum ac pharetra rutrum. <br>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. <br>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. </p>
                            </div>

                            <div class="cl_cont">
                                <div class="txt"><p>Clientes que han contratado este servicio:</p></div>
                                <div class="cl_lnk">
                                    <a href="#" title="Transantiago">Transantiago</a>
                                    <a href="#" title="Transantiago">Transantiago</a>
                                    <a href="#" title="Transantiago">Transantiago</a>
                                    <a href="#" title="Transantiago">Transantiago</a>
                                    <a href="#" title="Transantiago">Transantiago</a>
                                    <a href="#" title="Transantiago">Transantiago</a>
                                    <a href="#" title="Transantiago">Transantiago</a>
                                    <a href="#" title="Transantiago">Transantiago</a>
                                    <a href="#" title="Transantiago">Transantiago</a>
                                </div>
                            </div>
                        </div>
                        <div class="der">
                            <img src="img/amnistia.png" alt="img ds">
                            <img src="img/amnistia.png" alt="img ds">
                            <img src="img/amnistia.png" alt="img ds">
                            <img src="img/amnistia.png" alt="img ds">
                            <div>
                                <p>Nuestros clientes lorem ipsum opus dei!  › <a href="Clientes">Clientes</a></p>
                                <p>Queremos conocer su proyecto!  › <a href="Contactar">Contactar</a></p>
                            </div>
                        </div>
                    </div>
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
        </div>
    </body>
</html>