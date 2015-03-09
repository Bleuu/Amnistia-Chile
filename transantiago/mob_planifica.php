<?php include('header.php'); ?>

<section>
    <div class="wrap p_fix">
        <div class="col-sm-12">
            <div class="col-sm-12 nopad mbm">
                <div class="col-xs-12 nopad">

                    <div class="col-xs-12 nopad fz13 plan">
                        <nav class="col-xs-12 nopad text-center">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#cuando_llega" data-toggle="tab" title="Cuándo llega" class="col-xs-4 nopad fz13"><span id="plan_cuando"></span>Cuándo llega</a></li>
                                <li class="mid"><a href="#paradas_bip" data-toggle="tab" title="Paradas y Bip" class="col-xs-4 nopad fz13"><span id="plan_parada"></span>Paradas y Bip</a></li>
                                <li><a href="#como_llegar" data-toggle="tab" title="Cómo llegar" class="col-xs-4 nopad fz13"><span id="plan_como"></span>Cómo llegar</a></li>
                            </ul>
                        </nav>
                        <div class="panel-body">
                            <div class="tab-content col-xs-12">
                                <div class="tab-pane fade in active" id="cuando_llega">
                                    <?php include('elements/planifica/cuando/recorrido-cuando.php'); ?>
                                </div>
                                <div class="tab-pane fade" id="paradas_bip">
                                    <?php include('elements/planifica/parada/single-parada.php'); ?>
                                </div>
                                <div class="tab-pane fade" id="como_llegar">
                                    <?php include('elements/plan-como.php'); ?>
                                </div>
                            </div>
                        </div>
                    </div>    

                </div>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>