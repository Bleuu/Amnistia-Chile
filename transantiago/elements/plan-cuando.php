<div id="p_cuando" class="plan_conts">
    <div class="this_block">
        <h3 class="cut">Cuándo llega <span class="togg"><span class="less"></span><span class="more rotate"></span></span></h3>
    <div class="cut_cont">
            <p>Conoce en cuánto tiempo llegará tu bus al paradero.</p>
            <form class="col-xs-12 nopad">
                <div class="form-group col-xs-12 wth_icon nopad">
                    <label for="inpt_parada"><strong>Paradero:</strong></label>
                    <input type="text" placeholder="Código de paradero" id="inpt_parada" class="form-control szfull">
                    <span id="icon_place" data-toggle="modal" data-target="#diag-cuando"></span>
                </div>
                <div class="form-group col-xs-12 nopad">
                    <label for="inpt_recorrido"><strong>Recorrido</strong> (opcional)<strong>:</strong></label>
                    <input type="text" placeholder="Código del servicio" id="inpt_recorrido" class="form-control szfull">
                </div>
                <div class="form-group col-xs-12 nopad">
                    <input type="submit" class="btn princ szfull pull-right" value="Buscar Buses">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="diag-cuando" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Selecciona tu paradero</h4>
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