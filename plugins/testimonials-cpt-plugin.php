<?php
/*
Plugin Name: Testimonials CPT Plugin
Author: Ramandeep Singh
*/

function create_testimonials_cpt() {

    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post Type General Name', 'textdomain' ),
        'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'textdomain' ),
        'menu_name'             => __( 'Testimonials', 'textdomain' ),
        'name_admin_bar'        => __( 'Testimonial', 'textdomain' ),
        'archives'              => __( 'Testimonial Archives', 'textdomain' ),
        'attributes'            => __( 'Testimonial Attributes', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Testimonial:', 'textdomain' ),
        'all_items'             => __( 'All Testimonials', 'textdomain' ),
        'add_new_item'          => __( 'Add New Testimonial', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'new_item'              => __( 'New Testimonial', 'textdomain' ),
        'edit_item'             => __( 'Edit Testimonial', 'textdomain' ),
        'update_item'           => __( 'Update Testimonial', 'textdomain' ),
        'view_item'             => __( 'View Testimonial', 'textdomain' ),
        'view_items'            => __( 'View Testimonials', 'textdomain' ),
        'search_items'          => __( 'Search Testimonial', 'textdomain' ),
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
        'show_in_rest'          => true, 
    );

    register_post_type( 'testimonials', $args );
}

add_action( 'init', 'create_testimonials_cpt', 0 );
