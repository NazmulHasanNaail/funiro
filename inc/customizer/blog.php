<?php
//Blog Posts Settings
$wp_customize->add_section('funiro_blog_options',array(
    'title' => __('Blog','funiro'),			
    'priority' => 3,
    'panel' => 	'funiro_panelsettings', 	         
));	

$wp_customize->add_setting( 'funiro_blog_post_column', array(
    'capability'        => 'edit_theme_options',
    'default'           => '1',
    'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control( 'funiro_blog_post_column', array(
    'label'         => esc_html__( 'Blog Post Column', 'funiro' ),
    'description' => esc_html__('This will be apply for Blog Post layout', 'funiro'),
    'section'       => 'funiro_blog_options',
    'type'           => 'select',
    'settings'      => 'funiro_blog_post_column',
    'priority'      => 10,
    'choices'     => array(
        '1'  => esc_html__( '1 Column', 'funiro' ),
        '2'  => esc_html__( '2 Column', 'funiro' ),
        '3'  => esc_html__( '3 Column', 'funiro' ),
        '4'  => esc_html__( '4 Column', 'funiro' ),
    ),
));//Blog Post column
$wp_customize->add_setting( 'funiro_thumbnail_width', array(
    'default'              => 50,
    'type'                 => 'theme_mod',
    'transport' 		   => 'refresh',
    'sanitize_callback'    => 'funiro_sanitize_excerptrange',		
) );

$wp_customize->add_control( 'funiro_thumbnail_width', array(
    'label'       => __( 'Post thumbnail width','funiro' ),
    'description' => esc_html__('This will be apply for Blog Post Thumbnail', 'funiro'),
    'section'     => 'funiro_blog_options',
    'type'        => 'range',
    'settings'    => 'funiro_thumbnail_width','input_attrs' => array(
        'step'             => 1,
        'min'              => 0,
        'max'              => 100,
    ),
) );

$wp_customize->add_setting('funiro_hide_blogdate',array(	
    'sanitize_callback' => 'funiro_sanitize_checkbox',
));	 

$wp_customize->add_control( 'funiro_hide_blogdate', array(
    'label' => __('Check to hide post date','funiro'),	
    'section'   => 'funiro_blog_options', 
    'setting' => 'funiro_hide_blogdate',		
    'type'      => 'checkbox'
)); //Blog Date

$wp_customize->add_setting('funiro_hide_blogadmin',array(
    'sanitize_callback' => 'funiro_sanitize_checkbox',
));	 

$wp_customize->add_control( 'funiro_hide_blogadmin', array(
    'label' => __('Check to hide post category','funiro'),	
    'section'   => 'funiro_blog_options',		
    'setting' => 'funiro_hide_blogadmin',		
    'type'      => 'checkbox'
    )); //blogposts admin	

    $wp_customize->add_setting('funiro_hide_postfeatured_image',array(
    'sanitize_callback' => 'funiro_sanitize_checkbox',
));	 

$wp_customize->add_control( 'funiro_hide_postfeatured_image', array(
    'label' => __('Check to hide post featured image','funiro'),
    'section'   => 'funiro_blog_options',		
    'setting' => 'funiro_hide_postfeatured_image',	
    'type'      => 'checkbox'
    )); //Posts featured image

    $wp_customize->add_setting('funiro_hide_postbutton',array(
    'sanitize_callback' => 'funiro_sanitize_checkbox',
));	 

$wp_customize->add_control( 'funiro_hide_postbutton', array(
    'label' => __('Check to hide blog button','funiro'),
    'section'   => 'funiro_blog_options',		
    'setting' => 'funiro_hide_postbutton',	
    'type'      => 'checkbox'
    )); //Posts Readmore button hide

$wp_customize->add_setting('funiro_postmorebuttontext',array(
    'default' =>__('Readmore','funiro'),
    'sanitize_callback' => 'sanitize_text_field'	
)); //blog read more button text

$wp_customize->add_control('funiro_postmorebuttontext',array(	
    'type' => 'text',
    'label' => __('Read more button text for blog posts','funiro'),
    'section' => 'funiro_blog_options',
    'setting' => 'funiro_postmorebuttontext'
)); //Post read more button text


$wp_customize->add_setting( 'funiro_postexcerptrange', array(
    'default'              => 30,
    'type'                 => 'theme_mod',
    'transport' 		   => 'refresh',
    'sanitize_callback'    => 'funiro_sanitize_excerptrange',		
) );

$wp_customize->add_control( 'funiro_postexcerptrange', array(
    'label'       => __( 'Excerpt length','funiro' ),
    'section'     => 'funiro_blog_options',
    'type'        => 'range',
    'settings'    => 'funiro_postexcerptrange','input_attrs' => array(
        'step'             => 1,
        'min'              => 0,
        'max'              => 50,
    ),
) );//Post excerpt