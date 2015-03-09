<?php
get_header();
?>
<div class="container slider">
    <div class="wrap">
        <div class="slider_images">
            <ul>
                <?php
                    query_posts(array('post_type'=>'banner','showposts'=>8, 'post_status'=>'published'));
                    if(have_posts()) :
                    $contador = 0;
                    while(have_posts()) : the_post();
                    $contador++;
                    $urlBtn = '#';
                    $urlBtn = types_render_field("direccion-del-vinculo", array(""=>"",""=>"",""=>""));
                    $urlBtn = (empty($urlBtn)) ? '#' : $urlBtn;
                ?>                    
                <li id="imgslider<?php echo $contador; ?>" class="current">
                    <?php the_post_thumbnail('thumb-banner'); ?>
                    <div class="blackLayer">
                        <h2 class="title_slider">
                            <a href="<?php echo $urlBtn; ?>" title="<?php the_title(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <p class="text_slider"><?php echo get_the_excerpt(); ?> &bull; <a href="<?php echo $urlBtn; ?>" title="<?php the_title(); ?>">Seguir leyendo</a></p>
                    </div>
                </li>

                <?php endwhile; endif; wp_reset_query(); ?>
            </ul>
        </div><!--slider_images-->
        <?php if ($contador>0) { ?>
        <ul class="slider_numbers">
            <?php
                    for($i=1; $i<=$contador; $i++ ){
                        echo '<li>'.$i.'</li>';
                    }
            ?>
        </ul>
        <?php } ?>
        <div class="slider_numbers"></div>
        <div class="slider_control">
            <div class="control left butPrev">&#9668;</div>
            <div class="control right butNext">&#9658;</div>
        </div>
    </div>
</div>
<div class="container content">
    <div class="wrap">
        <div class="main">
            <div class="donate">
                <div class="box_donate">
                    <h3 class="title_donate small"><a href="https://www.webpay.cl/portalpagodirecto/pages/inst

itucion.jsf?idEstablecimiento=1934788" title="Colabora"  class="center">COLABORA</a></h3>
                    <div class="info_donate time">
                        <h3 class="subtitle_donate">Haz una donación puntual</h3>
                        <p class="nolink">
                            Con tu aporte nos ayudarás a generar más campañas a favor de los DDHH
                        </p>
                    </div><!--info_donate-->
                </div><!--box_donate-->
                <div class="box_donate">
                    <h3 class="title_donate small"><span class="center">Súmate</span></h3>
                    <div class="info_donate money list">
                        <ul>
                            <?php
query_posts(array('post_type'=>'actua-amnistia','showposts'=>5));
if(have_posts()) : while(have_posts()) : the_post();
                            ?>
                            <li>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
                            <?php endwhile; endif; ?>
                        </ul>
                    </div><!--info_donate-->
                </div><!--box_donate-->
            </div><!--donate-->
            <section class="primary">
                <div class="section_banner"></div>
                <h3 class="label_main">Lo Último</h3>
                <?php
query_posts(array('post_type'=>array('acciononline', 'accion'),'showposts'=>1));
if(have_posts()) : while(have_posts()) : the_post();
                ?>
                <article>
                    <div class="img_article">
                        <div class="label_photo">
                            <a href="<?php bloginfo('url'); ?>/acciones">Acciones</a>
                        </div>
                        <a href="<?php bloginfo('url'); ?>/acciones">
                            <?php the_post_thumbnail('thumb_news'); ?>
                        </a>
                    </div>
                    <div class="resume_article">
                        <p class="title_article"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                        <p class="info_article"><?php the_time('j, M. Y'); ?>  </p>
                        <p class="description_primary"><?php echo string_limit_words(get_the_excerpt(),22); ?> [...]</p>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn btn_sec">Ver más <span class="icon_btn plus"></span></a>
                        <a href="<?php bloginfo('url'); ?>/acciones" title="Ver todas las Acciones" class="btn btn_sec">Ver todas las Acciones <span class="icon_btn next"></span></a>
                    </div>
                </article>
                <?php
endwhile; endif; wp_reset_query();

