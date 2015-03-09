<?php
get_header();
define('PARENT_ID', get_page_by_path('nuestro-trabajo')->ID);
?>
<div class="container content">
    <div class="wrap">
        <div class="main">
            <div class="breadcrumb">
                <a href="<?php bloginfo('url'); ?>" title="Volver al inicio">Inicio</a> &#9658; <a href="<?php bloginfo('url'); ?>/nosotros" title="Nosotros">Nosotros</a> &#9658; <a><?php the_title(); ?></a>
            </div>
            <div class="submenu-page">
                <?php
$page_campanas = get_page_by_path('/nuestro-trabajo/campanas');
$pages_submenu = get_children_pages_by_id($page_campanas->ID);
if(!empty($pages_submenu)){
    echo '<span class="title_submenu">Campañas</span>';
    echo '<ul class="submenu-side">';
    foreach($pages_submenu as $item){
        echo '<li>';
        echo '<a href="'.get_the_permalink($item->ID).'" title="'.get_the_title($item->ID).'">'.get_the_title($item->ID).'</a>';
        echo '</li>';
    }
    echo '</ul>';
}
                ?>
            </div>
            <div class="portada-seccion content_box wysiwyg">
                <?php  if(have_posts()) : while(have_posts()) : the_post();
$url_actual = get_permalink(get_the_ID()); ?>
                <div class="share_and_like">
                    <div class="fb-like" data-href="<?php echo $url_actual; ?>" data-width="200" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                    <a href="https://twitter.com/share" class="twitter-share-button" data-lang="es" data-hashtags="amnistia">Twittear</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    <div class="g-plusone"></div>
                </div><!--share_and_like-->
                <h1><?php the_title(); ?></h1>
                <?php
$terms = get_the_terms($post->ID, 'tipo-campana');
if(!empty($terms)){
    echo '<span class="terms-campanas">Pertenece a: <strong>';
    foreach($terms as $term){
        if (isset($temp)) echo ', ';
        echo $term->name;
        $temp = true;
    }
    echo '</strong></span>';
    unset($temp);
}
                ?>
                <?php the_content(); ?>
                <?php 
$link = get_field('campana_link');
$boton = get_field('campana_nombre-botom');
if($link){
    $boton = (empty($boton))?'Ir al link':$boton;
    echo '<a href="'.$link.'" title="'.$boton.'" target="_blank" class="btn btn_pri center btn_mid">'.$boton.'</a>';
}
                ?>
                <?php endwhile; endif; ?>
            </div>
        </div><!--main-->
        <aside>
            <?php get_sidebar(); ?>
        </aside>
    </div><!--main_full-->
</div><!--content-->
<?php
get_footer();
?>