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
<main id="primary" class="site-main">
    <div class="container"> 
        <div class="row">
        <div class="col-lg-12">
            <?php woocommerce_content(); ?>
        </div>
        </div>  
    </div><!-- .container --> 
</main><!-- #main -->    
<?php get_footer(); ?>
