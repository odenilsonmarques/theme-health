<?php

function terrazoo_load_scripts()
{
    wp_enqueue_style('terrazoo-style', get_stylesheet_uri(), array(), 1.0, 'all');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js');
}
add_action('wp_enqueue_scripts', 'terrazoo_load_scripts');

function terrazoo_config()
{
    add_theme_support('custom-logo', array(

        'width' => 100,
        'height' => 20,
        'flex-height' => true,
        'flex-with' => true

    ));

    register_nav_menus(
        array(
            'zoo_main_menu' => 'Main Menu Terrazoo',
            'zoo_footer_menu' => 'Footer Menu Terrazoo'

        )
    );

    //add suport a thumbnails
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'terrazoo_config', 0);




