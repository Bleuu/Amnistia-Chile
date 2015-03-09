<?php
get_header();
?>
<div class="container content">
    <div class="wrap">
        <div class="main">
            <?php
if(have_posts()) : while(have_posts()) : the_post();
$url_actual = get_permalink(get_the_ID());
if($post->post_type=='accion') {
    $terminacion = 'es';
} else {
    $terminacion = 's';
}
$id_post_actual = get_the_ID();
$categorias_post_actual = get_the_terms($id_post_actual, 'categorias_noticias');

if(!empty($categorias_post_actual)){
    $categoria_post_actual = '';
    foreach($categorias_post_actual as $categoria){
        if (!empty($categoria_post_actual)){
            $categoria_post_actual .= ','.$categoria->slug;  
        }else{
            $categoria_post_actual .= $categoria->slug;
        }
    }
}

            ?>
            <?php if(!is_singular('nota')){?>
            <div class="breadcrumb">
                <a href="<?php bloginfo('url'); ?>" title="Inicio">Inicio</a> &#9658; <a href="<?php echo bloginfo('url').'/'.$post->post_type.$terminacion; ?>" title="<?php echo $post->post_type.$terminacion; ?>"><?php echo $post->post_type.$terminacion; ?></a> &#9658; <a href="#" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            </div>
            <?php }else{ ?>
            <div class="breadcrumb">
                <a href="<?php bloginfo('url'); ?>" title="Inicio">Inicio</a> &#9658; <a href="#" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            </div>
            <?php }?>

            <div class="content_box wysiwyg">
                <h1 class="title"><?php the_title(); ?></h1>
                <p class="info_article"><?php the_time('j, M. Y'); ?><?php echo get_the_term_list( $post->ID, 'categorias_noticias', ' | Categoría: ', ', ', '' ); ?></p>
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
            <?php endwhile; endif;

//$ID = $wp_query->posts[0]->ID;
//$categoryvariable = get_the_category($ID);
//$query= 'cat=' . $categoryvariable. '&orderby=date&
//order=ASC';
//query_posts($query);
            ?>
            <?php
query_posts(array(
    'post_type'=>'noticia',
    'showposts'=>4,
    'taxonomy'=>'categorias_noticias',
    'categorias_noticias'=>$categoria_post_actual,
    'orderby' => 'rand'
));
if(have_posts()) : ?>
            <div class="uneditable_title">Noticias Relacionadas</div>
            <section class="related_post">
                <?php while(have_posts()) : the_post();?>
                <article class="box_rp">
                    <div class="related_img">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </a>
                    </div>
                    <div class="resume_article">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="title_article"><?php the_title(); ?></a>
                        <p class="info_article">
                            <?php the_time('j, M. Y'); ?></p>
                    </div>
                </article>
                <?php endwhile; ?>
            </section><!--related_post--><!--comments-->
            <?php endif; wp_reset_query();
            ?>                
        </div><!--main-->
        <aside>
            <?php get_sidebar(); ?>
        </aside>
    </div><!--main_full-->
</div><!--content-->
<?php get_footer(); ?>