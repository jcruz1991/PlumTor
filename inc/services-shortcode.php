<?php
$args = array(
    'post_type'              => array('services'),
    'post_status'            => array('publish'),
    'nopaging'               => true,
    'order'                  => 'ASC',
    'orderby'                => 'menu_order',
);
// The Query
$services = new WP_Query($args);
?>
<div id="services-shortcode" class="py-5">
    <div class="services-wrapper">
        <?php
        // The Loop
        if ($services->have_posts()) : while ($services->have_posts()) :
                $services->the_post();
                ?>
                <div class="service-item">
                    <h3 class="mb-4"><?php the_title(); ?></h3>
                    <?php
                    // check if the post or page has a Featured Image assigned to it.
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('medium', ['class' => 'img-fluid']);
                    } ?>

                    <?php if (the_excerpt()) {
                        the_excerpt();
                    } ?>
                    <div class="text-sm-center text-md-left">
                        <a href="<?php the_permalink(); ?>">
                            <button>Learn More</button>
                        </a>
                    </div>
                </div>

            <?php
        endwhile;
    endif;
    // Restore original Post Data
    wp_reset_postdata();
    ?>
    </div>
</div>