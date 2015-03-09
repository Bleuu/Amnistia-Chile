<?php
/* Template Name: Nosotros */
get_header();
?>
<div class="container content">
    <div class="wrap">
        <div class="main">
            <div class="breadcrumb">
                <a href="<?php bloginfo('url'); ?>" title="Volver al inicio">Inicio</a> &#9658; <a href="<?php bloginfo('url'); ?>/nosotros" title="Nosotros">Nosotros</a> &#9658; <a><?php the_title(); ?></a>
            </div>
            <div class="content_box wysiwyg">
                <?php  if(have_posts()) : while(have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
            <?php
$args = array(
    'post_type' => 'page',
    'post_status' => 'publish',
    'showposts' => '2',
    'orderby' => 'rand',
    'meta_query' => array(
        array(
            'key' => '_wp_page_template',
            'value' => 'nosotros.php', // template name as stored in the dB
        )
    )
);
$my_query = new WP_Query($args);

if ($my_query->have_posts()) :
            ?>
            <?php endif; ?>
        </div><!--main-->
        <aside>
            <?php get_sidebar(); ?>
        </aside>
    </div><!--main_full-->
</div><!--content-->
<?php get_footer(); ?>