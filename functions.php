<?php

function abbysawesome_script_enqueue(){
wp_enqueue_style
('customstlyle',get_template_directory_uri().'wp-content/themes/abbysawesometheme2024/css/abbysawesome.css', 
array(),'1.0.0','all');

wp_enqueue_script
('customsjs',get_template_directory_uri().'wp-content/themes/abbysawesometheme2024/js/abbysawrsome.jss', 
array(),'1.0.0',true);
/*good for page loading speed to print true for js file.
*/
}

add_action('wp_enqueue_scripts', 'abbysawesome_script_enqueue');
/* This action was included to include my custom js and custom css.
*/

function abbysawesome_theme_setup(){

    add_theme_support('menus');

    register_nav_menu('primary','Header navigation');
    register_nav_menu('secondary','Footer navigation');

}
add_action('init','abbysawesome_theme_setup');
/* This requests wordpress to execute the function after initialization. The other option is after_setup_theme
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');