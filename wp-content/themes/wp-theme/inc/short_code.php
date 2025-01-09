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