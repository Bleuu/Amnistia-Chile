<?php
$object = get_queried_object();
get_header();
?>
<div class="container content">
    <div class="wrap">
        <div class="main">
            <div class="breadcrumb">
                <a href="<?php echo $url; ?>">Inicio</a> &#9658; <a>Noticias</a>
            </div>
            <div class="wysiwyg">
                <h1 class="title"><?php echo $object->name; ?></h1>
            </div>
            <section class="list_result">
            <?php
                $traer_noticias = new WP_query(array(
                    'posts_per_page' => 10,
                    'paged'=>get_query_var('paged'),
                    'taxonomy' => $object->taxonomy,
                    $object->taxonomy => $object->slug,
                    'post_type' => 'noticia'
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
                        <p class="info_article"><?php the_time('j, M. Y'); ?>  | <?php echo get_the_term_list( $post->ID, 'categorias_acciones', 'Categoría:', ', ', '' ); ?></p>
                        <p class="description_secondary"><?php echo string_limit_words(get_the_excerpt(),22); ?> [...]</p>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn btn_sec">Ver más <span class="icon_btn plus"></span></a>
                    </div>
                </article>
           <?php endwhile; endif; wp_reset_query(); ?>
            </section>            
            <?php pagination($traer_noticias); ?>
        </div><!--main-->
        <aside>
            <div class="sidebar_box quick_donate">
                <div class="side_banner"></div>
                <div class="label_y">
                   <span class="label_left"></span>Haz una donación<span class="label_right"></span>
                </div>
                <div class="line">
                    <input type="number" class="input_donate" placeholder="ej: 1.000" >
                    <div class="btn btn_sec">DONAR</div>
                </div>
                <p class="text_donate">Dona lo que puedas. Prometemos usar ese dinero en nuestras compañas</p>
                <div class="donate_webpay">
                    <a href="https://www.webpay.cl/portalpagodirecto/pages/institución.jsf?idEstablecimiento=1934788" title="<?php the_title(); ?>" target="_blank">
                        <img src="<?php echo $url; ?>wp-content/uploads/2013/12/webpay.png" alt="WebPay" >
                    </a>
                </div>
            </div>
            <div class="sidebar_box twitter">
                <div class="side_banner"></div>
                <div class="label_y">
                   <span class="label_left"></span>Twitter<span class="label_right"></span>
                </div>
                <a class="twitter-timeline" href="https://twitter.com/amnistiachile" data-widget-id="411494830624096256">Tweets por @amnistiachile</a>
            </div>
        </aside>
    </div><!--main_full-->
</div> <!--content-->
<?php get_footer(); ?>