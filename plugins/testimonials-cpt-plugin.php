<?php
/*
Plugin Name: Testimonials CPT Plugin
Author: Ramandeep Singh
*/


function create_testimonials_cpt() {

    $labels = array(
        $args = array(
    'label'                 => __( 'Testimonial', 'textdomain' ),
    'description'           => __( 'Post Type for Testimonials', 'textdomain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-format-quote',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
    'rewrite'               => array( 'slug' => 'testimonials' ),
    'show_in_rest'          => true,
);

    );
    
    $args = array(
        'label'                 => __( 'Testimonial', 'textdomain' ),
        'description'           => __( 'Post Type for Testimonials', 'textdomain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-format-quote',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'rewrite'               => array( 'slug' => 'testimonials' ),
    );
    
    register_post_type( 'testimonials', $args );
}


add_action( 'init', 'create_testimonials_cpt', 0 );
