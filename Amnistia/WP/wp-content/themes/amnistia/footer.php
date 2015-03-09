<div class="container yellow_bar">
    <div class="wrap">
        <div class="logo_second">
            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/12/logo.png" title="Amnistía Internacional" alt="logo" />
        </div>
        <div class="yellow_arrow"></div>
        <div class="text_yb">
            Amnistía Internacional es un movimiento que promueve y defiende los derechos humanos en Chile y en el mundo.
        </div>
    </div>
</div><!--yellow_bar-->
<footer class="container">
    <div class="wrap">
        <ul class="boxes_foot">
            <li class="box_foot">
                <?php $parent_page = get_page_by_path('quienes-somos'); ?>
                <a href="<?php echo get_the_permalink($parent_page->ID); ?>" title="<?php echo get_the_title($parent_page->ID); ?>" class="title_footer"><?php echo get_the_title($parent_page->ID); ?></a>
                <?php
$get_pages_children = get_children_pages_by_id($parent_page->ID);
if(!empty($get_pages_children)){
    echo '<ul>';
    foreach($get_pages_children as $item){
        echo '<li><a href="'.get_the_permalink($item->ID).'" title="'.get_the_title($item->ID).'">'.get_the_title($item->ID).'</a></li>';
    }
    echo '</ul>';
}
unset($parent_page);
unset($get_pages_children);
                ?>
            </li>
            <li class="box_foot">
                <?php $parent_page = get_page_by_path('nuestro-trabajo'); ?>
                <a href="<?php echo get_the_permalink($parent_page->ID); ?>" title="<?php echo get_the_title($parent_page->ID); ?>" class="title_footer"><?php echo get_the_title($parent_page->ID); ?></a>
                <?php
$get_pages_children = get_children_pages_by_id($parent_page->ID);
if(!empty($get_pages_children)){
    echo '<ul>';
    foreach($get_pages_children as $item){
        echo '<li><a href="'.get_the_permalink($item->ID).'" title="'.get_the_title($item->ID).'">'.get_the_title($item->ID).'</a></li>';
    }
    echo '</ul>';
}
unset($parent_page);
unset($get_pages_children);
                ?>
            </li>
            <li class="box_foot">
                <?php $parent_page = get_page_by_path('actua'); ?>
                <a href="<?php echo get_the_permalink($parent_page->ID); ?>" title="<?php echo get_the_title($parent_page->ID); ?>" class="title_footer"><?php echo get_the_title($parent_page->ID); ?></a>
                <?php
$get_pages_children = get_children_pages_by_id($parent_page->ID);
if(!empty($get_pages_children)){
    echo '<ul>';
    $i=0;
    foreach($get_pages_children as $item){
        $i++;
        if($i < 5)
        echo '<li><a href="'.get_the_permalink($item->ID).'" title="'.get_the_title($item->ID).'">'.get_the_title($item->ID).'</a></li>';
    }
    echo '</ul>';
}
unset($parent_page);
unset($get_pages_children);
                ?>
            </li>
            <li class="box_foot">
                <a href="<?php bloginfo('url'); ?>/asociate" title="Asociate" class="title_footer">Asóciate</a>
            </li>
            <li class="box_foot">
                <p class="title_footer">Mantente conectado</p>
                <ul class="social_links">
                    <li><a href="https://www.facebook.com/pages/Amnist%C3%ADa-Internacional-Chile/126170624336" class="icon_social facebook" target="_blank" title="Facebook"></a></li>
                    <li><a href="https://twitter.com/amnistiachile" class="icon_social twitter" target="_blank" title="Twitter"></a></li>
                    <li><a href="https://www.youtube.com/user/aichile1" class="icon_social youtube" target="_blank" title="Youtube"></a></li>
                </ul>
                <p class="title_footer">Contáctenos</p>
                <p><strong>Amnistía Internacional - Chile</strong></p>
                <p>Huelén 164, 1er piso. Providencia, Santiago de Chile</p>
                <p>Horario de atención a público: <br />Lunes a jueves de 10.00 a 14.00 y de 15.00 a 17.00 horas. <br /> Viernes de 10.00 a 14.00 horas</p>
                <p>+56 (2) 2235 59 45</p>
                <p><a href="mailto:info@amnistia.cl" title="Enviar correo" target="_blank" >info@amnistia.cl</a></p>
            </li>
        </ul>
        <div class="copy"><?php echo date("Y"); ?> © Amnistía Internacional Chile</div>
    </div>
</footer>
<script>
    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");

    window.___gcfg = {lang: 'es'};

    (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/platform.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
</script>
<div class="buble">
    <a href="<?php bloginfo('url'); ?>/actua/otras-formas-participacion/" title="Participa">Súmate</a>
</div>
<?php wp_footer(); ?>
</body>
</html>
