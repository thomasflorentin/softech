<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package softech_theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<div class="cover">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="wrap">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>		
	</header><!-- .entry-header -->

	<div class="wrap">

		<div class="page_content flex">

            <main class="entry-content">

				<div class="entry-excerpt">
					<?php the_excerpt(); ?>
				</div>

                <?php the_content(); ?>
            </main><!-- .entry-content -->


			<aside>

				<div class="entry-meta mb-2">
					<h3 class="mb-1">Le Chantier</h3>

					<?php if( get_field('chantier_date') != '' ) : ?>
						<div>
							<span class="ft_1">Date :</span> <span class="ft_1 blue"><?php the_field('chantier_date'); ?></span>
						</div>
					<?php endif; ?>

					<?php if( get_field('chantier_client') != ''  ) : ?>
						<div>
							<span class="ft_1">Client :</span> <span class="ft_1 blue"><?php the_field('chantier_client'); ?></span>
						</div>
					<?php endif; ?>

					<?php if( get_field('chantier_lieu') != ''  ) : ?>
						<div>
							<span class="ft_1">Lieu : </span> <span class="ft_1 blue"><?php the_field('chantier_lieu'); ?></span>
						</div>
					<?php endif; ?>

						<div>
							<span class="ft_1">Prestations : <br> </span> <span class="ft_1 blue"><?php echo get_the_category_list(); ?></span>
						</div>	

				</div>



				<div class="block_contact">
					<p>Vous souhaitez nous poser une question ?  </p>	
					
					<a href="/contact" class="btn--white block_btn">Contactez-nous ! </a>	
				</div>

			</aside>

		</div><!-- .page_content -->

	</div><!-- .wrap -->


	<section class="section wrap mb-4">
			<div class="section_inner wrap">
				<?php
					the_post_navigation(
						array(
							'screen_reader_text' => __( 'D\'autres chantiers : ' ),
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( '', 'softech_theme' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( '', 'softech_theme' ) . '</span> <span class="nav-title">%title</span>',
						)
					); ?>
			</div>
		</section>

	<?php 
		set_query_var('title', 'Nos services');
		$pageID = get_option('page_on_front');
		if( have_rows('flexible_elements', $pageID) ):
			while ( have_rows('flexible_elements', $pageID) ) : the_row();
				if(!$services) {
					$services = get_sub_field('section_pages', $pageID);
				}
			endwhile;
		endif;

		set_query_var('services', $services);
		get_template_part('template-parts/flexible-contents/flexible', 'services'); 
	?>


</article><!-- #post-<?php the_ID(); ?> -->
