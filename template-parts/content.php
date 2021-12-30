<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Funiro
 */

$classes = join( '  ', get_post_class() );
?>
<article id="post-<?php the_ID(); ?>" class="<?php if( ! is_singular()){echo "blog-posts "; } echo esc_attr($classes);   ?>">
	<?php 
	if( get_theme_mod( 'funiro_hide_postfeatured_image' ) == '') { 
		funiro_post_thumbnail();
	}
	 ?>
	<div class="entry-content">
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h5 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
					if( get_theme_mod( 'funiro_hide_blogadmin' ) == '') { 
						funiro_posted_by();
					}

					if( get_theme_mod( 'funiro_hide_blogdate' ) == '') { 
						funiro_posted_on();
					}

					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php
		if (!is_single() ) {
			 if(get_the_excerpt()) { 
				 $excerpt = get_the_excerpt();
				 ?>
				 <p>
				<?php
				 echo esc_html( funiro_string_limit_words( $excerpt, esc_attr(get_theme_mod('funiro_postexcerptrange','30')))); 
				?></p>
				 <?php
			 }

			 $funiro_postmorebuttontext = get_theme_mod('funiro_postmorebuttontext', 'Readmore');
			 $funiro_hide_postbutton = get_theme_mod('funiro_hide_postbutton');
			 if( !empty($funiro_postmorebuttontext) && empty($funiro_hide_postbutton)){ ?>
			 <a class="btn btn-primary funiro-btn" href="<?php the_permalink(); ?>"><?php echo esc_html($funiro_postmorebuttontext); ?></a>
		 <?php }  

		}else{
		
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'funiro' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'funiro' ),
					'after'  => '</div>',
				)
			);
		}
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
