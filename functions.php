<?php
update_option( 'siteurl', 'http://192.168.1.234' );
update_option( 'home', 'http://192.168.1.234' );

function flt_setup(){
    wp_enqueue_style('google-fonts','//fonts.googleapis.com/css?family=PT+Sans:400,700|Work+Sans:400,500,600,700&display=swap');
    // wp_enqueue_style('app', get_template_directory_uri() . '/css/app.css', NULL, microtime(),all);
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), all);
    wp_enqueue_script("main", get_theme_file_uri('js/app.js'), NULL, microtime(), true);
    // wp_enqueue_script("main", get_theme_file_uri('js/app.js.map'), NULL, microtime(), true);
    // wp_register_script( 'Feather', 'https://unpkg.com/feather-icons', null, null, true );
    // wp_enqueue_script('Feather');
}

add_action('wp_enqueue_scripts', 'flt_setup');
// add_action( 'wp_enqueue_scripts', function() {
//     wp_enqueue_style(
//         'styles',
//         mix( 'css/style.css' )
//     );
// } );

function flt_init(){
    add_theme_support( 'post-thumbnails' ); 
    add_theme_support( 'title-tag' ); 
    add_theme_support('html5', 
    array(
        'comment-list', 'comment-form'
    ));
}
add_action('after_setup_theme', 'flt_init');
