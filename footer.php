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
		<div class="footer-info">
			<div class="footer-info-left">
				<button class="normal">Request Services</button>
				<button class="normal">Contact Us</button>
			</div>
			<div class="footer-info-center">
				<h1>Logo</h1>
			</div>

			<div class="footer-info-right">
				<?php if ( is_active_sidebar( 'footer-widet-area' ) ) : ?>
					<div id="footer-sidebar" class="footer-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'footer-widet-area' ); ?>
					</div><!-- #footer-sidebar -->
				<?php endif; ?>
			</div>
		</div>
		<div class="footer-nav">
			<?php wp_nav_menu( array(
					'theme_location' => 'footer',
					'menu_id'        => 'footer-menu',
				) ); ?>
		</div>
		<div class="site-info">
			<p>Copyright &copy; <?php echo date('Y'); ?> mysite.com</p>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme %1$s by: %2$s.', 'plumtor' ), 'designed', '<a href="http://julioacruz.com"> Julio A Cruz</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
