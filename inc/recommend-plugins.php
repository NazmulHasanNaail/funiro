<?php
add_action( 'tgmpa_register', 'funiro_register_required_plugins' );
function funiro_register_required_plugins() {

	$plugins = array(

		array(
			'name'         => 'Absolute Swiper', 
			'slug'         => 'absolute-swiper', 
			'source'       => 'https://github.com/NazmulHasanNaail/absolute-swiper/archive/refs/heads/main.zip', 
			'required'     => false, 
			'external_url' => 'https://github.com/NazmulHasanNaail/absolute-swiper/archive/refs/heads/main.zip', 
		),

		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'Woocommerce',
			'slug'      => 'woocommerce',
			'required'  => false,
		),
		array(
			'name'        => 'Mailchimp for WordPress',
			'slug'        => 'mailchimp-for-wp',
			'required'  => false,
		),

	);

	$config = array(
		'id'           => 'funiro',                 
		'default_path' => '',                      
		'menu'         => 'tgmpa-install-plugins', 
		'has_notices'  => true,                    
		'dismissable'  => true,                   
		'dismiss_msg'  => '',                      
		'is_automatic' => false,                   
		'message'      => '',                     
	);

	tgmpa( $plugins, $config );
}
