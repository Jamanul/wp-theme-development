<?php

add_theme_support("title-tag");
//thumbnail Image Area
// add_theme_support("post_thumbnails", array('page', 'post'));
// add_image_size("custom_post_thumbnail", 970, 350, true);
// Enable featured images for posts and pages
add_theme_support("post_thumbnails", array('post', 'page'));

// Define custom image size (optional, based on your needs)
add_image_size("custom_post_thumbnail", 970, 350, true);

//excert to 40 words
function skb_excerpt_more($more)
{
    global $post;

    // Only show the "Read More" button on archive pages (not single post pages)
    if (!is_single()) {
        return '<br/><a class="read_more" href="' . get_permalink($post->ID) . '">' . 'Read More' . '</a>';
    }

    // Otherwise, return an empty string for the single post page
    return '';
}
add_filter('excerpt_more', 'skb_excerpt_more');

// Set the excerpt length
function skb_excerpt_length($length)
{
    if (!is_single()) {
        return 40;
    } // Set the number of words for the excerpt
    return 9999;
}
add_filter('excerpt_length', 'skb_excerpt_length');

function skb_pageNav()
{
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if (!$current = get_query_var('paged'))
        $current = 1;
    $args['base'] = str_replace(9999999, '%#%', get_pagenum_link(9999999));
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1;
    $args['prev_text'] = "prev";
    $args['next_text'] = "Next";
    if ($max > 1)
        echo '</pre> <div class="wp_pagenav">';
    if ($total == 1 && $max > 1)
        $pages = '<p class="pages"> Page' . $current . '<span>of</span>' . $max . '</p>';
    echo $pages . paginate_links($args);
    if ($max > 1)
        echo '</div><pre>';
}