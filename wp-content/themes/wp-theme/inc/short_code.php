<?php

function custom_shortcode()
{
    return "hello world";
}
add_shortcode("skb", "custom_shortcode");

function custom_shortcode_button($atts, $content = null)
{
    $values = shortcode_atts(array(
        "url" => "#",
    ), $atts);
    return '<a class="btn" href="' . esc_attr($values['url']) . '">' . $content . '</a>';
}
add_shortcode("button", "custom_shortcode_button");

// service short code
function service_short_code()
{
    //query_posts('post_type=service&post_status=publish&posts_per_page=6&order=ASC&paged=' . get_query_var('post'))
    ob_start();
    $query = new WP_Query(array(
        "post_type" => "service",
        "posts_per_page" => 3,
        "order" => "ASC",
        "orderby" => "title",
    ));
    if ($query->have_posts()) {
        ?>
        <?php
        while ($query->have_posts()):
            $query->the_post(); ?>
            <div class="col-md-4">
                <div class="service-content">
                    <h2><?php echo the_title() ?></h2>
                    <?php echo the_post_thumbnail('service') ?>
                    <?php echo the_excerpt() ?>
                </div>
            </div>
        <?php endwhile;
        wp_reset_postdata() ?>
        <?php $myVariable = ob_get_clean();
        return $myVariable;
    }
}
add_shortcode("service", "service_short_code");