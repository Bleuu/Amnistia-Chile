<?php include('header.php'); ?>
<section class="col-sm-12 nopad">
    <div class="container">
        <div class="col-md-5 col-xs-12">
            <ol class="breadcrumb fz13">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="mapas-recorridos.php">Mapas y Recorridos</a></li>
                <li class="active">Detalles de Recorridos</li>
            </ol>
            <h2>Detalles de Recorridos</h2>
            <p>
                Lorem ipsum dolor sit Duis aute irure dolor in reprehenderit in voluptate velit esse. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla. Lorem ipsum dolor sit Duis aute irure dolor in reprehenderit in voluptate.
            </p>
            <div class="col-xs-12 nopad share mob tab">
                <p class="pull-left">Compartir</p>
                <div class="icon_rss pull-right">
                    <a href="#" title="Whatsapp" id="shr_wsp" class="mob"></a>
                    <a href="#" title="Twitter" id="shr_tw"></a>
                    <a href="#" title="Facebook" id="shr_fb"></a>
                </div>
            </div>
            <h3 class="form-group">Buscador de recorridos</h3>
            <div class="col-xs-12 nopad this_block wth_bot wht_pad">
                <div class="col-md-5 col-xs-12 nopad">
                    <p class="nomarg">Código del recorrido</p>
                    <p class="gray"><span>Ejemplo: 402</span></p>
                </div>
                <div class="col-md-7 col-xs-12 nopad cod_serv input-group">
                    <input type="text" class="form-control" placeholder="Código del servicio" aria-describedby="cod_servicio">
                    <span class="input-group-addon btn princ mdm" id="cod_servicio">Buscar</span>
                </div>
            </div>
            <div class="col-xs-12 nopad this_block wht_pad no_side fz13" id="chng_color">
                <div class="col-xs-12 nopad block_light">
                    <div class="col-xs-5">
                        <p><strong>Recorrido</strong></p>
                        <div class="col-xs-12 n_servicio sinpad">
                            <p class="w_blue"><span></span>314</p>
                        </div>
                    </div>
                    <div class="col-xs-7 nopad">
                        <p><strong>Desde <span>Cerro Navia</span></strong></p>
                        <p class="nomarg">
                            Domingo y Festivos: <span>de 05:45 a 23:57</span>
                        </p>
                        <p class="nomarg">
                            Lunes a Viernes: <span>de 05:00 a 23:59</span>
                        </p>
                        <p class="nomarg">
                            Sábado: <span>de 05:00 a 23:57</span>
                        </p>
                        <div class="reload_map"><span class="icon-rdl-map"></span>Invertir ruta</div>
                    </div>
                </div>
                <div class="col-xs-12 nopad block_light no_vert list_recorrido desk">
                    <div class="col-xs-5 nopad b_right">
                        <p class="tit_prin">Calles por las que<br />pasa el recorrido</p>
                    </div>
                    <div class="col-xs-7 nopad">
                        <p class="tit_prin">Paraderos</p>
                    </div>
                </div>
                <div class="col-xs-12 nopad list_recorrido" id="content_rdo">
                    <div class="col-md-5 col-xs-12 nopad b_right def_h scrollable list_comuna">
                        <div class="comuna">
                            <p class="tit">Cerro Navia</p>
                            <div><p>La capilla</p></div>
                            <div><p>Salvador Gutierrez</p></div>
                        </div>
                        <div class="comuna">
                            <p class="tit">Quinta Normal</p>
                            <div><p>Salvador Gutierrez</p></div>
                            <div><p>La Capilla</p></div>
                            <div><p>Mapocho</p></div>
                        </div>
                        <div class="comuna">
                            <p class="tit">Santiago Centro</p>
                            <div><p>Mapocho</p></div>
                            <div><p>San Pablo</p></div>
                            <div><p>General Mackenna</p></div>
                            <div><p>Santa María</p></div>
                        </div>
                        <div class="comuna">
                            <p class="tit">Providencia</p>
                            <div><p>Santa María</p></div>
                        </div>
                        <div class="comuna">
                            <p class="tit">Vitacura</p>
                            <div><p>Avenida Vitacura</p></div>
                            <div><p>Tabancura</p></div>
                            <div><p>Pdte. Kennedy</p></div>
                            <div><p>Avenida Las Condes</p></div>
                            <div><p>La Cabaña</p></div>
                        </div>
                    </div>
                    <div class="col-md-7 col-xs-12 nopad def_h scrollable desk">
                        <div class="set_paraderos">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-7 mapa_rdo desk">
        </div>
    </div>
</section>
<div style="display: none;">
    <div class="cont_paraderos">
        <div class="col-md-12 col-sm-6 col-xs-12">
            <div class="col-xs-12 rdo_item nopad">
                <div class="col-xs-4 mid_left nopad here_icon">
                    <p><span id="icon-bus-black"></span></p>
                    <div class="barra"></div>
                </div>
                <div class="col-xs-8 mid_right nopad block_light no_vert">
                    <p>Costanera Norte esq.</p>
                    <p>Mar de Chile</p>
                    <p class="gray"><span>PJ256</span></p>
                </div>
            </div>
            <div class="col-xs-12 rdo_item nopad">
                <div class="col-xs-4 mid_left nopad here_icon">
                    <p><span id="icon-bus-black"></span></p>
                    <div class="barra"></div>
                </div>
                <div class="col-xs-8 mid_right nopad block_light no_vert">
                    <p>Costanera Sur esq.</p>
                    <p>Mar de Chile</p>
                    <p class="gray"><span>PJ256</span></p>
                </div>
            </div>
            <div class="col-xs-12 rdo_item nopad">
                <div class="col-xs-4 mid_left nopad here_icon">
                    <p><span id="icon-bus-black"></span></p>
                    <div class="barra"></div>
                </div>
                <div class="col-xs-8 mid_right nopad block_light no_vert">
                    <p>Costanera Sur esq.</p>
                    <p>Mar de Chile</p>
                    <p class="gray"><span>PJ256</span></p>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-6 col-xs-12 tab nopad">
            <div class="mapa_small"></div>
        </div>
        <div class="col-xs-12 mob" id="goto_map">
            <img src="img/planifica/plan_map.png" alt="Mapa">
        </div>
    </div>
</div>
<?php include('footer.php'); ?>