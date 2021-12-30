<?php 
function funiro_scripts() {
    $suffix = ( defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ) ? '' : '.min';
   //css file
   wp_enqueue_style('fontawesome', FUNIRO_TEMPLATE_DIR_URI . '/assets/css/fontawesome-all' . $suffix . '.css', array(), '5.0.2');
    wp_enqueue_style('bootstrap', FUNIRO_TEMPLATE_DIR_URI . '/assets/css/bootstrap' . $suffix . '.css', array(), '5.0.2');
    wp_style_add_data('bootstrap', 'rtl', 'replace');
    wp_enqueue_style('animate', FUNIRO_TEMPLATE_DIR_URI . '/assets/css/animate' . $suffix . '.css', array(), '5.0.2');

	wp_enqueue_style( 'funiro-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'funiro-style', 'rtl', 'replace' );


    //js file
    wp_enqueue_script('bootstrap', FUNIRO_TEMPLATE_DIR_URI . '/assets/js/bootstrap.bundle' . $suffix . '.js', array('jquery'), '', true);
    wp_enqueue_script('funiro', FUNIRO_TEMPLATE_DIR_URI . '/assets/js/custom.js', array('jquery'), '', true);

	wp_enqueue_script( 'funiro-navigation', FUNIRO_TEMPLATE_DIR_URI . '/assets/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'funiro_scripts' );