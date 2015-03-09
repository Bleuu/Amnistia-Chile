<?php include('header.php'); ?>
<section class="col-sm-12 nopad">
    <div class="container">
        <div class="col-xs-12">
            <div class="alert alert-warning alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <div class="col-md-1 col-xs-3 left_icon nopad">
                    <span class="icon-warning"></span>
                </div>
                <div class="col-md-11 col-xs-9 alert_cont nopad">
                    <h2>Holy guacamole!</h2>
                    <p>
                        Best check yo self, you're not looking too good.
                    </p>
                    <a href="detalle_alerta.php" title="Ver detalle de alerta">Ver detalle de alerta</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 nopad">
            <div class="col-sm-12 nopad mbm">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <?php include('elements/planifica.php'); ?>
                    <?php include('elements/problemas.php'); ?>
                </div>
                <div class="col-md-8 col-sm-6 list-r-group h_news">
                    <div class="col-md-12 nopad cont">
                        <img src="img/news.jpg" alt="Imagen noticia destacada">
                        <div class="news_abs">
                            <h3>Nuevos recorridos y modificaciones solicitados por vecinos para mejorar Transantiago</h3>
                            <p>Más de 70 mil usuarios de 16 comunas se verán beneficiados por los cambios que comenzarán a operar el sábado 17 de enero.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 nopad">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <?php include('elements/recorrido.php'); ?>
                    <?php include('elements/alteraciones.php'); ?>
                </div>
                <?php include('elements/desvios.php'); ?>
            </div>
            <?php include('elements/noticias.php'); ?>
        </div>
    </div>
    <?php include('elements/pre-footer.php'); ?>
</section>
<?php include('footer.php'); ?>