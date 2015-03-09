<?php include('header.php'); ?>
<section class="col-sm-12 nopad">
    <div class="container">
        <ol class="breadcrumb fz13">
            <li><a href="index.php">Inicio</a></li>
            <li class="active">Denunciar un problema</li>
        </ol>
        <div class="col-md-8 col-xs-12">
            <div class="col-xs-12 block_cont cont_map nopad">
                <h2>Denunciar un problema</h2>
                <div class="txt_here">
                    <p>
                        Ayúdanos a mejorar reportando problemas que observes <strong>durante el uso de Transantiago</strong>.
                    </p>
                    <p>
                        Si deseas <strong>ingresar más antecedentes</strong> y la posibilidad de <strong>seguimiento</strong>, te recomendamos <a href="reclamo.php" title="realizar un reclamo">realizar un reclamo</a>.
                    </p>
                    <div class="col-xs-12 blue_box">
                        <p>
                            Las denuncias están destinadas al reporte de problemas durante el tránsito. Si desea realizar un reclamo o sugerencia con más antecedentes, le recomendamos utilizar el formulario de reclamos.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 nopad share">
                    <p class="pull-left">Compartir</p>
                    <div class="icon_rss pull-right">
                        <a href="#" title="Whatsapp" id="shr_wsp" class="mob"></a>
                        <a href="#" title="Twitter" id="shr_tw"></a>
                        <a href="#" title="Facebook" id="shr_fb"></a>
                    </div>
                </div>
                <form class="col-sm-9 col-xs-12 nopad plan denuncia">
                    <div class="col-xs-12 nopad block_light">
                        <div class="form-group col-xs-12 nopad mbot">
                            <div class="col-sm-4 col-xs-12 nopad">
                                <label for="inpt_problem"><strong>Problema en:</strong></label>
                            </div>
                            <div class="col-sm-8 col-xs-12 nopad">
                                <input type="text" placeholder="Bus" id="inpt_problem" class="form-control szfull">
                            </div>
                        </div>
                        <div class="form-group col-xs-12 nopad mbot">
                            <div class="col-sm-4 col-xs-12 nopad">
                                <label for="inpt_tipo"><strong>Tipo de problema:</strong></label>
                            </div>
                            <div class="col-sm-8 col-xs-12 nopad">
                                <input type="text" id="inpt_tipo" class="form-control szfull">
                            </div>
                        </div>
                        <div class="form-group col-xs-12 nopad mbot">
                            <div class="col-sm-4 col-xs-12 nopad">
                                <label for="inpt_detalle"><strong>Detalles</strong> (opcional)</label>
                            </div>
                            <div class="col-sm-8 col-xs-12 nopad">
                                <textarea id="inpt_detalle" class="form-control szfull"></textarea>
                            </div>
                        </div>
                        <div class="form-group col-xs-12 nopad mbot">
                            <div class="col-sm-4 col-xs-12 nopad">
                                <label for="inpt_foto" class="tops"><strong>Agregar foto <br> o documento</strong> (opcional):</label>
                            </div>
                            <div class="col-sm-8 col-xs-12 nopad input-group input-group">
                                <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
                                <span class="input-group-addon btn princ" id="basic-addon2">Explora...</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 nopad block_light">
                        <div class="form-group col-xs-12 nopad mbot">
                            <div class="col-sm-4 col-xs-12 nopad">
                                <label for="inpt_recorrido"><strong>Recorrido:</strong></label>
                            </div>
                            <div class="col-sm-4 col-xs-12 nopad">
                                <input type="text" placeholder="Ej. 402" id="inpt_recorrido" class="form-control szfull">
                            </div>
                        </div>
                        <div class="form-group col-xs-12 nopad mbot">
                            <div class="col-sm-4 col-xs-12 nopad">
                                <label for="inpt_patente"><strong>Placa patente:</strong></label>
                            </div>
                            <div class="col-sm-4 col-xs-12 nopad">
                                <input type="text" id="inpt_patente" class="form-control szfull">
                            </div>
                        </div>
                        <div class="form-group col-xs-12 nopad mbot">
                            <div class="col-sm-4 col-xs-12 nopad">
                                <label for="inpt_detalle"><strong>Dirección o ubicación:</strong></label>
                            </div>
                            <div class="col-sm-8 col-xs-12 nopad wth_icon">
                                <input type="text" id="inpt_direccion" class="form-control szfull">
                                <span id="icon_place" data-toggle="modal" data-target="#diag-cuando"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 nopad">
                        <div class="form-group col-xs-12 nopad mbot">
                            <div class="col-sm-4 col-xs-12 nopad">
                                <label for="inpt_nombre"><strong>Nombre:</strong></label>
                            </div>
                            <div class="col-sm-8 col-xs-12 nopad">
                                <input type="text" id="inpt_nombre" class="form-control szfull">
                            </div>
                        </div>
                        <div class="form-group col-xs-12 nopad mbot">
                            <div class="col-sm-4 col-xs-12 nopad">
                                <label for="inpt_patente" class="tops"><strong>Teléfono Celular</strong><br>(opcional):</label>
                            </div>
                            <div class="col-sm-8 col-xs-12 nopad">
                                <input type="text" id="inpt_patente" class="form-control szfull">
                            </div>
                        </div>
                        <div class="col-sm-8 col-sm-offset-4  col-xs-12 nopad mbot">
                            <input type="submit" class="btn princ szfull pull-right" value="Buscar Buses">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4 desk">
            <?php include('sidebar.php'); ?>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>