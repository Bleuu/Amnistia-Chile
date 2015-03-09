<?php
get_header(); 
global $post;
$slug = get_post( $post )->post_name;
$get_banner = new WP_Query(array(
    'post_type' => 'banners',
    'showposts' => '-1',
    'orderby' => 'date',
    'order' => 'DESC',
    'taxonomy' => 'secciones',
    'secciones' => $slug
));
?>

<section class="somos">
    <div class="wrapper">
        <div class="bread">
            <p>Estas en : <a href="<?php echo bloginfo('url')?>" title="Inicio">Inicio</a> > <span><?php the_title(); ?></span></p>
        </div>
        <div class="slide">
            <ul class="bxslider">
                <?php if($get_banner->have_posts()) :?>
                <?php while($get_banner->have_posts()) : $get_banner->the_post();?>
                <li>
                    <?php the_post_thumbnail('thumb_somos');?>
                </li>
                <?php endwhile; ?>
                <?php endif;?>
            </ul>
        </div>
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post();?>
        <div class="content">
            <h2><?php the_title();?></h2>
            <div class="txt_here">
                <?php the_content(); ?>    
            </div>
            <?php endwhile;?>
            <?php endif; ?>
        </div>    
    </div>
</section>

<?php if(is_page('quienes-somos')){
    get_template_part('somos', 'directorio');
}?>

<?php get_footer(); ?>