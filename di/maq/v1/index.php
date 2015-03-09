<?php define('BASE', ''); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Agencia Digital diDigital - Diseño y Estrategia Digital</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/proyectos.css">
        <link rel="stylesheet" href="css/jquery.bxslider.css">

        <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-touch-icon-144x144.png">
        <link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="favicon/manifest.json">
        <link href="css/lightbox.css" rel="stylesheet" />
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="/mstile-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <meta name="description" content="Agencia de Diseño Digital, orientada a la experiencia de usuarios para diseño y desarrollo de sitios web, campañas digitales y aplicaciones móviles.">
        <meta name="keyword" content="agencia digital, agencia diseño, experiencia de usuarios, diseño web, desarrollo web, sitios web, campañas digitales, aplicaciones móviles">
        <script src="js/jquery.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/contact.js"></script>
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

                var image = 'img/mapa3.png'; //imagen del marcador

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
                    <li><a href="#banner" title="Inicio" class="active">INICIO</a></li>
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
                    <li id="cvive" class="first">
                        <div class="texture"></div>
                        <div class="um"></div>
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
                                            <div class="ban_img">
                                                <a href="img/proyectos/CVIVE%2001.png" data-lightbox="consalud">
                                                    <img src="img/proyectos/CVIVE%2001.png" alt="">
                                                </a>
                                            </div>
                                            <div class="ban_img">
                                                <a href="img/proyectos/CVIVE%2002.png" data-lightbox="consalud">
                                                    <img src="img/proyectos/CVIVE%2002.png" alt="">
                                                </a>
                                            </div>
                                            <div class="ban_img">
                                                <a href="img/proyectos/CVIVE%2003.png" data-lightbox="consalud">
                                                    <img src="img/proyectos/CVIVE%2003.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lnk_box">
                                            <div class="down">
                                                <strong>Hicimos:</strong>
                                                <ul>
                                                    <li>Estrategia digital</li>
                                                    <li>Diseño de interfaz (colaborativo)</li>
                                                    <li>Desarrollo Front-End (HTML+CSS+jQuery)</li>
                                                    <li>Desarrollo Back-End</li>
                                                    <li>Conexiones con redes sociales</li>
                                                </ul>
                                            </div>
                                            <p class="down">
                                                <a href="http://www.c-vive.cl" title="Sitio Web C-Vive" target="_blank">www.c-vive.cl</a> - 
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
                        <div class="um"></div>
                        <div class="cnt_banner">
                            <div class="wrap">
                                <div class="left">
                                    <h2>Monticello</h2>
                                    <h3>Sitio Web de Monticello</h3>
                                    <div class="txt_here">
                                        <p><strong>Generamos la arquitectura de contenidos y una nueva experiencia al usuario, con un diseño en constante evolución.</strong></p>
                                    </div>
                                    <a href="#" class="ver_mas boton">Más Detalles</a>
                                </div>
                                <div class="right">
                                    <img src="img/proyectos/monticello-front.png" alt="Monticello Notebook">
                                </div>
                            </div>
                        </div>
                        <div class="inner_box">
                            <div class="wrap">
                                <div class="cont_l">
                                    <div class="l_left">
                                        <h2>Monticello</h2>
                                        <h3>Sitio Web de Monticello</h3>
                                        <div class="txt_here">
                                            <p>
                                                Trabajando colaborativamente con BBDO, realizamos este sitio que promueve el conocimiento de todas las áreas de negocio de Monticello, como Casino, Hotelería, Gastronomía Entretención y Club de Privilegios, utilizando un gran gestor de contenidos a la medida, permitiendo administrar la gran cantidad de contenidos que Monticello desea dar a conocer.
                                            </p>
                                        </div>
                                        <a href="#" class="ver_menos boton">Ocultar Detalles</a>
                                    </div>
                                    <div class="l_right">
                                        <div class="img_banner">
                                            <div class="ban_img" data-img="img/proyectos/monticello_01.png">
                                                <a href="img/proyectos/monticello_01.png" data-lightbox="monticello"><img src="img/proyectos/monticello_01.png" alt=""></a>
                                            </div>
                                            <div class="ban_img" data-img="img/proyectos/monticello_02.png">
                                                <a href="img/proyectos/monticello_02.png" data-lightbox="monticello"><img src="img/proyectos/monticello_02.png" alt=""></a>
                                            </div>
                                            <div class="ban_img" data-img="img/proyectos/monticello_03.png">
                                                <a href="img/proyectos/monticello_03.png" data-lightbox="monticello"><img src="img/proyectos/monticello_03.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="lnk_box">
                                            <div class="down">
                                                <strong>Hicimos:</strong>
                                                <ul>
                                                    <li>Estrategia digital</li>
                                                    <li>Arquitectura de Información</li>
                                                    <li>Experiencia de usuarios</li>
                                                    <li>Desarrollo Front-End (HTML+CSS+jQuery)</li>
                                                    <li>Administrador de Contenidos</li>
                                                </ul>
                                            </div>
                                            <p class="down">
                                                <a href="http://www.monticello.cl" title="Sitio Web Monticello" target="_blank">www.monticello.cl</a> - 
                                                <em>Desde Septiembre 2013 trabajando en mejoras continuas </em>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="btn_close exit"></div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li id="bice">
                        <div class="texture"></div>
                        <div class="um"></div>
                        <div class="cnt_banner">
                            <div class="wrap">
                                <div class="left">
                                    <h2>BICE Inversiones</h2>
                                    <h3>Aplicación móvil de inversiones</h3>
                                    <div class="txt_here">
                                        <p><strong>Arquitectura, diseño y construcción de la aplicación móvil de monitoreo de inversiones, mercados y acciones locales en línea.</strong></p>
                                    </div>
                                    <a href="#" class="ver_mas boton">Más Detalles</a>
                                </div>
                                <div class="right">
                                    <img src="img/proyectos/bice-front.png" alt="Bice Inversiones Versión móvil">
                                </div>
                            </div>
                        </div>
                        <div class="inner_box">
                            <div class="wrap">
                                <div class="cont_l">
                                    <div class="l_left">
                                        <h2>BICE Inversiones</h2>
                                        <h3>Aplicación móvil de inversiones</h3>
                                        <div class="txt_here">
                                            <p>
                                                La aplicación BICE Inversiones permite conocer en línea el comportamiento de las principales bolsas del mundo, commodities, monedas, tasas y acciones locales. Además de revisar el resumen de inversiones (Pesos, Dólar y APV), consultar las órdenes de acciones y el estado de las operaciones de sus clientes donde quiera que se encuentren.
                                            </p>
                                        </div>
                                        <a href="#" class="ver_menos boton">Ocultar Detalles</a>
                                    </div>
                                    <div class="l_right">
                                        <div class="img_banner"> 
                                            <div class="ban_img" data-img="img/proyectos/BICE%2001.png">
                                                <a href="img/proyectos/BICE%2001.png" data-lightbox="bice"> <img src="img/proyectos/BICE%2001.png" alt=""></a>
                                            </div>
                                            <div class="ban_img" data-img="img/proyectos/BICE%2002.png">
                                                <a href="img/proyectos/BICE%2002.png" data-lightbox="bice"> <img src="img/proyectos/BICE%2002.png" alt=""></a>
                                            </div>
                                            <div class="ban_img" data-img="img/proyectos/BICE%2003.png">
                                                <a href="img/proyectos/BICE%2003.png" data-lightbox="bice">  <img src="img/proyectos/BICE%2003.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="lnk_box">
                                            <div class="down">
                                                <strong>Hicimos:</strong>
                                                <ul>
                                                    <li>Arquitectura de Información</li>
                                                    <li>Experiencia de usuarios</li>
                                                    <li>Diseño de Interacción</li>
                                                    <li>Diseño de Interfaz</li>
                                                </ul>
                                            </div>
                                            <p class="down">
                                                <a href="https://play.google.com/store/apps/details?id=cl.tinet.bice" title="Aplicación en Play Store" target="_blank">Play Store</a> |  
                                                <a href="https://itunes.apple.com/cl/app/bice-inversiones/id694896818?mt=8" title="Aplicación en App Store" target="_blank">App Store</a> - 
                                                <em>Desde Junio 2014</em>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="btn_close exit"></div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li id="senator">
                        <div class="texture"></div>
                        <div class="um"></div>
                        <div class="cnt_banner">
                            <div class="wrap">
                                <div class="left">
                                    <h2>Senator Chile</h2>
                                    <h3>Sitio Web Corporativo</h3>
                                    <div class="txt_here">
                                        <p><strong>Modernización del sitio web de Senator Chile para despliegue de sus servicios e itinerarios de viaje.</strong></p>
                                    </div>
                                    <a href="#" class="ver_mas boton">Más Detalles</a>
                                </div>
                                <div class="right">
                                    <img src="img/proyectos/senator-front.png" alt="Senator Chile Ipad">
                                </div>
                            </div>
                        </div>
                        <div class="inner_box">
                            <div class="wrap">
                                <div class="cont_l">
                                    <div class="l_left">
                                        <h2>Senator Chile</h2>
                                        <h3>Sitio Web Corporativo</h3>
                                        <div class="txt_here">
                                            <p>
                                                Se planteó el sitio web de Senator Chile como un sitio que continúe la línea de calidad de Senator International, pero ahora, de forma local. El sitio es multilenguaje, autoadministrable y con una experiencia de usuario bastante simple, adaptado al público objetivo. También se facilita la solicitud de servicios de forma electrónica y la integración con sistemas internos de la compañía.
                                            </p>
                                        </div>
                                        <a href="#" class="ver_menos boton">Ocultar Detalles</a>
                                    </div>
                                    <div class="l_right">
                                        <div class="img_banner">
                                            <div class="ban_img" data-img="img/proyectos/senator_01.png">
                                                <a href="img/proyectos/senator_01.png" data-lightbox="senator"> <img src="img/proyectos/senator_01.png" alt=""></a>
                                            </div>
                                            <div class="ban_img" data-img="img/proyectos/senator_02.png">
                                                <a href="img/proyectos/senator_02.png" data-lightbox="senator"><img src="img/proyectos/senator_02.png" alt=""></a>                                                        </div>
                                        </div>
                                        <div class="lnk_box">
                                            <div class="down">
                                                <strong>Hicimos:</strong>
                                                <ul>
                                                    <li>Arquitectura de Información</li>
                                                    <li>Experiencia de usuarios</li>
                                                    <li>Diseño de Interfaz</li>
                                                    <li>Desarrollo Front-End (HTML+CSS+jQuery)</li>
                                                </ul>
                                            </div>
                                            <p class="down">
                                                <a href="http://www.senatorchile.cl" title="Sitio Web Senator Chile" target="_blank">www.senatorchile.cl</a> - 
                                                <em>Desde Diciembre 2014</em>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="btn_close exit"></div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li id="simce" class="last">
                        <div class="texture"></div>
                        <div class="um"></div>
                        <div class="cnt_banner">
                            <div class="wrap">
                                <div class="left">
                                    <h2>Enlaces</h2>
                                    <h3>Prueba Escolar Simce TIC</h3>
                                    <div class="txt_here">
                                        <p><strong>Diseño de interfaz del Sistema Operativo simulado, para la evaluación escolar de habilidades TIC para el aprendizaje Simce TIC.</strong></p>
                                    </div>
                                    <a href="#" class="ver_mas boton">Más Detalles</a>
                                </div>
                                <div class="right">
                                    <img src="img/proyectos/simcetic-front.png" alt="Senator Chile Ipad">
                                </div>
                            </div>
                        </div>
                        <div class="inner_box">
                            <div class="wrap">
                                <div class="cont_l">
                                    <div class="l_left">
                                        <h2>Enlaces</h2>
                                        <h3>Prueba Escolar Simce TIC</h3>
                                        <div class="txt_here">
                                            <p>
                                                El objetivo del proyecto fue el proponer a los alumnos de la prueba, un sistema operativo libre que permita validar conocimientos de navegación en internet,  uso de software de ofimática y acciones básicas de sistema operativo.
                                            </p>
                                        </div>
                                        <a href="#" class="ver_menos boton">Ocultar Detalles</a>
                                    </div>
                                    <div class="l_right">
                                        <div class="img_banner">
                                            <div class="ban_img">
                                                <a href="img/proyectos/simcetic01.png" data-lightbox="simce"><img src="img/proyectos/simcetic01.png" alt=""></a>
                                            </div>
                                            <div class="ban_img">
                                                <a href="img/proyectos/simcetic02.png" data-lightbox="simce"><img src="img/proyectos/simcetic02.png" alt=""></a>
                                            </div>
                                            <div class="ban_img">
                                                <a href="img/proyectos/simcetic03.png" data-lightbox="simce"><img src="img/proyectos/simcetic03.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="lnk_box">
                                            <div class="down">
                                                <strong>Hicimos:</strong>
                                                <ul>
                                                    <li>Diseño de Interfaz</li>
                                                    <li>Ilustración de personajes e iconografía</li>
                                                    <li>Desarrollo Front-End de elementos de interfaz</li>
                                                    <li>Funcionalidades apoyo a emulación</li>
                                                </ul>
                                            </div>
                                            <p class="down">
                                                <em>Sistema Privado</em> - 
                                                <em>Desde 2012</em>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="btn_close exit"></div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </section>
            <section id="service">
                <div class="wrap">
                    <div class="tit">
                        <h2>Servicios</h2>
                        <div class="txt_here">
                            <p>
                                Sitios web corporativos, e-commerce, aplicaciones móviles, posicionamiento SEO, intranet y extranet, redes sociales, campañas digitales, diseño adaptable, sistemas de gestión interna, automatización de procesos, entre otras. 
                            </p>
                        </div>
                    </div>
                    <div class="service">
                        <div class="img_srv"></div>
                        <h2><strong>Estrategia Digital</strong></h2>
                        <p>Realizamos un análisis 360º de tu negocio, para proponer acciones de mejoras y métricas que te permitan tomar las mejores decisiones respecto de tu iniciativa digital, ya sea pensado en web, aplicaciones o sistema internos.</p>
                    </div>
                    <div class="service"> 
                        <div class="img_srv" id="srv_two"></div>
                        <h2><strong>Diseño Web</strong></h2>
                        <p>Diseñamos desde la idea, hasta el producto final. Arquitectura de la Información, Diseño de Interacción, Diseño de Interfaz, Desarrollo Front-End y Back-end con los estándares de la industria.</p>
                    </div>
                    <div class="service">
                        <div class="img_srv" id="srv_three"></div>
                        <h2><strong>In/Outbound Mkt</strong></h2>
                        <p>Nos encargamos de presentar tu iniciativa digital de la mejor forma, a través de estrategias digitales, viralización, newsletters, aplicaciones en redes sociales, Google Adwords, campañas digitales y fidelización.</p>
                    </div>
                    <div class="service"> 
                        <div class="img_srv" id="srv_four"></div>
                        <h2><strong>Email Marketing</strong></h2>
                        <p>Bajo la plataforma IcomMarketing, diseñamos e implementamos campañas de e-mail Marketing, analizamos las métricas y planteamos mejoras a la estrategia comunicacional. Tasas de envío y efectividad por sobre los estándares del mercado.</p>
                    </div>
                </div>
            </section>
            <section id="clientes">
                <div class="texture"></div>
                <div class="wrap">
                    <div class="tit tit_full">
                        <h2>Ellos ya han confiado en nosotros</h2>
                        <!--<div class="txt_here">
