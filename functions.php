<?php 
//add styles and scripts
function mb_studio_src(){
    wp_enqueue_script('main-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
    wp_enqueue_script('vendor-js', get_theme_file_uri('/js/vendors.js'), NULL, '1.0', true);
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Palanquin|Roboto&display=swap');
    wp_enqueue_script('font-awesome', '//kit.fontawesome.com/56d84fb067.js');
    wp_enqueue_style('main_styles', get_stylesheet_uri(), NULL, microtime());
}
    add_action('wp_enqueue_scripts', 'mb_studio_src');
//add page title in the browser; enable menu customization
    function mb_studio_features(){
        register_nav_menu('headerMenuLocation', 'Header Menu');
        register_nav_menu('footerMenuLocation', 'Footer Menu');
        add_theme_support('title-tag'); 
        add_theme_support( 'post-thumbnails' ); 
    }

    add_action('after_setup_theme', 'mb_studio_features');

    // if(function_exists('acf_add_options_page')){
    //     acf_add_options_page();
    // }
?>