<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package softech_theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() ); ?>


		<div class="wrap mb-4">
		<?php
			the_post_navigation(
				array(
					'screen_reader_text' => __( 'Voir d\'autres chantiers : ' ),
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( '', 'softech_theme' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( '', 'softech_theme' ) . '</span> <span class="nav-title">%title</span>',
				)
			); ?>
		</div>

		<?php endwhile; ?>

	</main><!-- #main -->

<?php
get_footer();
