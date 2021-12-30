<?php
//Footer settings
$wp_customize->add_section('funiro_footer_top_settings',array(
    'title' => __('Footer Top','funiro'),			
    'priority' => 1,
    'panel' => 	'funiro_footer_panel_settings',          
));	

$wp_customize->add_setting('funiro_hide_footer_top',array(
    'sanitize_callback' => 'funiro_sanitize_checkbox',
));	 
$wp_customize->add_control( 'funiro_hide_footer_top', array(
    'label' => __('Check to hide footer top area','funiro'),
    'section'   => 'funiro_footer_top_settings',		
    'setting' => 'funiro_hide_footer_top',	
    'type'      => 'checkbox',
    'priority' => 1,
 )); //Footer top section  hide
 

//copyright section
 $wp_customize->add_section('funiro_footer_copyright_settings',array(
    'title' => __('Copyright','funiro'),			
    'priority' => 2,
    'panel' => 	'funiro_footer_panel_settings',          
));	

$wp_customize->add_setting('funiro_hide_footer_copyright',array(
    'sanitize_callback' => 'funiro_sanitize_checkbox',
    'default' => true,
));	 
$wp_customize->add_control( 'funiro_hide_footer_copyright', array(
    'label' => __('Check to hide Copyright','funiro'),
    'section'   => 'funiro_footer_copyright_settings',		
    'setting' => 'funiro_hide_footer_copyright',	
    'type'      => 'checkbox',
    'priority' => 1,
 )); //Copyright section  hide

 $wp_customize->add_setting('funiro_footer_copyright_text',array(
    'default' =>__('&copy; 2021 Namul hasan, All right reserved.','funiro'),
    'sanitize_callback' => 'sanitize_text_field'	
)); 
$wp_customize->add_control('funiro_footer_copyright_text',array(	
    'type' => 'textarea',
    'label' => __('Copygiht text','funiro'),
    'section' => 'funiro_footer_copyright_settings',
    'setting' => 'funiro_footer_copyright_text',
    'priority' => 3,
)); //Copyright section text