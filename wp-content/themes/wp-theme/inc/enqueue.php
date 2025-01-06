<?php
function skb_css_js_file_calling()
{
    wp_enqueue_style("skb-style", get_stylesheet_uri());
    wp_register_style("bootstrap", get_template_directory_uri() . "/css/bootstrap.css", [], "5.0.2", "all");
    wp_enqueue_style("bootstrap");
    wp_register_style("styles", get_template_directory_uri() . "/css/styles.css", [], "1.0.0", "all");
    wp_enqueue_style("styles");
    wp_enqueue_script("jquery");
    wp_enqueue_script("bootstrap", get_template_directory_uri() . "/js/bootstrap.js", [], "5.0.2", true);
    wp_enqueue_script("main", get_template_directory_uri() . "/js/main.js", [], "1.0.0", true);
}
add_action("wp_enqueue_scripts", "skb_css_js_file_calling");
// Google Fonts Enqueue
function skb_add_google_fonts()
{
    wp_enqueue_style("skb_google_fonts", "https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap");
}
add_action("wp_enqueue_scripts", "skb_add_google_fonts");