query_posts(array('post_type'=>'noticia','showposts'=>1));
if(have_posts()) : while(have_posts()) : the_post();
                ?>
                <article>
                    <div class="img_article">
                        <div class="label_photo">
                            <a href="<?php bloginfo('url'); ?>/noticias">Noticias</a>
                        </div>
                        <a href="<?php bloginfo('url'); ?>/noticias">
                            <?php the_post_thumbnail('thumb_news'); ?>
                        </a>
                    </div>
                    <div class="resume_article">
                        <p class="title_article"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                        <p class="info_article"><?php the_time('j, M. Y'); ?><?php echo get_the_term_list( $post->ID, 'categorias_noticias', ' | Categoría: ', ', ', '' ); ?></p>
                        <p class="description_primary"><?php echo string_limit_words(get_the_excerpt(),22); ?> [...]</p>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn btn_sec">Ver más <span class="icon_btn plus"></span></a>
                        <a href="<?php bloginfo('url'); ?>/noticias" title="Ver todas las Noticias" class="btn btn_sec">Ver todas las Noticias <span class="icon_btn next"></span></a>
                    </div>
                </article>
                <?php
endwhile; endif; wp_reset_query();

query_posts(array('post_type'=>'informe','showposts'=>1));
if(have_posts()) : while(have_posts()) : the_post();
                ?>
                <article>
                    <div class="img_article">
                        <div class="label_photo">
                            <a href="<?php bloginfo('url'); ?>/informes">Informes</a>
                        </div>
                        <a href="<?php bloginfo('url'); ?>/informes">
                            <?php the_post_thumbnail('thumb_news'); ?>
                        </a>
                    </div>
                    <div class="resume_article">
                        <p class="title_article"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                        <p class="info_article"><?php the_time('j, M. Y'); ?><?php echo get_the_term_list( $post->ID, 'categorias_informes', ' | Categoría: ', ', ', '' ); ?></p>
                        <p class="description_primary"><?php echo string_limit_words(get_the_excerpt(),22); ?> [...]</p>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn btn_sec">Ver más <span class="icon_btn plus"></span></a>
                        <a href="<?php bloginfo('url'); ?>/informes" title="Ver todas las Noticias" class="btn btn_sec">Ver todos los informes <span class="icon_btn next"></span></a>
                    </div>
                </article>
                <?php endwhile; endif; wp_reset_query(); ?>
            </section>
            <section class="second">
                <div class="section_banner"></div>
                <div class="label_second">
                   <?php
                        query_posts(array(
                    'post_type'=>'cabecera-sidebar',
                    'showposts'=>1,
                    'name' =>'logros',
                    'orderby' => 'ASC'
                ));
                if(have_posts()) : ?>
                <?php while(have_posts()) : the_post();
                ?>
                    <span class=label_left></span><?php the_title(); ?><span class=label_right></span>
                    <?php endwhile; endif; ?>
                </div>
                <?php
$traer_noticias = new WP_query(array(
    'post_type'=>'noticia',
    'posts_per_page' => 1,
    'paged'=>get_query_var('paged'),
    'taxonomy'=>'categorias_noticias',
    'categorias_noticias'=>'Logros'
));
if($traer_noticias->have_posts()) : while($traer_noticias->have_posts()) : $traer_noticias->the_post();
                ?>
                <article>
                    <div class="img_article">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </a>
                    </div>
                    <div class="resume_article">
                        <p class="title_article"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
                        <p class="description_secondary"><?php echo string_limit_words(get_the_excerpt(),22); ?> [...]</p>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn btn_sec">Ver más <span class="icon_btn plus"></span></a>
                        <a href="<?php bloginfo('url'); ?>/logros" title="Ver todos los Logros" class="btn btn_sec">Ver todos los logros <span class="icon_btn next"></span></a>
                    </div>
                </article>
                <?php endwhile; endif; wp_reset_query($traer_noticias); ?>
            </section>
        </div><!--main-->
        <aside>
            <?php get_sidebar(); ?>
        </aside>
    </div>
</div><!--content-->
<?php get_footer(); ?>