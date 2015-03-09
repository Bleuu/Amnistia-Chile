<?php include('header.php'); ?>
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
        <div class="contenedor">
            <div class="wrap">
                <section class="bann">
                    <h2>Nuestros Servicios lorem ipsum<br>London calling the Clash.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque rutrum purus sit amet ornare. Morbi nec justo sagittis magna venenatis semper laoreet eu purus. Donec ante diam, suscipit ac lectus quis, dictum ornare ipsum. Morbi pharetra ipsum ac pharetra rutrum.</p>
                </section>
                <section class="servicio">
                    <div class="txt">
                        <div class="izq">
                            <h3>Estrategia Digital.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque rutrum purus sit amet ornare. Morbi nec justo sagittis magna venenatis semper laoreet eu purus. Donec ante diam, suscipit ac lectus quis, dictum ornare ipsum. Morbi pharetra ipsum ac pharetra rutrum. Morbi nec justo sagittis magna venenatis semper laoreet eu purus. Donec ante diam, suscipit ac lectus quis, dictum ornare ipsum. </p>
                            <a href="#" title="18 Proyectos relacionados">18 Proyectos relacionados</a>
                        </div>
                        <div class="der">
                            <img class="img_serv" src="http://i.kinja-img.com/gawker-media/image/upload/s--7UW7Kc_q--/ag4icscfwkw2cnatjypp.jpg" alt="1515">
                        </div>
                    </div>
                    <div class="txt">
                        <div class="izq">
                            <h3>Diseño Web y Consultoría UX.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque rutrum purus sit amet ornare. Morbi nec justo sagittis magna venenatis semper laoreet eu purus. Donec ante diam, suscipit ac lectus quis, dictum ornare ipsum. Morbi pharetra ipsum ac pharetra rutrum. Morbi nec justo sagittis magna venenatis semper laoreet eu purus. Donec ante diam, suscipit ac lectus quis, dictum ornare ipsum. </p>
                            <a href="#" title="23 Proyectos relacionados">23 Proyectos relacionados</a>
                        </div>
                        <div class="der">
                            <img class="img_serv" src="http://i.kinja-img.com/gawker-media/image/upload/s--7UW7Kc_q--/ag4icscfwkw2cnatjypp.jpg" alt="1515">
                        </div>
                    </div>
                    <div class="txt">
                        <div class="izq">
                            <h3>Posicionamiento.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque rutrum purus sit amet ornare. Morbi nec justo sagittis magna venenatis semper laoreet eu purus. Donec ante diam, suscipit ac lectus quis, dictum ornare ipsum. Morbi pharetra ipsum ac pharetra rutrum. Morbi nec justo sagittis magna venenatis semper laoreet eu purus. Donec ante diam, suscipit ac lectus quis, dictum ornare ipsum. </p>
                            <a href="#" title="9 Proyectos relacionados">9 Proyectos relacionados</a>
                        </div>
                        <div class="der">
                            <img class="img_serv" src="http://i.kinja-img.com/gawker-media/image/upload/s--7UW7Kc_q--/ag4icscfwkw2cnatjypp.jpg" alt="1515">
                        </div>
                    </div>
                    <div class="txt">
                        <div class="izq">
                            <h3>Email Marketing.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque rutrum purus sit amet ornare. Morbi nec justo sagittis magna venenatis semper laoreet eu purus. Donec ante diam, suscipit ac lectus quis, dictum ornare ipsum. Morbi pharetra ipsum ac pharetra rutrum. Morbi nec justo sagittis magna venenatis semper laoreet eu purus. Donec ante diam, suscipit ac lectus quis, dictum ornare ipsum. </p>
                            <a href="#" title="13 Proyectos relacionados">13 Proyectos relacionados</a>
                        </div>
                        <div class="der">
                            <img class="img_serv" src="http://i.kinja-img.com/gawker-media/image/upload/s--7UW7Kc_q--/ag4icscfwkw2cnatjypp.jpg" alt="1515">
                        </div>
                    </div>
                    <div class="baj">
                        <img src="img/logo_correo_serv.png" alt="Contacto">
                        <p>Nuestros clientes lorem ipsum opus dei!  › <a href="#">Clientes</a></p>
                    </div>
                    <div class="baj">
                        <img src="img/logo_correo_serv.png" alt="Contacto">
                        <p>Queremos conocer su proyecto!  ›<a href="#"> Contactar</a></p>
                    </div>
                </section>
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