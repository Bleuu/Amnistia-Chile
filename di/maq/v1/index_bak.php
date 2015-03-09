<?php define('BASE', ''); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>diDigital</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/proyectos.css">
        <link rel="stylesheet" href="css/jquery.bxslider.css">
        <script src="js/jquery.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/global.js"></script>
        <script src="js/contact.js"></script>
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
                    <li><a href="#banner" title="Inicio">INICIO</a></li>
                    <li><a href="#service" title="Servicios">SERVICIOS</a></li>
                    <li><a href="#clientes" title="Clientes">CLIENTES</a></li>
                    <li><a href="#equipo" title="Nosotros">NOSOTROS</a></li>
                    <li><a href="#contacto" title="Contacto">CONTACTO</a></li>
                </ul>
            </div>
        </header>
        <div class="container">
            <section id="banner">
                <ul class="bxslider">
                    <li id="cvive">
                        <div class="texture"></div>
                        <div class="um" style="background-image:url('img/proyectos/cvive-back.jpg');"></div>
                        <div class="cnt_banner">
                            <div class="wrap">
                                <div class="left">
                                    <h2>Consalud</h2>
                                    <h3>Sitio Web de Campaña C-Vive</h3>
                                    <div class="txt_here">
                                        <p><strong>Armamos y desarrollamos el sitio de promoción y fidelización de planes de salud de Consalud.</strong></p>
                                    </div>
                                    <a href="#" class="ver_mas boton">Más Detalles</a>
                                </div>
                                <div class="right">
                                    <img src="img/proyectos/cvive-front.png" alt="C-Vive Versión móvil">
                                </div>
                            </div>
                        </div>
                        <div class="inner_box">
                            <div class="wrap">
                                <div class="cont_l">
                                    <div class="l_left">
                                        <h2>Consalud</h2>
                                        <h3>Sitio Web de Campaña C-Vive</h3>
                                        <div class="txt_here">
                                            <p>
                                                Trabajando de forma colaborativa con Dittborn&Unzueta, hicimos posible este sitio de campaña, que permite la búsqueda sencilla de planes de salud, promoviendo su uso y fidelización a través de puntos canjeables, en base a acciones de invitación y participación en eventos de Consalud, en un contexto lúdico y acorde al público objetivo.
                                            </p>
                                        </div>
                                        <a href="#" class="ver_menos boton">Ocultar Detalles</a>
                                    </div>
                                    <div class="l_right">
                                        <div class="img_banner">
                                            <div class="ban_img" data-img="http://wallpapers111.com/wp-content/uploads/2015/01/photos-of-brad-pitt.jpg">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                            <div class="ban_img" data-img="http://sp8.fotolog.com/photo/40/0/127/nico_chiquitita/1277941667118_f.jpg">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                            <div class="ban_img" data-img="http://coo3.tuvotacion.com:81/imagenes_opciones/los-mas-minos-ricos-hermosos-bellos-360552.jpg">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                            <div class="ban_img" data-img="l1_img4">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                            <div class="ban_img" data-img="l1_img5">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                            <div class="ban_img" data-img="l1_img6">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                        </div>
                                        <div class="lnk_box">
                                            <div class="down">
                                                <strong>Hicimos:</strong>
                                                <ul>
                                                    <li>Estrategia digital</li>
                                                    <li>Diseño de interfaz (colaborativo)</li>
                                                    <li>Desarrollo front-end (HTML+CSS+jQuery)</li>
                                                    <li>Desarrollo backend</li>
                                                    <li>Conexiones con redes sociales</li>
                                                </ul>
                                            </div>
                                            <p class="down">
                                                <a href="http://www.c-vive.cl" title="Sitio Web C-Vive">www.c-vive.cl</a> - 
                                                <em>Desde Agosto 2014</em>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="btn_close exit"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="monticello">
                        <div class="texture"></div>
                        <div class="deux" style="background-image:url('img/proyectos/monticello-back.jpg');"></div>
                        <div class="wrap">
                            <div class="cnt_banner">
                                <div class="left">
                                    <h2>Monticello</h2>
                                    <h3>Sitio Web<br/>Corporativo</h3>
                                    <div class="txt_here">
                                        <p><strong>Trabajando de forma colaborativa con BBDO, logramos crear un administrador de contenidos tremendo para un cliente tremendo, y para un diseño en constante evolución.</strong></p>
                                    </div>
                                    <a href="#" class="ver_mas boton">Más Detalles</a>
                                </div>
                                <div class="right">
                                    <img src="img/proyectos/monticello-front.png" alt="Monticello Sitio Web">
                                </div>
                            </div>

                            <div class="l_box" id="l_box">
                                <div class="l_left">
                                    <h2>Monticello:<br>Sitio Monticello</h2>
                                    <div class="txt_here">
                                        <p>
                                            Este sitio permite la búsqueda sencilla de planes de salud, promoviendo su uso y fidelización a través de puntos canjeables, en base a acciones de invitación y participación en eventos de Consalud.
                                        </p>
                                    </div>
                                    <a href="#" class="boton ver_menos">Menos Detalles</a>
                                </div>
                                <div class="l_right">
                                    <div class="img_banner">
                                        <div class="img_banner">
                                            <div class="ban_img" data-img="l2_img1">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                            <div class="ban_img" data-img="l1_img2">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                            <div class="ban_img" data-img="l1_img3">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                            <div class="ban_img" data-img="l1_img4">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                            <div class="ban_img" data-img="l1_img5">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                            <div class="ban_img" data-img="l1_img6">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lnk_box">
                                        <a href="#" title="blablabl">www.youtube.com</a>
                                        <p class="down">Diseño web bblalblab</p>
                                        <p class="down">fecha</p>
                                    </div>
                                </div>
                                <div class="btn_close exit"></div>
                            </div>
                        </div>
                    </li>
                    <li id="senator">
                        <div class="texture"></div>
                        <div class="um" style="background-image:url('img/proyectos/senator-back.jpg');"></div>
                        <div class="wrap">
                            <div class="cnt_banner">
                                <div class="left">
                                    <h2>Senator Chile</h2>
                                    <h3>Sitio Web<br/>Corporativo</h3>
                                    <div class="txt_here">
                                        <p><strong>Modernización del sitio web de Senator Chile para despliegue de sus servicios e itinerarios de viaje.</strong></p>
                                    </div>
                                    <a href="#" class="ver_mas">Más Detalles</a>
                                </div>
                                <div class="right">
                                    <img src="img/proyectos/senator-front.png" alt="Senator Sitio Web">
                                </div>

                            </div>
                            <div class="l_box" id="l_box">
                                <div class="cont_l">
                                    <div class="l_left">
                                        <h2>Senator:<br>Sitio Senator Chile</h2>
                                        <div class="txt_here">
                                            <p>Se planteó el sitio web de Senator Chile como un sitio que continúe la línea de calidad de Senator International pero ahora, de forma local. El sitio es multilenguaje, autoadministrable y con una experiencia de usuario bastante simple, pudiendo adaptarse así, a sus usuarios objetivos. Las próximas etapas del proyecto facilitarán la solicitud de servicios de forma electrónica y la integración con sistemas internos de la compañía.</p>
                                        </div>
                                        <div class="btn_close boton">
                                            <a href="#" class="ver_menos">Menos Detalles</a>
                                        </div>
                                    </div>
                                    <div class="l_right">
                                        <div class="img_banner twoimg">
                                            <div class="ban_img" data-img="l1_img1">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                            <div class="ban_img" data-img="l1_img2">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                        </div>
                                        <div class="lnk_box">
                                            <a href="#" title="blablabl">www.google.com</a>
                                            <p class="down">Diseño web bblalblab</p>
                                            <p class="down">Fecha</p>
                                        </div>
                                    </div>
                                    <div class="btn_close exit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="bice">
                        <div class="texture"></div>
                        <div class="deux" style="background-image:url('img/proyectos/bice-back.jpg');"></div>
                        <div class="wrap">
                            <div class="cnt_banner">
                                <div class="left">
                                    <h2>BICE Inversiones</h2>
                                    <h3>Aplicación móvil de inversiones</h3>
                                    <div class="txt_here">
                                        <p><strong>Arquitectura, diseño y construcción de la aplicación mobile de monitoreo de inversiones, mercados y acciones locales en línea.</strong></p>
                                    </div>
                                    <a href="#" class="ver_mas">Más Detalles</a>
                                </div>
                                <div class="right">
                                    <img src="img/sexy_hand.png" alt="Sexy Hand">
                                </div>
                            </div>

                            <div class="l_box" id="l_box">
                                <div class="l_left">
                                    <h2>BICE Inversiones:</h2>
                                    <div class="txt_here">
                                        <p>
                                            La aplicación BICE Inversiones permite conocer en línea el comportamiento de las principales bolsas del mundo, commodities, monedas, tasas y Acciones locales. Además de revisar el resumen de inversiones (Pesos, Dólar y APV), consultar las órdenes de acciones y el estado de las operaciones de sus clientes donde quiera que se encuentren.
                                        </p>
                                    </div>
                                    <div class="btn_close boton">
                                        <a href="#" class="ver_menos">Menos Detalles</a>
                                    </div>
                                </div>
                                <div class="l_right">
                                    <div class="img_banner">
                                        <div class="img_banner">
                                            <div class="ban_img" data-img="l2_img1">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                            <div class="ban_img" data-img="l1_img2">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                            <div class="ban_img" data-img="l1_img3">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                            <div class="ban_img" data-img="l1_img4">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                            <div class="ban_img" data-img="l1_img5">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                            <div class="ban_img" data-img="l1_img6">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lnk_box">
                                        <a href="#" title="blablabl">www.youtube.com</a>
                                        <p class="down">Diseño web bblalblab</p>
                                        <p class="down">fecha</p>
                                    </div>
                                </div>
                                <div class="btn_close exit"></div>
                            </div>
                        </div>
                    </li>
                    <li id="simcetic">
                        <div class="texture"></div>
                        <div class="um" style="background-image:url('img/proyectos/simcetic-back.jpg');"></div>
                        <div class="wrap">
                            <div class="cnt_banner">
                                <div class="left">
                                    <h2>Simce TIC</h2>
                                    <h3>Sistema Operativo para Prueba Simce TIC</h3>
                                    <div class="txt_here">
                                        <p><strong>Diseño de interfaz del Sistema Operativo, simulado para la prueba Simce de Tecnologías de la Información.</strong></p>
                                    </div>
                                    <a href="#" class="ver_mas">Más Detalles</a>
                                </div>
                                <div class="right">
                                    <img src="img/sexy_hand.png" alt="Sexy Hand">
                                </div>

                            </div>
                            <div class="l_box" id="l_box">
                                <div class="cont_l">
                                    <div class="l_left">
                                        <h2>Simce TIC:</h2>
                                        <div class="txt_here">
                                            <p>
                                                El objetivo del proyecto fue el proponer a los alumnos de la prueba, un sistema operativo libre que permita validar conocimientos de navegación en internet,  uso de software de ofimaticá y acciones básicas de sistema operativo.
                                            </p>
                                        </div>
                                        <div class="btn_close boton">
                                            <a href="#" class="ver_menos">Menos Detalles</a>
                                        </div>
                                    </div>
                                    <div class="l_right">
                                        <div class="img_banner">
                                            <div class="ban_img" data-img="l1_img1">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                            <div class="ban_img" data-img="l1_img2">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                            <div class="ban_img" data-img="l1_img3">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                            <div class="ban_img" data-img="l1_img4">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                            <div class="ban_img" data-img="l1_img5">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                            <div class="ban_img" data-img="l1_img6">
                                                <img src="img/amnistia.png" alt="">
                                            </div>
                                        </div>
                                        <div class="lnk_box">
                                            <a href="#" title="blablabl">www.google.com</a>
                                            <p class="down">Diseño web bblalblab</p>
                                            <p class="down">Fecha</p>
                                        </div>
                                    </div>
                                    <div class="btn_close exit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </section>
            <section id="service">
                <div class="wrap">
                    <h2>Servicios</h2>
                    <div class="service">
                        <div class="img_srv"></div>
                        <h2><strong>Estrategia Digital</strong></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque rutrum purus sit amet ornare.</p>
                    </div>
                    <div class="service"> 
                        <div class="img_srv" id="srv_two"></div>
                        <h2><strong>Diseño Web</strong></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque rutrum purus sit amet ornare.</p>
                    </div>
                    <div class="service">
                        <div class="img_srv" id="srv_three"></div>
                        <h2><strong>Posicionamiento</strong></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque rutrum purus sit amet ornare.</p>
                    </div>
                    <div class="service"> 
                        <div class="img_srv" id="srv_four"></div>
                        <h2><strong>Email Marketing</strong></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque rutrum purus sit amet ornare.</p>
                    </div>
                </div>
            </section>
            <section id="clientes">
                <div class="texture"></div>
                <div class="wrap">
                    <div class="tit">
                        <h2>Clientes</h2>
                        <div class="txt_here">
                            <p>
                                Ellos ya confiaron en nosotros:
                            </p>
                        </div>
                    </div>
                    <div class="cont_img">
                        <div class="cl_img">
                            <img src="img/transantiago.png" title="Transantiago" alt="Transantiago">
                        </div>
                        <div class="cl_img">
                            <img src="img/meds.png" title="Clinica MEDS" alt="Clinica MEDS">
                        </div>
                        <div class="cl_img">
                            <img src="img/consalud.png" title="Consalud" alt="Consalud">
                        </div>
                        <div class="cl_img">
                            <img src="img/bice.png" title="Bice Inversiones" alt="Bice Inversiones">
                        </div>
                        <div class="cl_img">
                            <img src="img/gobdechile.png" title="MideUC" alt="MideUC">
                        </div>
                        <div class="cl_img">
                            <img src="img/gobdechile.png" title="MINEDUC" alt="MINEDUC">
                        </div>
                        <div class="cl_img">
                            <img src="img/vicorp.png" title="MINVU" alt="MINVU">
                        </div>
                        <div class="cl_img">
                            <img src="img/chile_transparente.png" title="Chile Transparente" alt="Chile Transparente">
                        </div>
                        <div class="cl_img">
                            <img src="img/luksic.png" title="Fundación Luksic" alt="Fundación Luksic">
                        </div>
                        <div class="cl_img">
                            <img src="img/visit_chile.png" title="VisitChile" alt="VisitChile">
                        </div>
                        <div class="cl_img">
                            <img src="img/monticello.png" title="Monticello" alt="Monticello">
                        </div>
                        <div class="cl_img">
                            <img src="img/fullrunners.png" title="Fullruners" alt="Fullrunners">
                        </div>
                        <div class="cl_img">
                            <img src="img/cementerio_metropolitano.png" title="Cementerio Metropolitano" alt="Cementerio Metropolitano">
                        </div>
                        <div class="cl_img">
                            <img src="img/tribunal_constitucional.png" title="Tribunal Constitucional" alt="Tribunal Constitucional">
                        </div>
                        <div class="cl_img">
                            <img src="img/casa_moure.png" title="Moure y Cía." alt="Moure y Cía.">
                        </div>
                        <div class="cl_img">
                            <img src="img/amnistia.png" title="Amnistia Internacional (Chile)" alt="Amnistia Internacional (Chile)">
                        </div>
                        <div class="cl_img">
                            <img src="img/banco_central.png" title="Banco Central" alt="Banco Central">
                        </div>
                        <div class="cl_img">
                            <img src="img/lego.png" title="First Lego League " alt="First Lego League ">
                        </div>
                    </div>
                    </section>
                <section id="equipo">
                    <div class="wrap">
                        <div class="tit">
                            <h2>Equipo</h2>
                            <div class="txt_here">
                                <p>
                                    Somos un equipo joven... <strong>Lorem ipsum</strong> dolor sit amet, consectetur adipiscing elit. Nullam scelerisque rutrum purus sit amet ornare. Morbi nec justo sagittis magna venenatis semper laoreet eu purus. Donec ante diam.
                                </p>
                            </div>
                        </div>
                        <div class="cont_img">
                            <div class="cont_evr">
                                <div class="img_team">
                                    <img src="img/clp.png" alt="Jefecito">
                                </div>
                                <h3>Claudio Peñailillo</h3>
                                <div class="hov">
                                    <h4>Director Ejecutivo</h4>
                                    <div class="bar"></div>
                                </div>
                            </div>
                            <div class="cont_evr">
                                <div class="img_team">
                                    <img src="img/byp.png" alt="">
                                </div>
                                <h3>Byron Pisero</h3>
                                <div class="hov">
                                    <h4>Director Comercial</h4>
                                    <div class="bar"></div>
                                </div>
                            </div>
                            <div class="cont_evr">
                                <div class="img_team">
                                    <img src="img/vh.png" alt="">
                                </div>
                                <h3>Victor Heisse</h3>
                                <div class="hov">
                                    <h4>Director de Proyectos</h4>
                                    <div class="bar"></div>
                                </div>
                            </div>
                            <div class="cont_evr">
                                <div class="img_team">
                                    <img src="img/fp.png" alt="">
                                </div>
                                <h3>Francisco Pardo</h3>
                                <div class="hov">
                                    <h4>Director Creativo</h4>
                                    <div class="bar"></div>
                                </div>
                            </div>
                            <div class="cont_evr">
                                <div class="img_team">
                                    <img src="img/ms.png" alt="">
                                </div>
                                <h3>Matias Salvador</h3>
                                <div class="hov">
                                    <h4>Director de Arte</h4>
                                    <div class="bar"></div>
                                </div>
                            </div>
                            <div class="cont_evr">
                                <div class="img_team">
                                    <img src="img/fz.png" alt="">
                                </div>
                                <h3>Fabian Zurita</h3>
                                <div class="hov">
                                    <h4>IA Designer</h4>
                                    <div class="bar"></div>
                                </div>
                            </div>
                            <div class="cont_evr">
                                <div class="img_team">
                                    <img src="img/jb.png" alt="">
                                </div>
                                <h3>Jairo Burbano</h3>
                                <div class="hov">
                                    <h4>Front-End Developer</h4>
                                    <div class="bar"></div>
                                </div>
                            </div>
                            <div class="cont_evr">
                                <div class="img_team">
                                    <a href="mailto:trabajo@didigital.cl">
                                        <img src="img/trabaja_con_nosotros.png" alt="">
                                    </a>
                                </div>
                                <h3>Trabaja con Nosotros</h3>
                                <div class="hov">
                                    <h4>Escribenos a <a href="mailto:trabajo@didigital.cl">trabajo@didigital.cl</a></h4>
                                    <div class="bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php include('contact.php'); ?>



                <footer>
                    <div class="wrap">
                        <h2><img src="img/logo.png" alt="diDigital"></h2>
                        <p>Todos los derechos reservados © 2014 diDigital</p>
                        <div class="icon">
                            <a href="#" title="Facebook" id="face"></a>
                            <a href="#" title="Twitter" id="twit"></a>
                            <a href="#" title="Instagram" id="inst"></a>
                        </div>
                    </div>
                </footer>
                </div>

            <div class="light_img">
                <div class="but_img exit"></div>
                <div class="load loading" style="color:white;">
                    <div class="img_load"></div>
                </div>
                <img src="http://wallpapers111.com/wp-content/uploads/2015/01/photos-of-brad-pitt.jpg" alt="Brad Pitt">
            </div>
            <div class="opac"></div>
            </body>
        </html>