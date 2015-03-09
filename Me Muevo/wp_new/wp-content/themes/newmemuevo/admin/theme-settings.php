<?php
add_action('init','of_options');

if (!function_exists('of_options')) {
    function of_options(){

        //Theme Shortname
        $shortname = "memuevo";


        //Populate the options array
        global $tt_options;
        $tt_options = get_option('of_options');


        //Access the WordPress Pages via an Array
        $tt_pages = array();
        $tt_pages_obj = get_pages('sort_column=post_parent,menu_order');    
        foreach ($tt_pages_obj as $tt_page) {
            $tt_pages[$tt_page->ID] = $tt_page->post_name; }
        $tt_pages_tmp = array_unshift($tt_pages, "Select a page:"); 


        //Access the WordPress Categories via an Array
        $tt_categories = array();  
        $tt_categories_obj = get_categories('hide_empty=0');
        foreach ($tt_categories_obj as $tt_cat) {
            $tt_categories[$tt_cat->cat_ID] = $tt_cat->cat_name;}
        $categories_tmp = array_unshift($tt_categories, "Select a category:");


        //Sample Array for demo purposes
        $sample_array = array("1","2","3","4","5");


        //Sample Advanced Array - The actual value differs from what the user sees
        $sample_advanced_array = array("image" => "The Image","post" => "The Post"); 


        //Folder Paths for "type" => "images"
        $sampleurl =  get_template_directory_uri() . '/admin/images/sample-layouts/';










        /*-----------------------------------------------------------------------------------*/
        /* Create The Custom Site Options Panel
/*-----------------------------------------------------------------------------------*/
        $options = array(); // do not delete this line - sky will fall




        /* Option Page 1 - All Options */	
        $options[] = array( "name" => __('Links redes sociales','framework_localize'),
                           "type" => "heading");

        $options[] = array( "name" => __('Facebook','framework_localize'),
                           "desc" => "Vínculo de Facebook",
                           "id" => $shortname."_link_facebook",
                           "std" => "",
                           "type" => "text");

        $options[] = array( "name" => __('Twitter','framework_localize'),
                           "desc" => "Vínculo de Twitter",
                           "id" => $shortname."_link_twitter",
                           "std" => "",
                           "type" => "text");

        $options[] = array( "name" => __('Youtube','framework_localize'),
                           "desc" => "Vínculo de Youtube",
                           "id" => $shortname."_link_youtube",
                           "std" => "",
                           "type" => "text");
        /*
        $options[] = array( "name" => __('Youtube','framework_localize'),
                           "desc" => __('This is an image upload field.','framework_localize'),
                           "id" => $shortname."_sample_image_upload",
                           "std" => "",
                           "type" => "upload");


        $options[] = array( "name" => __('Checkbox','framework_localize'),
                           "desc" => __('This is a checkbox.','framework_localize'),
                           "id" => $shortname."_sample_checkbox",
                           "std" => "true",
                           "type" => "checkbox");


        $options[] = array( "name" => __('Dropdown List','framework_localize'),
                           "desc" => __('This is a dropdown list.','framework_localize'),
                           "id" => $shortname."_sample_dropdown",
                           "std" => "1",
                           "type" => "select",
                           "options" => $sample_array);


        $options[] = array( "name" => __('Radio Buttons','framework_localize'),
                           "desc" => __('These are radio buttons.','framework_localize'),
                           "id" => $shortname."_sample_radio",
                           "std" => "1",
                           "type" => "radio",
                           "options" => array(
                               'Red Radio' => 'Red',
                               'Green Radio' => 'Green',
                               'Blue Radio' => 'Blue'
                           ));


        $options[] = array( "name" => __('Image Radio Buttons','framework_localize'),
                           "desc" => __('Spice up your radio buttons by using custom images.','framework_localize'),
                           "id" => $shortname."_sample_image_radio",
                           "std" => "option1",
                           "type" => "images",
                           "options" => array(
                               'option1' => $sampleurl . 'sample-layout-1.png',
                               'option2' => $sampleurl . 'sample-layout-2.png',
                               'option3' => $sampleurl . 'sample-layout-3.png'
                           ));


        $options[] = array( "name" => __('Color Picker','framework_localize'),
                           "desc" => __('This is a color picker.','framework_localize'),
                           "id" => $shortname."_sample_color_picker",
                           "std" => "",
                           "type" => "color");	


        $options[] = array( "name" => __('Wordpress Page','framework_localize'),
                           "desc" => __('This displays a list of every page on your website.','framework_localize'),
                           "id" => $shortname."_sample_wp_pages",
                           "std" => "1",
                           "type" => "select",
                           "options" => $tt_pages);


        $options[] = array( "name" => __('Wordpress Category','framework_localize'),
                           "desc" => __('This displays a list of every category on your website.','framework_localize'),
                           "id" => $shortname."_sample_wp_category",
                           "std" => "1",
                           "type" => "select",
                           "options" => $tt_categories);


*/






        /* Option Page 2 - Sample Page */
        $options[] = array( "name" => __('Datos del sitio','framework_localize'),
                           "type" => "heading");

        $options[] = array( "name" => __('Teléfono','framework_localize'),
                           "desc" => "Número de teléfono",
                           "id" => $shortname."_info_telefono",
                           "std" => "",
                           "type" => "text");

        $options[] = array( "name" => __('Dirección','framework_localize'),
                           "desc" => "Dirección física",
                           "id" => $shortname."_info_direccion",
                           "std" => "",
                           "type" => "text");

        $options[] = array( "name" => __('Correo','framework_localize'),
                           "desc" => "Correo electrónico",
                           "id" => $shortname."_info_correo",
                           "std" => "",
                           "type" => "text");


        update_option('of_template',$options);
        update_option('of_themename',$themename);   
        update_option('of_shortname',$shortname);

    }
}
?>