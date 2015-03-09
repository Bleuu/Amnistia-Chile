<?php
get_header();
	//print_r(get_queried_object());
	
	$get_trabajo_banner = new WP_Query(array(
		'post_type' => 'banners',
		'showposts' => '-1',
		'orderby' => 'date',
		'order' => 'ASC',
		'taxonomy' => 'secciones',
		'secciones' => 'area-trabajo'
	));
	
	$get_trabajo = new WP_Query(array(
		'post_type' => get_queried_object()->post_name,
		'showposts' => '-1',
		'orderby' => 'date',
		'order' => 'DESC'
	));
	
?>
<section class="somos">
    <div class="wrapper">
        <div class="bread">
            <p>Estas en : <a href="<?php bloginfo('url');?>" title="Inicio">Inicio</a> > <span>Áreas de trabajo </span></p>
        </div>
        <div class="slide">
            <ul class="bxslider">
		<?php if($get_trabajo_banner->have_posts()) :?>
			<?php while($get_trabajo_banner->have_posts()) : $get_trabajo_banner->the_post(); ?>
				<li><?php the_post_thumbnail('thumb_somos');?></li>
			<?php endwhile;?>
		<?php endif;?>
	    </ul>
        </div>
        <div class="content">
	<?php if($get_trabajo->have_posts()) :?>
		<?php while($get_trabajo->have_posts()) : $get_trabajo->the_post();?>
			<h2><?=the_title();?></h2>
			<div class="txt_here">
			    <p>
				<?=the_content();?>
			    </p>
			</div>
		<?php endwhile;?>
	<?php endif;?>
        </div>
    </div>
</section>
<?php get_footer(); ?>