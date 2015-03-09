<?php
// Definiciones Generales
define('requestPath','http://'.$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
define('cleanPath','http://'.$_SERVER["HTTP_HOST"] . $_SERVER["SCRIPT_NAME"]);
$requestPath = cleanPath;
$getCleanURL = explode('?', $requestPath);
$getCleanURL = $getCleanURL[0];

$fullURL = requestPath;
$getCleanFullURL = explode('?', $fullURL);
$getCleanFullURL = $getCleanFullURL[0];

//agregar thumbnails al administrador
add_theme_support( 'post-thumbnails' );

//agregar nuevo tamaño de miniatura
add_image_size('thumb_actua',450,200,true);
add_image_size('thumb_banner',1000,314,true);

function string_limit_words($string, $word_limit) {
    $words = explode(' ', $string, ($word_limit + 1));
    if(count($words) > $word_limit)
        array_pop($words);
    return implode(' ', $words);
}
//NUEVO POST TYPE DE BANNER
$labels = array(
    'name' => _x('Banner', 'post type general name'),
    'singular_name' => _x('Banner', 'post type singular name'),
    'add_new' => _x('Añadir Banner', 'banner'),
    'add_new_item' => __('Añadir nuevo Banner'),
    'edit_item' => __('Editar Banners'),
    'new_item' => __('Nuevo Banner'),
    'all_items' => __('Lista Banners'),
    'view_item' => __('Ver Banner'),
    'search_items' => __('Buscar Banner'),
    'not_found' =>  __('Banner no encontrado'),
    'not_found_in_trash' => __('Noticia no encontrada en la papelera'), 
    'parent_item_colon' => 'banner:',
    'menu_name' => 'Banner'
);
$args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 6,
    'menu_icon' => get_template_directory_uri().'/img/icon/banner.png',
    'supports' => array('title','excerpt','author','thumbnail')
);
//NUEVO POST TYPE DE BANNER
$labels = array(
    'name' => _x('Banner', 'post type general name'),
    'singular_name' => _x('Banner', 'post type singular name'),
    'add_new' => _x('Añadir Banner', 'banner'),
    'add_new_item' => __('Añadir nuevo Banner'),
    'edit_item' => __('Editar Banners'),
    'new_item' => __('Nuevo Banner'),
    'all_items' => __('Lista Banners'),
    'view_item' => __('Ver Banner'),
    'search_items' => __('Buscar Banner'),
    'not_found' =>  __('Banner no encontrado'),
    'not_found_in_trash' => __('Noticia no encontrada en la papelera'), 
    'parent_item_colon' => 'banner:',
    'menu_name' => 'Banner'
);
$args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 6,
    'menu_icon' => get_template_directory_uri().'/img/icon/banner.png',
    'supports' => array('title','excerpt','author','thumbnail')
);

register_post_type('banner',$args);     

//NUEVO POST TYPE DE DOCUMENTOS
$labels = array(
    'name' => _x('Documentos', 'post type general name'),
    'singular_name' => _x('Documentos', 'post type singular name'),
    'add_new' => _x('Añadir Documentos', 'documento'),
    'add_new_item' => __('Añadir nuevo Documento'),
    'edit_item' => __('Editar Documentos'),
    'new_item' => __('Nuevo Documento'),
    'all_items' => __('Lista Documentos'),
    'view_item' => __('Ver Documentos'),
    'search_items' => __('Buscar Documentos'),
    'not_found' =>  __('Documentos no encontrado'),
    'not_found_in_trash' => __('Documentos no encontrada en la papelera'), 
    'parent_item_colon' => 'documento:',
    'menu_name' => 'Documentos'
);
$args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 6,
    'menu_icon' => get_template_directory_uri().'/img/icon/documentos.png',
    'supports' => array('title', 'excerpt','author','thumbnail')
);

register_post_type('documento',$args);    

