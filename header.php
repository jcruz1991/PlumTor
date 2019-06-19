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
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'plumtor'); ?></a>

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
			<div id="navigation-wrapper">
				<div class="container h-100">
					<div class="row h-100">
						<div class="col-sm-12">
							<div class="site-branding">
								<div class="logo-wrapper">
									<?php
									if (the_custom_logo()) : the_custom_logo();
									else :	?>
										<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
									<?php endif; ?>
								</div> <!-- .logo-wrapper -->
							</div><!-- .site-branding -->
							<nav id="site-navigation" class="main-navigation">
								<div class="menu-toggle-container">
									<button class="menu-toggle hamburger hamburger--spring" type="button" aria-controls="primary-menu" aria-expanded="false">
										<span class="hamburger-box">
											<span class="hamburger-inner"></span>
										</span>
									</button> <!-- .menu-toggle -->
								</div> <!-- .menu-toggle-container -->
								<?php
								wp_nav_menu(array(
									'theme_location' => 'primary',
									'menu_id'        => 'primary-menu',
								));
								?>
							</nav><!-- #site-navigation -->
						</div>
					</div><!-- .row -->

				</div> <!-- .container -->
			</div> <!-- $navigation-wrapper -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">