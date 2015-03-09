<?php
/*
Template Name: Contact
*/

?>

<?php
	$get_contact = new WP_Query(array(
		'post_type' => 'contacto',
		'showposts' => '1',
		'orderby' => 'date',
		'order' => 'ASC'
	));
        
        $get_banner_contact = new WP_Query(array(
		'post_type' => 'banners',
		'showposts' => '-1',
		'orderby' => 'date',
		'order' => 'DESC',
        'taxonomy' => 'secciones',
        'secciones' => 'contacto'
	));
  
//en the_content esta la seccion de formulario de contacto
        
?>

<?php get_header(); ?>
<section class="somos">
    <div class="wrapper">
        <div class="bread">
            <p>Estas en : <a href="<?php echo bloginfo('url')?>" title="Inicio">Inicio</a> > <span>Contacto</span></p>
        </div>
        <div class="slide">
            <ul class="bxslider">
                <?php if($get_banner_contact->have_posts()) :?>
                    <?php while($get_banner_contact->have_posts()) : $get_banner_contact->the_post();?>
                        <?php $thumb_src = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                            <li><img id="banner_item_1" src="<?=$thumb_src;?>" alt="<?=the_title();?>" class="img_ban"></li>
                    <?php endwhile; ?>
                <?php endif;?>
            </ul>
        </div>
        <?php if($get_contact->have_posts()) : ?>	
		<?php while($get_contact->have_posts()) : $get_contact->the_post();?>
                    <div class="content">
                        <h2><?=the_title();?></h2>
                        <div class="txt_here">
                            <p>
                               <?=the_excerpt();?> 
                            </p>
                        </div>
                        <?=the_content();?>
                    </div>  
		
	    <?php endwhile;?>	
        <?php endif; ?>	
    </div>
</section>
<?php include('footer.php'); ?>