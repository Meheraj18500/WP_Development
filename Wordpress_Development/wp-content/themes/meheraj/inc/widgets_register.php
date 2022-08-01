<?php

// Sidbar Register Function

function m_widgets_register(){
    register_sidebar(array(
        'name' => __('Main Widget Area', 'meheraj'),
        'id'   => 'sidebar_1',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'meheraj'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer-1', 'meheraj'),
        'id'   => 'footer_1',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'meheraj'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer-2', 'meheraj'),
        'id'   => 'footer_2',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'meheraj'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer-3', 'meheraj'),
        'id'   => 'footer_3',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'meheraj'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
    
}
add_action('widgets_init', 'm_widgets_register');

?>