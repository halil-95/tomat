<?php


add_action("after_setup_theme",  "add_function");

function add_function()
{
    // разделяем функции по частям
    locate_template(['inc/option-page.php'], true, true);
    locate_template(['inc/theme-support.php'], true, true);
    locate_template(['inc/register-nav-menus.php'], true, true);
}

// add_action( "my_hook", "addMyClass" );


// -------------------------------------------
// надо дописать 

// add_action( "after_setup_theme",  "add_function1" );



// function add_function1( $field_name, $file = "", $icon = "" ){
//   $var_name = get_field($field_name, "options");
//   if ($var_name) :
//     foreach ($var_name as $name) : 
//         echo " <i class=". $icon . "></i>" . "<span class = " . $name[ $file ] . "></span></br>";
//     endforeach;
//   endif;
// }

// -------------------------------------------




add_action('template_redirect', 'template_redirect_attachment');
function template_redirect_attachment()
{
    global $post;
    // Перенаправляем на основную запись:
    if (is_attachment()) {
        wp_redirect(get_permalink($post->post_parent));
    }
}


