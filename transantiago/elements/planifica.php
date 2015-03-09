<div class="col-xs-12 fz13 plan nopad">
    <h2>Planifica tu viaje</h2>
    <nav class="col-xs-12 nopad text-center">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#cuando_llega" data-toggle="tab" title="Cuándo llega" class="col-xs-4 nopad fz13"><img src="img/planifica/plan_cuando.png" alt="Cuando Llega">Cuándo llega</a></li>
            <li class="mid"><a href="#paradas_bip" data-toggle="tab" title="Paradas y Bip" class="col-xs-4 nopad fz13"><img src="img/planifica/plan_parada.png" alt="Paradas y Bip">Paradas y Bip</a></li>
            <li><a href="#como_llegar" data-toggle="tab" title="Cómo llegar" class="col-xs-4 nopad fz13"><img src="img/planifica/plan_como.png" alt="Cómo llegar">Cómo llegar</a></li>
        </ul>
    </nav>
    <div class="panel-body">
        <div class="tab-content">
            <div class="tab-pane fade in active" id="cuando_llega">
                <?php include('elements/plan-cuando.php'); ?>
            </div>
            <div class="tab-pane fade" id="paradas_bip">
                <?php include('elements/plan-parada.php'); ?>
            </div>
            <div class="tab-pane fade" id="como_llegar">
                <?php include('elements/planifica/como/rutas_sugeridas.php'); ?>
            </div>
        </div>
    </div>
</div>