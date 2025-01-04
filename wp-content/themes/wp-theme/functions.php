<?php
/**
 * My theme function
 */

// theme title
add_theme_support("title-tag");
// theme css and jquery calling
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
// theme customization
/*
    sakib is Text Domain
*/ 
function skb_customize_register($wp_customize) {
    // Add a new section for the header area
    $wp_customize->add_section('skb_header_area', array(
        'title'       => __('Header Area', 'sakib'),
        'description' => __('If you are interested, you can change the header logo here.', 'sakib'),
    ));

    // Add a setting for the logo
    $wp_customize->add_setting('skb_logo', array(
        'default' => get_template_directory_uri() . '/img/rb_52.png', // Using get_template_directory_uri() for the URL
    ));

    // Add a control for uploading the logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'skb_logo', array(
        'label'       => __('Logo Upload', 'sakib'),
        'description' => __('Upload a logo for the header area. If you are interested, you can change it here.', 'sakib'),
        'setting'     => 'skb_logo',
        'section'     => 'skb_header_area',
    )));
}
add_action('customize_register', 'skb_customize_register');
