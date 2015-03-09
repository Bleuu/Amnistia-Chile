<?php
global $wp_query;
$total_results = $wp_query->found_posts;
get_header();
?>
<div class="container banner">
    <div class="wrap">
        <div class="cont_tit"><h3 class="title_section">Resultado de Búsqueda</h3></div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/search_img.jpg" alt="">            
    </div>
</div>
<div class="container content">
    <div class="wrap">
        <div class="main">
            <section class="list_result">
                <?php
$traer_noticias = new WP_query(array(
    'post_type' => array('noticia', 'documento', 'accion', 'informe', 'actua-amnistia',),
    'posts_per_page' => 10,
    'paged'=>get_query_var('paged'),
    's' => get_query_var('s')
));
if($traer_noticias->have_posts()) :
while($traer_noticias->have_posts()) : $traer_noticias->the_post();
$urlBtn = types_render_field("subir-documento", array(""=>"",""=>"",""=>""));
                ?>
                <article>
                    <?php if( get_post_type() == 'documento' ) {?>
                    <div class="img_article">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </div>
                    <div class="resume_article result_list">
                        <p class="title_article"><?php the_title(); ?></p>
                        <p class="info_article"><?php the_time('j, M. Y'); ?></p>
                        <p class="description_secondary"><?php echo string_limit_words(get_the_excerpt(),22); ?> [...]</p>
                        <a href="<?php echo $urlBtn; ?>" title="<?php the_title(); ?>" target="_blank" class="btn btn_sec">Descargar<span class="icon_btn plus"></span></a>
                    </div>
                    <?php } else {?>
                    <div class="img_article">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </a>
                    </div>
                    <div class="resume_article result_list">
                        <p class="title_article"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
                        <p class="info_article"><?php the_time('j, M. Y'); ?></p>
                        <p class="description_secondary"><?php echo string_limit_words(get_the_excerpt(),22); ?> [...]</p>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn btn_sec">Ver más <span class="icon_btn plus"></span></a>
                    </div>
                    <?php }?>
                </article>
                <?php endwhile;
else:
//hacer cuando no9 hay
echo '<p class="none_result">No se han encontrado resultados.</p>';
endif; wp_reset_query(); ?>
            </section>            
            <?php pagination($traer_noticias); ?>            
        </div><!--main-->
        <aside>
            <?php get_sidebar(); ?> 
        </aside>
    </div><!--main_full-->
</div>
</div><!--content-->
<?php
get_footer();
?>