<?php
/**
 * Funiro Theme Customizer
 *
 * @package Funiro
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function funiro_customize_register( $wp_customize ) {

	function funiro_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}
	
	function funiro_sanitize_excerptrange( $number, $setting ) {	
		// Ensure input is an absolute integer.
		$number = absint( $number );	
		// Get the input attributes associated with the setting.
		$atts = $setting->manager->get_control( $setting->id )->input_attrs;	
		// Get minimum number in the range.
		$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );	
		// Get maximum number in the range.
		$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );	
		// Get step.
		$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );	
		// If the number is within the valid range, return it; otherwise, return the default
		return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
	}


	function funiro_sanitize_page( $input ) {

		// Ensure $input is an absolute integer.
		$page_id = absint( $input );

		// If $page_id is an ID of a published page, return it; otherwise, return false
		return ( 'publish' == get_post_status( $page_id ) ? $page_id : false );
	
	}

	
	function funiro_post_choices() {
		$posts = get_posts( array( 'numberposts' => -1 ) );
		$choices = array();
		$choices[0] = esc_html__( '--Select--', 'funiro' );
		foreach ( $posts as $post ) {
			$choices[ $post->ID ] = $post->post_title;
		}
		return  $choices;
	}

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';//it wilbe removed

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'funiro_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'funiro_customize_partial_blogdescription',
			)
		);
	}

		 //Panel for Theme Settings
		 $wp_customize->add_panel( 'funiro_panelsettings', array(
			'priority' => 4,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Funiro Theme Settings', 'funiro' ),		
		) );

		//layout settings
		$wp_customize->add_section('funiro_layoutstyle',array(
			'title' => __('Layout','funiro'),			
			'priority' => 1,
			'panel' => 	'funiro_panelsettings',          
		));		
		
		$wp_customize->add_setting('funiro_layoutoption',array(
			'sanitize_callback' => 'funiro_sanitize_checkbox',
		));	 
	
		$wp_customize->add_control( 'funiro_layoutoption', array(
			'section'   => 'funiro_layoutstyle',    	 
			'label' => __('Check to Show Box Layout','funiro'),
			'description' => __('check for box layout','funiro'),
			'type'      => 'checkbox'
		 )); //Box Layout Options 

		 $wp_customize->add_section('funiro_header_tstyle',array(
			'title' => __('Header','funiro'),			
			'priority' => 1,
			'panel' => 	'funiro_panelsettings',          
		));		
		
		$wp_customize->add_setting('funiro_header_tstyle',array(
			'sanitize_callback' => 'funiro_sanitize_checkbox',
			'default'           => true,
		));	 
	
		$wp_customize->add_control( 'funiro_header_tstyle', array(
			'section'   => 'funiro_header_tstyle',    	 
			'label' => __('Check to sticky header','funiro'),
			'description' => __('active check box for sticky header','funiro'),
			'type'      => 'checkbox'
		 )); //hader sticky Options 


		//==Front page Pannel==
		$wp_customize->add_panel( 'funiro_front_page_panel_settings', array(
			'priority' => 4,
			'capability' => 'edit_theme_options',
			'theme_supports' => '',
			'title' => __( 'Funiro Front Page Settings', 'funiro' ),		
		) );



		class Funiro_Dropdown_Chooser extends WP_Customize_Control{

			public $type = 'dropdown_chooser';
	
			public function render_content(){
				if ( empty( $this->choices ) )
						return;
				?>
					<label>
						<span class="customize-control-title">
							<?php echo esc_html( $this->label ); ?>
						</span>
	
						<?php if($this->description){ ?>
						<span class="description customize-control-description">
							<?php echo wp_kses_post($this->description); ?>
						</span>
						<?php } ?>
	
						<select class="camera-store-chosen-select" <?php $this->link(); ?>>
							<?php
							foreach ( $this->choices as $value => $label )
								echo '<option value="' . esc_attr( $value ) . '"' . selected( $this->value(), $value, false ) . '>' . esc_html( $label ) . '</option>';
							?>
						</select>
					</label>
				<?php
			}
		}
		require ( FUNIRO_TEMPLATE_DIR . '/inc/customizer/front-page/banner.php');
		require ( FUNIRO_TEMPLATE_DIR . '/inc/customizer/front-page/services.php');
		require ( FUNIRO_TEMPLATE_DIR . '/inc/customizer/front-page/products.php');
		require ( FUNIRO_TEMPLATE_DIR . '/inc/customizer/front-page/rooms.php');
		require ( FUNIRO_TEMPLATE_DIR . '/inc/customizer/front-page/blogs.php');
		require ( FUNIRO_TEMPLATE_DIR . '/inc/customizer/front-page/share_setup.php');
		require ( FUNIRO_TEMPLATE_DIR . '/inc/customizer/site_identity.php');
		require ( FUNIRO_TEMPLATE_DIR . '/inc/customizer/blog.php');
		require ( FUNIRO_TEMPLATE_DIR . '/inc/customizer/sidebar.php');
		require ( FUNIRO_TEMPLATE_DIR . '/inc/customizer/custom-style.php');
		require ( FUNIRO_TEMPLATE_DIR . '/inc/customizer/footer.php');

	

}
add_action( 'customize_register', 'funiro_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function funiro_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function funiro_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function funiro_customize_preview_js() {
	wp_enqueue_script( 'funiro-customizer', FUNIRO_TEMPLATE_DIR_URI . '/assets/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'funiro_customize_preview_js' );
