<?php

/**
 * Give a personalized message for logged in users and a generic one for anonymous visitors
 */
function wpdocs_personal_message_when_logged_in() {
    if ( is_user_logged_in() ) {
        $current_user = wp_get_current_user();
        // printf( 'Personal Message For %s!', esc_html( $current_user->user_firstname ) );
    } else {
      ?>

      <div class="registro_login">
        <div class="elcontenido_">
          <div class="invitando_">
            <i class="fas fa-user-shield"></i>
            <h2>¡Accede ilimitadamente a todo mi contenido privado!</h2>
            <p>Suscríbete a mi contenido por un precio increíble. </p>
          </div>
        </div>
        <div class="quienes_">
          <div class="boton_login_registro">
            <a href="<?php echo get_home_url(); ?>/registro/" class="registro_blok">Registro</a>
            <h5><a href="<?php echo get_home_url(); ?>/login/">¿Tienes cuenta? Inicia sección aquí</a></h5>
          </div>
        </div>
      </div><br><br><br>

      <meta http-equiv='refresh' content='22; url=<?php echo get_home_url(); ?>/login/'>

      <?php
      exit;
    }
}
add_action( 'loop_start', 'wpdocs_personal_message_when_logged_in' );



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