//NUEVO POST TYPE DE NOTICIAS
$labels = array(
    'name' => _x('Noticias', 'post type general name'),
    'singular_name' => _x('Noticia', 'post type singular name'),
    'add_new' => _x('Añadir Noticia', 'noticia'),
    'add_new_item' => __('Añadir nueva Noticia'),
    'edit_item' => __('Editar Noticia'),
    'new_item' => __('Nueva Noticia'),
    'all_items' => __('Lista Noticias'),
    'view_item' => __('Ver Noticia'),
    'search_items' => __('Buscar Noticias'),
    'not_found' =>  __('Noticia no encontrada'),
    'not_found_in_trash' => __('Noticia no encontrada en la papelera'), 
    'parent_item_colon' => 'noticia:',
    'menu_name' => 'Noticias'
);
$args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 6,
    'menu_icon' => get_template_directory_uri().'/img/icon/noticia.png',
    'supports' => array('title','editor','excerpt','author','thumbnail')
);

register_post_type('noticia',$args);

//CREAR CATEGORIAS DE NOTICIAS
$labels = array(
    'name' => _x( 'Categorías', 'taxonomy general name' ),
    'singular_name' => _x( 'Categoría', 'taxonomy singular name' ),
    'search_items' =>  __( 'Buscar Categoría' ),
    'all_items' => __( 'Todas las Categorías' ),
    'parent_item' => __( 'Categoría Padre' ),
    'parent_item_colon' => __( '' ),
    'edit_item' => __( 'Editar Categoría' ), 
    'update_item' => __( 'Actualizar Categoría' ),
    'add_new_item' => __( 'Añadir nueva Categoría' ),
    'new_item_name' => __( 'Nuevo nombre de Categoría' ),
    'menu_name' => __( 'Categorías' ),
); 	

register_taxonomy('categorias_noticias',array('noticia'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'categorias_noticias' ),
));



//NUEVO POST TYPE DE ACCIONES
$labels = array(
    'name' => _x('Acciones', 'post type general name'),
    'singular_name' => _x('Acción', 'post type singular name'),
    'add_new' => _x('Añadir Acción', 'accion'),
    'add_new_item' => __('Añadir nueva Acción'),
    'edit_item' => __('Editar Acción'),
    'new_item' => __('Nueva Acción'),
    'all_items' => __('Lista Acciones'),
    'view_item' => __('Ver Acción'),
    'search_items' => __('Buscar Acciones'),
    'not_found' =>  __('Acción no encontrada'),
    'not_found_in_trash' => __('Acción no encontrada en la papelera'), 
    'parent_item_colon' => 'acciones:',
    'menu_name' => 'Acciones'
);
$args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 6,
    'menu_icon' => get_template_directory_uri().'/img/icon/accion.png',
    'supports' => array('title','editor','excerpt','author','thumbnail')
);

register_post_type('accion',$args);

//CREAR CATEGORIAS DE ACCIONES
$labels = array(
    'name' => _x( 'Categorías', 'taxonomy general name' ),
    'singular_name' => _x( 'Categoría', 'taxonomy singular name' ),
    'search_items' =>  __( 'Buscar Categoría' ),
    'all_items' => __( 'Todas las Categorías' ),
    'parent_item' => __( 'Categoría Padre' ),
    'parent_item_colon' => __( '' ),
    'edit_item' => __( 'Editar Categoría' ), 
    'update_item' => __( 'Actualizar Categoría' ),
    'add_new_item' => __( 'Añadir nueva Categoría' ),
    'new_item_name' => __( 'Nuevo nombre de Categoría' ),
    'menu_name' => __( 'Categorías' ),
); 	

register_taxonomy('categorias_acciones',array('accion'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'categorias_acciones' ),
));





