<?php
// Register Nav Walker class_alias
require_once('class-wp-bootstrap-navwalker.php');

//Theme Support
function wpb_theme_setup(){
        //Nav Menus
        register_nav_menus(array(
                'primary' => __('Primary Menu')
                ));
}
add_action('after_setup_theme','wpb_theme_setup');

add_theme_support('post-thumbnails');

function wpb_init_widgets(){
   register_sidebar(array(
       'name' => 'Sidebar',
       'id' => 'sidebar',
       'before_widget' => '<div class="sidebar-module">',
       'after_widget' => '</div>',
       'before_title' => '<h4>',
       'after_title' => '</h4>'
        ));
}
add_action('widgets_init', 'wpb_init_widgets');


/* Add bootstrap support to the Wordpress theme*/
// function codefactory_files() {
// wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css' );
// wp_enqueue_style( 'bootstrap-min-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
// wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
// wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array(), true );
// }
// add_action( 'wp_enqueue_scripts', 'codefactory_files' );

?>