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



	<header id="masthead" class="site-header">
		<div class="site-branding wrap">
			<a href="<?php echo get_bloginfo('url'); ?>">
				<?php
				$image = get_field('website_logo', 'options');

				$size = 'large'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image['id'], $size );
				} ?>
			</a>

			<div>
				tel: 067898876
			</div>

			<div>
				Samois sur Seine et région
			</div>

			<div>
				<a href="">Demander un devis</a>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' 	=> 'menu-1',
					'menu_id'        	=> 'primary-menu',
					'menu_class'		=> 'wrap'
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
