<?php
/**
 * Template part for displaying page content in page-home.php
 *
 * @package softech_theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">

		<?php get_template_part('template-parts/flexible-contents/flexible', 'content'); ?>

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
