<?php
add_action('wp_footer', "scripts");
add_action('wp_enqueue_scripts', "styles");
add_action('after_setup_theme', 'myMenu');
add_action('widgets_init', 'registerMyWidget');
add_shortcode('myShortcode', 'shortcodeFunc');

add_action( 'init', 'register_post_types' );
function register_post_types(){
    register_post_type( 'portfolio', [
        'label'  => null,
        'labels' => [
            'name'               => 'Portfolio', // основное название для типа записи
            'singular_name'      => 'Portfolio', // название для одной записи этого типа
            'add_new'            => 'Добавить work', // для добавления новой записи
            'add_new_item'       => 'Добавление work', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование work', // для редактирования типа записи
            'new_item'           => 'Новое work', // текст новой записи
            'view_item'          => 'Смотреть work', // для просмотра записи этого типа.
            'search_items'       => 'Искать work in portfolio', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Portfolio', // название меню
        ],
        'description'         => 'This is our works in Portfolio!',
        'public'              => true,
         'publicly_queryable'  => true, // зависит от public
         'exclude_from_search' => true, // зависит от public
         'show_ui'             => true, // зависит от public
         'show_in_nav_menus'   => true, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
         'show_in_admin_bar'   => true, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-format-gallery',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor', 'author', 'thumbnail', 'excerpt' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
}
function shortcodeFunc(){
   return 'I`m here and i am SHORTCODE :3';
}

function myMenu(){
    register_nav_menu('top', "Top Menu");
    register_nav_menu('top1', "Top Menu 1");
    add_theme_support('title-tag');
    add_theme_support( 'post-formats', array( 'aside', 'gallery', "video" ) );
    add_theme_support('post-thumbnails', array('post', 'portfolio'));
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