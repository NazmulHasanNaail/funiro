<?php
//Sidebar layout settings
$wp_customize->add_section('funiro_layout_sidebars',array(
    'title' => esc_html__('Sidebar','funiro'),
    'panel' => 'funiro_panelsettings',
    'priority'       => 2,
    ));
    $wp_customize->add_setting('funiro_blog_temp_layout', array(
    'sanitize_callback' => 'sanitize_text_field',
    'default'           => 'rightsidebar',
));
$wp_customize->add_control('funiro_blog_temp_layout', array(
    'type'        => 'select',
    'label'       => esc_html__('Blog Template Layout', 'funiro'),
    'description' => esc_html__('This will be apply for blog template layout', 'funiro'),
    'section'     => 'funiro_layout_sidebars',
    'choices'     => array(
        'rightsidebar' => esc_html__('Right sidebar', 'funiro'),
        'leftsidebar'  => esc_html__('Left sidebar', 'funiro'),
        'fullwidth'    => esc_html__('No sidebar', 'funiro'),
    ),
));//blog sidebar layout

$wp_customize->add_setting('funiro_single_blog_temp_layout', array(
    'sanitize_callback' => 'sanitize_text_field',
    'default'           => 'rightsidebar',
));
$wp_customize->add_control('funiro_single_blog_temp_layout', array(
    'type'        => 'select',
    'label'       => esc_html__('Single Post Template Layout', 'funiro'),
    'description' => esc_html__('This will be apply for single Post template layout', 'funiro'),
    'section'     => 'funiro_layout_sidebars',
    'choices'     => array(
        'rightsidebar' => esc_html__('Right sidebar', 'funiro'),
        'leftsidebar'  => esc_html__('Left sidebar', 'funiro'),
        'fullwidth'    => esc_html__('No sidebar', 'funiro'),
    ),
));//blog single sidebar layout

$wp_customize->add_setting('funiro_page_temp_layout', array(
    'sanitize_callback' => 'sanitize_text_field',
    'default'           => 'rightsidebar',
));
$wp_customize->add_control('funiro_page_temp_layout', array(
    'type'        => 'select',
    'label'       => esc_html__('Page Template Layout', 'funiro'),
    'description' => esc_html__('This will be apply for Page template layout', 'funiro'),
    'section'     => 'funiro_layout_sidebars',
    'choices'     => array(
        'rightsidebar' => esc_html__('Right sidebar', 'funiro'),
        'leftsidebar'  => esc_html__('Left sidebar', 'funiro'),
        'fullwidth'    => esc_html__('No sidebar', 'funiro'),
    ),
));//page sidebar layout

$wp_customize->add_setting('funiro_archive_page_layout', array(
    'sanitize_callback' => 'sanitize_text_field',
    'default'           => 'rightsidebar',
));
$wp_customize->add_control('funiro_archive_page_layout', array(
    'type'        => 'select',
    'label'       => esc_html__('Archive Page Template Layout', 'funiro'),
    'description' => esc_html__('This will be apply for Archive Page template layout', 'funiro'),
    'section'     => 'funiro_layout_sidebars',
    'choices'     => array(
        'rightsidebar' => esc_html__('Right sidebar', 'funiro'),
        'leftsidebar'  => esc_html__('Left sidebar', 'funiro'),
        'fullwidth'    => esc_html__('No sidebar', 'funiro'),
    ),
));//archive page sidebar layout

$wp_customize->add_setting('funiro_search_page_layout', array(
    'sanitize_callback' => 'sanitize_text_field',
    'default'           => 'rightsidebar',
));
$wp_customize->add_control('funiro_search_page_layout', array(
    'type'        => 'select',
    'label'       => esc_html__('Search Page Template Layout', 'funiro'),
    'description' => esc_html__('This will be apply for Search Page template layout', 'funiro'),
    'section'     => 'funiro_layout_sidebars',
    'choices'     => array(
        'rightsidebar' => esc_html__('Right sidebar', 'funiro'),
        'leftsidebar'  => esc_html__('Left sidebar', 'funiro'),
        'fullwidth'    => esc_html__('No sidebar', 'funiro'),
    ),
));//Search page sidebar layout

$wp_customize->add_setting('funiro_shop_page_layout', array(
    'sanitize_callback' => 'sanitize_text_field',
    'default'           => 'fullwidth',
));
$wp_customize->add_control('funiro_shop_page_layout', array(
    'type'        => 'select',
    'label'       => esc_html__('Shop Page Template Layout', 'funiro'),
    'description' => esc_html__('This will be apply for Shop Page template layout', 'funiro'),
    'section'     => 'funiro_layout_sidebars',
    'choices'     => array(
        'rightsidebar' => esc_html__('Right sidebar', 'funiro'),
        'leftsidebar'  => esc_html__('Left sidebar', 'funiro'),
        'fullwidth'    => esc_html__('No sidebar', 'funiro'),
    ),
));//Search page sidebar layout