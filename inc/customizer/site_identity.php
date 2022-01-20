<?php
    $wp_customize->get_section('title_tagline')->priority = 1;
    
    $wp_customize->add_setting('funiro_title_disable', array(
    'default'           => true,
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'funiro_sanitize_checkbox',
    ));
    $wp_customize->add_control('funiro_title_disable', array(
    'label'    => __('Display Site Title', 'amaz-store'),
    'section'  => 'title_tagline',
    'settings' => 'funiro_title_disable',
    'type'       => 'checkbox',
    ));//enabel site title

    $wp_customize->add_setting('funiro_tagline_disable', array(
    'default'           => true,
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'funiro_sanitize_checkbox',
    ));
    $wp_customize->add_control('funiro_tagline_disable', array(
    'label'    => __('Display Tagline', 'amaz-store'),
    'section'  => 'title_tagline',
    'settings' => 'funiro_tagline_disable',
    'type'       => 'checkbox',
    )); //enabel site description
    
    // logo width