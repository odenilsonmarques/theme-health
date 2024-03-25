<?php


//passando no parametro o objeto $wp_customizer da classe wp_custmizer_manageer, e depois usamos os metodos dele (add_section, add_setting, add_control)

function physioterapy_customizer($wp_customize)
{
    //copyright
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => 'Copyright settings',
            'description' => 'Copyright settings'
        )
    );

    $wp_customize->add_setting(
        'set_copyright',
        array(
            'type' => 'theme_mod',
            'default' => 'Copyright X - All Rights Reserved',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_copyright',
        array(
            'label' => 'copyright information',
            'description' => 'please, type your copyright here',
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );



    //Hero
    $wp_customize->add_section(
        'sec_hero',
        array(
            'title' => 'Hero section'
        )
    );

    $wp_customize->add_setting(
        'set_hero_title',
        array(
            'type' => 'theme_mod',
            'default' => 'please, add some title',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_title',
        array(
            'label' => 'Hero Title',
            'description' => 'Please, type your title here',
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    $wp_customize->add_setting(
        'set_hero_subtitle',
        array(
            'type' => 'theme_mod',
            'default' => 'please, add some subtitle',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_subtitle',
        array(
            'label' => 'Hero subTitle',
            'description' => 'Please, type your subtitle here',
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    $wp_customize->add_setting(
        'set_hero_button_text',
        array(
            'type' => 'theme_mod',
            'default' => 'Learn More',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_button_text',
        array(
            'label' => 'Hero button text',
            'description' => 'Please, type your hero button text here',
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    $wp_customize->add_setting(
        'set_hero_button_link',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_hero_button_link',
        array(
            'label' => 'Hero button link',
            'description' => 'Please, type your hero button link here',
            'section' => 'sec_hero',
            'type' => 'url'
        )
    );

    $wp_customize->add_setting(
        'set_hero_img',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
        'set_hero_img',
        array(
            'label' => 'Hero Image',
            'section'   => 'sec_hero',
            'mime_type' => 'image'
        )));

   
}

add_action('customize_register', 'physioterapy_customizer');
