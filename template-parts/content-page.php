<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PlumTor
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="container">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</div>
	</header><!-- .entry-header -->
	<div class="page-wrapper">
		<?php has_post_thumbnail(); ?>

		<div class="entry-content">
			<?php
			the_content();

			wp_link_pages(array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'plumtor'),
				'after'  => '</div>',
			));
			?>
		</div><!-- .entry-content -->
		<?php if (get_edit_post_link()) : ?>
			<footer class="entry-footer">
				<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__('Edit <span class="screen-reader-text">%s</span>', 'plumtor'),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
				?>
			</footer><!-- .entry-footer -->
		<?php endif; ?>
	</div> <!-- .page-wrapper -->


</article><!-- #post-<?php the_ID(); ?> -->