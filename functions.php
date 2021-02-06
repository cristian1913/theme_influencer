<?php

add_filter('show_admin_bar', '__return_false');

function hide_ping_track_wpse_103502() {
    if( get_post_type() === "post_type" ){
        if( ! current_user_can( 'manage_options' ) ){
            // only for non-admins
            echo "<style>.meta-options label[for=ping_status], #ping_status{display:none !important;} </style>";
        }
    }
}
add_action( 'admin_head-post.php', 'hide_ping_track_wpse_103502' );

?>
