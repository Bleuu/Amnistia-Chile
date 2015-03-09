<?php
    /* Template Name: Acciones */
get_header();
?>
<div class="container content">
    <div class="wrap">
        <div class="main">
            <div class="breadcrumb">
                <a href="<?php bloginfo('url'); ?>">Inicio</a> &#9658; <a href="<?php bloginfo('url'); ?>/actua/acciones-online/">Acciones Online</a> &#9658; Listado
            </div>
            <div class="content_box wysiwyg">
                <h1><?php the_title() ?></h1>
                <div class="accion_list">
                    <ul>
                       <?php
                            $get_ciberacciones = new WP_query(array('post_type'=>'accion', 'posts_per_page' => 10, 'paged'=>get_query_var('paged')));
                            
                            if ($get_ciberacciones->have_posts()):
                            $i=0;
                            while($get_ciberacciones->have_posts()) : $get_ciberacciones->the_post();
                            $i++;
                            $get_meta = types_render_field("accion-meta-actual", array(""=>"",""=>""));
                            $get_meta_class = (empty($get_meta)) ? ' class="txt"' : '';
                            $get_meta = (empty($get_meta)) ? 'Solo tu apoyo...' : $get_meta;
                            if (get_query_var('paged')>2 && $i==1 ){ ?>
                                <!-- formato de post destacado -->
                                <li>
                                    <div>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">    
                                           <?php the_post_thumbnail('large'); ?>
                                        </a>
                                        </div>
                                    <div class="contenido_li">
                                        <div class="cont_list">
                                            <p class="title_cont_list"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
                                            <p class="description"><?php echo string_limit_words(get_the_excerpt(),22); ?> [...]</p>
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn btn_sec">Ver más <span class="icon_btn plus"></span></a>
                                        </div>
                                        <div class="right_item">
                                            <?php if (!empty($get_meta)) { ?>
                                            <div class="meta">Meta Actual:<br/>
                                            <strong<?php echo $get_meta_class; ?>><?php echo $get_meta; ?></strong></div>
                                            <?php } ?>
                                            <a href="<?php the_permalink(); ?>" class="btn btn_ter big_icon">Actúa <span class="icon_megafono"></span></a>
                                        </div>
                                    </div>
                                </li>
                            
                            <?php }else{ ?>
                                <!-- formato de post simple -->
                               <li>
                                    <div>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">    
                                           <?php the_post_thumbnail('thumbnail'); ?>
                                        </a>
                                        </div>
                                    <div class="contenido_li">
                                        <div class="cont_list">
                                            <p class="title_cont_list"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
                                            <p class="description"><?php echo string_limit_words(get_the_excerpt(),22); ?> [...]</p>
                                        </div>
                                    <div class="right_item">
                                        <?php if (!empty($get_meta)) { ?>
                                        <div class="meta">Meta Actual:<br/>
                                        <strong<?php echo $get_meta_class; ?>><?php echo $get_meta; ?></strong></div>
                                        <?php } ?>
                                        <a href="<?php the_permalink(); ?>" class="btn btn_ter big_icon">Actúa <span class="icon_megafono"></span></a>
                                    </div>
                                    </div>
                                </li>
                            <?php }
                            endwhile;
                            endif;
                            ?>
                    </ul>
                </div>     
                <?php pagination($get_ciberacciones); ?>           
            </div>
        </div><!--main-->
        <aside>
            <?php get_sidebar(); ?>
        </aside>
        </div><!--main_full-->
</div><!--content-->
<?php get_footer(); ?>