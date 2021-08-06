<?php

function r_filter_baraz_content( $content ){
    if( !is_singular( 'baraz' ) ){
        return $content;
    }

    global $post, $wpdb;
    $baraz_data        =   get_post_meta( $post->ID, 'baraz_data', true );
    $baraz_html        =   file_get_contents( 'baraz-template.php', true );
    $baraz_html        =   str_replace( 'RATE_I18N', __("Rating", "baraz"), $baraz_html );
    $baraz_html        =   str_replace( 'baraz_ID', $post->ID, $baraz_html );
    $baraz_html        =   str_replace( 'baraz_RATING', $baraz_data['rating'], $baraz_html );

    $user_IP            =   $_SERVER['REMOTE_ADDR'];

    $rating_count       =   $wpdb->get_var(
        "SELECT COUNT(*) FROM `" . $wpdb->prefix . "baraz_ratings`
        WHERE baraz_id='" . $post->ID . "' AND user_ip='" . $user_IP . "'"
    );

    if( $rating_count > 0 ){
        $baraz_html    =   str_replace( 
            'READONLY_PLACEHOLDER', 'data-rateit-readonly="true"', $baraz_html 
        );
    }else{
        $baraz_html    =   str_replace( 'READONLY_PLACEHOLDER', '', $baraz_html );
    }

    return $baraz_html . $content;
}