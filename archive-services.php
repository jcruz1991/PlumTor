<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PlumTor
 */

get_header();
?>

<div id="primary" class="content-area">
    <header class="entry-header">
        <div class="container">
            <h1 class="entry-title">Services</h1>
        </div>
    </header><!-- .entry-header -->
    <main id="main" class="site-main container">
        <?php echo do_shortcode('[serviceslist]'); ?>

        <?php echo do_shortcode('[calltoaction]'); ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
