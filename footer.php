<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PlumTor
 */

?>

</div><!-- #content -->
<footer id="colophon" class="site-footer">
	<div class="footer-info py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-12">
					<h5>About</h5>
					<?php
					if (the_custom_logo()) : the_custom_logo();
					else :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
					<?php endif; ?>

					<p>625 rg Saint-David, Quebec J0C 1E0</p>
					<p>info@example.com</p>
					<p>(714) 123-4567</p>
				</div>
				<div class="col-md-3 col-sm-12">
					<h5>Navigation</h5>
					<?php wp_nav_menu(array(
						'theme_location' => 'footer',
						'menu_id'        => 'footer-menu',
					)); ?>
				</div>
				<div class="col-md-3 col-sm-12">
					<h5>Services</h5>
					<?php wp_nav_menu(array(
						'theme_location' => 'footer',
						'menu_id'        => 'footer-menu',
					)); ?>
				</div>
				<div class="col-md-3 col-sm-12">
					<h5>Contact Us</h5>
					<?php if (is_active_sidebar('footer-widet-area')) : ?>
						<div id="footer-widget" class="footer-widget widget-area" role="complementary">
							<?php dynamic_sidebar('footer-widet-area'); ?>
						</div><!-- #footer-widget -->
					<?php endif; ?>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .footer-info -->
	<div class="site-info">
		<div class="container">
			<p>Copyright &copy; <?php echo date('Y'); ?> mysite.com</p>
			<span class="sep"> | </span>
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf(esc_html__('Theme %1$s by: %2$s.', 'plumtor'), 'designed', '<a href="http://julioacruz.com"> Julio A Cruz</a>');
			?>
		</div> <!-- .container -->
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>