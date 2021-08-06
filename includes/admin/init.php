<?php

function baraz_admin_init(){
    include( 'columns.php' );

    add_filter( 'manage_baraz_posts_columns', 'r_add_new_baraz_columns' );
    add_action( 'manage_baraz_posts_custom_column', 'r_manage_baraz_columns', 10, 2 );
}