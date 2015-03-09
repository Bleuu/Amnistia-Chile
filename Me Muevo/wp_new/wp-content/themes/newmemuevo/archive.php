<?php
get_header();//trae el header
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;//variable para la paginacion
$offset = ($paged>1)?0:1; 

//variables que hacen una query segun el post_type que podria ser articulos o prensa dependendiendo del caso.
$get_articulos_y_prensa_importante = new WP_Query(array(
    'showposts' => '1',
    'post_type' => get_queried_object()->name,
    'orderby' => 'date',
    'order' => 'DESC'
));

$get_articulos_y_prensa = new WP_Query(array(
    'post_type' => get_queried_object()->name,
    'posts_per_page' => '8',
    'paged' => $paged,
    'orderby' => 'date',
    'order' => 'DESC',
    'offset' => $offset

));

//contestsmall es una funcion que acorta el largo de un parrafo, esta alojado en functions.php
//the_permalink() trae la url actual , es propio de wordpress
//the_post_thumbnail llama al formato de foto especificado en functions.php
//the_format_date funcion que trae la fecha del id, esta hecha en functions.php

?>

<section class="listado">
    <div class="wrapper">
        <div class="bread">
            <p>Estas en : <a href="<?php bloginfo('url')?>" title="Inicio">Inicio</a> > <span><?php echo get_queried_object()->labels->name; ?></span></p>
        </div>
        <?php
        if($get_articulos_y_prensa_importante->have_posts()) :
        while($get_articulos_y_prensa_importante->have_posts()) : $get_articulos_y_prensa_importante->the_post();?>
        <h2><?php echo get_queried_object()->labels->name; ?></h2>
            <?php the_post_thumbnail('thumb_articulos_prensa');?>
                <div class="cont">
                    <div class="date">
                        <a href="<?php echo get_post_type_archive_link(get_queried_object()->name); ?>" title="<?php echo get_queried_object()->name; ?>" class="<?php echo get_queried_object()->clase; ?>"><?php echo get_queried_object()->labels->menu_name; ?></a>
                        <p><?php the_format_date($post->ID); ?></p>
                    </div>
                    <h3><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></h3>
                    <p>
                        <?php the_contentsmall('', '...', true, '200');?>
                    </p>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="more">Continuar leyendo ></a>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<section class="content">
    <div class="wrapper">
        <ul class="list">
            <?php if($get_articulos_y_prensa->have_posts()) :?>
            <?php while($get_articulos_y_prensa->have_posts()) : $get_articulos_y_prensa->the_post(); ?>

            <li>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="dst_img">
                    <?php the_post_thumbnail('thumb_list_articulos_prensa');?>
                </a>
                <div class="cont">
                    <div class="date">
                        <a href="<?php echo get_post_type_archive_link(get_queried_object()->name); ?>" title="<?php echo get_queried_object()->labels->menu_name; ?></span>" class="<?php echo get_queried_object()->clase; ?>"><?php echo get_queried_object()->labels->menu_name; ?></span></a>
                        <p><?php the_format_date($post->ID); ?></p>
                    </div>
                    <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?></a></h3>
                    <p><?php the_contentsmall('', '...', true, '60');?></p>
                </div>
            </li>
            <?php endwhile;?>
            <?php endif; ?>
        </ul>
        <div class="paginador">
            <?php  if(function_exists('wp_pagenavi')) { wp_pagenavi(array( 'query' => $get_articulos_y_prensa )); } ?>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>