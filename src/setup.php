<?php
function luxury_setup()
{
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    register_nav_menus([
        'primary' => 'Primary'
    ]);

}

add_action('after_setup_theme', 'luxury_setup');

function luxury_scripts()
{

    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('font-icons-style', get_template_directory_uri() . '/assets/css/font-icons.css');
    wp_enqueue_style('animate-style', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('magnific-popup-style', get_template_directory_uri() . '/assets/css/magnific-popup.css');

    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('dark-style', get_template_directory_uri() . '/assets/css/dark.css');
    wp_enqueue_style('spa-icons-style', get_template_directory_uri() . '/demos/spa/css/fonts/spa-icons.css');
    wp_enqueue_style('setting-style', get_template_directory_uri() . '/include/rs-plugin/css/settings.css');
    wp_enqueue_style('layers-style', get_template_directory_uri() . '/include/rs-plugin/css/layers.css');
    wp_enqueue_style('navigation-style', get_template_directory_uri() . '/include/rs-plugin/css/navigation.css');
    wp_enqueue_style('fonts-style', get_template_directory_uri() . '/demos/spa/css/fonts.css');
    wp_enqueue_style('spa-style', get_template_directory_uri() . '/demos/spa/spa.css');



    wp_enqueue_script('jquery_scripts', get_template_directory_uri() . '/assets/js/jquery.js', [], '1.0', true);
    wp_enqueue_script('plugins-script', get_template_directory_uri() . '/assets/js/plugins.min.js', [], '1.0', true);
    wp_enqueue_script('function-script', get_template_directory_uri() . '/assets/js/functions.js', [], '1.0', true);
    wp_enqueue_script('tools-script', get_template_directory_uri() . '/include/rs-plugin/js/jquery.themepunch.tools.min.js', [], '1.0', true);
    wp_enqueue_script('revolution-script', get_template_directory_uri() . '/include/rs-plugin/js/jquery.themepunch.revolution.min.js', [], '1.0', true);
    wp_enqueue_script('slideanims-script', get_template_directory_uri() . '/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js', [], '1.0', true);
    wp_enqueue_script('actions-script', get_template_directory_uri() . '/include/rs-plugin/js/extensions/revolution.extension.actions.min.js', [], '1.0', true);
    wp_enqueue_script('layeranimation-script', get_template_directory_uri() . '/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js', [], '1.0', true);
    wp_enqueue_script('navigation-script', get_template_directory_uri() . '/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js', [], '1.0', true);


}

add_action('wp_enqueue_scripts', 'luxury_scripts');
