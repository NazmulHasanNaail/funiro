<?php

add_action('widgets_init', 'funiro_widgets_init');

function funiro_widgets_init() {

    /* sidebar */

    register_sidebar(array(
        'name' => esc_html__('Sidebar widget area', 'funiro' ),
        'id' => 'sidebar-1',
        'description' => esc_html__('Sidebar widget area', 'funiro' ),
        'before_widget' => '<aside id="%1$s" class="wow fadeInUp widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer widget 1', 'funiro' ),
        'id' => 'footer-sidebar-1',
        'description' => esc_html__('Footer widget area 1', 'funiro' ),
        'before_widget' => '<aside id="%1$s" class="wow fadeInUpBig footer-widget widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer widget 2', 'funiro' ),
        'id' => 'footer-sidebar-2',
        'description' => esc_html__('Footer widget area 2', 'funiro' ),
        'before_widget' => '<aside id="%1$s" class="wow fadeInUpBig footer-widget widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer widget 3', 'funiro' ),
        'id' => 'footer-sidebar-3',
        'description' => esc_html__('Footer widget area 3', 'funiro' ),
        'before_widget' => '<aside id="%1$s" class="wow fadeInUpBig footer-widget widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer widget 4', 'funiro' ),
        'id' => 'footer-sidebar-4',
        'description' => esc_html__('Footer widget 4', 'funiro' ),
        'before_widget' => '<aside id="%1$s" class="wow fadeInUpBig footer-widget widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer widget 5', 'funiro' ),
        'id' => 'footer-sidebar-5',
        'description' => esc_html__('Footer widget 5', 'funiro' ),
        'before_widget' => '<aside id="%1$s" class="wow fadeInUpBig footer-widget widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ));

    register_sidebar(array(
        'name' => esc_html__('WooCommerce sidebar widget area', 'funiro' ),
        'id' => 'woocommerce',
        'description' => esc_html__('WooCommerce sidebar widget area', 'funiro' ),
        'before_widget' => '<aside id="%1$s" class="wow fadeInUpBig widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ));
}