//NUEVO POST TYPE DE ACCIONES ONLINE
$labels = array(
    'name' => _x('Acciones Online', 'post type general name'),
    'singular_name' => _x('Acción online', 'post type singular name'),
    'add_new' => _x('Añadir Acción online', 'accion'),
    'add_new_item' => __('Añadir nueva Acción online'),
    'edit_item' => __('Editar Acción online'),
    'new_item' => __('Nueva Acción online'),
    'all_items' => __('Lista Acciones online'),
    'view_item' => __('Ver Acción online'),
    'search_items' => __('Buscar Acciones online'),
    'not_found' =>  __('Acción online no encontrada'),
    'not_found_in_trash' => __('Acción online no encontrada en la papelera'), 
    'parent_item_colon' => 'acciones_online:',
    'menu_name' => 'Acciones Online'
);
$args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 6,
    'menu_icon' => get_template_directory_uri().'/img/icon/accion.png',
    'supports' => array('title','editor','excerpt','author','thumbnail')
);

register_post_type('acciononline',$args);

//CREAR CATEGORIAS DE ACCIONES ONLINE
$labels = array(
    'name' => _x( 'Categorías', 'taxonomy general name' ),
    'singular_name' => _x( 'Categoría', 'taxonomy singular name' ),
    'search_items' =>  __( 'Buscar Categoría' ),
    'all_items' => __( 'Todas las Categorías' ),
    'parent_item' => __( 'Categoría Padre' ),
    'parent_item_colon' => __( '' ),
    'edit_item' => __( 'Editar Categoría' ), 
    'update_item' => __( 'Actualizar Categoría' ),
    'add_new_item' => __( 'Añadir nueva Categoría' ),
    'new_item_name' => __( 'Nuevo nombre de Categoría' ),
    'menu_name' => __( 'Categorías' ),
); 	

register_taxonomy('categorias_acciones_online',array('acciononline'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'categorias_acciones_online' ),
));


//NUEVO POST TYPE DE INFORMES
$labels = array(
    'name' => _x('Informes', 'post type general name'),
    'singular_name' => _x('Informe', 'post type singular name'),
    'add_new' => _x('Añadir Informe', 'informe'),
    'add_new_item' => __('Añadir nuevo Informe'),
    'edit_item' => __('Editar Informe'),
    'new_item' => __('Nuevo Informe'),
    'all_items' => __('Lista Informes'),
    'view_item' => __('Ver Informe'),
    'search_items' => __('Buscar Informes'),
    'not_found' =>  __('Informe no encontrado'),
    'not_found_in_trash' => __('Informe no encontrado en la papelera'), 
    'parent_item_colon' => 'informe:',
    'menu_name' => 'Informe'
);
$args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 6,
    'menu_icon' => get_template_directory_uri().'/img/icon/informe.png',
    'supports' => array('title','editor','excerpt','author','thumbnail')
);

register_post_type('informe',$args);

//NUEVO POST TYPE DE NOTAS
$labels = array(
    'name' => _x('Notas', 'post type general name'),
    'singular_name' => _x('Notas', 'post type singular name'),
    'add_new' => _x('Añadir Nota', 'nota'),
    'add_new_item' => __('Añadir nueva Nota'),
    'edit_item' => __('Editar Nota'),
    'new_item' => __('Nueva Nota'),
    'all_items' => __('Lista de Notas'),
    'view_item' => __('Ver Nota'),
    'search_items' => __('Buscar Notas'),
    'not_found' =>  __('Nota no encontrada'),
    'not_found_in_trash' => __('Nota no encontrada en la papelera'), 
    'parent_item_colon' => 'nota:',
    'menu_name' => 'Notas'
);
$args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 6,
    'menu_icon' => get_template_directory_uri().'/img/icon/notas.png',
    'supports' => array('title','editor','excerpt','author','thumbnail')
);

register_post_type('nota',$args);

//CREAR CATEGORIAS DE INFORMES
$labels = array(
    'name' => _x( 'Categorías', 'taxonomy general name' ),
    'singular_name' => _x( 'Categoría', 'taxonomy singular name' ),
    'search_items' =>  __( 'Buscar Categoría' ),
    'all_items' => __( 'Todas las Categorías' ),
    'parent_item' => __( 'Categoría Padre' ),
    'parent_item_colon' => __( '' ),
    'edit_item' => __( 'Editar Categoría' ), 
    'update_item' => __( 'Actualizar Categoría' ),
    'add_new_item' => __( 'Añadir nueva Categoría' ),
    'new_item_name' => __( 'Nuevo nombre de Categoría' ),
    'menu_name' => __( 'Categorías' ),
); 	

