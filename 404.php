<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package PlumTor
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<section class="error-404 not-found container text-center" style="height: 80vh">
			<header class="page-header">
				<h1 class="page-title" style="font-size: 200px; font-weight: 400;"><?php esc_html_e('404', 'plumtor'); ?></h1>
				<p><?php esc_html_e('Oops!', 'plumtor') ?></p>
				<p><?php esc_html_e('That page can&rsquo;t be found or doesn&rsquo;t exist.', 'plumtor') ?></p>
			</header><!-- .page-header -->

			<div class="page-content">
				<a href="<?php echo home_url(); ?>">
					<button>Go Back To Home</button>
				</a>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
