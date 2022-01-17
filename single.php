<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Funiro
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container">
		<div class="row">
		<?php 
			$single_blog_temp_layout =  get_theme_mod('funiro_single_blog_temp_layout', esc_html('rightsidebar', 'funiro'));
			if($single_blog_temp_layout == 'leftsidebar'){
				?>
				<div class="col-lg-4">
					<?php
					get_sidebar();
					?>
				</div><!--sidebar-->
				<?php
			}
			if($single_blog_temp_layout == 'fullwidth'){
				$col = 12;
			}else{
				$col = 8;
			}
			?>
			<div class="col-lg-<?php echo esc_attr($col) ?>">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</div><!-- colo-md-8 -->
			<?php 
			if($single_blog_temp_layout == 'rightsidebar'){
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
	<div>
</main><!-- #main -->
<?php
get_footer();
