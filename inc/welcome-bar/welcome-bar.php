<?php
/**
 * Add admin notice when active theme, just show one time
 *
 * @return bool|null
 */
add_action( 'admin_notices', 'funiro_started_admin_notice' );

function funiro_started_admin_notice() {
  global $current_user;
  $user_id   = $current_user->ID;
  $theme_data  = wp_get_theme();
  if ( !get_user_meta( $user_id, esc_html( $theme_data->get( 'TextDomain' ) ) . '_notice_ignore' ) ) {
    ?>
    <div class="notice thank-notice">

      <h1>
        <?php
        /* translators: %1$s: theme name, %2$s theme version */
        printf( esc_html__( 'Welcome to %1$s - Version %2$s', 'funiro' ), esc_html( $theme_data->Name ), esc_html( $theme_data->Version ) );
        ?>
      </h1>
      <p>
        <?php
        /* translators: %1$s: theme name*/
        printf( __( 'Welcome! Thank you for choosing %1$s!', 'funiro' ), esc_html( $theme_data->Name ) );
        printf( '<a href="%1$s" class="notice-dismiss dashicons dashicons-dismiss dashicons-dismiss-icon"></a>', '?' . esc_html( $theme_data->get( 'TextDomain' ) ) . '_notice_ignore=0' );
        ?>
      </p>
      <p>
        download demo data <a href="https://github.com/NazmulHasanNaail/funiro-demo/archive/refs/heads/main.zip">click here</a>
      </p>
    </div>
    <?php
  }
}

add_action( 'admin_init', 'funiro_started_notice_ignore' );
function funiro_started_notice_ignore() {
  global $current_user;
  $theme_data  = wp_get_theme();
  $user_id   = $current_user->ID;
  /* If user clicks to ignore the notice, add that to their user meta */
  if ( isset( $_GET[ esc_html( $theme_data->get( 'TextDomain' ) ) . '_notice_ignore' ] ) && '0' == $_GET[ esc_html( $theme_data->get( 'TextDomain' ) ) . '_notice_ignore' ] ) {
    add_user_meta( $user_id, esc_html( $theme_data->get( 'TextDomain' ) ) . '_notice_ignore', 'true', true );
  }
}
if (!function_exists('funiro_admin_enqueue_scripts')) {
function funiro_admin_enqueue_scripts(){
  wp_enqueue_style( 'thank-admin-css', get_template_directory_uri() . '/inc/welcome-bar/admin.css' );
}
}
add_action( 'admin_enqueue_scripts', 'funiro_admin_enqueue_scripts');
?>