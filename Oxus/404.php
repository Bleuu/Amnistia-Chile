<?php define('BASE', ''); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pagina no encontrada</title>
    <link rel="stylesheet" href="<?php echo BASE; ?>css/style.css">
</head>
<body>
    <header>
        <h1 class="logo_center"><img src="<?php echo BASE; ?>img/logo.png" alt="Oxus | Innovación y Tecnologia"></h1>
    </header>
    <div class="err_404">
        <p class="err_big">404</p>
        <p class="err_mdm">Página no encontrada</p>
        <a href="<?php echo BASE; ?>index.php" title="Ir al inicio"> » Click para ir al inicio</a>
    </div>
    <?php include('footer.php'); ?>