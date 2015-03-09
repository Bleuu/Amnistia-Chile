<?php
$post_id = array($post->ID);
$get_rest = new WP_Query(array(
    'post_type' => get_queried_object()->post_type,
    'showposts' => 5,
    'orderby' => 'date',
    'order' => 'DESC',
    'post__not_in' => $post_id
));
?>

<section class="sidebar">
    <div class="wrapper">
        <h2>Otros artículos</h2>
        <ul>
            <?php if($get_rest->have_posts()) :?>
            <?php while($get_rest->have_posts()) : $get_rest->the_post();?>
            <li>
                <a class="pic" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_post_thumbnail('thumb_sidebar_articulos_prensa');?>
                </a>
                <div class="ext">
                    <h3><a href="<?php the_permalink(); ?>" class="thumb"><?php the_title();?></a></h3>
                    <p><?php the_contentsmall('', '...', true, '80');?></p>
                </div>
            </li>
            <?php endwhile;?>    
            <?php endif;?>
        </ul>
        <a href="<?php echo get_post_type_archive_link('articulos'); ?>" title="Ver todos" class="more">Ver todos los Artículos ></a>
    </div>
</section>