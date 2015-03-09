<?php
    get_header();
?>
<div class="container content">
    <div class="wrap">
        <div class="main">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="breadcrumb">
                <a href="<?php bloginfo('url'); ?>">Inicio</a> &#9658; <a href="<?php echo get_the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="content_box wysiwyg">
                <h1><?php the_title() ?></h1>
                <div class="accion_list">
                    <ul>
                       <?php
                            $get_acciones = new WP_query(array(
                                'post_type' => array('accion', 'acciononline'),
                                'posts_per_page' => 6,
                                'paged'=>get_query_var('paged'),
                            ));
                            
                            if ($get_acciones->have_posts()):
                            $i=0;
                            while($get_acciones->have_posts()) : $get_acciones->the_post();
                            $i++;
                            if (get_query_var('paged')<2 && $i==1 ){ ?>
                                <!-- formato de post destacado -->
                                <li class="feat">
                                    <div class="thumb">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <?php the_post_thumbnail('thumb_actua'); ?>
                                        </a>
                                    </div>
                                    <div class="contenido_li">
                                        <h2 class="title_cont_list">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                        </h2>
                                        <p class="description"><?php echo string_limit_words(get_the_excerpt(), 20); ?> [...]</p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn_ter big_icon">Apoyar acción <span class="icon_megafono"></span></a>
                                    </div>
                                </li>
                            
                            <?php }else{ ?>
                                <!-- formato de post simple -->
                                <li>
                                    <div class="thumb">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                        </a>
                                    </div>
                                    <div class="contenido_li">
                                        <h2 class="title_cont_list">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                        </h2>
                                        <p class="description"><?php echo string_limit_words(get_the_excerpt(), 20); ?> [...]</p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn_ter big_icon">Apoyar acción <span class="icon_megafono"></span></a>
                                    </div>
                                </li>
                            <?php }
                            endwhile;
                            else:
                                echo '<p><em>Lo sentimos, pero aún no tenemos acciones para apoyar.</em></p>';
                            endif;
                            ?>
                    </ul>
                    <?php //pagination($get_acciones); ?>
                </div>                
            </div>
            <?php endwhile; endif; ?>
        </div><!--main-->
        <aside>
            <?php wp_reset_query(); get_sidebar(); ?>
        </aside>
        </div><!--main_full-->
</div><!--content-->
<?php
    get_footer();
?>