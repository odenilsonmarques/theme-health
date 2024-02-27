<?php

function physioterapy_load_script()
{
    wp_enqueue_style('physioterapy-style', get_stylesheet_uri(), array(), 1.0, 'all');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');


    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), 1.0, true);
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js');
}
add_action('wp_enqueue_scripts', 'physioterapy_load_script');


function physioterapy_config()
{
    add_theme_support('custom-logo', array(

        'width' => 100,
        'height' => 60,
        'flex-height' => true,
        'flex-with' => true

    ));
}

add_action('after_setup_theme', 'physioterapy_config', 0);