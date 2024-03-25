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
}

add_action('customize_register', 'physioterapy_customizer');