<?php
function wc_products_section( $atts, $content = null ) {
	$services = shortcode_atts( array(
		'show' => '',
		'id' => 0,
		// ...etc
	), $atts );

    $products_area_hide = get_theme_mod('funiro_hide_products');
    if(empty($products_area_hide)):
        $products_area_title = get_theme_mod('funiro_products_section_title', 'Our Products');
        $products_column = get_theme_mod('funiro_products_section_columns', 4);
        $products_limit = get_theme_mod('funiro_products_section_limit', 8);
        $products_area_btn_text = get_theme_mod('funiro_products_section_btn', 'Show More');
        $products_area_btn_url = get_theme_mod('funiro_products_section_btn_link', '#');
        $products_area_btn_tab = get_theme_mod('funiro_products_section_btn_new_tabl', false);
	ob_start();
	?>
    <!--Products area section-->
    <section class="funiro-products-area">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInLeft">
                    <h2 class="funiro-section-title"><?php echo esc_html($products_area_title, 'funiro'); ?></h2>
                    <div class="funiro-products-wpapper wow fadeInUp">
                    <?php echo do_shortcode('[products limit="'.$products_limit.'" columns="'.$products_column.'"  ]'); ?>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInRight">
                    <a class="btn funiro-btn-outline" href="<?php echo esc_url($products_area_btn_url, 'funiro') ?>" target="<?php echo !empty($products_area_btn_tab)? esc_attr('_blank', 'funiro') : esc_attr('_self', 'funiro')?>">
                        <?php echo esc_html( $products_area_btn_text, 'funiro' ); ?>
                    </a>
                 </div>
            </div>
        </div>
    </section>
	<?php
	return ob_get_clean();
    endif;
}