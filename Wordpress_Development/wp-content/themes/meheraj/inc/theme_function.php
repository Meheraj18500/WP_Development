<?php

//Theme Function
function m_customizar_register($wp_customize){

    // Header Logo
    $wp_customize -> add_section('m_header_logo', array(
        'title' =>__('Header Area', 'meheraj'),
        'description' => 'If you want to change your heacer content, You can do it here.'
    ));

    $wp_customize -> add_setting('m_logo', array(
        'default' => get_bloginfo('template_directory') . '/img/logo.png'
    ));

    $wp_customize -> add_control(new WP_Customize_Image_control($wp_customize, 'm_logo', array(
        'label' => 'Logo Upload',
        'description' => 'You want to change or update your logo? You can do it here',
        'setting' => 'm_logo',
        'section' => 'm_header_logo'
    )));

    // Header Menu Options
    $wp_customize -> add_section('m_header_menu', array(
        'title' =>__('Menu Option', 'meheraj'),
        'description' => 'If you want to change your menu align, You can do it here.'
    ));

    $wp_customize -> add_setting('m_menu_position', array(
        'default' => 'left_menu'
    ));

    $wp_customize -> add_control('m_menu_position', array(
        'label' => 'Menu position',
        'description' => 'Select your menu position',
        'setting' => 'm_menu_position',
        'section' => 'm_header_menu',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu'
        )
    ));

    // Footer Options
    $wp_customize -> add_section('m_footer', array(
        'title' =>__('Footer', 'meheraj'),
        'description' => 'If you want to change footer, You can do it here.'
    ));

    $wp_customize -> add_setting('m_footer_section', array(
        'default' => '&copy Copyright 2022 | all right reserved by Meheraj'
    ));

    $wp_customize -> add_control('m_footer_section', array(
        'label' => 'Edit you footer',
        'description' => 'You cand edit your footer here',
        'setting' => 'm_footer_section',
        'section' => 'm_footer'
    ));

    // Theme Color
    $wp_customize -> add_section('m_theme_color', array(
        'title' =>__('Theme Color', 'meheraj'),
        'description' => 'If you want to change Theme color, You can do it here.'
    ));

    // Background Color
    $wp_customize -> add_setting('m_color_bg', array(
        'default' => '#ffffff'
    ));
    $wp_customize -> add_control( new WP_Customize_Color_Control($wp_customize, 'm_color_bg', array(
        'label' => 'Background Color',
        'setting' => 'm_color_bg',
        'section' => 'm_theme_color'
    )));
    // __Primary Color
    $wp_customize -> add_setting('m_color_primary', array(
        'default' => '#e73b3b'
    ));
    $wp_customize -> add_control( new WP_Customize_Color_Control($wp_customize, 'm_color_primary', array(
        'label' => 'Primary Color',
        'setting' => 'm_color_primary',
        'section' => 'm_theme_color'
    )));
    // __Secondary Color
    $wp_customize -> add_setting('m_color_secondary', array(
        'default' => '#1b1d1f'
    ));
    $wp_customize -> add_control( new WP_Customize_Color_Control($wp_customize, 'm_color_secondary', array(
        'label' => 'Secondary Color',
        'setting' => 'm_color_secondary',
        'section' => 'm_theme_color'
    )));
}
add_action('customize_register', 'm_customizar_register');

function m_theme_color_implement(){
    ?>
        <style>
        body {
            background-color: <?php echo get_theme_mod('m_color_bg') ?>;
        }
        :root {
            --primary: <?php echo get_theme_mod('m_color_primary') ?>;
            --secondary: <?php echo get_theme_mod('m_color_secondary') ?>;
        }
        </style>
    <?php 
}
add_action('wp_head', 'm_theme_color_implement');