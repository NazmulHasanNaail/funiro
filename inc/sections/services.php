<?php
function services_section( $atts, $content = null ) {
	$services = shortcode_atts( array(
		'show' => ' ',
		'id' => 0,
		// ...etc
	), $atts );

    $services_area_hide = get_theme_mod('funiro_hide_services');
	$services = get_theme_mod('funiro_services_item');
	$services_array = json_decode($services);
	
	if(!empty($services_array) && empty($services_area_hide)):
	ob_start();
	?>
	<!--Services area section-->
	<section class="funiro-services-area">
		<div class="container">
			<div class="row">
			<?php  
			foreach($services_array  as $value){
				$icon = $value->icon_value;
				$img_url = $value->image_url;
				$choice = $value->choice;
				$title = $value->title;
				$desc = $value->text;
			?>
				<div class="col-lg-3 col-md-6  wow fadeInDown">
					<div class="funiro-service-item d-flex">
						<?php if( !empty($choice) && $choice !== 'customizer_repeater_none'): ?>
						<div class="funiro-service-icon">
							<?php 
							if( $choice == 'customizer_repeater_icon' && !empty($icon)){
								?>
								<i class="fab <?php echo esc_attr($icon, 'funiro'); ?>"></i>
								<?php
							}
							if( $choice == 'customizer_repeater_image' && !empty($img_url)){
								?>
								<img src="<?php echo esc_url($img_url, 'funiro');; ?>" alt="services" >
								<?php
								
							}
							?>
						</div>
						<?php endif; ?>
						<div class="funiro-service-content">
							<span class="service-title"><?php echo esc_html($title, 'funiro') ?></span>
							<p><?php echo esc_html($desc, 'funiro') ?></p>
						</div>
					</div>
				</div>
			<?php
			}
			?>

			</div>
		</div>
	</section>
	<?php
	return ob_get_clean();
	endif;
}