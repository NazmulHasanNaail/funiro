<?php
//Fron page services area settings

$wp_customize->add_section('funiro_front_page_share_setup',array(
    'title' => __('Share Setup','funiro'),			
    'priority' => 1,
    'panel' => 	'funiro_front_page_panel_settings',          
));

$wp_customize->add_setting('funiro_hide_share_setup',array(
    'sanitize_callback' => 'funiro_sanitize_checkbox',
));	 
$wp_customize->add_control( 'funiro_hide_share_setup', array(
    'label' => __('Check to hide share setup area','funiro'),
    'section'   => 'funiro_front_page_share_setup',		
    'setting' => 'funiro_hide_share_setup',	
    'type'      => 'checkbox',
    'priority' => 1,
 )); //Share setup section  hide


 $wp_customize->add_setting('funiro_share_setup_section_title',array(
    'default' =>__('#FuniroFurniture','funiro'),
    'sanitize_callback' => 'sanitize_text_field'	
)); 
$wp_customize->add_control('funiro_share_setup_section_title',array(	
    'type' => 'text',
    'label' => __('Share Setup  Section Title','funiro'),
    'section' => 'funiro_front_page_share_setup',
    'setting' => 'funiro_share_setup_section_title',
    'priority' => 2,
)); //Share setup section title text

$wp_customize->add_setting('funiro_share_setup_section_sub_title',array(
    'default' =>__('Share your setup with','funiro'),
    'sanitize_callback' => 'sanitize_text_field'	
)); 
$wp_customize->add_control('funiro_share_setup_section_sub_title',array(	
    'type' => 'text',
    'label' => __('Share Setup  Section Sub Title','funiro'),
    'section' => 'funiro_front_page_share_setup',
    'setting' => 'funiro_share_setup_section_sub_title',
    'priority' => 2,
)); //Share setup section sub title text


 if ( class_exists( 'Funiro_Repeater' ) ) {
    $wp_customize->add_setting( 'funiro_share_sutup_item', array(
        'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( new Funiro_Repeater( $wp_customize, 'funiro_share_sutup_item', array(
        'label'                             => esc_html__( 'Share Setup Content', 'funiro' ),
        'section'                           => 'funiro_front_page_share_setup',
        'setting'                           => 'funiro_share_sutup_item',	
        'priority'                          => 10,
        'add_field_label'                   => esc_html__( 'Add new Share Setup', 'funiro' ),
        'item_name'                         => esc_html__( 'Share Setup item', 'funiro' ),
        'customizer_repeater_image_control' => true,
        'customizer_repeater_title_control' => true,
        ) ) );
    }//Share setup items


 //if used
//  for ( $i = 1; $i <= 5; $i++ ) :
	
// 	// gallery posts drop down chooser control and setting
// 	$wp_customize->add_setting( 'funiro_gallery_content_post_'.$i, array(
// 		'sanitize_callback' => 'funiro_sanitize_page',
// 	) );

// 	$wp_customize->add_control( new Funiro_Dropdown_Chooser( $wp_customize, 'funiro_gallery_content_post_'.$i, array(
// 		'label'             => sprintf( esc_html__( 'Select Post %d', 'funiro' ), $i ),
// 		'section'           => 'funiro_front_page_share_setup',
// 		'choices'			=> funiro_post_choices(),
// 	) ) ); 

// endfor;
