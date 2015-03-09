<?php if(is_home() || is_front_page() || is_page() &&
         ( !is_page_template('nuestro_trabajo.php') &&
          !is_page_template('nosotros.php') &&
          !is_page_template('ciberaccion.php') &&
          !is_singular('accion') &&
          !is_page('asociate')
         )
        ){ ?>
<?php
    wp_reset_query();
    $get_testimonio = new WP_Query(array(
        'post_type'	=> 'noticia',
        'taxonomy'	=> 'categorias_noticias',
        'categorias_noticias'	=> 'testimonios',
        'showposts'	=> 1,
        'order'		=> 'DESC',
        'orderby'	=> 'date'
    ));

    if ($get_testimonio->have_posts()) : while($get_testimonio->have_posts()) : $get_testimonio->the_post();
?>
<div class="sidebar_box quote">
    <div class="side_banner"></div>
    <div class="sidebar_photo">
        <?php the_post_thumbnail('medium'); ?>
    </div>
    <div class="label_y">
        <span class="label_left"></span>Mi amnistia<span class="label_right"></span>
    </div>
    <div>
        <?php the_excerpt(); ?>
    </div>
    <a href="<?php the_permalink(); ?>" class="btn btn_sec">Ver más <span class="icon_btn plus"></span></a>
</div>
<?php endwhile; endif; ?>	

<?php } ?>

<?php
wp_reset_query();
if (is_page_template('ciberaccion.php') || is_singular('accion')) {
    $args_nuestro_trabajo = array(
        'post_type' => 'page',
        'post_status' => 'publish',
        'showposts' => '-1',
        'orderby' => 'date',
        'order' => 'DESC',
        'meta_query' => array(
            array(
                'key' => '_wp_page_template',
                'value' => 'nuestro_trabajo.php', // template name as stored in the dB
            )
        )
    );
    $get_nuestro_trabajo = new WP_Query($args_nuestro_trabajo);
?>
<div class="sidebar_box fullphoto">
    <div class="label_y">
        <span class="label_left"></span>Involúcrate<span class="label_right"></span>
    </div>
    <div class="img_fp">
        <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/12/home-h3-trabajo-bg.png" alt="Home" />
    </div>
    <div class="content_fp">
        <div class="title_fp"><span>Necesitamos de tu</span><span class="big">apoyo</span></div>
        <div class="text_fp">
            <div class="vertical_content">Puede ser:</div>
            <ul class="with_vertical">
                <li><a href="<?php bloginfo('url'); ?>/actua-amnistia/ciberactivista/" title="" >Ciberactivista</a></li>
                <li><a href="<?php bloginfo('url'); ?>/actua-amnistia/voluntario-de-accion/" title="" >Voluntario/a de Acción</a></li>
                <li><a href="<?php bloginfo('url'); ?>/actua-amnistia/voluntario-universitario/" title="" >Voluntario/a de Centro Educativo</a></li>
                <li><a href="<?php bloginfo('url'); ?>/actua-amnistia/voluntario-del-equipo-operativo/" title="" >Voluntario/a Equipo Operativo</a></li>
                <li><a href="<?php bloginfo('url'); ?>/actua-amnistia/colaborador-puntual/" title="" >Colaborador Puntual</a></li>
                <li><a href="<?php bloginfo('url'); ?>/actua-amnistia/donante-mensual/" title="" >Donante Mensual</a></li>
            </ul>    
        </div>
    </div>
</div>
<?php } ?> <!--Endif template ciberaccion-->

<?php wp_reset_query();
if (is_page('nuestro-trabajo') || is_page(get_children_pages_by_id($post->ID) ) ) { ?>
<div class="sidebar_box fullphoto var">
    <div class="label_y">
        <span class="label_left"></span>NUESTRO TRABAJO<span class="label_right"></span>
    </div>
    <div class="content_fp">
        <!--        <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/12/home-h3-trabajo-bg.png" alt="Nuestro Trabajo" />-->
        <div class="title_fp"><span class="big">52</span>años defendiendo los derechos humanos</div>
        <div class="text_fp">
            <?php if(have_posts()) : while(have_posts()) : the_post();?>
            <?php $pages_submenu = get_children_pages_by_id(47); if(!empty($pages_submenu)){
    echo '<span class="title_submenu">'.$post->post_title.'</span>';
    echo '<ul>';
    foreach($pages_submenu as $item){
        echo '<li>';
        echo '<a href="'.get_the_permalink($item->ID).'" title="'.get_the_title($item->ID).'">'.get_the_title($item->ID).'</a>';
        echo '</li>';
    }
    echo '</ul>';
}
            ?>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php } ?> <!--Endif nuestro_trabajo-->

