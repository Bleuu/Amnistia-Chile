<?php
    /* Template Name: Actúa */
    get_header();
    $current = $post->ID;
?>
<div class="container content">
    <div class="wrap">
        <div class="main">
            <div class="breadcrumb">
                <a href="<?php bloginfo('url'); ?>" title="Inicio">Inicio</a> &#9658; <a href="<?php bloginfo('url'); ?>/actua" title="Actua">Actúa</a>  
            </div>
            <div class="content_box wysiwyg">
                <?php  if(have_posts()) : while(have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
            <div class="showbox">
                <div class="insb_left">
                    <ul class="sb_labels">
                    <?php
                        query_posts(array('post_type'=>'actua-amnistia','showposts'=>-1,'order-by'=>"DESC"));
                        if(have_posts()) : while(have_posts()) : the_post();
                    ?>
                        <li data-tab="<?php echo $post->ID; ?>" <?php if($current==$post->ID) echo 'class="active"'; ?>><span class="label_left"></span><a href="" title="" ><?php the_title(); ?></a><span class="label_right"></span></li>
                    <?php endwhile; endif; wp_reset_query(); ?>
                    </ul>
                </div>
                <div class="insb_right">
                    <ul>
                    <?php
                        query_posts(array('post_type'=>'actua-amnistia','showposts'=>-1));
                        if(have_posts()) : while(have_posts()) : the_post();
                        $urlup = types_render_field("introducir-link", array("id"=>"","output"=>"raw",""=>""));
                        $urlti = types_render_field("titulo-boton", array(""=>"",""=>"",""=>""));
                    ?>
                        <li id="info<?php echo $post->ID; ?>">
                            <div class="sb_img">
                                <?php the_post_thumbnail('thumb_actua'); ?>
                            </div>
                            <div class="sb_info">
                                <h5 class="title"><?php the_title(); ?></h5>
                                <div class="description">
                                <?php the_content(); ?></div>
                                <?php if(!empty($urlup)) { ?>
                                <a href="<?php echo $urlup; ?>" title="<?php echo $urlti; ?>" class="btn btn_sec"><?php echo $urlti; ?><span class="icon_btn next"></span></a>
                                <?php } ?>
                            </div>
                        </li>
                    <?php endwhile; endif; ?>
                    </ul>
                </div>
            </div><!--showbox-->
        </div><!--main-->
        <aside>
             <?php get_sidebar(); ?>
        </aside>
    </div><!--main_full-->
</div><!--content-->
<?php
    get_footer();
?>