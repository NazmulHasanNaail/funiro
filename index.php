<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Funiro
 */

get_header();
?>
<main id="primary" class="site-main">
	<div class="container">
		<div class="row">

		<?php 
			$blog_temp_layout =  get_theme_mod('funiro_blog_temp_layout', esc_html('rightsidebar', 'funiro'));
			if($blog_temp_layout == 'leftsidebar'){
				?>
				<div class="col-lg-4">
					<?php
					get_sidebar();
					?>
				</div><!--sidebar-->
				<?php
			}
			if($blog_temp_layout == 'fullwidth'){
				$col = 12;
			}else{
				$col = 8;
			}
			?>
			<div class="col-lg-<?php echo esc_attr($col) ?>">
				<?php
				if ( have_posts() ) :
				?>
				<div class="blog-list">
				<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;
					?>
				</div>
					<?php
					the_posts_pagination( array(
						'mid_size'  => 3,
						'prev_text' => __( '←', 'funiro' ),
						'next_text' => __( '→', 'funiro' ),
					) );

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div><!-- colo-md-8 -->

			<?php 
			if($blog_temp_layout == 'rightsidebar'){
			?>
			<div class="col-lg-4">
				<?php
				get_sidebar();
				?>
			</div><!--sidebar-->
			<?php
			}
			?>

		</div>
	</div>
</main><!-- #main -->

<?php
get_footer();
