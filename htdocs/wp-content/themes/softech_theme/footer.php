<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package softech_theme
 */

?>

	</div><!-- .page_upper -->

	<footer id="colophon" class="">
		<div class="site-footer">
			<div class="flex wrap">

				<div class="footer_item footer_about">
					<h3 class="h_3 footer_title">A propos</h3>
					<?php
						$image = get_field('website_logo_white', 'options');

						$size = 'large'; // (thumbnail, medium, large, full or custom size)
						if( $image ) {
							echo wp_get_attachment_image( $image['id'], $size );
						} ?>
					<p>
						<?php echo bloginfo('description'); ?>
					</p>
				</div>

				<?php get_sidebar(); ?>


			</div>
		</div>


		<div class="site-subfooter">
			<div class="site-info wrap">
				<span>© Softech - Tous droits réservés</span>
			</div><!-- .site-info -->
		</div>

	</footer><!-- #colophon -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
