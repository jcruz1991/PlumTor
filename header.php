<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PlumTor
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'plumtor' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="cta-wrapper">
				<img src="./images/cta-call.svg" alt="call to action - call">
				<button class="cta-button">Request a Service</button>
			</div>
			<div class="site-branding">
				<div class="logo-wrapper">
					<?php the_custom_logo(); ?>
					<h1 class="text-center">LOGO</h1>
				</div>
			</div><!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation">
				<div class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		</div> <!-- .container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
