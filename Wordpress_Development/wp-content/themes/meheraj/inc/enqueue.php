<?php

// Theme CSS and jQuery File Calling
function m_css_js_file_calling(){
    wp_enqueue_style('m-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '5.0.2', 'all');
    wp_register_style('owl.carousel.min', get_template_directory_uri().'/css/owl.carousel.min.css', array(), '2.3.4', 'all');
    wp_register_style('owl.theme.default.min', get_template_directory_uri().'/css/owl.theme.default.min.css', array(), '2.3.4', 'all');
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('owl.carousel.min');
    wp_enqueue_style('owl.theme.default.min');
    wp_enqueue_style('custom');

    //jQuery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), '5.0.2', 'true');
    wp_enqueue_script('owl.carousel.min', get_template_directory_uri().'/js/owl.carousel.min.js', array(), '2.3.4', 'true');
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true');

    // Google fonts
    wp_enqueue_style('m_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol:wght@400;500;700&family=Oswald:wght@300;400;500;600;700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'm_css_js_file_calling');