register_taxonomy('categorias_informes',array('informe'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'categorias_informes' ),
));


//NUEVO POST TYPE DE ACTUA AMNISTIA
$labels = array(
    'name' => _x('Actúa', 'post type general name'),
    'singular_name' => _x('Información', 'post type singular name'),
    'add_new' => _x('Añadir Información', 'informacion'),
    'add_new_item' => __('Añadir nueva Información'),
    'edit_item' => __('Editar Información'),
    'new_item' => __('Nueva Información'),
    'all_items' => __('Lista Informaciones'),
    'view_item' => __('Ver Información'),
    'search_items' => __('Buscar Informaciones'),
    'not_found' =>  __('Información no encontrada'),
    'not_found_in_trash' => __('Información no encontrada en la papelera'), 
    'parent_item_colon' => 'Actúa:',
    'menu_name' => 'Actúa'
);
$args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 6,
    'menu_icon' => get_template_directory_uri().'/img/icon/actua.png',
    'supports' => array('title','editor','author','thumbnail')
);

register_post_type('actua-amnistia',$args);




//NUEVO POST TYPE DE TRABAJO
$labels = array(
    'name' => _x('Trabajos', 'post type general name'),
    'singular_name' => _x('Trabajos', 'post type singular name'),
    'add_new' => _x('Añadir trabajo', 'trabajo'),
    'add_new_item' => __('Añadir nuevo trabajo'),
    'edit_item' => __('Editar trabajo'),
    'new_item' => __('Nuevo trabajo'),
    'all_items' => __('Lista de trabajos'),
    'view_item' => __('Ver trabajo'),
    'search_items' => __('Buscar trabajo'),
    'not_found' =>  __('trabajo no encontrado'),
    'not_found_in_trash' => __('Trabajo no encontrado en la papelera'), 
    'parent_item_colon' => 'trabajo:',
    'menu_name' => 'Trabajos'
);
$args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 6,
    'menu_icon' => get_template_directory_uri().'/img/icon/notas.png',
    'supports' => array('title','editor','excerpt','author','thumbnail')
);

register_post_type('trabajo',$args);

//CREAR CATEGORIAS DE TRABAJO
$labels = array(
    'name' => _x( 'Categorías', 'taxonomy general name' ),
    'singular_name' => _x( 'Categoría', 'taxonomy singular name' ),
    'search_items' =>  __( 'Buscar Categoría' ),
    'all_items' => __( 'Todas las Categorías' ),
    'parent_item' => __( 'Categoría Padre' ),
    'parent_item_colon' => __( '' ),
    'edit_item' => __( 'Editar Categoría' ), 
    'update_item' => __( 'Actualizar Categoría' ),
    'add_new_item' => __( 'Añadir nueva Categoría' ),
    'new_item_name' => __( 'Nuevo nombre de Categoría' ),
    'menu_name' => __( 'Categorías' ),
); 	

register_taxonomy('categorias_trabajos',array('trabajo'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'categorias_trabajos' ),
));




// Devuelve la URL de la página actual
function get_current_page_link(){
    global $post;
    return requestPath;
}

