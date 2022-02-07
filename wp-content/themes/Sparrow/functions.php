<?php
add_action('wp_footer', "scripts");
add_action('wp_enqueue_scripts', "styles");
add_action('after_setup_theme', 'myMenu');
add_action('widgets_init', 'registerMyWidget');
add_shortcode('myShortcode', 'shortcodeFunc');


function shortcodeFunc(){
   return 'I`m here and i am SHORTCODE :3';
}

function myMenu(){
    register_nav_menu('top', "Top Menu");
    register_nav_menu('top1', "Top Menu 1");
    add_theme_support('title-tag');
    add_theme_support( 'post-formats', array( 'aside', 'gallery', "video" ) );
    add_theme_support('post-thumbnails', array('post'));
    add_image_size('post_thumbnail', 1300, 500, true);

}

function scripts(){
    wp_enqueue_script('init', get_template_directory_uri().'/assets/js/init.js');
    wp_enqueue_script('doubletabtogo', get_template_directory_uri().'/assets/js/doubletabtogo.js');
    wp_enqueue_script('felxslider', get_template_directory_uri().'/assets/js/felxslider.js');
    wp_enqueue_script('jquery');
}

function styles(){
    wp_enqueue_style('default', get_template_directory_uri().'/assets/css/default.css');
    wp_enqueue_style('fonts', get_template_directory_uri().'/assets/css/fonts.css');
    wp_enqueue_style('layout', get_template_directory_uri().'/assets/css/layout.css');
    wp_enqueue_style('media-queries', get_template_directory_uri().'/assets/css/media-queries.css');
}


function registerMyWidget(){
    register_sidebar(array(
        'name' =>  'right sidebar',
        'id' => 'right_sidebar',
        'description' => 'Description of sidebar',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => "</div>\n",
        'before_title'  => '<h5 class="widgettitle">',
        'after_title'   => "</h5>\n",

    ));
}