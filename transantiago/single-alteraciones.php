<?php include('header.php'); ?>
<section class="col-sm-12 nopad">
    <div class="container">
        <ol class="breadcrumb fz13">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="estado-del-servicio.php">Estado del servicio</a></li>
            <li class="active">Alteraciones del servicio</li>
        </ol>
        <div class="col-md-8 col-xs-12">
            <h2>Alteraciones del servicio</h2>
            <p>Información sobre alteraciones no planificadas en el servicio de Transantiago.</p>
            <div class="col-xs-12 nopad share">
                <p class="pull-left">Compartir</p>
                <div class="icon_rss pull-right">
                    <a href="#" title="Whatsapp" id="shr_wsp" class="mob"></a>
                    <a href="#" title="Twitter" id="shr_tw"></a>
                    <a href="#" title="Facebook" id="shr_fb"></a>
                </div>
            </div>
            <div class="col-xs-12 fz13 bl_reco nopad this_block wth_top block_gray">
                <h2>¿Cómo está mi recorrido?</h2>
                <p>Conoce si hay desvios o retrasos en el servicio.</p>
                <div class="col-sm-12 nopad">
                    <form class="col-xs-12 nopad">
                        <div class="col-xs-12 nopad cod_serv input-group">
                            <input type="text" class="form-control" placeholder="Código del servicio" aria-describedby="cod_servicio">
                            <span class="input-group-addon btn princ mdm" id="cod_servicio">Buscar</span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="no_max_cont">
                <?php include('elements/alteraciones.php'); ?>
            </div>
            <div class="col-xs-12 nopad">
                <h3>Consulte También</h3>
                <ul class="alert_spec">
                    <li><a href="#" title="Alertas del sistema de transporte">Alertas del sistema de transporte</a></li>
                    <li><a href="#" title="Desvíos planificados">Desvíos planificados</a></li>
                </ul>
            </div>
            <div class="col-xs-12 fz13 problem nopad this_block wth_top block_gray">
                <h2>¿Problemas con el servicio?</h2>
                <p>Cuéntanos si observas problemas con los buses, frecuencia de recorridos, conductores, etc.</p>
                <a href="problemas.php" class="btn second szfull">Denunciar Problema</a>
            </div>
        </div>
        <div class="col-md-4 desk">
            <?php include('sidebar.php'); ?>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>