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
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', '_s'); ?></a>

		<header id="masthead" class="site-header">
			<div id="topbar" class="clearfix">
				<div class="container h-100">
					<div class="row h-100">
						<div class="col-md-6 col-sm-12 text-md-left text-sm-center cta-contact-wrapper">
							<span>
								<i class="fas fa-phone-alt"></i>
								Call Us: (714) 999-9999
							</span>
							<span>
								<i class="far fa-clock"></i>
								MON-FRI: 7:00-5:00
							</span>
						</div>
						<div class="col-md-6 col-sm-12 text-md-right text-sm-center cta-quote-wrapper">
							<span class="cta-quote">
								<a href="#">
									<i class="far fa-edit"></i>
									Request a Quote
								</a>
							</span>
						</div>
					</div>
				</div>
			</div> <!-- #topbar -->
			<div class="navigation-wrapper">
				<div class="site-branding">
					<div class="container h-100">
						<?php
						the_custom_logo();
						if (is_front_page() && is_home()) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
						<?php
					else :
						?>
							<p class="site-title h-100"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
						<?php
					endif; ?>
					</div> <!-- .container -->
				</div><!-- .site-branding -->
				<div class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<div class="container">
						<div class="icon-wrapper">
							<div class="line"></div>
							<div class="line"></div>
							<div class="line"></div>
						</div>
					</div> <!-- .container -->
				</div> <!-- .menu-toggle -->
				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					));
					?>
				</nav><!-- #site-navigation -->
			</div> <!-- .navigation-wrapper -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">