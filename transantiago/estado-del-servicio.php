<?php include('header.php'); ?>
<section class="col-sm-12 nopad">
    <div class="container">
        <ol class="breadcrumb fz13">
            <li><a href="index.php">Inicio</a></li>
            <li class="active">Estado del servicio</li>
        </ol>
        <div class="col-md-8 col-xs-12">
            <h2>Estado del servicio</h2>
            <p>Conoce si hay desvíos o atrasos en el servicio.</p>
            <div class="col-xs-12 nopad share">
                <p class="pull-left">Compartir</p>
                <div class="icon_rss pull-right">
                    <a href="#" title="Whatsapp" id="shr_wsp" class="mob"></a>
                    <a href="#" title="Twitter" id="shr_tw"></a>
                    <a href="#" title="Facebook" id="shr_fb"></a>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 nopad cod_serv input-group form-group">
                <input type="text" class="form-control" placeholder="Código del servicio" aria-describedby="cod_servicio">
                <span class="input-group-addon btn princ mdm" id="cod_servicio">Buscar</span>
            </div>
            <div class="col-xs-12 this_block no_side block_cont">
                <div class="col-xs-12 block_light">
                    <p class="gray"><span>Resultado</span></p>
                    <h3>Recorrido</h3>
                </div>
                <div class="col-xs-12 block_light block_gray">
                    <h4>Alertas del sistemas de transporte</h4>
                </div>
                <div class="col-xs-12 block_light">
                    <div class="col-md-1 col-xs-2">
                        <div class="icon-warning"></div>
                    </div>
                    <div class="col-md-11 col-xs-10">
                        <h4>Interrupción del servicio en linea 1 de Metro</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adiscing elit. Vestibulum nisi risus, aliquam vel lacinia eu.
                        </p>
                        <p class="gray"><span>19 de enero de 2015</span></p>
                        <a href="single-alerta-sistema.php" title="Ver detalle" class="fz13">ver detalle</a>
                    </div>
                </div>
                <div class="col-xs-12 block_light block_gray">
                    <h4>Alteraciones no planificadas</h4>
                    <p class="gray"><span>Lunes 19 de enero</span></p>
                </div>
                <div class="col-xs-12 block_light">
                    <div class="col-md-2 col-xs-4 n_servicio">
                        <p class="w_blue"><span></span>314</p>
                    </div>
                    <div class="col-md-10 col-xs-8">
                        <p>
                            <strong>14:43 - </strong>
                            Demora en servicios 303, 307 y 314, en Américo Vespucio / Autopista Central, Quilicura por congestión.
                        </p>
                        <p class="hour">
                            <span class="icon_clock"></span>
                            <strong>5 min. de retraso</strong>
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 block_light">
                    <div class="col-md-2 col-xs-4 n_servicio">
                        <p class="w_blue"><span></span>314</p>
                    </div>
                    <div class="col-md-10 col-xs-8">
                        <p>
                            <strong>15:30 - </strong>
                            Desvío en Vicuña Mackenna/Miraflores, Renca por accidente.
                        </p>
                        <p class="hour">
                            <span class="icon_clock"></span>
                            <strong>8 min. de retraso adicionales</strong>
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 block_light block_gray">
                    <h4>Desvíos planificados</h4>
                </div>
                <div class="col-xs-12 block_light noline">
                    <div class="col-xs-2">
                        <p><span id="icon-bus-black"></span></p>
                    </div>
                    <div class="col-xs-10">
                        <h4><a href="single-desvios.php" title="Desvíos por Intervención en Avenida Recoleta">Desvíos por Intervención en Avenida Recoleta</a></h4>
                        <p>Comunas: Huechuraba</p>
                        <p>Desde 10 AM del miercoles 28 de enero al sábado 28 de febrero de 2015 (fecha estimada).</p>
                        <p class="hour">
                            <span class="icon-clock"></span>
                            <strong>8 min. de retraso adicionales</strong>
                        </p>
                        <div class="col-xs-12">
                            <p class="number_bus">117</p>
                            <p class="number_bus">117C</p>
                        </div>
                    </div>
                </div>
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