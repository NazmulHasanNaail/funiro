<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Funiro
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('search-posts'); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			funiro_posted_on();
			funiro_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php
		if (is_search()) {
			if(get_the_excerpt()) { 
				$excerpt = get_the_excerpt();
				?>
				<p>
					<?php
					echo esc_html( funiro_string_limit_words( $excerpt, 15)); 
					?>
				</p>
				<?php
			}
		}
		?>
	</div><!-- .entry-summary -->
</article><!-- #post-<?php the_ID(); ?> -->
