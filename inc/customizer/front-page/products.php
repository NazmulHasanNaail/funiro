<?php
//Fron page Products area settings
$wp_customize->add_section('funiro_front_page_products',array(
    'title' => __('Products','funiro'),			
    'priority' => 1,
    'panel' => 	'funiro_front_page_panel_settings',          
));	

$wp_customize->add_setting('funiro_hide_products',array(
    'sanitize_callback' => 'funiro_sanitize_checkbox',
));	 
$wp_customize->add_control( 'funiro_hide_products', array(
    'label' => __('Check to hide products area','funiro'),
    'section'   => 'funiro_front_page_products',		
    'setting' => 'funiro_hide_products',	
    'type'      => 'checkbox',
    'priority' => 1,
 )); //Products section  hide

$wp_customize->add_setting('funiro_products_section_title',array(
    'default' =>__('Our Products','funiro'),
    'sanitize_callback' => 'sanitize_text_field'	
)); 
$wp_customize->add_control('funiro_products_section_title',array(	
    'type' => 'text',
    'label' => __('Products Section Title','funiro'),
    'section' => 'funiro_front_page_products',
    'setting' => 'funiro_products_section_title'
)); //Products section title text

$wp_customize->add_setting('funiro_products_section_columns',array(
    'default' => 4,
    'sanitize_callback' => 'absint'	
)); 
$wp_customize->add_control('funiro_products_section_columns',array(	
    'type' => 'number',
    'label' => __('Products Column','funiro'),
    'section' => 'funiro_front_page_products',
    'setting' => 'funiro_products_section_columns'
)); //Products section columns

$wp_customize->add_setting('funiro_products_section_limit',array(
    'default' => 8,
    'sanitize_callback' => 'absint'	
)); 
$wp_customize->add_control('funiro_products_section_limit',array(	
    'type' => 'number',
    'label' => __('Products limit','funiro'),
    'section' => 'funiro_front_page_products',
    'setting' => 'funiro_products_section_limit'
)); //Products section product limit

$wp_customize->add_setting( 'funiro_products_section_btn', array(
    'default'           =>  __('Show More', 'funiro'),
    'sanitize_callback' =>  'sanitize_text_field',
));
$wp_customize->add_control('funiro_products_section_btn', array(
    'label' => esc_html__('Button Text','funiro' ),
    'section' => 'funiro_front_page_products',
    'setting' => 'funiro_products_section_btn',
    'type' => 'text',
)); //products section Button Text

$wp_customize->add_setting( 'funiro_products_section_btn_link', array(
    'default'           =>  __('#', 'funiro'),
    'sanitize_callback' =>  'esc_url_raw',
));
$wp_customize->add_control( 'funiro_products_section_btn_link', array(
    'label' => esc_html__('Button Link','funiro' ),
    'section' => 'funiro_front_page_products',
    'setting' => 'funiro_products_section_btn_link',
    'type' => 'text',
)); //products section Button Link

$wp_customize->add_setting( 'funiro_products_section_btn_new_tabl', array(
    'default'           =>  false,
    'sanitize_callback' =>  'funiro_sanitize_checkbox',
)); 
$wp_customize->add_control('funiro_products_section_btn_new_tabl', array(
    'label' => esc_html__('Open link in a new tab','funiro' ),
    'section' => 'funiro_front_page_products',
    'setting' => 'funiro_products_section_btn_new_tabl',
    'type'    =>  'checkbox'
));	//Open in new tab
