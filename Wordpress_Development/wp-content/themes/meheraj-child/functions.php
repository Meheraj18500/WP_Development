<?php

// Child Theme CSS File Calling
function m_child_theme(){
    wp_enqueue_style('m-child-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'm_child_theme', PHP_INT_MAX);