<p>
Ellos ya confiaron en nosotros:
</p>
</div>-->
                    </div>
                    <div class="cont_img">
                        <div class="cl_img">
                            <img src="img/senator.png" title="Senator Chile" alt="Senator">
                        </div>
                        <div class="cl_img">
                            <img src="img/meds.png" title="Clinica MEDS" alt="Clinica MEDS">
                        </div>
                        <div class="cl_img">
                            <img src="img/consalud.png" title="Consalud" alt="Consalud">
                        </div>
                        <div class="cl_img">
                            <img src="img/bice.png" title="Bice Inversiones" alt="BICE Inversiones">
                        </div>
                        <div class="cl_img">
                            <img src="img/mideuc.png" title="MideUC" alt="MideUC">
                        </div>
                        <div class="cl_img">
                            <img src="img/mineduc.png" title="Ministerio de Educación" alt="Ministerio de Educación">
                        </div>
                        <div class="cl_img">
                            <img src="img/vicorp.png" title="Vicorp" alt="Vicorp">
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
                            <h2>Nuestro Equipo</h2>
                            <div class="txt_here">
                                <p>
                                    Nuestra Agencia Digital es un equipo joven con ideas frescas y con experiencia, dispuesto a solucionar problemas digitales. <strong>Diseñadores, Comunicadores, Artistas y Estrategas</strong> dan forma a nuestra agencia.
                                </p>
                            </div>
                        </div>
                        <div class="cont_img">
                            <div id="claudio" class="cont_evr">
                                <div class="img_team">
                                </div>
                                <h3>Claudio Peñailillo</h3>
                                <div class="hov">
                                    <h4>Director Ejecutivo</h4>
                                    <div class="bar"></div>
                                </div>
                            </div>
                            <div id="byron" class="cont_evr">
                                <div class="img_team">
                                </div>
                                <h3>Byron Pisero</h3>
                                <div class="hov">
                                    <h4>Director Comercial</h4>
                                    <div class="bar"></div>
                                </div>
                            </div>
                            <div id="victor" class="cont_evr">
                                <div class="img_team">
                                </div>
                                <h3>Victor Heise</h3>
                                <div class="hov">
                                    <h4>Director de Proyectos</h4>
                                    <div class="bar"></div>
                                </div>
                            </div>
                            <div id="pancho" class="cont_evr">
                                <div class="img_team">
                                </div>
                                <h3>Francisco Pardo</h3>
                                <div class="hov">
                                    <h4>Director Creativo</h4>
                                    <div class="bar"></div>
                                </div>
                            </div>
                            <div id="matias" class="cont_evr">
                                <div class="img_team">
                                </div>
                                <h3>Matias Salvador</h3>
                                <div class="hov">
                                    <h4>Director de Arte</h4>
                                    <div class="bar"></div>
                                </div>
                            </div>
                            <div id="fabian" class="cont_evr">
                                <div class="img_team">
                                </div>
                                <h3>Fabian Zurita</h3>
                                <div class="hov">
                                    <h4>IA Designer</h4>
                                    <div class="bar"></div>
                                </div>
                            </div>
                            <div id="jairo" class="cont_evr">
                                <div class="img_team">
                                </div>
                                <h3>Jairo Burbano</h3>
                                <div class="hov">
                                    <h4>Front-End Developer</h4>
                                    <div class="bar"></div>
                                </div>
                            </div>
                            <div id="extra" class="cont_evr">
                                <div class="img_team">
                                    <a href="mailto:trabajo@didigital.cl">
                                    </a>
                                </div>
                                <h3><em>Súmate</em></h3>
                                <div class="hov">
                                    <h4><a href="mailto:trabajo@didigital.cl">trabajo@didigital.cl</a></h4>
                                    <div class="bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php include('contact.php'); ?>



                <footer>
                    <div class="wrap">
                        <h2><img src="img/logo_white.png" alt="diDigital"></h2>
                        <p>Todos los derechos reservados © 2014<br/>Agencia Digital diDigital</p>
                        <div class="icon">
                            <a href="https://www.facebook.com/diDigital.cl" target="_blank" title="Facebook" id="face"></a>
                            <a href="https://twitter.com/didigital" target="_blank" title="Twitter" id="twit"></a>
                            <a href="https://www.linkedin.com/company/didigital" title="Linkedin" id="linke"></a>
                        </div>
                    </div>
                </footer>
                </div>
            <!--
<div class="light_img">
<div class="but_img exit"></div>
<div class="load loading" style="color:white;">
<div class="img_load"></div>
</div>
<img src="http://wallpapers111.com/wp-content/uploads/2015/01/photos-of-brad-pitt.jpg" alt="Brad Pitt">
</div>
<div class="opac"></div>
-->
            </body>
        </html>