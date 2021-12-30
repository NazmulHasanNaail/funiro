<?php
//Fron page blog area settings
$wp_customize->add_section('funiro_front_page_blogs',array(
    'title' => __('Blog','funiro'),			
    'priority' => 1,
    'panel' => 	'funiro_front_page_panel_settings',          
));	

$wp_customize->add_setting('funiro_hide_blogs',array(
    'sanitize_callback' => 'funiro_sanitize_checkbox',
));	 
$wp_customize->add_control( 'funiro_hide_blogs', array(
    'label' => __('Check to hide blogs area','funiro'),
    'section'   => 'funiro_front_page_blogs',		
    'setting' => 'funiro_hide_blogs',	
    'type'      => 'checkbox',
    'priority' => 1,
 )); //Blog section  hide

 $wp_customize->add_setting('funiro_blog_section_title',array(
    'default' =>__('Tips & Tricks','funiro'),
    'sanitize_callback' => 'sanitize_text_field'	
)); 
$wp_customize->add_control('funiro_blog_section_title',array(	
    'type' => 'text',
    'label' => __('Blog Section Title','funiro'),
    'section' => 'funiro_front_page_blogs',
    'setting' => 'funiro_blog_section_title',
    'priority' => 2,
)); //Blog section title text



