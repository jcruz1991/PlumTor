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
	<div id="topBtn">
		<div class="icon-btn-wrapper">
			<i class="fas fa-chevron-up"></i>
		</div> <!-- .icon-btn-wrapper -->
	</div> <!-- #topBtn -->
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
								<a href="<?php echo esc_url(get_page_link(86)); ?>">
									<i class="far fa-edit"></i>
									Request a Quote
								</a>
							</span>
						</div>
					</div>
				</div>
			</div> <!-- #topbar -->
			<div class="navigation-wrapper container">

				<div class="menu-toggle h-100" aria-controls="primary-menu" aria-expanded="false">
					<div class="icon-wrapper">
						<div class="line"></div>
						<div class="line"></div>
						<div class="line"></div>
					</div>
				</div> <!-- .menu-toggle -->


				<div class="site-branding">
					<div class="h-100">
						<?php
						if (has_custom_logo()) :
							$custom_logo_id = get_theme_mod('custom_logo');
							$image = wp_get_attachment_image_src($custom_logo_id, 'full');
							echo '<a href="' . esc_url(home_url('/')) . '"><img class="img-fluid header-logo" src="' . $image[0] . '" alt="' . get_bloginfo('name') . '"></a>';
						else :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
						<?php
					endif; ?>
					</div> <!-- .container -->
				</div><!-- .site-branding -->
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