<?php
/**
 * The WooCommerce template file
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#woocommerce
 * @package  Amaz Store
 * @since 1.0.0
 */
if ( ! class_exists( 'WooCommerce' ) ){
    return;
}
get_header(); ?>
<div class="container">           
			<?php woocommerce_content(); ?>
</div><!-- .container -->     
<?php get_footer(); ?>
