<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Funiro
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area wow fadeInUp">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h5 class="comments-title">
			<?php
			$funiro_comment_count = get_comments_number();
			if ( '1' === $funiro_comment_count ) {
					/* translators: 1: title. */
					echo esc_html__( 'One Comment', 'funiro' );
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html('%1$s Comments', 'funiro'),
					number_format_i18n( $funiro_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				);
			}
			?>
		</h5><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list wow fadeInUpBig">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
					'max_depth'         => 2,
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'funiro' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->
