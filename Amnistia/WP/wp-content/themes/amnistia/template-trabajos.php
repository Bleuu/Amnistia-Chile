<?php
/* Template Name: Trabaja con nosotros */
get_header();
?>
<div class="container content">
    <div class="wrap">
        <div class="main">
            <div class="content_box wysiwyg">
                <?php  if(have_posts()) : while(have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
            <section class="list_result">
                <?php
$traer_trabajos = new WP_query(array(
    'post_type'=>'trabajo',
    'posts_per_page' => 10,
    'paged'=>get_query_var('paged')
));
if($traer_trabajos->have_posts()) : while($traer_trabajos->have_posts()) : $traer_trabajos->the_post();
                ?>
                <article>
                    <div class="img_article">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </a>
                    </div>
                    <div class="resume_article result_list">
                        <p class="title_article"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
                        <p class="info_article"><?php the_time('j, M. Y'); ?>  | <?php echo get_the_term_list( $post->ID, 'categorias_trabajos', 'Categoría:', ', ', '' ); ?></p>
                        <p class="description_secondary"><?php echo string_limit_words(get_the_excerpt(),22); ?> [...]</p>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn btn_sec">Ver más <span class="icon_btn plus"></span></a>
                    </div>
                </article>
                <?php endwhile; endif; wp_reset_query(); ?>
            </section>            
            <?php pagination($traer_trabajos); ?>
        </div><!--main-->
        <aside>
            <?php get_sidebar(); ?>
        </aside>
    </div><!--main-->
</div>
</div><!--content-->
<?php get_footer(); ?>