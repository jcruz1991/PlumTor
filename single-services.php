<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PlumTor
 */

get_header();
?>

<div id="primary" class="content-area">
    <header class="entry-header">
        <div class="container">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        </div>
    </header><!-- .entry-header -->
    <main id="main" class="site-main container mt-5">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <?php
                if (have_posts()) :
                    the_post();

                    the_post_thumbnail('large');
                    ?>
                    <div class="pt-5">
                        <?php the_content(); ?>
                    </div>
                <?php
            endif;
            ?>
            </div>
            <div class="col-md-5 col-sm-12">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </main><!-- #main -->
    <div class="post-navigation-wrapper">
        <div class="container">
            <?php the_post_navigation(); ?>
        </div>
    </div><!-- .post-navigation-wrapper -->
</div><!-- #primary -->

<?php
get_footer();
