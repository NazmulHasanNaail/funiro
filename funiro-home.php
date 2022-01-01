<?php
/**
 * Template Name: funiro home
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Funiro
 * @since Funiro 1.0
 */

  get_header();
  ?>
<?php
/*banner area*/
if(function_exists('banner_section')){
    echo do_shortcode('[banner]');  
}
/*services area*/
if(function_exists('services_section')){
    echo do_shortcode('[services]');  
}

 /*Products area*/
if(function_exists('wc_products_section')){
    echo do_shortcode('[wc_products]');  
}
 /*Rooms area*/
if(function_exists('rooms_section')){
    echo do_shortcode('[rooms]');  
}

 /*Blogs area*/
if(function_exists('blogs_section')){
    echo do_shortcode('[blogs]');  
}


/*Share_setup area*/
if(function_exists('share_setup_section')){
    echo do_shortcode('[share_setup]');  
}

get_footer();