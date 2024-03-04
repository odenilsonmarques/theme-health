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

    register_nav_menus(
        array(
            'phyfio_main_menu' => 'Main Menu'
        )
    );
}

add_action('after_setup_theme', 'physioterapy_config', 0);



function physioterapy_sidebars()
{
    register_sidebar(
        array(
            'name' => 'Fisrt service', //aqui é o titulo do sidebar
            'id' => 'fisrt-service', //aqui definimos uma valor
            'description' => 'first service area',
            //os argumento abaixo referem-se a apresentação de cada widgets individualmente no front end
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widgte-title">',
            'after_title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Second service', //aqui é o titulo do sidebar
            'id' => 'second-service', //aqui definimos uma valor
            'description' => 'second service area',
            //os argumento abaixo referem-se a apresentação de cada widgets individualmente no front end
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widgte-title">',
            'after_title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Third service', //aqui é o titulo do sidebar
            'id' => 'third-service', //aqui definimos uma valor
            'description' => 'third service area',
            //os argumento abaixo referem-se a apresentação de cada widgets individualmente no front end
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widgte-title">',
            'after_title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => 'First testimony', //aqui é o titulo do sidebar
            'id' => 'first-testimony', //aqui definimos uma valor
            'description' => 'first testimony area',
            //os argumento abaixo referem-se a apresentação de cada widgets individualmente no front end
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widgte-title">',
            'after_title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Second testimony', //aqui é o titulo do sidebar
            'id' => 'second-testimony', //aqui definimos uma valor
            'description' => 'second testimony area',
            //os argumento abaixo referem-se a apresentação de cada widgets individualmente no front end
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widgte-title">',
            'after_title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Third testimony', //aqui é o titulo do sidebar
            'id' => 'third-testimony', //aqui definimos uma valor
            'description' => 'third testimony area',
            //os argumento abaixo referem-se a apresentação de cada widgets individualmente no front end
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widgte-title">',
            'after_title' => '</h4>'
        )
    );
}
add_action('widgets_init', 'physioterapy_sidebars');