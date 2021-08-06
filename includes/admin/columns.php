<?php

function r_add_new_baraz_columns( $columns ){
    $new_columns                =   [];
    $new_columns['cb']          =   '<input type="checkbox" />';
    $new_columns['title']       =   __( 'Title', 'baraz' );
    $new_columns['author']      =   __( 'Author', 'baraz' );
    $new_columns['categories']  =   __( 'Categories', 'baraz' );
    $new_columns['count']       =   __( 'Ratings count', 'baraz' );
    $new_columns['rating']      =   __( 'Average Rating', 'baraz' );
    $new_columns['date']        =   __( 'Date', 'baraz' );

    return $new_columns;
}

function r_manage_baraz_columns( $column, $post_id ){
    switch( $column ){
        case 'count':
            $baraz_data        =   get_post_meta( $post_id, 'baraz_data', true );
            echo isset($baraz_data['rating_count']) ? $baraz_data['rating_count'] : 0;
            break;
        case 'rating':
            $baraz_data        =   get_post_meta( $post_id, 'baraz_data', true );
            echo isset($baraz_data['rating']) ? $baraz_data['rating'] : 'N/A';
            break;
        default:
            break;
    }
}