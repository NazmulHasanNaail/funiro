<?php
require ( FUNIRO_TEMPLATE_DIR . '/inc/sections/banner.php');
require ( FUNIRO_TEMPLATE_DIR . '/inc/sections/services.php');
require ( FUNIRO_TEMPLATE_DIR . '/inc/sections/products.php');
require ( FUNIRO_TEMPLATE_DIR . '/inc/sections/blogs.php');
require ( FUNIRO_TEMPLATE_DIR . '/inc/sections/rooms.php');
require ( FUNIRO_TEMPLATE_DIR . '/inc/sections/share_setup.php');
add_shortcode('banner', 'banner_section');
add_shortcode('services', 'services_section');
add_shortcode('wc_products', 'wc_products_section');
add_shortcode('rooms', 'rooms_section');
add_shortcode('blogs', 'blogs_section');
add_shortcode('share_setup', 'share_setup_section');
