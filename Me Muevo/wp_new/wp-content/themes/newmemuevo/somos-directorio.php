<?php
$get_user_directorio = new WP_Query(array(
    'post_type' => 'directorio',
    'showposts' => '-1',
    'orderby' => 'date',
    'order' => 'ASC'
));
?>
<?php if($get_user_directorio->have_posts()) :?>
<section class="feature directorio">
    <div class="wrapper">
        <ul class="dir">
            <?php while($get_user_directorio->have_posts()) : $get_user_directorio->the_post();?>
            <?php $thumb_src = wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>
            <li>
                <a class="ft_img">
                    <img src="<?=$thumb_src;?>" alt="Imagen">
                </a>
                <div class="cont">
                    <h3><?=the_title();?>, <span><?=the_excerpt();?></span></h3>
                    <div class="normal">
                        <p><?=the_content();?></p>
                        <p class="testimonio">Ver información / cv</p>
                    </div>
                    <div class="extend">
                        <div class="close"></div>
                        <div class="cont test">
                            <p><?php the_field('cv');?>
                            </p>
                        </div>
                        <p class="back_test">Volver al testimonio</p>
                    </div>
                </div>
            </li>
            <?php endwhile;?>
        </ul>
    </div>
</section>
<?php endif;?>