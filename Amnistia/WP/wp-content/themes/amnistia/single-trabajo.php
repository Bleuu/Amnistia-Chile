<?php
get_header();
?>
<div class="container content">
    <div class="wrap">
        <div class="main">
            <?php
if(have_posts()) : while(have_posts()) : the_post();
$url_actual = get_permalink(get_the_ID()); ?>
            <div class="breadcrumb">
                <a href="<?php bloginfo('url'); ?>" title="Inicio">Inicio</a> &#9658; <a href="<?php echo bloginfo('url'); ?>" title="<?php echo $post->post_type; ?>"><?php echo $post->post_type; ?></a> &#9658; <a href="#" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="content_box wysiwyg">
                <h1 class="title"><?php the_title(); ?></h1>
                <p class="info_article"><?php the_time('j, M. Y'); ?><?php echo get_the_term_list( $post->ID, 'categorias_trabajos', ' | Categoría: ', ', ', '' ); ?></p>
                <div class="share_and_like">
                    <div class="fb-like" data-href="<?php echo $url_actual; ?>" data-width="200" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                    <a href="https://twitter.com/share" class="twitter-share-button" data-lang="es" data-hashtags="amnistia">Twittear</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    <div class="g-plusone"></div>
                </div><!--share_and_like-->
                <?php the_content(); ?>
            </div><!--content_box-->
            <div class="share_and_like">
                <div class="fb-like" data-href="<?php echo $url_actual; ?>" data-width="200" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                <a href="https://twitter.com/share" class="twitter-share-button" data-lang="es" data-hashtags="amnistia">Twittear</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                <div class="g-plusone"></div>
            </div><!--share_and_like-->
            <?php endwhile; endif; ?>
        </div><!--main-->
        <aside>
            <?php get_sidebar(); ?>
        </aside>
    </div><!--main_full-->
</div><!--content-->
<?php get_footer(); ?>