<?php


//   function new_benefits(){
    
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title'    => 'Company',
            'menu_title'    => 'Company',
            'menu_slug'     => 'Company',
            'capability'    => 'edit_posts',
            'icon_url' => 'dashicons-info',
            "position" => 50,
        ));
    }
//   }

?>