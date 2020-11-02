<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package softech_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<div class="page_upper">

		<header id="masthead" class="site-header">
			<div class="site-branding wrap">

				<div class="header_logo">
					<a href="<?php echo get_bloginfo('url'); ?>">
						<?php
						$image = get_field('website_logo', 'options');

						$size = 'large'; // (thumbnail, medium, large, full or custom size)
						if( $image ) {
							echo wp_get_attachment_image( $image['id'], $size );
						} ?>
					</a>
				</div>


				<div class="header_contact flex_col">

					<div class="flex_ctr">
						<span class="icon">
							<svg class="" xmlns="http://www.w3.org/2000/svg" width="1024" height="1024" viewBox="0 0 1024 1024"><title></title><g id="icomoon-ignore"> </g><path d="M448 96h128v64h-128v-64zM256 1024h512c52.928 0 96-43.072 96-96v-832c0-52.928-43.072-96-96-96h-512c-52.928 0-96 43.072-96 96v832c0 52.928 43.072 96 96 96zM224 96c0-17.632 14.336-32 32-32h512c17.664 0 32 14.368 32 32v96h-576v-96zM224 256h576v448h-576v-448zM800 768v160c0 17.632-14.336 32-32 32h-512c-17.664 0-32-14.368-32-32v-160h576z"></path></svg>
						</span>
						<span class="ft_1">Contact</span>
					</div>

					<div>
						<span class="ft_2">+33 6 78 98 87 64</span>
					</div>

				</div>

				<div class="header_localisation flex_col">
					<div>
						<span class="ft_1">Zone d'intervention</span>
					</div>
					<div>
						<span class="ft_2">Samois sur Seine et région</span>
					</div>
				</div>

				<div class="header_action">
					<a href="/contact" class="btn--yellow">Demander un devis</a>
				</div>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' 	=> 'menu-1',
						'menu_id'        	=> 'primary-menu',
						'container_class'	=> 'wrap'
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
