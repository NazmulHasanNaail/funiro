<!---header-start-->
<header class="site-header funiro-header_area" id="masthead">
    <div class="container">
        <div class="themeoo-menu-area">
            <div class="hamburger-menu">
                <span></span>
            </div>
            <!--hamburger-menu-->	
            <div class="site-branding">
                <?php
                the_custom_logo();
                    ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php
                $funiro_description = get_bloginfo( 'description', 'display' );
                if ( $funiro_description || is_customize_preview() ) :
                    ?>
                    <p class="site-description"><?php echo $funiro_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                <?php endif; ?>
            </div><!-- .site-branding -->
            <nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                )
            );
            ?>
            </nav>
            <!--nav-->
            <div class="header-search-area">
                <?php get_search_form(); ?>
            </div>
            <!--header-search-->
            <div class="d-flex header-right-area justify-content-end align-items-center">
                <?php  echo do_shortcode('[yith_wcwl_items_count]'); ?>
                <div class="cart">
                  <?php 
                  if ( class_exists( 'WooCommerce' ) ){                  
                      funiro_woocommerce_header_cart(); 
                    } ?>
                </div>
                <?php
                $user = wp_get_current_user();
                if ( $user ) :?>
                <div class="current-user">
                    <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">
                      <img src="<?php echo esc_url( get_avatar_url( $user->ID, ['size' => '40'] ) ); ?>" alt="<?php echo esc_attr('current user ')?>"/>
                    </a>
                </div>
                <?php 
                endif; 
                ?>
            </div>
            <!--header-right-->
        </div>
    </div>
</header>
<!---header-end-->