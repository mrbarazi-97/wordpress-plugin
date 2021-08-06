<?php

function baraz_init(){
    $labels = array(
        'name'                  => _x( 'baraz', 'Post type general name', 'baraz' ),
        'singular_name'         => _x( 'barazs', 'Post type singular name', 'baraz' ),
        'menu_name'             => _x( 'barazs', 'Admin Menu text', 'baraz' ),
        'name_admin_bar'        => _x( 'barazs', 'Add New on Toolbar', 'baraz' ),
        'add_new'               => __( 'Add New', 'baraz' ),
        'add_new_item'          => __( 'Add New barazs', 'baraz' ),
        'new_item'              => __( 'New barazs', 'baraz' ),
        'edit_item'             => __( 'Edit barazs', 'baraz' ),
        'view_item'             => __( 'View barazs', 'baraz' ),
        'all_items'             => __( 'All barazss', 'baraz' ),
        'search_items'          => __( 'Search barazs', 'baraz' ),
        'parent_item_colon'     => __( 'Parent barazs:', 'baraz' ),
        'not_found'             => __( 'No barazs found.', 'baraz' ),
        'not_found_in_trash'    => __( 'No barazs found in Trash.', 'baraz' ),
        'featured_image'        => _x( 'barazs Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'baraz' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'baraz' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'baraz' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'baraz' ),
        'archives'              => _x( 'barazs archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'baraz' ),
        'insert_into_item'      => _x( 'Insert into barazs', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'baraz' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this barazs', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'baraz' ),
        'filter_items_list'     => _x( 'Filter barazss list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'baraz' ),
        'items_list_navigation' => _x( 'barazs list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'baraz' ),
        'items_list'            => _x( 'barazs list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'baraz' ),
    );
 
    $args                       =   array(
        'labels'                =>  $labels,
        'description'           =>  'A custom post type for barazs',
        'public'                =>  true,
        'publicly_queryable'    =>  true,
        'show_ui'               =>  true,
        'show_in_menu'          =>  true,
        'query_var'             =>  true,
        'rewrite'               =>  array( 'slug' => 'baraz' ),
        'capability_type'       =>  'post',
        'has_archive'           =>  true,
        'hierarchical'          =>  false,
        'menu_position'         =>  20,
        'supports'              =>  [ 'title', 'editor', 'author', 'thumbnail' ],
        'taxonomies'            =>  [ 'category', 'post_tag' ],
        'show_in_rest'          =>  true
    );
 
    register_post_type( 'baraz', $args );
}