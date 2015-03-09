<?php
get_header();
?>
<div class="container content">
    <div class="wrap">
        <div class="main">
           <?php
               $parentLink = get_permalink($post->post_parent);
                $parentTitle = get_the_title($post->post_parent);
            ?>
            <div class="breadcrumb">
                <a href="<?php bloginfo('url'); ?>" title="Volver al inicio">Inicio</a> &#9658; <a href="<?php echo $parentLink; ?>" title="<?php echo $parentTitle; ?>"><?php echo $parentTitle;?></a> &#9658; <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="content_box wysiwyg">
                <?php  if(have_posts()) : while(have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
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