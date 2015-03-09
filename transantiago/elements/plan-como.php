<div id="p_como" class="plan_conts">
    <div class="this_block">
        <h3 class="cut">
            Cómo llegar 
            <span class="togg">
                <span class="less"></span>
                <span class="more rotate"></span>
            </span>
        </h3>
        <div class="cut_cont">
            <p>Conoce cómo llegar de un punto a otros en Santiago.</p>
            <form class="col-xs-12 nopad">
                <div class="form-group col-xs-12 wth_icon nopad">
                    <div class="col-xs-2">
                        <div class="icon-a"></div>
                    </div>
                    <div class="col-xs-10 nopad">
                        <label for="inpt_desde">
                            <strong>Desde:</strong>
                        </label>
                        <input type="text" placeholder="Dirección o lugar de referencia" id="inpt_desde" class="form-control szfull">
                        <span id="icon_place"  data-toggle="modal" data-target="#diag-como"></span>
                    </div>
                </div>
                <div class="form-group col-xs-12 nopad">
                    <div class="col-xs-2">
                        <div class="icon-b"></div>
                    </div>
                    <div class="col-xs-10 nopad">
                        <label for="inpt_hasta">
                            <strong>Hasta:</strong> 
                            <span class="reload"></span>
                        </label>
                        <input type="text" placeholder="Dirección o lugar de referencia" id="inpt_hasta" class="form-control szfull">
                    </div>
                </div>
                <div class="this_block mbot litt no_side active">
                    <p id="preff">
                        Preferencias 
                        <span>
                            <span class="less"></span>
                            <span class="more"></span>
                        </span>
                    </p>
                    <div class="col-xs-12">
                        <div class="col-xs-12 nopad" id="preff_inpt">
                            <div class="col-xs-5 list-group">
                                <label for="inpt_ruta">
                                    <strong>Ruta:</strong>
                                </label>
                                <select id="inpt_ruta" class="form-control szfull">
                                    <option value="Mas rápido">Mas rápido</option>
                                    <option value="Menos combinaciones">Menos combinaciones</option>
                                    <option value="Solo bus">Solo bus</option>
                                </select>
                            </div>
                            <div class="col-xs-7 nopad" id="datetimepicker2">
                                <label for="inpt_hora">
                                    <strong>Día y hora de salida:</strong>
                                </label>
                                <input type="text" class="form-control szfull add-on" id="inpt-hora" data-format="MM/dd/yyyy HH:mm:ss" placeholder="Dia y hora de salida">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-xs-12 nopad">
                    <input type="submit" class="btn princ pull-right szfull" value="Buscar Buses">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="diag-como" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Como llegar</h4>
                <p>
                    Encontramos más de un paradero cercano a tu ubicación. Por favor selecciona el paradero que deseas utilizar:
                </p>
            </div>
            <div class="modal-body">
                <p><span id="bus"></span><strong>PG203</strong> a Providencia</p>
                <hr>
                <p><span id="bus"></span><strong>PG203</strong> a Macul</p>
                <hr>
                <p><span id="bus"></span><strong>PG203</strong> a Santiago</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function() {
        $('#datetimepicker2').datetimepicker({
            language: 'en',
            pick12HourFormat: true
        });
    });
</script>