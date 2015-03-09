<?php define('PAGE_TITLE', 'Su pagina no fue encontrada | Power Pro'); ?>
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
</head>
<body>
	<div class="container wrong">
        <header>
			<div class="wrap">
				<div class="menu_top clbth">
                    <h1><a href="index.php" title="Power Pro"><img src="img/logo.png" alt="Logo Power Pro"></a></h1>
				</div>
            </div>
        </header>
<section>
    <div class="wrap">
        <div class="content">
            <div class="inside">
                <div class="banner">
                    <img src="assets/agricola.png" alt="Banner">
                </div>
                <div class="box_padding">
                    <div class="col" style="width:50%; float:left;">
                        <h2 style="color:red; font-size:300%; line-height:32px;">404</h2>
                        <h3>Lo sentimos, su página no pudo ser encontrada</h3>
                        <p>
                            La página que buscas ya no existe, 
                            ya no se encuentra disponible o la dirección es incorrecta.
                        </p>
                        <p>
                            Vuelve al inicio y sigue navegando en <a href="http://www.powerpro.cl" title="Ir al inicio">www.powerpro.cl</a>
                        </p>
                    </div>
                    <div class="col" style="width:40%; float:right; border-left:1px solid #ccc; padding-left:20px;">
                        <strong style="margin-left:25px; margin-top:25px; display:block;">Productos</strong>
                       <ul class="menu_404">
                            <li><a href="#" title="Visitar página">Generación</a></li>
                            <li><a href="#" title="Visitar página">Construcción</a></li>
                            <li><a href="#" title="Visitar página">Agrícola</a></li>
                            <li><a href="#" title="Visitar página">Jardín</a></li>
                            <li><a href="#" title="Visitar página">Hidrolavado</a></li>
                            <li><a href="#" title="Visitar página">Calefacción Industrial</a></li>
                            <li><a href="#" title="Visitar página">Ferretería</a></li>
                        </ul>
                       <hr style="border:0; border-bottom:1px dotted #ccc;"/>
                        <ul class="menu_404">
                            <li><a href="#" title="Visitar página">Dónde Comprar</a></li>
                            <li><a href="#" title="Visitar página">Servicio técnico</a></li>
                            <li><a href="#" title="Visitar página">Nosotros</a></li>
                            <li><a href="#" title="Visitar página">Noticias</a></li>
                            <li><a href="#" title="Visitar página">Contacto</a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="wrap">
        <a href="#" title="Power Pro">www.powerpro.cl</a>
        <p>. Copyright &#169; 2014 Todos los derechos reservados. <span class="author">Desarrollado por <a href="http://www.oxus.cl" title="Visitar Sitio" target="_blank">OXUS</a></span></p>
    </div>
</footer>
</div>
</body>
</html>