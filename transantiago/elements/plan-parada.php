<div id="p_parada" class="plan_conts">
    <div class="this_block">
        <h3 class="cut">Paradas y Bip! <span class="togg"><span class="less"></span><span class="more rotate"></span></span></h3>
        <div class="cut_cont">
            <p>Encuentra los paraderos y puntos de carga bip más cercanos.</p>
            <form class="col-xs-12 nopad">
                <div class="form-group col-xs-12 nopad wth_icon">
                    <label for="inpt_bip"><strong>Cercanos a:</strong></label>
                    <input type="text" placeholder="Dirección o lugar" id="inpt_bip" class="form-control szfull">
                    <span id="icon_place"  data-toggle="modal" data-target="#diag-parada"></span>
                </div>
                <div class="form-group col-xs-12 nopad">
                    <input type="submit" class="btn princ szfull" value="Buscar Paraderos y Puntos Bip">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="diag-parada" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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