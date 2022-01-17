<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Funiro
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container">
		<div class="row">
		<?php 
			$blog_temp_layout =  get_theme_mod('funiro_search_page_layout', esc_html('rightsidebar', 'funiro'));
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

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title">
							<?php
							/* translators: %s: search query. */
							printf( esc_html__( 'Search Results for: %s', 'funiro' ), '<span>' . get_search_query() . '</span>' );
							?>
						</h1>
					</header><!-- .page-header -->

					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;

					the_posts_pagination( array(
						'mid_size'  => 3,
						'prev_text' => __( 'Previous', 'funiro' ),
						'next_text' => __( 'Next', 'funiro' ),
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
