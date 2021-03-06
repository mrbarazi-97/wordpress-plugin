<?php

function r_activate_plugin(){
    // 5.8 < 5.0
    if( version_compare( get_bloginfo( 'version' ), '5.0', '<' ) ){
        wp_die( __( "You must update WordPress to use this plugin.", 'baraz' ) );
    }

    global $wpdb;
    $createSQL      =   "
    CREATE TABLE `" . $wpdb->prefix . "baraz_ratings` (
        `ID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        `baraz_id` BIGINT(20) UNSIGNED NOT NULL,
        `rating` FLOAT(3,2) UNSIGNED NOT NULL,
        `user_ip` VARCHAR(50) NOT NULL,
        PRIMARY KEY (`ID`)
    ) ENGINE=InnoDB " . $wpdb->get_charset_collate() . ";";


    require( ABSPATH . "/wp-admin/includes/upgrade.php" );
    dbDelta( $createSQL );
}