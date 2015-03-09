<?php get_header(); ?>

<?php 
$get_banner_inicio = new WP_Query(array(
    'post_type' => 'banners',
    'showposts' => '1',
    'orderby' => 'date',
    'order' => 'DESC',
    'taxonomy' => 'secciones',
    'secciones' => 'inicio'
));

$get_texto_inicio = new WP_Query(array(
    'post_type' => 'texto-inicio',
    'showposts' => '2',
    'orderby' => 'date',
    'order' => 'DESC'
));

$get_articulos_prensa = new WP_Query(array(
    'post_type' => array('articulos', 'prensa'),
    'posts_per_page' => '8',
    'orderby' => 'date',
    'order' => 'DESC'
));
?>
<?php if($get_banner_inicio->have_posts()) : ?>
<?php while($get_banner_inicio->have_posts()) : $get_banner_inicio->the_post();?> 
<section class="banner" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>);">
    <div class="wrapper">   
        <div class="txt_banner">
            <h2><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>
        </div>
    </div>
</section>
<?php endwhile; else:?>
<section class="banner" style="background: url(<?php echo get_template_directory_uri();?>/img/back.jpg);">>
</section>
<?php endif;?>
<section class="feature">
    <div class="wrapper">
        <ul>
            <?php if($get_texto_inicio->have_posts()) :?>
            <?php while($get_texto_inicio->have_posts()) : $get_texto_inicio->the_post();?>
            <?php $thumb_src = wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>
            <li>
                <a href="<?php echo the_field('link');?>" title="<?php the_title();?>" class="ft_img">
                    <img src="<?=$thumb_src;?>" alt="Imagen">
                </a>
                <div class="cont">
                    <h3><?php the_title();?></h3>
                    <div><?php the_content();?>
                    <a href="<?php echo the_field('link');?>" title="<?php the_field('nombre_boton');?>" class="more" target="_blank"><?php the_field('nombre_boton');?></a>
                </div>
            </li>
            <?php endwhile;?>
            <?php endif;?>
        </ul>
    </div>
</section>
<section class="content">
    <div class="wrapper">
        <ul class="list">
            <!-- articulo inicio-->
            <?php 
            if($get_articulos_prensa->have_posts()) :
            while($get_articulos_prensa->have_posts()) : $get_articulos_prensa->the_post();
            $thumb_src = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            $obj = get_post_type_object($post->post_type);
            ?>
            <li>
                <a href="<?php the_permalink();?>" title="Articulo" class="dst_img">
                    <img src="<?=$thumb_src;?>" alt="Imagen">
                </a>
                <div class="cont">
                    <div class="date">
                        <a href="<?php echo get_post_type_archive_link($post->post_type); ?>" title="<?php echo $obj->labels->menu_name;?>" class="<?php echo $obj->clase;?>"><?php echo $obj->labels->menu_name;?></a>
                        <p><?php the_format_date($post->ID); ?></p>
                    </div>
                    <h3><a href="<?php the_permalink();?>"><?=the_title();?></a></h3>
                    <p><?=the_contentsmall('', '...', true, '60');?></p>
                </div>
            </li>
            <?php endwhile;?>
            <?php endif;?>
        </ul>
    </div>
</section>
<?php get_footer(); ?>