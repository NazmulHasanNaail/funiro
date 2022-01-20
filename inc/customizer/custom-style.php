<?php
//layout settings
$wp_customize->add_section('funiro_custom_tstyle',array(
    'title' => __('color','funiro'),			
    'priority' => 1,
    'panel' => 	'funiro_panelsettings',          
));		

$wp_customize->add_setting( 'funiro_primary_color', array(
      'default' => '#e89f71',
      'sanitize_callback' => 'sanitize_hex_color'
));
 
$wp_customize->add_control( 'funiro_primary_color', array(
      'label' => __( 'Primary Color', 'funiro'),
      'description' => esc_html__( 'This color will apply as theme primary color','funiro' ),
      'section' => 'funiro_custom_tstyle',
      'priority' => 10, 
      'type' => 'color',
      'capability' => 'edit_theme_options',
));//theme primary color

$wp_customize->add_setting( 'funiro_heading_color', array(
    'default' => '#3a3a3a',
    'sanitize_callback' => 'sanitize_hex_color'
));

$wp_customize->add_control( 'funiro_heading_color', array(
    'label' => __( 'Heading Color' , 'funiro'),
    'description' => esc_html__( 'This color will apply on  theme heading', 'funiro' ),
    'section' => 'funiro_custom_tstyle',
    'priority' => 10, 
    'type' => 'color',
    'capability' => 'edit_theme_options',
));//theme heading color

$wp_customize->add_setting( 'funiro_body_color', array(
    'default' => '#898989',
    'sanitize_callback' => 'sanitize_hex_color'
));

$wp_customize->add_control( 'funiro_body_color', array(
    'label' => __( 'Body Text Color' , 'funiro'),
    'description' => esc_html__( 'This color will apply on  theme body text', 'funiro' ),
    'section' => 'funiro_custom_tstyle',
    'priority' => 10, 
    'type' => 'color',
    'capability' => 'edit_theme_options',
));//theme body color
