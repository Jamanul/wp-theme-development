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
                            <?php echo the_excerpt() ?>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
        </div>
    </div>
</section>


<?php get_footer() ?>