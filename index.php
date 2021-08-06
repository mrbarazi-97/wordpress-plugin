<?php
/*
 * Plugin Name: Baraz
 * Description: A simple WordPress plugin for my resume
 * Version: 0.0.1
 * Author: Mohammad Mirzaee Barazi
 * Author URI: https://Baraz.com
 * Text Domain: Baraz
 */

if( !function_exists( 'add_action' ) ){
    echo "Hi there! I'm just a plugin, not much I can do when called directly.";
    exit;
}

// Setup
define( 'BARAZ_PLUGIN_URL', __FILE__ );

// Includes
include( 'includes/activate.php' );
include( 'includes/init.php' );
include( 'process/save-post.php' );
include( 'process/filter-content.php' );
include( 'includes/front/enqueue.php' );
include( 'process/rate-baraz.php' );
include( 'includes/admin/init.php' );

// Hooks
register_activation_hook( __FILE__, 'r_activate_plugin' );
add_action( 'init', 'baraz_init' );
add_action( 'save_post_baraz', 'r_save_post_admin', 10, 3 );
add_filter( 'the_content', 'r_filter_baraz_content' );
add_action( 'wp_enqueue_scripts', 'r_enqueue_scripts', 100 );
add_action( 'wp_ajax_r_rate_baraz', 'r_rate_baraz' );
add_action( 'wp_ajax_nopriv_r_rate_baraz', 'r_rate_baraz' );
add_action( 'admin_init', 'baraz_admin_init' );

// Shortcodes
