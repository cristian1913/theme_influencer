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



/**
 * Register a custom menu page.
 */
function wpdocs_register_my_custom_menu_page(){
    add_menu_page(
        __( 'Custom Menu Title', 'textdomain' ),
        'Pagos',
        'manage_options',
        'pagina_pagos',
        'my_custom_menu_page',
    );
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );

/**
 * Display a custom menu page
 */
function my_custom_menu_page(){
    // esc_html_e( 'Admin Page Test', 'textdomain' );
    include ('admin_pages/pagos.php');
}

function valor_membresias_page(){
    add_menu_page(
        __( 'Valor de memberias', 'textdomain' ),
        'Valor Membresia',
        'manage_options',
        'pagina_pagos-membresia',
        'my_custom_menu_page2',
    );
}
add_action( 'admin_menu', 'valor_membresias_page' );
function my_custom_menu_page2(){
    // esc_html_e( 'Admin Page Test', 'textdomain' );
    include ('admin_pages/valor_membresia.php');
}



function ingresos_diarios_(){
    add_menu_page(
        __( 'Ingresos diarios', 'textdomain' ),
        'Ingresos diarios',
        'manage_options',
        'ingresos_diarios',
        'my_ingresosdiarios',
    );
}
add_action( 'admin_menu', 'ingresos_diarios_' );
function my_ingresosdiarios(){
    // esc_html_e( 'Admin Page Test', 'textdomain' );
    include ('admin_pages/ingresos_diarios.php');
}

?>
