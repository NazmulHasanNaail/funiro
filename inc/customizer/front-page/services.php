<?php
//Fron page services area settings

$wp_customize->add_section('funiro_front_page_services',array(
    'title' => __('Services','funiro'),			
    'priority' => 1,
    'panel' => 	'funiro_front_page_panel_settings',          
));

$wp_customize->add_setting('funiro_hide_services',array(
    'sanitize_callback' => 'funiro_sanitize_checkbox',
));	 
$wp_customize->add_control( 'funiro_hide_services', array(
    'label' => __('Check to hide services area','funiro'),
    'section'   => 'funiro_front_page_services',		
    'setting' => 'funiro_hide_services',	
    'type'      => 'checkbox',
    'priority' => 1,
 )); //Services section  hide


$wp_customize->add_setting( 'funiro_services_item', array(
    'sanitize_callback' => 'customizer_repeater_sanitize'
));
$wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'funiro_services_item',[
    'label'   => esc_html__('Service Item','funiro'),
    'section' => 'funiro_front_page_services',
    'settings' => 'funiro_services_item',
    'priority' => 1,
    'customizer_repeater_image_control' => true,
	'customizer_repeater_icon_control' => true,
	'customizer_repeater_title_control' => true,
	'customizer_repeater_text_control' => true,
] ) );