//Paginador
function pagination($query) {
    $current = get_current_page_link();
    $current_page = explode('page', $current);
    $class = !empty($age) ? ' class="'.$age.'"' : '';
    if (empty($current_page[1])){
        $current_page = explode("?", $current);
    }
    $baseURL = $current_page[0];
    $page = $query->query_vars["paged"];
    
    if ( !$page ) $page = 1;

    $qs = $_SERVER["QUERY_STRING"] ? "?".$_SERVER["QUERY_STRING"] : "";
    // Only necessary if there's more posts than posts-per-page
    if ( $query->found_posts > $query->query_vars["posts_per_page"] ) {
        echo '<ul class="page_ctrl">';
        // Previous link?
        if ( $page > 1 ) {
            echo '<li><a href="'.$baseURL.'page/'.($page-1).'/'.$qs.'" title="Anterior"'.$class.'>&lt; Anterior</a></li>';
        }
        // Loop through pages
        for ( $i=1; $i <= $query->max_num_pages; $i++ ) {
            // Current page or linked page?
            if ( $i == $page ) {
                echo '<li class="active"><a href="'.$baseURL.'page/'.$i.'/'.$qs.'" title="Estás en esta página"'.$class.'>'.$i.'</a></li>';
            } else {
                echo '<li><a href="'.$baseURL.'page/'.$i.'/'.$qs.'" title="Ir a página '.$i.'">'.$i.'</a></li>';
            }
        }
        // Next link?
        if ( $page < $query->max_num_pages ) {
            echo '<li><a href="'.$baseURL.'page/'.($page+1).'/'.$qs.'" title="Siguiente"'.$class.'>Siguiente &gt;</a></li>';
        }
        echo '</ul>';
    }
}
//$post_types_for_search = array('post', 'page', 'informes');
//function search_posts_filter( $query ){
//    if ($query->is_search){
//        $query->set('post_type', $post_types_for_search);
//    }
//    return $query;
//}
//add_filter('pre_get_posts','search_posts_filter');
/*
function myfeed_request($qv) {
    if (isset($qv['feed']))
        $qv['post_type'] = get_post_types();
    return $qv;
}
add_filter('request', 'myfeed_request');
*/

