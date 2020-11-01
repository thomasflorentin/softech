<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package softech_theme
 */

$my_wp_query = new WP_Query();
$pages = $my_wp_query->query(array('post_type' => 'page'));

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
		$ariane = '<div class="entry-title"><a class="" href="' . $root_title_url . '">' . $root_title .'</a> <h1 class="">' . get_the_title() . '</h1></div>';
		break;
	
	case 2:
		$level1_title = get_the_title($ancestors[0]) . ' < ';
		$level1_title_url = get_permalink($ancestors[0]);	
		$ariane = '<div class="entry-title"><a class="root-title" href="' . $root_title_url . '">' . $root_title .'</a> <span class="level1-title">' . $level1_title . '</span><h1 class="entry-title">' . get_the_title() . '</h1></div>';
		break;

	default:
		break;
}

$page_service = get_field('is_service');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<div class="cover">
			<?php the_post_thumbnail(); ?>
		</div>
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

				<div class="mb-4">
					<?php the_content(); ?>
				</div>


				<div class="">
				
					<?php 
						if( $page_service ) {
							get_related_news(); 
						}
					?>
				
				</div>


			</main>

			<aside>
				<?php 
					if( $page_service ) {

					    $args = array(
							'posts_per_page' => -1,
							'order'          => 'ASC',
							'post_parent'    => get_the_ID(),
							'post_type'      => 'page',
						);
					 
						$children = get_children( $args );
					 
						if ( $children ) : ?>
							<div class="services_list">
							
								<h3 class="h_3 mb-1">Nos compétences </h3>
								<ul class="">
								<?php foreach ( $children as $page ) : ?>
									
									<li>
									<?php 
										set_query_var('page', $page);
										get_template_part( 'template-parts/blocks/block', 'service' ); ?>
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
							
								<h3 class="h_3 mb-1">Voir aussi </h3>
								<ul class="">
								<?php foreach ( $siblings as $page ) : ?>
									<li>
										<?php 
											set_query_var('page', $page);
											get_template_part( 'template-parts/blocks/block', 'service' ); ?>
									</li>
								<?php endforeach; ?>
								</ul>
							</div>

						<?php endif; ?>
				<?php }
				else { 
				
				 
					$services_pages = get_posts( array(
						'post_type'      	=> 'page',
						'post_parent'	=> 0,
						'meta_query' => array(
							array(
								'key'   => 'is_service',
								'value' => '1',
							)
						)
					) );

					?>

						<div class="services_list">
							
							<h3 class="h_3 mb-1">Nos services </h3>
							<ul class="">
							<?php foreach ( $services_pages as $page ) : ?>
								<li>
									<?php 
										set_query_var('page', $page);
										get_template_part( 'template-parts/blocks/block', 'service' ); ?>
								</li>
							<?php endforeach; ?>
							</ul>
						</div>


				<?php } ?>


				<div class="block_contact">
					<p>Vous avez une question ? </p>	
					
					<a href="" class="btn--white">Contactez-nous ! </a>	
				</div>

			</aside>

		</div>


	
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
