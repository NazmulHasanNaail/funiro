<?php
function rooms_section( $atts, $content = null ) {
	$services = shortcode_atts( array(
		'show' => '',
		'id' => 0,
		// ...etc
	), $atts );

    $rooms_area_hide = get_theme_mod('funiro_hide_rooms');
    if(empty($rooms_area_hide)):
        $rooms_area_title = get_theme_mod('funiro_rooms_section_title', '50+ Beautiful rooms inspiration');
        $rooms_area_desc = get_theme_mod('funiro_rooms_section_desc', 'Our designer already made a lot of beautiful prototipe of rooms that inspire you');
        $rooms_area_btn_text = get_theme_mod('funiro_rooms_section_btn', 'Explore More');
        $rooms_area_btn_url = get_theme_mod('funiro_rooms_section_btn_link', '#');
        $rooms_area_btn_tab = get_theme_mod('funiro_rooms_section_btn_new_tabl', false);
	ob_start();
	?>
    <!--Rooms area section-->
    <section class="funiro-rooms-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 mb-5">
                    <h2><?php echo esc_html( $rooms_area_title, 'funiro' ); ?></h2>
                    <p><?php echo esc_html( $rooms_area_desc, 'funiro' ); ?></p>
                    <a class="btn funiro-btn" href="<?php echo esc_url($rooms_area_btn_url, 'funiro') ?>" target="<?php echo !empty($rooms_area_btn_tab)? esc_attr('_blank', 'funiro') : esc_attr('_self', 'funiro')?>">
                      <?php echo esc_html( $rooms_area_btn_text, 'funiro' ); ?>
                    </a>
                </div>
                <div class="col-lg-8">
                    <div class="funiro-rooms-slider-wpapper">
                    <!-- Slider main container -->
                    <?php 
                    if ( shortcode_exists( 'absolute_swiper' ) ) {
                        // The  short code exists.
                        echo do_shortcode("[absolute_swiper id=471]");
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<?php
	return ob_get_clean();
    endif;
}