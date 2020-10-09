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

				<?php softech_theme_post_thumbnail(); ?>

                <?php the_content(); ?>
            </main><!-- .entry-content -->


			<aside>

				<div class="entry-meta mb-2">
					<h3 class="mb-1">Le Chantier</h3>
					<div>
						<span class="ft_1">Date :</span> <span class="ft_1 green"><?php echo '2012'; ?></span>
                    </div>
					<div>
						<span class="ft_1">Client :</span> <span class="ft_1 green"><?php echo 'untel'; ?></span>
                    </div>
                    <div>
                        <span class="ft_1">Lieu : </span> <span class="ft_1 green"><?php echo 'untel'; ?></span>
                    </div>			
                    <div>
                        <span class="ft_1">Prestations : <br> </span> <span class="ft_1 green"><?php echo 'Aérogommage sur bois'; ?></span>
                    </div>	
				</div>



				<div class="block_contact">
					<p>Vous avez une question ? </p>	
					
					<a href="" class="btn--white">Contactez-nous ! </a>	
				</div>

			</aside>

		</div><!-- .page_content -->

	</div><!-- .wrap -->


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
