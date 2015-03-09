<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Transantiago</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/rutas.css">
        <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="css/default_mod.css">
        <link rel="stylesheet" href="css/jscrollpane.css">
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/bootstrap-datetimepicker.min.js"></script>
        <script src="js/modal.js"></script>
        <script src="js/tab.js"></script>
        <script src="js/dropdown.js"></script>
        <script src="js/scrollspy.js"></script>
        <script src="js/collapse.js"></script>
        <script src="js/alert.js"></script>
        <script src="js/transition.js"></script>
        <script src="js/global.js"></script>
        <script src="js/jquery-jscrollpane.min.js"></script>
        <script src="js/jquery-mousewheel.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
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
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </head>
    <body>
        <header class="col-xs-12 navbar navbar-inverse navbar-fixed-top nopad">
            <div class="nav_top col-xs-12 nopad">
                <div class="container">
                    <div class="col-xs-12 head_top desk">
                        <a href="reclamos.php" title="Reclamos y sugerencias">Reclamos y sugerencias</a>
                        <p>|</p>
                        <p>Llámanos</p>
                        <p class="bold"><span id="phone"></span>800 73 0073</p>
                        <p class="bold"><span id="cel"></span>600 730 0073</p>
                        <p>|</p>
                        <p>Siguenos en:</p>
                        <a href="http://www.facebook.com" target="_blank" title="Facebook">Face</a>
                        <a href="http://www.twitter.com" target="_blank" title="Twitter">Twit</a>
                        <a href="http://www.youtube.com" target="_blank" title="Youtube">You</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1 class="logo navbar-brand"><a href="index.php" title="Transantiago" id="home"><img src="img/logo.png" alt="Transantiago"></a></h1>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php" title="Transantiago" id="home">Inicio</a></li>
                        <li class="dropdown">
                            <button id="menu_plan" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planifica tu viaje <span class="caret"></span></button>
                            <ul class="dropdown-menu force_pad" role="menu" aria-labelledby="menu_plan">
                                <li>
                                    <a href="planifica.php" title="Cuando llega">Cuando llega</a>
                                </li>
                                <li>
                                    <a href="planifica.php" title="Paradas y bip">Paradas y bip</a>
                                </li>
                                <li>
                                    <a href="planifica.php" title="Como llegar">Como llegar</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <button id="menu_estado" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Estado del servicio <span class="caret"></span></button>
                            <ul class="dropdown-menu force_pad" role="menu" aria-labelledby="menu_estado">
                                <li>
                                    <p>¿Como esta mi recorrido?</p>
                                    <div class="col-xs-12">
                                        <div class="col-xs-12 cod_serv input-group form-group">
                                            <input type="text" class="form-control" placeholder="Código del servicio" aria-describedby="cod_servicio">
                                            <span class="input-group-addon btn princ mdm" id="cod_servicio">Buscar</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="single-alerta-sistema.php" title="Alertas del sistema de transporte">Alertas del sistema de transporte</a>
                                </li>
                                <li>
                                    <a href="single-alteraciones.php" title="Alteraciones no planficadas">Alteraciones no planficadas</a>
                                </li>
                                <li>
                                    <a href="single-desvios.php" title="Desvios planificados">Desvios planificados</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <button id="menu_mapa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mapas y recorridos <span class="caret"></span></button>
                            <ul class="dropdown-menu force_pad" role="menu" aria-labelledby="menu_mapa">
                                <li>
                                    <p>¿Ver detalle del recorrido?</p>
                                    <div class="col-xs-12">
                                        <div class="col-xs-12 cod_serv input-group form-group">
                                            <input type="text" class="form-control" placeholder="Código del servicio" aria-describedby="cod_servicio">
                                            <span class="input-group-addon btn princ mdm" id="cod_servicio">Buscar</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="mapas-recorridos.php" title="Mapas de recorridos">Mapas de recorridos</a>
                                </li>
                                <li>
                                    <a href="single-recorrido.php" title="Recorridos">Recorridos</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <button id="menu_tarifa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tarifas y pagos <span class="caret"></span></button>
                            <ul class="dropdown-menu force_pad" role="menu" aria-labelledby="menu_tarifa">
                                <li>
                                    <a href="#" title="Tarifa Bip">Tarifa Bip</a>
                                </li>
                                <li>
                                    <a href="#" title="Tarifa Nacional Estudiantil - TNE">Tarifa Nacional Estudiantil - TNE</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <button id="menu_tarifa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acerca de transantiago <span class="caret"></span></button>
                            <ul class="dropdown-menu force_pad" role="menu" aria-labelledby="menu_tarifa">
                                <li>
                                    <a href="informacion-sistema.php" title="Información del sistema">Información del sistema</a>
                                </li>
                                <li>
                                    <a href="aprende-a-usar-transantiago.php" title="Aprende a usar transantiago">Aprende a usar transantiago</a>
                                </li>
                                <li>
                                    <a href="#" title="Seguro obligatorio SOAP">Seguro obligatorio SOAP</a>
                                </li>
                                <li>
                                    <a href="#" title="Stands de atención">Stands de atención</a>
                                </li>
                                <li>
                                    <a href="#" title="Accesibilidad del sistema">Accesibilidad del sistema</a>
                                </li>
                                <li>
                                    <a href="tus-ideas-en-tu-paradero.php" title="Tus ideas en tu paradero">Tus ideas en tu paradero</a>
                                </li>
                                <li>
                                    <a href="#" title="Circuito cultural">Circuito cultural</a>
                                </li>
                            </ul>
                        </li>
                        <!--
<li><a href="planifica.php" title="Planifica tu viaje">Planifica tu viaje <span class="caret"></span></a></li>
<li><a href="estado-del-servicio.php" title="Estado del servicio">Estado del servicio <span class="caret"></span></a></li>
<li><a href="mapas-recorridos.php" title="Mapas y recorridos">Mapas y Recorridos <span class="caret"></span></a></li>
<li><a href="tarifas.php" title="Tarifas y pago">Tarifas y pago <span class="caret"></span></a></li>
<li><a href="acerca-de-transantiago.php" title="Acerca de Transantiago">Acerca de Transantiago <span class="caret"></span></a></li>
-->
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </header>