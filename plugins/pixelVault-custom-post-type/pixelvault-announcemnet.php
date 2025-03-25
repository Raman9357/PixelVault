<?php
/*
 * Plugin Name: Announcment Post Type
 */

 add_action( 'init', 'pixelvault_announcement_pt' );

function pixelvault_announcement_pt() {

   $labels = array(

      'name'                     => __( 'Announcements', 'pixelvault' ),
      'singular_name'            => __( 'Announcement', 'pixelvault' ),
      'add_new'                  => __( 'Add New', 'pixelvault' ),
      'add_new_item'             => __( 'Add New Announcement', 'pixelvault' ),
      'edit_item'                => __( 'Edit Announcement', 'pixelvault' ),
      'new_item'                 => __( 'New Announcement', 'pixelvault' ),
      'view_item'                => __( 'View Announcement', 'pixelvault' ),
      'view_items'               => __( 'View Announcements', 'pixelvault' ),
      'search_items'             => __( 'Search Announcements', 'pixelvault' ),
      'not_found'                => __( 'No Announcements found.', 'pixelvault' ),
      'not_found_in_trash'       => __( 'No Announcements found in Trash.', 'pixelvault' ),
      'parent_item_colon'        => __( 'Parent Announcements:', 'pixelvault' ),
      'all_items'                => __( 'All Announcements', 'pixelvault' ),
      'archives'                 => __( 'Announcement Archives', 'pixelvault' ),
      'attributes'               => __( 'Announcement Attributes', 'pixelvault' ),
      'insert_into_item'         => __( 'Insert into Announcement', 'pixelvault' ),
      'uploaded_to_this_item'    => __( 'Uploaded to this Announcement', 'pixelvault' ),
      'featured_image'           => __( 'Featured Image', 'pixelvault' ),
      'set_featured_image'       => __( 'Set featured image', 'pixelvault' ),
      'remove_featured_image'    => __( 'Remove featured image', 'pixelvault' ),
      'use_featured_image'       => __( 'Use as featured image', 'pixelvault' ),
      'menu_name'                => __( 'Announcements', 'pixelvault' ),
      'filter_items_list'        => __( 'Filter Announcement list', 'pixelvault' ),
      'filter_by_date'           => __( 'Filter by date', 'pixelvault' ),
      'items_list_navigation'    => __( 'Announcements list navigation', 'pixelvault' ),
      'items_list'               => __( 'Announcements list', 'pixelvault' ),
      'item_published'           => __( 'Announcement published.', 'pixelvault' ),
      'item_published_privately' => __( 'Announcement published privately.', 'pixelvault' ),
      'item_reverted_to_draft'   => __( 'Announcement reverted to draft.', 'pixelvault' ),
      'item_scheduled'           => __( 'Announcement scheduled.', 'pixelvault' ),
      'item_updated'             => __( 'Announcement updated.', 'pixelvault' ),
      'item_link'                => __( 'Announcement Link', 'pixelvault' ),
      'item_link_description'    => __( 'A link to an announcement.', 'pixelvault' ),

   );

   $args = array(

      'labels'                => $labels,
      'public'                => true,
      'has_archive'           => true,
      'show_in_rest'          => true,
      'menu_icon'             => 'dashicons-megaphone',
      'capability_type'       => 'post',
      'capabilities'          => array(),
      'supports'              => array( 'title', 'editor', 'revisions' ),
      'taxonomies'            => array(),
      'has_archive'           => false,
      'rewrite'               => array( 'slug' => 'cpar_announcement' ),
      'query_var'             => true,
      'can_export'            => true,
      'delete_with_user'      => false,
      'template'              => array(),
      'template_lock'         => false,

   );

   register_post_type( 'pixelvault_announcement_pt', $args );

}