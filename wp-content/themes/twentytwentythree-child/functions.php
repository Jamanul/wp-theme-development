<?php

function skb_child_theme_calling()
{
    wp_enqueue_style("skb-child-style", get_stylesheet_uri());
    wp_enqueue_style("styles");

}

add_action("wp_enqueue_scripts", "skb_child_theme_calling", PHP_INT_MAX);