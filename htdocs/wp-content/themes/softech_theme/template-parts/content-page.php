<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package softech_theme
 */

$ancestors = get_post_ancestors($post);
$level = count($ancestors);
$ariane = '';

if( $level == 0 ) {
	$root = get_the_ID();
	$children = get_page_children($root, $pages);
	$root_title = get_the_title($root) . ' <span class="sep">></span> ';
	$root_title_url = get_permalink($root);	
} 
else {
	$root = end($ancestors);
	$root_title = get_the_title($root) . ' <span class="sep">></span> ';
	$root_title_url = get_permalink($root);	
}


switch ($level) {
	case 0:
		$ariane = '<h1 class="entry-title">' . get_the_title() . '</h1>';
		break;

	case 1:
		$ariane = '<a class="entry-title" href="' . $root_title_url . '">' . $root_title .'</a> <h1 class="entry-title">' . get_the_title() . '</h1>';
		break;
	
	case 2:
		$level1_title = get_the_title($ancestors[0]) . ' < ';
		$level1_title_url = get_permalink($ancestors[0]);	
		$ariane = '<a class="root-title" href="' . $root_title_url . '">' . $root_title .'</a> <span class="level1-title">' . $level1_title . '</span><h1 class="entry-title">' . get_the_title() . '</h1>';
		break;

	default:
		break;
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<div class="wrap">
			<?php echo $ariane; ?>
		</div>
	</header><!-- .entry-header -->

	<div class="wrap">

		<div class="page_content flex">

			<main class="entry-content">
				
				<div class="entry-excerpt">
					<?php the_excerpt(); ?>
				</div>

				<?php the_content(); ?>


				<div class="">
				
					<?php 
						$args = array(
							'post_type' => 'post',
							'posts_per_page'  => 4
						);
						$the_query = new WP_Query( $args ); ?>
						
					<?php if ( $the_query->have_posts() ) : ?>
						<section class="section news">

							<div class="txt-ctr ">
								<h2 class="section_title">Nos chantiers</h2>
							</div>
							
							<div class="section_cards--half flex">

								<?php while ( $the_query->have_posts() ) : ?>
									<?php $the_query->the_post(); ?>

									<div class="news_card">
										<a href="<?php the_permalink(); ?>" class="link_block">
											<div class="card_cover ratio_1_1">
												<div class="ratio_inner">
													<?php the_post_thumbnail(); ?>
												</div>
											</div>
											<h2 class="h_2 news_title"><?php the_title(); ?></h2>
											<div>
												<span class="ft_1">Client :</span> <span class="ft_1 green"><?php echo 'untel'; ?></span>
											</div>
											<div>
												<span class="ft_1">Lieu : </span> <span class="ft_1 green"><?php echo 'untel'; ?></span>
											</div>
										</a>
									</div>

								<?php endwhile; ?>
							</div>
						</section>
						<?php endif; ?>
						<?php wp_reset_postdata(); ?>
				
				</div>


			</main>

			<aside>
				<?php 
					    $args = array(
							'posts_per_page' => -1,
							'order'          => 'ASC',
							'post_parent'    => get_the_ID(),
							'post_type'      => 'page',
						);
					 
						$children = get_children( $args );
					 
						if ( $children ) : ?>
							<div class="services_list">
							
								<h3 class="h_3">Nos compétences </h3>
								<ul class="">
								<?php foreach ( $children as $child ) : ?>
									
									<li>
										<a href="<?php echo get_the_permalink($child->ID); ?>" class="link_block">
										<?php echo $child->post_title; ?>
										</a>
									</li>
								<?php endforeach; ?>
								</ul>
							</div>

						<?php else : ?>

							<?php 
							$siblings_args = array(
								'posts_per_page' 	=> -1,
								'order'          	=> 'ASC',
								'post_parent'    	=> $post->post_parent,
								'post_type'      	=> 'page',
								'exclude' 		 	=> $post->ID
							);
						
							$siblings = get_children( $siblings_args );
							?>

							<div class="services_list">
							
								<h3 class="h_3">Voir aussi </h3>
								<ul class="">
								<?php foreach ( $siblings as $page ) : ?>
									<li>
										<a href="<?php echo get_the_permalink($page->ID); ?>" class="link_block">
										<?php echo $page->post_title; ?>
										</a>
									</li>
								<?php endforeach; ?>
								</ul>
							</div>

						<?php endif; ?>


				<div class="block_contact">
					<p>Vous avez une question ? </p>	
					
					<a href="" class="btn--white">Contactez-nous ! </a>	
				</div>

			</aside>

		</div>



		<?php if ( get_edit_post_link() ) : ?>
			<footer class="entry-footer">

			</footer><!-- .entry-footer -->
		<?php endif; ?>
	
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
