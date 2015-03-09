<?php
/*Template name: Portada sección*/
function imprimir_listado(){
    echo '<li>';
    echo '<a href="'.get_the_permalink($item->ID).'" title="'.get_the_title($item->ID).'">'.get_the_title($item->ID).'</a>';
    echo '</li>';
}
get_header();
?>
<div class="container content">
    <div class="wrap">
        <div class="main">
            <?php if(have_posts()) : while(have_posts()) : the_post(); 
if($post->post_parent!=0){
    $parentLink = get_permalink($post->post_parent);
    $parentTitle = get_the_title($post->post_parent);
}
            ?>
            <div class="breadcrumb">
                <a href="<?php bloginfo('url'); ?>" title="Volver al inicio">Inicio</a> &#9658; <?php if (isset($parentLink)){ ?><a href="<?php echo $parentLink; ?>" title="<?php echo $parentTitle; ?>"><?php echo $parentTitle; ?></a> &#9658; <?php } ?><a><?php the_title(); ?></a>
            </div>
            <div class="submenu-page">
                <?php
$pages_submenu = get_children_pages_by_id($post->ID);
$children = get_children_pages_by_id($post->post_parent);
                ?>
                <span class="title_submenu"><?php echo $post->post_title; ?></span>
                <ul class="submenu-side">
                    <?php
$all = $children;
$current_id = $post->ID;

if(!empty($pages_submenu))
    $all = $pages_submenu;

    foreach($all as $item){
        echo '<li>';
        $current_class = ( $current_id == $item->ID ) ? ' class="active"' : '';
        echo '<a href="'.get_the_permalink($item->ID).'" title="'.get_the_title($item->ID).'"'.$current_class.'>'.get_the_title($item->ID).'</a>';
        echo '</li>';
    }
                    ?>
                </ul>
            </div>
            <div class="portada-seccion content_box wysiwyg">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
            <?php endwhile; endif; ?>
        </div><!--main-->
        <aside>
            <?php get_sidebar(); ?>
        </aside>
    </div><!--main_full-->
</div><!--content-->
<?php
get_footer();
?>