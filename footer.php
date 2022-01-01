<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Funiro
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="footer-border"></div>
			<?php 
			 $footer_top_hide = get_theme_mod('funiro_hide_footer_top', false); 
			 if(empty( $footer_top_hide)): 
			 ?>
			<div class="footer-top">
				<div class="row">
				<?php 
				get_template_part('inc/footer/footer');
				?>
				</div>
			</div>
			<?php 
			endif;  

			$footer_bottom_hide = get_theme_mod('funiro_hide_footer_copyright', true);
			$footer_copyright_text = get_theme_mod('funiro_footer_copyright_text', '&copy; 2021 Namul hasan, All right reserved.');
            if(empty($footer_bottom_hide)): ?>
			<div class="footer-bottom">
				<div class="row">
					<div class="col-lg-12">
						<div class="site-info text-center">
							<?php echo $footer_copyright_text ; ?>
						</div><!-- .site-info -->
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>


<script>
 new WOW().init();
</script>
</body>
</html>
