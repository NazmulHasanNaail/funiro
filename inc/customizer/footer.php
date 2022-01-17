<?php
//Footer settings
$wp_customize->add_section('funiro_footer_top_settings',array(
    'title' => __('Footer Top','funiro'),			
    'priority' => 10,
    'panel' => 	'funiro_panelsettings',          
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

 $wp_customize->add_setting( 'funiro_footer_widget1_column', array(
    'capability'        => 'edit_theme_options',
    'default'           => '3',
    'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control( 'funiro_footer_widget1_column', array(
    'label'         => esc_html__( 'Footer Widget 1 Column', 'funiro' ),
    'section'       => 'funiro_footer_top_settings',
    'type'           => 'select',
    'settings'      => 'funiro_footer_widget1_column',
    'priority'      => 10,
    'choices'     => array(
        '1'  => esc_html__( 'Col 1', 'funiro' ),
        '2'  => esc_html__( 'Col 2', 'funiro' ),
        '3'  => esc_html__( 'Col 3', 'funiro' ),
        '4'  => esc_html__( 'Col 4', 'funiro' ),
        '5'  => esc_html__( 'Col 5', 'funiro' ),
        '6'  => esc_html__( 'Col 6', 'funiro' ),
    ),
));//Footer widget 1 column

$wp_customize->add_setting( 'funiro_footer_widget2_column', array(
    'capability'        => 'edit_theme_options',
    'default'           => '2',
    'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control( 'funiro_footer_widget2_column', array(
    'label'         => esc_html__( 'Footer Widget 2 Column', 'funiro' ),
    'section'       => 'funiro_footer_top_settings',
    'type'           => 'select',
    'settings'      => 'funiro_footer_widget2_column',
    'priority'      => 10,
    'choices'     => array(
        '1'  => esc_html__( 'Col 1', 'funiro' ),
        '2'  => esc_html__( 'Col 2', 'funiro' ),
        '3'  => esc_html__( 'Col 3', 'funiro' ),
        '4'  => esc_html__( 'Col 4', 'funiro' ),
        '5'  => esc_html__( 'Col 5', 'funiro' ),
        '6'  => esc_html__( 'Col 6', 'funiro' ),
    ),
));//Footer widget 2 column

$wp_customize->add_setting( 'funiro_footer_widget3_column', array(
    'capability'        => 'edit_theme_options',
    'default'           => '2',
    'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control( 'funiro_footer_widget3_column', array(
    'label'         => esc_html__( 'Footer Widget 3 Column', 'funiro' ),
    'section'       => 'funiro_footer_top_settings',
    'type'           => 'select',
    'settings'      => 'funiro_footer_widget3_column',
    'priority'      => 10,
    'choices'     => array(
        '1'  => esc_html__( 'Col 1', 'funiro' ),
        '2'  => esc_html__( 'Col 2', 'funiro' ),
        '3'  => esc_html__( 'Col 3', 'funiro' ),
        '4'  => esc_html__( 'Col 4', 'funiro' ),
        '5'  => esc_html__( 'Col 5', 'funiro' ),
        '6'  => esc_html__( 'Col 6', 'funiro' ),
    ),
));//Footer widget 3 column

$wp_customize->add_setting( 'funiro_footer_widget4_column', array(
    'capability'        => 'edit_theme_options',
    'default'           => '2',
    'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control( 'funiro_footer_widget4_column', array(
    'label'         => esc_html__( 'Footer Widget 4 Column', 'funiro' ),
    'section'       => 'funiro_footer_top_settings',
    'type'           => 'select',
    'settings'      => 'funiro_footer_widget4_column',
    'priority'      => 10,
    'choices'     => array(
        '1'  => esc_html__( 'Col 1', 'funiro' ),
        '2'  => esc_html__( 'Col 2', 'funiro' ),
        '3'  => esc_html__( 'Col 3', 'funiro' ),
        '4'  => esc_html__( 'Col 4', 'funiro' ),
        '5'  => esc_html__( 'Col 5', 'funiro' ),
        '6'  => esc_html__( 'Col 6', 'funiro' ),
    ),
));//Footer widget 4 column

$wp_customize->add_setting( 'funiro_footer_widget5_column', array(
    'capability'        => 'edit_theme_options',
    'default'           => '3',
    'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control( 'funiro_footer_widget5_column', array(
    'label'         => esc_html__( 'Footer Widget 5 Column', 'funiro' ),
    'section'       => 'funiro_footer_top_settings',
    'type'           => 'select',
    'settings'      => 'funiro_footer_widget5_column',
    'priority'      => 10,
    'choices'     => array(
        '1'  => esc_html__( 'Col 1', 'funiro' ),
        '2'  => esc_html__( 'Col 2', 'funiro' ),
        '3'  => esc_html__( 'Col 3', 'funiro' ),
        '4'  => esc_html__( 'Col 4', 'funiro' ),
        '5'  => esc_html__( 'Col 5', 'funiro' ),
        '6'  => esc_html__( 'Col 6', 'funiro' ),
    ),
));//Footer widget 5 column


//copyright section
 $wp_customize->add_section('funiro_footer_copyright_settings',array(
    'title' => __('Copyright','funiro'),			
    'priority' => 20,
    'panel' => 	'funiro_panelsettings',          
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
    'sanitize_callback' => 'sanitize_text_field',
    'default'           => sprintf(__('Proudly powered by %1$s WordPress %3$s', "funiro"),
    '<a href="https://wordpress.org/" target="_blank">',
    '<a href="" target="_blank">',
    '</a>'
),	
)); 
$wp_customize->add_control('funiro_footer_copyright_text',array(	
    'label' => __('Copygiht text','funiro'),
    'section' => 'funiro_footer_copyright_settings',
    'setting' => 'funiro_footer_copyright_text',
    'type' => 'textarea',
    'priority' => 3,
)); //Copyright section text