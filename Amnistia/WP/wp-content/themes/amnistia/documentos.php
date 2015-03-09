<?php
/* Template Name: Documentos */
get_header();
?>
<div class="container content">
    <div class="wrap">
        <div class="main">
            <div class="breadcrumb">
                <a href="<?php bloginfo('url'); ?>/">Inicio</a> &#9658; <a>Documentos</a>
            </div>
            <div class="wysiwyg">
                <h1 class="title"><?php the_title() ?></h1>
            </div>
            <section class="list_result">
                <?php
    $traer_documento = new WP_query(array('post_type'=>'documento', 'posts_per_page' => 10, 'paged'=>get_query_var('paged')));
if($traer_documento->have_posts()) : while($traer_documento->have_posts()) : $traer_documento->the_post();
$urlBtn = types_render_field("subir-documento", array(""=>"",""=>"",""=>""));
                ?>
                <article>
                    <div class="img_article">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </div>
                    <div class="resume_article result_list">
                        <p class="title_article"><?php the_title(); ?></p>                        
                        <p class="description_secondary"><?php echo get_the_excerpt(); ?> </p>
                        <a href="<?php echo $urlBtn; ?>" title="<?php the_title(); ?>" target="_blank" class="btn btn_sec">Descargar<span class="icon_btn plus"></span></a>
                    </div>
                </article>
                <?php endwhile; endif; wp_reset_query(); ?>
            </section>            
            <?php pagination($traer_documento); ?>
        </div><!--main-->
        <aside>
            <?php get_sidebar(); ?>
        </aside>
    </div><!--main_full-->
</div><!--content-->
<?php get_footer(); ?>