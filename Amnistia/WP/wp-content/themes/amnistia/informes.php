<?php
    /* Template Name: Informes */
get_header();
?>
<div class="container content">
    <div class="wrap">
        <div class="main">
            <div class="breadcrumb">
                <a href="<?php bloginfo('url'); ?>">Inicio</a> &#9658; <a>Informes</a>
            </div>
            <div class="wysiwyg">
                <h1 class="title"><?php the_title() ?></h1>
            </div>
            <section class="list_result">
            <?php
                $traer_informes = new WP_query(array('post_type'=>'informe', 'posts_per_page' => 10, 'paged'=>get_query_var('paged')));
                if($traer_informes->have_posts()) : while($traer_informes->have_posts()) : $traer_informes->the_post();
            ?>
                <article>
                    <div class="img_article">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_post_thumbnail('thumbnail'); ?>
                        </a>
                    </div>
                    <div class="resume_article result_list">
                        <p class="title_article"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
                        <p class="info_article"><?php the_time('j, M. Y'); ?>  <?php echo get_the_term_list( $post->ID, 'categorias_acciones', 'Categoría:', ', ', '' ); ?></p>
                        <p class="description_secondary"><?php echo string_limit_words(get_the_excerpt(),22); ?> [...]</p>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn btn_sec">Ver más <span class="icon_btn plus"></span></a>
                    </div>
                </article>
           <?php endwhile; endif; wp_reset_query(); ?>
            </section>            
            <?php pagination($traer_informes); ?>
        </div><!--main-->
        <aside>
            <?php get_sidebar(); ?>
        </aside>
        </div><!--main_full-->
</div><!--content-->
<?php get_footer(); ?>