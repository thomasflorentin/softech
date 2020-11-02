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

	<div class="">

		<div class="page_content">

			<main class="entry-content">
				
				<div class="wrap mb-2">
					<div class="entry-excerpt">
						<?php the_excerpt(); ?>
					</div>
				</div>
				
				<div class="wrap mb-4">
					<div class="entry-contenttext">
						<?php the_content(); ?>
					</div>
				</div>

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
							<div class="entry-rebonds mb-4">

								<div class="services_list">
								
									<div class="txt-ctr mb-2">
										<h2 class="section_title">Nos compétences</h2>
									</div>

									<div class="widewrapper flex section_cards ">
									<?php foreach ( $children as $post ) : ?>
										
										<?php 
											setup_postdata($post);
											get_template_part( 'template-parts/blocks/block', 'service--extended' ); ?>

									<?php endforeach; ?>
									<?php wp_reset_postdata(); ?>
									</div>
								</div>
							</div>

						<?php else : ?>

							<?php 
							if( $post->post_parent ) {



								$siblings_args = array(
									'posts_per_page' 	=> -1,
									'order'          	=> 'ASC',
									'post_parent'    	=> $post->post_parent,
									'post_type'      	=> 'page',
									'exclude' 		 	=> $post->ID
								);
							
								$siblings = get_children( $siblings_args ); ?>
								<div class="entry-rebonds mb-4">

									<div class="services_list">		
										
										<div class="txt-ctr mb-2">
											<h2 class="section_title">Voir aussi</h2>
										</div>

										<div class="widewrapper flex section_cards">
										<?php foreach ( $siblings as $post ) : ?>
											
											<?php 
												setup_postdata($post);
												get_template_part( 'template-parts/blocks/block', 'service--extended' ); ?>

										<?php endforeach; ?>
										<?php wp_reset_postdata(); ?>
										</div>
									</div>
								</div>

							<?php } ?>


						<?php endif; ?>
				<?php } ?>
				
				</div>

				<div class="entry-news">
				
					<div class="wrap">
								
						<?php 
							if( $page_service ) {
								get_related_news(); 
							}
						?>
					</div>

				</div>


			</main>

			<aside class="entry-action mb-4">
				<div class="wrap">
				
					<div class="block_contact">
						<p>Vous avez une question ? </p>	
						
						<a href="" class="btn--white">Contactez-nous ! </a>	
					</div>

				</div>
			</aside>

		</div>


	
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
