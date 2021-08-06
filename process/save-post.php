<?php

function r_save_post_admin( $post_id, $post, $update ){
    $baraz_data            =   get_post_meta( $post_id, 'baraz_data', true );
    $baraz_data            =   empty($baraz_data) ? [] : $baraz_data;
    $baraz_data['rating']  =   isset($baraz_data['rating']) ? absint($baraz_data['rating'])  : 0;
    $baraz_data['rating_count']  =   isset($baraz_data['rating_count']) ? absint($baraz_data['rating_count'])  : 0;

    update_post_meta( $post_id, 'baraz_data', $baraz_data );
}