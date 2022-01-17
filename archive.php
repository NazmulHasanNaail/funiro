<?php
/**
 * The template for displaying archive pages
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
			$archive_temp_layout =  get_theme_mod('funiro_archive_page_layout', esc_html('rightsidebar', 'funiro'));
			if($archive_temp_layout == 'leftsidebar'){
				?>
				<div class="col-lg-4">
					<?php
					get_sidebar();
					?>
				</div><!--sidebar-->
				<?php
			}
			if($archive_temp_layout == 'fullwidth'){
				$col = 12;
			}else{
				$col = 8;
			}
			?>
			<div class="col-lg-<?php echo esc_attr($col) ?>">

				<?php if ( have_posts() ) : ?>
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

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

			</div><!-- colo-md-8 -->

			<?php 
			if($archive_temp_layout == 'rightsidebar'){
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