function my_init() {
    if (!is_admin()) {
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'my_init');

//Debuger
function vd($str){
    var_dump($str);
}
function pr($str){
    echo '<pre>';
    print_r($str);
    echo '</pre>';
}

function submenu_pageparent($page_parent, $format='col2', $cant='-1'){
    //Formatos: col2, col2-foto
    $page_parent = get_page_by_path($page_parent);
    $children_pages = get_children_pages_by_id($page_parent->ID, $cant);
    echo '<a href="'.get_permalink($page_parent->ID).'">'.$page_parent->post_title.'<span>&#9660;</span></a>';
    echo '<div class="submenu">';
    echo '<a href="'.get_permalink($page_parent->ID).'" class="nav_hover">'.$page_parent->post_title.'<span>&#9660;</span></a>';
    echo '<div class="submenu_content '.$format.'">';

    if(!empty($children_pages)) :
    $i=0;
    foreach($children_pages as $ele){
        if($format=='col2'){
            $i++; $num=''; $img='';
            if($i==1) $num = ' first';
            if($i<4) $img = ' wimg';
            if ($i==1 || $i==4)
                echo '<div class="col'.$num.'">';
            echo '<div class="item'.$img.'">';
            if ($i<4){
                echo '<div class="img_submenu">';
                echo '<a href="'.get_permalink($ele->ID).'" title="'.get_the_title($ele->ID).'">'.get_the_post_thumbnail($ele->ID, 'thumbnail').'</a>';
                echo '</div>';
            }
            echo '<div class="info_submenu">';
            echo '<h4 class="title_submenu"><a href="'.get_permalink($ele->ID).'" title="'.get_the_title($ele->ID).'" >'.get_the_title($ele->ID).'</a></h4>';
            echo '<p class="text_submenu">';
            the_field('menu_descripcion', $ele->ID);
            echo '</p>'.
                '</div>'.
                '</div>';
            if ($i==3 || $i==6)
                echo '</div>';
        }
        if($format=='col2-foto'){
            $i++; $num='';
            if($i==1) $num = ' first';
            if ($i==1 || $i==3)
                echo '<div class="col half'.$num.'">';
            echo '<div class="item wimg">';
            echo '<div class="img_submenu">';
            echo '<a href="'.get_permalink($ele->ID).'" title="'.get_the_title($ele->ID).'">'.get_the_post_thumbnail($ele->ID, 'thumbnail').'</a>';
            echo '</div>';
            echo '<div class="info_submenu">';
            echo '<h4 class="title_submenu"><a href="'.get_permalink($ele->ID).'" title="'.get_the_title($ele->ID).'" >'.get_the_title($ele->ID).'</a></h4>';
            echo '<p class="text_submenu">';
            the_field('menu_descripcion', $ele->ID);
            echo '</p>'.
                '</div>'.
                '</div>';
            if ($i==2 || $i==4)
                echo '</div>';
        }
    }

    if (($format=='col2' && $i!=3 && $i!=6) || ($format=='col2-foto' && $i!=2 && $i!=4))
        echo '</div>';
    unset($i);
    unset($num);
    unset($img);
    unset($children_pages);
    endif;
    echo '</div><!-- .submenu_content -->';
    echo '</div><!-- .submenu -->';
}

function get_children_pages_by_id($page_id, $cant='-1'){
        $page_one = get_ID_by_slug("/actua/acciones/");
        $page_two = get_ID_by_slug("/actua/form-ciberactivista/");
    $children_pages = get_posts(array(
        'post_type' => 'page',
        'post_parent' => $page_id,
        'showposts' => $cant,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'exclude' => array($page_one, $page_two)
    ));
    return $children_pages;
}
function get_ID_by_slug($page_slug) {
    $page = get_page_by_path($page_slug);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
}
function get_sidebar_header($part='sidebar'){
    global $post;
    $tempa = $post;
    $sidebar_content = '';
    $header_content = '';
    if ((is_page_template('template-portada-seccion.php') && $tempa->post_parent==0) || $tempa->post_parent!=0 || defined('PARENT_ID') || is_singular(array('accion', 'campana', 'informe', 'trabajo', 'noticia'))) {
        if (is_singular('accion')){
            $tempa = get_page_by_path('/actua/acciones-urgentes');
        }
        if (is_singular('campana')){
            $tempa = get_page_by_path('/nuestro-trabajo/campanas');
        }
        if (is_singular('informe')){
            $tempa = get_page_by_path('/informes');
        }
        if (is_singular('trabajo')){
            $tempa = get_page_by_path('/trabaja-con-nosotros');
        }
        if (is_singular('noticia')){
            $tempa = get_page_by_path('/noticias');
        }
        $page_parent_id = $tempa->ID;
        $page_parent_name = $tempa->post_name;
        if ($tempa->post_parent!=0){
            $page_parent_id = $tempa->post_parent;
            $page_parent_name = get_page($page_parent_id)->post_name;
            $parent_parent = get_page($page_parent_id)->post_parent;
            if ($parent_parent!=0)
                $page_parent_id = $parent_parent;
            $page_parent_name = get_page($page_parent_id)->post_name;
        }
        if(defined('PARENT_ID')){
            $page_parent_id = PARENT_ID;
            $page_parent_name = get_page($page_parent_id)->post_name;
        }

        $get_info_sidebar = new WP_Query(array(
            'post_type' => 'cabecera-sidebar',
            'showposts' => 1,
            'name' => $page_parent_name
        ));
        $sidebar_content.= '<div class="sidebar_box fullphoto var">';
        if($get_info_sidebar->have_posts()) :
        while($get_info_sidebar->have_posts()) : $get_info_sidebar->the_post();
            $img_cabecera = get_field("cabecera_imagen");
            $img_sidebar = get_field("sidebar_imagen");
            $sidebar_content.= '<div class="label_y">';
                $sidebar_content.= '<span class="label_left"></span>'.get_the_title().'<span class="label_right"></span>';
            $sidebar_content.= '</div>'; //.label_y
            $sidebar_content.= '<div class="cont_img_hid">';
                $sidebar_content.= '<img src="'.$img_sidebar['url'].'" alt="'.$img_sidebar['alt'].'"  class="img_side_box" />';
                $sidebar_content.= '<div class="opac_side_box"></div>';
                $sidebar_content.= '<div class="content_fp">';
                    $sidebar_content.= '<div class="title_fp">';
                        $sidebar_content.= get_the_content();
                    $sidebar_content.= '</div>';//.title_fp
                $sidebar_content.= '</div>';//.content_fp
        if(!is_singular(array('informe', 'noticia', 'trabaja'))){
                $sidebar_content.= '<div class="content_fp content_fp_sub">';
                    $sidebar_content.= '<div class="text_fp">';
                    $pages_submenu = get_children_pages_by_id($page_parent_id);
                    if(!empty($pages_submenu)){
                        $sidebar_content.= '<ul>';
                        foreach($pages_submenu as $item){
                            $sidebar_content.= '<li>';
                            $sidebar_content.= '<a href="'.get_the_permalink($item->ID).'" title="'.get_the_title($item->ID).'">'.get_the_title($item->ID).'</a>';
                            $sidebar_content.= '</li>';
                        }//foreach
                        $sidebar_content.= '</ul>';
                    }
                    $sidebar_content.= '</div>';//.text_fp
                $sidebar_content.= '</div>';//.content_fp
        }
            $sidebar_content.= '</div>';//.cont_img_hid
        
            $header_content.= '<div class="cont_tit">';
            $header_content.= '<h3 class="title_section">'.get_the_title().'</h3>';
            $header_content.= '</div>';
            $header_content.= '<img src="'.$img_cabecera['url'].'" alt="'.$img_cabecera['alt'].'" />';
        endwhile;
        else:
            $sidebar_content.= '<div class="content_fp content_fp_sub">';
                $sidebar_content.= '<div class="text_fp">';
                $pages_submenu = get_children_pages_by_id($page_parent_id);
                if(!empty($pages_submenu)){
                    $sidebar_content.= '<ul>';
                    foreach($pages_submenu as $item){
                        $sidebar_content.= '<li>';
                        $sidebar_content.= '<a href="'.get_the_permalink($item->ID).'" title="'.get_the_title($item->ID).'">'.get_the_title($item->ID).'</a>';
                        $sidebar_content.= '</li>';
                    }//foreach
                    $sidebar_content.= '</ul>';
                }
                $sidebar_content.= '</div>';//.text_fp
            $sidebar_content.= '</div>';//.content_fp
        endif;
        $sidebar_content.= '</div>';//.sidebar_box
    }else{
        $page_parent_name = $tempa->post_name;
        $get_info_sidebar = new WP_Query(array(
            'post_type' => 'cabecera-sidebar',
            'showposts' => 1,
            'name' => $page_parent_name
        ));
        $sidebar_content.= '<div class="sidebar_box fullphoto var">';
        if($get_info_sidebar->have_posts()) :
        while($get_info_sidebar->have_posts()) : $get_info_sidebar->the_post();
            $img_cabecera = get_field("cabecera_imagen");
            $img_sidebar = get_field("sidebar_imagen");
            $sidebar_content.= '<div class="label_y">';
            $sidebar_content.= '<span class="label_left"></span>'.get_the_title().'<span class="label_right"></span>';
            $sidebar_content.= '</div>';
            $sidebar_content.= '<div class="cont_img_hid">';
            $sidebar_content.= '<img src="'.$img_sidebar['url'].'" alt="'.$img_sidebar['alt'].'"  class="img_side_box" />';
            $sidebar_content.= '<div class="opac_side_box"></div>';
            $sidebar_content.= '<div class="content_fp">';
            $sidebar_content.= '<div class="title_fp">';
            $sidebar_content.= get_the_content();
            $sidebar_content.= '</div>';

            $header_content.= '<div class="cont_tit">';
            $header_content.= '<h3 class="title_section">'.get_the_title().'</h3>';
            $header_content.= '</div>';
            $header_content.= '<img src="'.$img_cabecera['url'].'" alt="'.$img_cabecera['alt'].'" />';
            $sidebar_content.= '</div>';
            $sidebar_content.= '</div>';
        endwhile;
        endif;
        $sidebar_content.= '</div>';

    } //Endif nuestro_trabajo

    $post = $tempa;
    $all = array($header_content, $sidebar_content);
    /*if($part=='sidebar')
        return $sidebar_content;
    if($part=='header')
        return $header_content;*/
    return $all;
}
?>