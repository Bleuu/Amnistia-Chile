<!doctype html>
<html lang="en">
<head>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
	<meta charset="UTF-8">
	<title><?php if (defined('PAGE_TITLE')){echo PAGE_TITLE;}else{echo '::::FALTA TITULO::::';} ?></title>
	
	<link rel="stylesheet" href="css/layout.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
	
<!--	Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="favicon-196x196.png" sizes="196x196">
    <link rel="icon" type="image/png" href="favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="mstile-144x144.png">
	
	<meta name="description" content="Power pro">
	<meta name="keywords" content="Power pro">
	<meta name="author" content="diDigital">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width">
	<!--FACEBOOK-->
	<meta property="og:image" content="/img/logo.png" />
	<meta property="og:description" content="AQUI VA DESCRIPCION" />
	<meta property="og:title" content="AQUI VA TITULO" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="http://www.powerpro.cl/" />
	<meta property="og:site_name" content="Power Pro" />
	<meta property="fb:admins" content="AQUI VA ALGO" />
	<!-- Include jQuery -->
    <script src="js/jquery.js"></script>
	<!--[if lt IE 9]>
	    <link rel="stylesheet" href="css/ltie9.css">
        <script src="js/ltie9.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
<!--
     Include the Sidr JS 
    <?php if (defined('PAGE') && PAGE=='test') { ?>
	<script src="js/jquery.touchswipe.js"></script>
	<script src="js/bamboo.js"></script>
	<link rel="stylesheet" href="css/bamboo.css">
	<link rel="stylesheet" href="css/normalize.css">
	<?php } ?>
-->
	<script src="js/global.js"></script>
	<!-- bxSlider Javascript file -->
    <script src="js/jquery.bxslider.min.js"></script>
    <!-- bxSlider CSS file -->
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
	
</head>
<body>
	<div class="container">
        <header>
			<div class="wrap">
				<div class="menu_top clbth">
				    <?php if (defined('PAGE') && PAGE=='Home') { ?>
                        <h1><a href="index.php" title="Power Pro"><img src="img/logo.png" alt="Logo Power Pro"></a></h1>
                    <?php }else{ ?>
                        <div class="logo"><a href="index.php" title="Power Pro"><img src="img/logo.png" alt="Logo Power Pro"></a></div>
                    <?php } ?>
					<ul class="menu_der_top">
                        <li class="buscar mob">
                            <form action="resultado_busqueda.php" method="get">
                                <input type="text" placeholder="Buscar Productos o contenidos">
                                <input type="submit" value="enviar">
                            </form>
                        </li>
						<li><a href="donde_comprar.php" title="Donde Comprar"><span>&raquo;</span>Dónde Comprar</a></li>
						<li class="sep"></li>
						<li><a href="servicio_tecnico.php" title="Servicio Tecnico"><span>&raquo;</span>Servicio Técnico</a></li>
						<li class="sep"></li>
						<li><a href="nosotros.php" title="Nosotros"><span>&raquo;</span>Nosotros</a></li>
						<li class="sep"></li>
						<li><a href="noticias.php" title="Noticias"><span>&raquo;</span>Noticias</a></li>
						<li class="sep"></li>
						<li><a href="contacto.php" title="Contacto"><span>&raquo;</span>Contacto</a></li>
					</ul>
					<div class="menu_mob_icon">
					    <span></span>
					    <span></span>
					    <span></span>
					</div>
				</div>
				<nav>
					<div class="barra_sup clbth">
						<p class="tit">Productos <span class="tri_mob"></span></p>
						<div class="buscar">
						    <form action="resultado_busqueda.php" method="get">
                                <input type="text" placeholder="Buscar Productos o contenidos">
                                <input type="submit" value="enviar">
                            </form>
						</div>
					</div>
					<ul class="menu">
						<li>
							<a href="productos.php" title="Generacion">Generación</a>
							<ul class="dropdown">
								<li><a href="categoria.php" title="Aceites">Aceites</a></li>
								<li><a href="categoria.php" title="Generadores a Gas">Generadores a Gas</a></li>
								<li><a href="categoria.php" title="Generadores Gasolina">Generadores Gasolina</a></li>
							</ul>
						</li>
						<li>
							<a href="productos.php" title="Construccion">Construcción</a>
                            <ul class="dropdown">
								<li><a href="categoria.php" title="Accesorios Construcción">Accesorios Construcción</a></li>
								<li><a href="categoria.php" title="Equipos Compactadores">Equipos Compactadores</a></li>
								<li><a href="categoria.php" title="Hormigon">Hormigon</a></li>
								<li><a href="categoria.php" title="Pavimentación">Pavimentación</a></li>
							</ul>
						</li>
						<li>
							<a href="productos.php" title="Agricola">Agrícola</a>
                            <ul class="dropdown">
								<li><a href="categoria.php" title="Chipeadores">Chipeadores</a></li>
								<li class="active"><a href="categoria.php" title="Motobomba a gas">Motobomba a gas</a></li>
								<li><a href="categoria.php" title="Motobomba gasolina">Motobomba gasolina</a></li>
							</ul>
						</li>
						<li class="active">
							<a href="productos.php" title="Jardin">Jardín</a>
                            <ul class="dropdown">
								<li><a href="categoria.php" title="Aceites 2L">Aceites 2L</a></li>
								<li><a href="categoria.php" title="Cortacesped">Cortacesped</a></li>
								<li><a href="categoria.php" title="Motosierras y Cortasetos">Motosierras y Cortasetos</a></li>
								<li><a href="categoria.php" title="Orilladores y Desbrozadoras">Orilladores y Desbrozadoras</a></li>
								<li><a href="categoria.php" title="Pulverizadores">Pulverizadores</a></li>
							</ul>
						</li>
						<li>
							<a href="test.php" title="Hidrolavado">Hidrolavado</a>
                            <ul class="dropdown">
								<li><a href="categoria.php" title="Hidrolavadora a Gasolina IP1800G">Hidrolavadora a Gasolina</a></li>
								<li><a href="categoria.php" title="Hidrolavadora Diesel IP2600D">Hidrolavadora Diesel</a></li>
								<li><a href="categoria.php" title="Hidrolavadora Eléctrica IP1600">Hidrolavadora Eléctrica</a></li>
							</ul>
						</li>
						<li>
							<a href="productos.php" title="Calefaccion Industrial">Calefacción Insdustrial</a>
                            <ul class="dropdown">
								<li><a href="categoria.php" title="Turbocalefactor Diesel DTD20A">Turbocalefactor Diesel</a></li>
								<li><a href="categoria.php" title="Turbocalefactor Gas Licuados GLP15T">Turbocalefactor Gas Licuados</a></li>
							</ul>
						</li>
						<li>
							<a href="404.php" title="Ferreteria">Ferretería</a>
                            <ul class="dropdown">
								<li><a href="categoria.php" title="Escaleras">Escaleras</a></li>
								<li><a href="categoria.php" title="Flexibles">Flexibles</a></li>
							</ul>
						</li>
					</ul>
				</nav>
            </div>
        </header>