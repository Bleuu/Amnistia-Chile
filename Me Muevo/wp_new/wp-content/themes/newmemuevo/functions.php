<?php
//se agrega la opcion de poner una imagen desde el admin
add_theme_support( 'post-thumbnails' );

//se agrega tamaños de imagenes
add_image_size('thumb_somos',400,260,true);
add_image_size('thumb_single_articulos_prensa',700,337,true);
add_image_size('thumb_articulos_prensa',509,245,true);
add_image_size('thumb_list_articulos_prensa',244,165,true);
add_image_size('thumb_sidebar_articulos_prensa',100,100,true);

//cada register post type es un mantenedor en el panel de control de wordpress
add_action('init', function(){
    register_post_type('texto-inicio', array(
        'public' => true,
        'label' => 'Texto Inicio',
        'supports' => array('title', 'editor', 'thumbnail'),
        //'taxonomies' => array('post_tag' => 'category'),
        'menu_icon' => 'dashicons-admin-comments'
    ));

    register_post_type('articulos', array(
        'public' => true,
        'labels' => array(
            'name'               => 'Artículos de interés',
            'singular_name'      => 'Articulo',
            'menu_name'          => 'Artículos'
        ),
        'supports' => array('title', 'editor', 'thumbnail', 'author'),
        //'taxonomies' => array('post_tag' => 'category'),
        'menu_icon' => 'dashicons-welcome-write-blog',
        'has_archive' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'articulos' ),
        'clase' => 'art'
    ));

    register_post_type('prensa', array(
        'public' => true,
        'labels' => array(
            'name'               => 'Apariciones en prensa',
            'singular_name'      => 'Prensa',
            'menu_name'          => 'Prensa'
        ),
        'supports' => array('title', 'editor', 'thumbnail', 'author'),
        //'taxonomies' => array('post_tag' => 'category'),
        'menu_icon' => 'dashicons-format-aside',
        'has_archive' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'prensa' ),
        'clase' => 'prs'
    ));

    register_post_type('directorio', array(
        'public' => true,
        'label' => 'Directorio',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        //'taxonomies' => array('post_tag' => 'category'),
        'menu_icon' => 'dashicons-menu'
    ));

    register_post_type('artritis-youtube', array(
        'public' => true,
        'label' => 'Artritis Youtube',
        'labels' => array('edit_item' => 'Copia y pega la extension. http://www.youtube.com/extension'),
        'supports' => array('title'),
        //'taxonomies' => array('post_tag' => 'category'),
        'menu_icon' => 'dashicons-format-video'
    ));
});

//reduce el largo del  titulo
function the_titlesmall($before = '', $after = '', $echo = true, $length = false) {
    $title = get_the_title();

    if ( $length && is_numeric($length) ) {
        $title = substr( $title, 0, $length );
    }

    if ( strlen($title)> 0 ) {
        $title = apply_filters('the_titlesmall', $before . $title . $after, $before, $after);
        if ( $echo )
            echo $title;
        else
            return $title;
    }
}

//reduce el largo del texto
function the_contentsmall($before = '', $after = '', $echo = true, $length = false) {
    $title = trim(strip_tags(get_the_content()));

    if ( $length && is_numeric($length) ) {
        $title = mb_substr( $title, 0, $length );
    }
    
        
    if ( strlen($title)> 0 ) {
        $title = apply_filters('the_contentsmall', $before . $title . $after, $before, $after);
        if ( $echo )
            echo $title;
        else
            return $title;
    }
}
//funcion que agrega la fecha por mess correpondiente segun el id
function the_format_date($post_id){
    $date_src=get_post_time( 'd/m/Y', true, $post_id);

    $corte = explode("/", $date_src);

    $dia = $corte[0];
    $mes = $corte[1];
    $ano = $corte[2];

    switch($mes){
        case '01': $mes = "Ene"; break;
        case '02': $mes = "Feb"; break;
        case '03': $mes = "Mar"; break;
        case '04': $mes = "Abr"; break;
        case '05': $mes = "May"; break;
        case '06': $mes = "Jun"; break;
        case '07': $mes = "Jul"; break;
        case '08': $mes = "Ago"; break;
        case '09': $mes = "Sep"; break;
        case '10': $mes = "Oct"; break;
        case '11': $mes = "Nov"; break;
        case '12': $mes = "Dic";break;
    }
    echo $dia . " " . $mes . ". " . $ano;
}
//funcion que agrega titulo con espaciadores
function memuevo_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() )
        return $title;

    // Add the site name.
    $title .= get_bloginfo( 'name', 'display' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'Página %s', 'twentythirteen' ), max( $paged, $page ) );

    return $title;
}
add_filter( 'wp_title', 'memuevo_wp_title', 10, 2 );

//ProPanel que esta en Apariencia->Site Options

require_once(TEMPLATEPATH . '/admin/admin-functions.php');
require_once(TEMPLATEPATH . '/admin/admin-interface.php');
require_once(TEMPLATEPATH . '/admin/theme-settings.php');

