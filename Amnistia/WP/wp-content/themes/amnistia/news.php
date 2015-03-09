<?php
    /* Template Name: Noticias */
get_header();
?>
<div class="container content">
    <div class="wrap">
        <div class="main">
            <div class="breadcrumb">
                <a href="<?php bloginfo('url'); ?>">Inicio</a> &#9658; <a>Noticias</a>
            </div>
            <div class="wysiwyg">
               <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <h1 class="title"><?php the_title() ?></h1>
                <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
            <section class="list_result">
            <?php
                query_posts(array(
                    'post_type'=>'noticia',
                    'showposts'=>3,
                    'taxonomy'=>'categorias_noticias',
                    'categorias_noticias'=> 'dest',
                    'orderby' => 'ASC'
                ));
                if(have_posts()) : ?>
                <?php while(have_posts()) : the_post();
                ?>
                <article class="special">
                    <div class="img_article">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_post_thumbnail('thumbnail'); ?>
                        </a>
                    </div>
                    <div class="resume_article result_list">
                        <p class="title_article"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
                        <p class="info_article"><?php the_time('j, M. Y'); ?>  | <?php echo get_the_term_list( $post->ID, 'categorias_noticias', 'Categoría:', ', ', '' ); ?></p>
                        <p class="description_secondary"><?php echo string_limit_words(get_the_excerpt(),22); ?> [...]</p>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn btn_sec">Ver más <span class="icon_btn plus"></span></a>
                    </div>
                </article>
           <?php endwhile; endif; wp_reset_query(); ?>
            <?php
                $traer_noticias = new WP_query(array(
                    'post_type'=>'noticia',
                    'posts_per_page' => 10,
                    'paged'=>get_query_var('paged'),
                    'tax_query'	=> array(
                        array(
                            'taxonomy'  => 'categorias_noticias',
                            'field'     => 'slug',
                            'terms'     => 'dest','logros','prensa', // exclude media posts in the news-cat custom taxonomy
                            'operator'  => 'NOT IN'
                        )
                    ),
                ));
                if($traer_noticias->have_posts()) : while($traer_noticias->have_posts()) : $traer_noticias->the_post();
            ?>
                <article>
                    <div class="img_article">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_post_thumbnail('thumbnail'); ?>
                        </a>
                    </div>
                    <div class="resume_article result_list">
                        <p class="title_article"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
                        <p class="info_article"><?php the_time('j, M. Y'); ?>  | <?php echo get_the_term_list( $post->ID, 'categorias_noticias', 'Categoría:', ', ', '' ); ?></p>
                        <p class="description_secondary"><?php echo string_limit_words(get_the_excerpt(),22); ?> [...]</p>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn btn_sec">Ver más <span class="icon_btn plus"></span></a>
                    </div>
                </article>
           <?php endwhile; endif; wp_reset_query(); ?>
            </section>            
            <?php pagination($traer_noticias); ?>
        </div><!--main-->
        <aside>
            <?php get_sidebar(); ?>
        </aside>
    </div><!--main_full-->
</div> <!--content-->
<?php get_footer(); ?>