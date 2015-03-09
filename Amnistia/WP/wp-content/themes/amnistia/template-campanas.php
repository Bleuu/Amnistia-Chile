<?php
/*Template name: Listado campañas*/
get_header();
if(isset($_GET['cr']) && !empty($_GET['cr'])){
    $cr = intval(strip_tags(trim($_GET['cr'])));
    $cr_slug = get_term_by('id', $cr, 'tipo-campana')->slug;
}else{
    $cr_slug = $post->post_name;
}
?>
<div class="container content">
    <div class="wrap">
        <div class="main">
            <?php  if(have_posts()) : while(have_posts()) : the_post(); 
                $parentLink = get_permalink($post->post_parent);
                $parentTitle = get_the_title($post->post_parent);
                $oldparent = get_post($post->post_parent);
                $printoldLink = get_permalink($oldparent->post_parent);
                $printoldTitle = get_the_title($oldparent->post_parent);
            ?>
            <div class="breadcrumb">
                <a href="<?php bloginfo('url'); ?>" title="Volver al inicio">Inicio</a> &#9658; <a href="<?php echo $printoldLink; ?>" title="<?php echo $printoldTitle; ?>"><?php echo $printoldTitle; ?></a> &#9658; <a href="<?php echo $parentLink; ?>" title="<?php echo $parentTitle; ?>"><?php echo $parentTitle; ?></a> &#9658; <a><?php the_title(); ?></a>
            </div>
            <div class="submenu-page">
                <?php
$page_campanas = get_page_by_path('/nuestro-trabajo/campanas');
$pages_submenu = get_children_pages_by_id($page_campanas->ID);
$current_id = $post->ID;
if(!empty($pages_submenu)){
    echo '<span class="title_submenu">Campañas</span>';
    echo '<ul class="submenu-side">';
    foreach($pages_submenu as $item){
        $current_class = ( $current_id == $item->ID ) ? ' class="active"' : '';
        echo '<li>';
        echo '<a href="'.get_the_permalink($item->ID).'" title="'.get_the_title($item->ID).'"'.$current_class.'>'.get_the_title($item->ID).'</a>';
        echo '</li>';
    }
    echo '</ul>';
}
                ?>
            </div>
            <div class="portada-seccion content_box wysiwyg">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <?php $temp = $post; ?>
                <?php
if ($post->post_name=='accion-por-paises'){
    $paises_ID = get_term_by('slug', 'accion-por-paises', 'tipo-campana')->term_id;
    $get_paises = get_terms('tipo-campana', array(
        'orderby'           => 'name', 
        'order'             => 'ASC',
        'hide_empty'        => true, 
        'child_of'          => $paises_ID
    ));
    if(($get_paises)){
        echo '<div class="country_filter">';
        echo '<form action="'.get_current_page_link().'" method="get" name="country_term_filter">';
        echo '<span class="lab">Filtrar por país: </span>';
        echo '<select name="cr" id="term_cr">';
        echo '<option value="">-- Todos --</option>';
        foreach($get_paises as $pais){
            $selected = (isset($cr) && $cr==$pais->term_id)?' selected="selected"':'';
            echo '<option '.$selected.'value="'.$pais->term_id.'">'.$pais->name.'</option>';
        }
        echo '</select>';
        echo '<input type="submit" value="filtrar" class="btn">';
        echo '</form>';
        echo '</div>';
    };
}
$get_campanas = new WP_Query(array(
    'post_type' => 'campana',
    'taxonomy' => 'tipo-campana',
    'tipo-campana' => $cr_slug,
    'posts_per_page' => 6,
    'paged'=>get_query_var('paged')
));
if ($get_campanas->have_posts()) :
                ?>
                <div class="accion_list">
                    <ul>
                        <?php while($get_campanas->have_posts()) : $get_campanas->the_post();?>
                        <li>
                            <div class="thumb">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                </a>
                            </div>
                            <div class="contenido_li">
                                <h2 class="title_cont_list">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <p class="description"><?php echo string_limit_words(get_the_excerpt(), 20); ?> [...]</p>
                                <a href="<?php the_permalink(); ?>" class="btn btn_ter">Conocer campaña</a>
                            </div>
                        </li>
                        <?php endwhile; //get_campanas ?>
                    </ul>
                </div><!-- .accion_list -->
                <?php else:
echo '<p><em>Por el momento no tenemos campañas para mostrar.</em></p>';
endif; //get_campanas ?>
                <?php $post = $temp; ?>
            </div>
            <?php pagination($get_campanas); ?> 
            <?php endwhile; endif; ?>
        </div><!--main-->
        <aside>
            <?php get_sidebar(); ?>
        </aside>
    </div><!--main_full-->
</div><!--content-->
<?php
get_footer();
?>