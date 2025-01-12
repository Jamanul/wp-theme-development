<?php get_header() ?>


<section id="service_area">
    <div class="container">
        <div class="row">
            <?php query_posts('post_type=service&post_status=publish&posts_per_page=6&order=ASC&paged=' . get_query_var('post')); ?>
            <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
                    <div class="col-md-4">
                        <div class="service-content">
                            <h2><?php echo the_title() ?></h2>
                            <?php echo the_post_thumbnail('service') ?>
                            <?php $price = get_post_meta(get_the_ID(), '_service_price', true);
                            $rating = get_post_meta(get_the_ID(), '_service_rating', true);

                            if ($price) {
                                echo '<p><strong>Price:</strong> ' . esc_html($price) . '</p>';
                            }

                            if ($rating) {
                                echo '<p><strong>Rating:</strong> ' . esc_html($rating) . ' / 5</p>';
                            } ?>
                            <?php echo the_excerpt() ?>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
        </div>
    </div>
</section>


<?php get_footer() ?>