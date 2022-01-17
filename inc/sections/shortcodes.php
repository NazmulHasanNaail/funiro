<?php

get_template_part('inc/sections/banner');
get_template_part('inc/sections/services');
get_template_part('inc/sections/products');
get_template_part('inc/sections/blogs');
get_template_part('inc/sections/rooms');
get_template_part('inc/sections/share_setup');

add_shortcode('banner', 'banner_section');
add_shortcode('services', 'services_section');
add_shortcode('wc_products', 'wc_products_section');
add_shortcode('rooms', 'rooms_section');
add_shortcode('blogs', 'blogs_section');
add_shortcode('share_setup', 'share_setup_section');
