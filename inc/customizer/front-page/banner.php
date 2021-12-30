<?php
//Fron page banner area settings
$wp_customize->add_section('funiro_front_page_banner',array(
    'title' => __('Banner','funiro'),			
    'priority' => 1,
    'panel' => 	'funiro_front_page_panel_settings',          
));	

$wp_customize->add_setting('funiro_hide_banner',array(
    'sanitize_callback' => 'funiro_sanitize_checkbox',
));	 
$wp_customize->add_control( 'funiro_hide_banner', array(
    'label' => __('Check to hide rooms area','funiro'),
    'section'   => 'funiro_front_page_banner',		
    'setting' => 'funiro_hide_banner',	
    'type'      => 'checkbox',
    'priority' => 1,
 )); //Rooms section  hide

$wp_customize->add_setting('funiro_banner_section_title',array(
    'default' =>__('High-Quality Furniture Just For You','funiro'),
    'sanitize_callback' => 'sanitize_text_field'	
)); 
$wp_customize->add_control('funiro_banner_section_title',array(	
    'type' => 'text',
    'label' => __('Banner Section Title','funiro'),
    'section' => 'funiro_front_page_banner',
    'setting' => 'funiro_banner_section_title',
    'priority' => 2,
)); //Rooms section title text

$wp_customize->add_setting('funiro_banner_section_desc',array(
    'default' =>__('Our furniture is made from selected and best quality materials that are suitable for your dream home','funiro'),
    'sanitize_callback' => 'sanitize_text_field'	
)); 
$wp_customize->add_control('funiro_banner_section_desc',array(	
    'type' => 'textarea',
    'label' => __('Banner Section Description','funiro'),
    'section' => 'funiro_front_page_banner',
    'setting' => 'funiro_banner_section_desc',
    'priority' => 3,
)); //Rooms section description text

$wp_customize->add_setting( 'funiro_banner_section_btn', array(
    'default'           =>  __('Shop Now', 'funiro'),
    'sanitize_callback' =>  'sanitize_text_field',
));
$wp_customize->add_control('funiro_banner_section_btn', array(
    'label' => esc_html__('Button Text','funiro' ),
    'section' => 'funiro_front_page_banner',
    'setting' => 'funiro_banner_section_btn',
    'type' => 'text',
)); //Rooms section Button Text

$wp_customize->add_setting( 'funiro_banner_section_btn_link', array(
    'default'           =>  __('#', 'funiro'),
    'sanitize_callback' =>  'esc_url_raw',
));
$wp_customize->add_control( 'funiro_banner_section_btn_link', array(
    'label' => esc_html__('Button Link','funiro' ),
    'section' => 'funiro_front_page_banner',
    'setting' => 'funiro_banner_section_btn_link',
    'type' => 'text',
)); //Rooms section Button Link

$wp_customize->add_setting( 'funiro_banner_section_btn_new_tabl', array(
    'default'           =>  false,
    'sanitize_callback' =>  'funiro_sanitize_checkbox',
)); 
$wp_customize->add_control('funiro_banner_section_btn_new_tabl', array(
    'label' => esc_html__('Open link in a new tab','funiro' ),
    'section' => 'funiro_front_page_banner',
    'setting' => 'funiro_banner_section_btn_new_tabl',
    'type'    =>  'checkbox'
));	//Open in new tab
