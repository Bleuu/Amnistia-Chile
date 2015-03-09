<?php
/*
Template Name: Artritis Chile
*/
?>

<?php
//mantenedor para el link de youtube, que solo usa el titulo
$get_artritis_youtube = new WP_Query(array(
    'post_type' => 'artritis-youtube',
    'showpost' => '1',
    'orderby' => 'date',
    'order' => 'DESC'
));
?>
<?php get_header(); ?>

<section class="somos artr">
    <div class="wrapper">
        <div class="bread">
            <p>Estas en : <a href="<?php echo bloginfo('url')?>" title="Inicio">Inicio</a> > <span><?php the_title(); ?></span></p>
        </div>
        <div class="slide">
            <div class ="video">
                <?php if($get_artritis_youtube->have_posts()) :?>
                <?php while($get_artritis_youtube->have_posts()) : $get_artritis_youtube->the_post(); ?>
                <iframe width="600" src="//www.youtube.com/embed/<?php the_title(); ?>" frameborder="0" allowfullscreen></iframe>
                <?php endwhile;?>
                <?php endif;?>
            </div>
            <ul>
                <li>
                    <a href="https://twitter.com/share" class="twitter-share-button" data-lang="es">Twittear</a>
                </li>
                <li>
                    <div class="fb-like" data-href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                </li>
            </ul>
        </div>
        <div class="content">
            <?php if(have_posts()) :?>
            <?php while(have_posts()) : the_post();?>
            <h2><?php the_title();?></h2>
            <div class="txt_here">
                <?php the_content();?> 
            </div>
            <?php endwhile;?>
            <?php endif;?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
