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
        <?php 
			$woocommerce_temp_layout =  get_theme_mod('funiro_shop_page_layout', esc_html('fullwidth', 'funiro'));
			if($woocommerce_temp_layout == 'leftsidebar'){
				?>
				<div class="col-lg-4">
					<?php
					get_sidebar();
					?>
				</div><!--sidebar-->
				<?php
			}
			if($woocommerce_temp_layout == 'fullwidth'){
				$col = 12;
			}else{
				$col = 8;
			}
			?>
            <div class="col-lg-<?php echo esc_attr($col) ?>">
                <?php woocommerce_content(); ?>
            </div>

            <?php 
			if($woocommerce_temp_layout == 'rightsidebar'){
			?>
			<div class="col-lg-4">
                <?php
                if ( ! is_active_sidebar( 'woocommerce' ) ) {
                    return;
                } 
                dynamic_sidebar('woocommerce'); ?>
			</div><!--sidebar-->
			<?php
			}
			?>
        </div>  
    </div><!-- .container --> 
</main><!-- #main -->    
<?php get_footer(); ?>
