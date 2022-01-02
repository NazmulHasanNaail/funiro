<?php
function share_setup_section( $atts, $content = null ) {
	$services = shortcode_atts( array(
		'show' => '',
		'id' => 0,
		// ...etc
	), $atts );

    $share_setup_hide = get_theme_mod('funiro_hide_share_setup');
    if(empty($share_setup_hide)):
        $share_setup_area_title = get_theme_mod('funiro_share_setup_section_title', '#FuniroFurniture');
        $share_setup_area_sub_title = get_theme_mod('funiro_share_setup_section_sub_title', 'Share your setup with');
        $share_setup_items = get_theme_mod('funiro_share_sutup_item');


        $share_setup_items_array = json_decode($share_setup_items);
	ob_start();
	?>
    <!--Share_setup area section-->
<section class="funiro-gallery-area">
    <span class="funiro-section-sub-title"><?php echo esc_html( $share_setup_area_sub_title, 'funiro') ?></span>
    <h2 class="funiro-section-title"><?php echo esc_html( $share_setup_area_title, 'funiro') ?></h2>


    <?php if(!empty($share_setup_items_array)): ?>
    <div class="funiro-gallery-grid">
        <?php 
			foreach($share_setup_items_array  as $value){
				$img_url = $value->image_url;
				$title = $value->title;

                
			?>
        <div class="wow fadeInUp gallery-item">
          <a href="<?php echo esc_url($img_url); ?>" data-fancybox="gallery">
            <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($title); ?>">
          </a>
        </div>

        <?php ; } ?>
    </div>
   <?php endif; ?>
</section>

	<?php
	return ob_get_clean();
    endif;
}