<?php
wp_reset_query();
if (is_page_template('nosotros.php')) {
    $args_nosotros = array(
        'post_type' => 'page',
        'post_status' => 'publish',
        'showposts' => '-1',
        'orderby' => 'date',
        'order' => 'DESC',
        'meta_query' => array(
            array(
                'key' => '_wp_page_template',
                'value' => 'nosotros.php', // template name as stored in the dB
            )
        )
    );
    $get_nosotros = new WP_Query($args_nosotros);
?>

<div class="sidebar_box fullphoto var">
    <div class="label_y">
        <span class="label_left"></span>Nosotros<span class="label_right"></span>
    </div>
    <div class="content_fp">
        <div class="title_fp"><span>Somos</span><span class="big">3.000.000</span><span>de activistas</span></div>
        <?php if ($get_nosotros->have_posts()) : ?>
        <div class="text_fp">
            <ul>
                <?php while($get_nosotros->have_posts()) : $get_nosotros->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></li>
                <?php endwhile; ?>
            </ul>    
        </div>
        <?php endif; ?>
    </div>
</div>

<?php } ?> <!--Endif nosotros-->

<?php
wp_reset_query();
if (is_page('formas-actuar')) {
    $args_actua = array(
        'post_type' => 'actua-amnistia',
        'post_status' => 'publish',
        'showposts' => -1,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $get_actua = new WP_Query($args_actua);
?>

<div class="sidebar_box fullphoto var">
    <div class="label_y">
        <span class="label_left"></span>Involúcrate<span class="label_right"></span>
    </div>
    <div class="content_fp">
        <div class="title_fp"><span>Llevamos</span><span class="big">6.218</span><span>firmas este año</span></div>
        <?php if ($get_actua->have_posts()) : ?>
        <div class="text_fp">
            <div class="vertical_content">Puede ser:</div>
            <ul class="with_vertical">
                <?php while($get_actua->have_posts()) : $get_actua->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></li>
                <?php endwhile; ?>
            </ul>    
        </div>
        <?php endif; ?>
    </div>
</div>

<?php } ?> <!--Endif actua-->

<?php if(is_page('asociate')) { ?>
<div class="sidebar_box fullphoto">
    <div class="side_banner"></div>
    <div class="label_y">
        <span class="label_left"></span>Asóciate<span class="label_right"></span>
    </div>
    <div class="img_fp">
        <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/12/home-h3-trabajo-bg.png" alt="Asociate" />
    </div>
    <div class="content_fp">
        <div class="title_fp"><span>¡Muchas</span><span class="big">Gracias!</span></div>
        <div class="text_fp">
            <p class="text_special">Gracias por elegir donar en favor de la dignidad, la libertad y la justicia.</p> 
        </div>
    </div>
</div>
<div class="sidebar_box contact">
    <div class="side_banner"></div>
    <div class="label_y">
        <span class="label_left"></span>¿Necesitas ayuda?<span class="label_right"></span>
    </div>
    <div class="contact_box">
        <p class="text">Con todo gusto nos pondremos en contacto contigo para orientarte y brindarte información paso a paso.</p>
        <div class="contact_method">
            <span class="icon_contact phone"></span>
            <p class="info_contact">
                <strong>Llámanos a</strong>
                +56 (2) 2235 59 45
            </p>
        </div>
        <div class="contact_method">
            <span class="icon_contact mail"></span>
            <p class="info_contact">
                <strong>Escribenos a</strong>
                unete@amnistia.cl
            </p>
        </div>
    </div>
</div>
<?php } ?>

<div class="sidebar_box follow">
    <div class="side_banner"></div>
    <div class="label_y">
        <span class="label_left"></span>Mantente Conectado<span class="label_right"></span>
    </div>
    <div class="like_fb">
        <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FAmnist%25C3%25ADa-Internacional-Chile%2F126170624336%3Ffref%3Dts&amp;width=200&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:80px;" allowTransparency="true"></iframe>
    </div><!--like_fb-->
    <div class="follow_tw">
        <a href="https://twitter.com/amnistiachile" class="twitter-follow-button" data-show-count="false" data-lang="es">Seguir a @amnistiachile</a>
    </div>
    <div class="youtube_subs">
        <script src="https://apis.google.com/js/platform.js"></script>
        <div class="g-ytsubscribe" data-channel="aichile1" data-layout="default" data-count="undefined"></div>
    </div>
</div>
<?php if (is_home()) { ?> 
<div class="sidebar_box twitter">
    <div class="side_banner"></div>
    <div class="label_y">
        <span class="label_left"></span>Twitter<span class="label_right"></span>
    </div>
    <a class="twitter-timeline" href="https://twitter.com/amnistiachile" data-widget-id="411494830624096256">Tweets por @amnistiachile</a>
</div>
<?php }else{ ?>
<div class="sidebar_box quick_donate">
    <div class="side_banner"></div>
    <div class="label_y">
        <span class="label_left"></span>Haz una donación<span class="label_right"></span>
    </div>
    <p class="text_donate">Dona lo que puedas. Prometemos usar ese dinero en nuestras compañas</p>
    <div class="line">
        <a href="https://www.webpay.cl/portalpagodirecto/pages/institucion.jsf?idEstablecimiento=1934788" title="Dona lo que puedas." target="_blank" class="btn_donar btn btn_sec">
            DONAR <span class="icon_donar"></span>
        </a>
    </div>
    <div class="donate_webpay">
        <a href="https://www.webpay.cl/portalpagodirecto/pages/institucion.jsf?idEstablecimiento=1934788" title="Dona lo que puedas." target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/webpay.png" alt="WebPay" >
        </a>
    </div>
</div>
<?php } ?> <!--Endif home-->