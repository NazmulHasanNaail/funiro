<?php
function blogs_section( $atts, $content = null ) {
	$services = shortcode_atts( array(
		'show' => '',
		'id' => 0,
		// ...etc
	), $atts );

    $blogs_area_hide = get_theme_mod('funiro_hide_blogs');
    if(empty($blogs_area_hide)):
        $blog_area_title = get_theme_mod('funiro_blog_section_title', 'Tips & Tricks');
	ob_start();
	?>
    <!--Blog area section-->
    <section class="funiro-blogs-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="funiro-section-title wow fadeInLeft"><?php echo esc_html( $blog_area_title, 'funiro' ); ?></h2>
                    <div class="funiro-blogs-slider-wpapper wow fadeInUpBig">
                        <!-- Slider main container -->
                        <?php 
                            if ( shortcode_exists( 'absolute_swiper' ) ) {
                                // The  short code exists.
                                echo do_shortcode('[absolute_swiper id=472]');
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