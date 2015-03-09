<?php
$obj = get_post_type_object(get_queried_object()->post_type);
?>

<?php get_header(); ?>

<section class="sgl_cont">
    <div class="wrapper">
        <article>
            <?php if(have_posts()) :?>
            <?php while(have_posts()) : the_post(); ?>
            <div class="bread">
                <p>Estas en : <a href="<?php bloginfo('url')?>" title="Inicio">Inicio</a> > <a href="<?php echo "/".get_queried_object()->post_type; ?>" title="<?php echo $obj->labels->menu_name;?>"><?php echo $obj->labels->menu_name;?></a> > <span><?php echo get_queried_object()->post_title;?></span></p>
            </div>
            <?php the_post_thumbnail('thumb_single_articulos_prensa');?>
            <div class="top_rss">
                <div class="date">
                    <a href="<?php echo get_post_type_archive_link(get_queried_object()->post_type); ?>" title="<?php echo $obj->labels->menu_name;?>" class="<?php echo $obj->clase;?>"><?php echo $obj->labels->menu_name;?></a>
                    <p><?php the_format_date($post->ID); ?></p>
                </div>
                <ul>
                    <li>
                        <a href="https://twitter.com/share" class="twitter-share-button" data-lang="es">Twittear</a>
                    </li>
                    <li>
                        <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                    </li>
                </ul>
            </div>

            <h2><?php the_title();?></h2>
            <div class="txt_here">
                <?php the_content();?>
            </div>

            <?php endwhile;?>
            <?php endif;?> 

            <a href="<?php echo get_post_type_archive_link(get_queried_object()->post_type); ?>" title="Volver" class="bck_more">< Volver</a>
                </article>
            <?php get_template_part('sidebar', get_queried_object()->post_type ); ?>    
            </div>
        </section>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

    <?php get_footer(); ?>