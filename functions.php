<?php


add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	wp_enqueue_style('second-style' , get_template_directory_uri() . "./assets/css/reset.css" );
    wp_enqueue_script('main',  get_template_directory_uri() . "./assets/js/index.js", false , null , "footer");
}


function theme_setup() {

    load_theme_textdomain("amoprost");

    add_theme_support("title-tag");

    add_theme_support('custom-logo', array(
        'height' => 50, 
        'width' => 100,
        'flex-height' => true
    ));

    add_theme_support("post-thumbnails");
    set_post_thumbnail_size(277, 271);
    
}

add_action('after_setup_theme', 'theme_setup'); 


?>