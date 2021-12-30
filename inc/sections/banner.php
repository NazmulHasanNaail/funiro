<?php
function banner_section( $atts, $content = null ) {
	$services = shortcode_atts( array(
		'show' => '',
		'id' => 0,
		// ...etc
	), $atts );


    $banner_area_hide = get_theme_mod('funiro_hide_banner');
    if(empty($banner_area_hide)):
        $banner_area_title = get_theme_mod('funiro_banner_section_title', 'High-Quality Furniture Just For You');
        $banner_area_desc = get_theme_mod('funiro_banner_section_desc', 'Our furniture is made from selected and best quality materials that are suitable for your dream home');
        $banner_area_btn_text = get_theme_mod('funiro_banner_section_btn', 'Shop Now');
        $banner_area_btn_url = get_theme_mod('funiro_banner_section_btn_link', '#');
        $banner_area_btn_tab = get_theme_mod('funiro_banner_section_btn_new_tabl', false);

	ob_start();
	?>
    <!--Banner area section-->
    <section class="funiro-banner-area">
    <i class="bi bi-arrow-left"></i>
        <div class="hero-content-area">
            <div class="container">
                <div class="hero-contet-box">
                    <h1><?php echo esc_html( $banner_area_title, 'funiro' ); ?></h1>
                    <p><?php echo esc_html( $banner_area_desc, 'funiro' ); ?></p>
                    <a class="btn funiro-btn" href="<?php echo esc_url($banner_area_btn_url, 'funiro') ?>" target="<?php echo !empty($banner_area_btn_tab)? esc_attr('_blank', 'funiro') : esc_attr('_self', 'funiro')?>">
                      <?php echo esc_html( $banner_area_btn_text, 'funiro' ); ?>
                    </a>
                </div>
            </div>
        </div>
        <!-- Slider main container -->
        <?php 
            if ( shortcode_exists( 'absolute_swiper' ) ) {
                // The  short code exists.
                echo do_shortcode('[absolute_swiper id=470]');
            }
            
        ?>
    </section>

	<?php
	return ob_get_clean();
    endif;
}