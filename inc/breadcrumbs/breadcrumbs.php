<?php

// theme sub header breadcrumb functions
if (!function_exists('funiro_breadcrumbs')):
    function funiro_breadcrumbs() {
        global $post;
        $homeLink = home_url('/');
        $hide_show_banner = get_theme_mod('banner_enable', true);
        if ($hide_show_banner == true) {?>
            <section class="page-title-section" <?php if (get_header_image()) { ?> style="background:url('<?php header_image(); ?>')" <?php } ?>>		
                <?php
                if (get_theme_mod('breadcrumb_image_overlay', true) == true) {
                    $breadcrumb_overlay = get_theme_mod('breadcrumb_overlay_section_color', 'rgba(0,0,0,0.6)');
                } else {
                    $breadcrumb_overlay = 'none';
                }?>
                <style type="text/css">
                    .page-title-section .overlay
                    {

                        background-color: <?php echo esc_attr($breadcrumb_overlay); ?>;
                    }
                </style>
                <?php
                if(get_theme_mod('breadcrumb_image_overlay',true)==true):?>
                    <!--<div class="overlay"></div>  -->   
                <?php endif;?>	
                <div class="breadcrumb-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                        <?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
                        if (is_home() || is_front_page()) { 
                            if( ! function_exists( 'spiceb_activate' ) ) {
                                if(get_option('show_on_front')=='page'){
                                    if(is_front_page()){?>
                                        <div class="page-title text-center">
                                            <h6><?php echo esc_html(get_the_title( get_option('page_on_front', true) )); ?></h6>
                                        </div>
                                    <?php   
                                    }
                                    else if(is_home()){?>
                                        <div class="page-title text-center">
                                            <h6><?php echo esc_html(get_the_title( get_option('page_for_posts', true) )); ?></h6>
                                        </div>          
                                    <?php
                                    }
                                }
                                elseif(get_option('show_on_front')=='posts'){?>
                                    <div class="page-title text-center">
                                        <h6><?php echo wp_kses_post(get_theme_mod('blog_page_title_option', __('Home', 'funiro' ))); ?></h6>
                                    </div>
                                <?php
                                }   
                            }
                            //else condition will run when Spice Box plugin is active
                            else{
                                if(get_option('show_on_front')=='posts'){?>
                                    <div class="page-title text-center">
                                        <h6><?php echo wp_kses_post(get_theme_mod('blog_page_title_option', __('Home', 'funiro' ))); ?></h6>
                                    </div> 
                                <?php
                                }else{
                                    if(is_front_page()){?>
                                        <div class="page-title text-center">
                                            <h6><?php echo esc_html(get_the_title( get_option('page_on_front', true) )); ?></h6>
                                        </div>
                                    <?php   
                                    }else if(is_home()){?>
                                        <div class="page-title text-center">
                                            <h6><?php echo esc_html(get_the_title( get_option('page_for_posts', true) )); ?></h6>
                                        </div>          
                                    <?php
                                    }
                                }   
                            }
                        } 
                        else{ ?>                   
                            <div class="page-title text-center">
                            <?php if (is_search()){
                                    echo '<h6>'. get_search_query() .'</h6>';
                            }
                            else if(is_404())
                            {
                                echo '<h6>'. esc_html__('Error 404','funiro' ) .'</h6>';  
                            }
                            else if(is_category())
                            {
                                echo '<h6>'. ( esc_html__('Category: ','funiro' ).single_cat_title( '', false ) ) .'</h6>';   
                            }
                            else if ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ){ 
                                if ( class_exists( 'WooCommerce' ) ){
                                    if(is_shop()){ ?>
                                        <h6><?php woocommerce_page_title(); ?></h6>
                                        <?php 
                                        }   
                                     }
                            }
                            elseif( is_tag() )
                            {
                                echo '<h6>'. ( esc_html__('Tag: ','funiro' ) .single_tag_title( '', false ) ) .'</h6>';
                            }
                            else if(is_archive())
                            {   
                            the_archive_title( '<h6>', '</h6>' ); 
                            }
                            else
                            { ?>
                                <h6><?php the_title(''); ?></h6>
                            <?php } ?>
                            </div>  
                        <?php } 
                        $breadcrumb_enable = get_theme_mod('breadcrumb_setting_enable',true);
                        if($breadcrumb_enable == true){ 
                            if ( function_exists('yoast_breadcrumb') ) {
                                $wpseo_titles=get_option('wpseo_titles');
                                if($wpseo_titles['breadcrumbs-enable']==true){
                                    echo '<ul class="page-breadcrumb text-center">';
                                    echo '<li>';
                                    echo '</li>';
                                $breadcrumbs = yoast_breadcrumb("","",false);
                                echo wp_kses_post($breadcrumbs);
                                echo '</ul>';
                                }   
                            }
                        }?>
                        </div>
                    </div>	
                </div>
            </div>
            </section>
            <div class="page-seperate"></div>
        <?php } else { ?><div class="page-seperate"></div><?php
        }
    }

endif;
?>