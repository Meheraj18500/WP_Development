<?php

// Custome post Function

function custom_services(){
    // Post
    register_post_type('service', array(
        'labels' => array(
            'name' => ('Services'),
            'singular_name' => ('Service'),
            'add_new' => ('Add New Service'),
            'add_new_item' => ('Add New Item'),
            'edit_item' => ('Edit Service'),
            'new_item' => ('New Service'),
            'viw_item' => ('View Service'),
            'not_found' => ('Sorry, We coud\'n find the service you are looking for.')
        ),
        'menu_icon' => 'dashicons-networking',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'has_archiv' => true,
        'hierarchial' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'rewrite' => array('slag' => 'service'),
        'supports' => array('title', 'thumbnail', 'editor', 'comments'),
        'taxonomies' => array('category')
    ));

    // Slider
    register_post_type('slider', array(
        'labels' => array(
            'name' => ('Slider'),
            'singular_name' => ('Slider'),
            'add_new' => ('Add New Slider'),
            'add_new_item' => ('Add New Item'),
            'edit_item' => ('Edit Slider'),
            'new_item' => ('New Slider'),
            'viw_item' => ('View Slider'),
            'not_found' => ('Sorry, We coud\'n find the Slider you are looking for.')
        ),
        'menu_icon' => 'dashicons-slides',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'has_archiv' => true,
        'hierarchial' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'rewrite' => array('slag' => 'slider'),
        'supports' => array('thumbnail')
    ));
}
add_action('init', 'custom_services');

function query_post_type($query){
    if(is_category()) {
        $post_type = get_query_var('post_type');
        if($post_type) {
            $post_type = $post_type;
        } else {
            $post_type = array ('post', 'service');
            $query -> set('post_type', $post_type);
            return $query;
        }
    }
}
add_filter('pre_get_posts', 'query_post_type');