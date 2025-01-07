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
    return '<br/> <a class="read_more" href="' . get_permalink($post->ID) . '">' . 'Read More' . '</a>';
}
;
add_filter('excerpt_more', 'skb_excerpt_more');
function skb_excerpt_length($length)
{
    return 40;
}
add_filter('excerpt_length', 'skb_excerpt_length');