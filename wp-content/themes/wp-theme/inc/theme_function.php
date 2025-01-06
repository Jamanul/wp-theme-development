<?php
function skb_customize_register($wp_customize)
{
    // Add a new section for the header area
    $wp_customize->add_section('skb_header_area', array(
        'title' => __('Header Area', 'sakib'),
        'description' => __('If you are interested, you can change the header logo here.', 'sakib'),
    ));

    // Add a setting for the logo
    $wp_customize->add_setting('skb_logo', array(
        'default' => get_template_directory_uri() . '/img/rb_52.png', // Using get_template_directory_uri() for the URL
    ));

    // Add a control for uploading the logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'skb_logo', array(
        'label' => __('Logo Upload', 'sakib'),
        'description' => __('Upload a logo for the header area. If you are interested, you can change it here.', 'sakib'),
        'setting' => 'skb_logo',
        'section' => 'skb_header_area',
    )));
    // menu position
    $wp_customize->add_section("skb_menu_options", array(
        "title" => __("menu position option", "sakib"),
        'description' => __('If you are interested, you can change the menu position here.', 'sakib'),
    ));
    $wp_customize->add_setting('skb_menu_position', array(
        "default" => "right_menu",
    ));
    $wp_customize->add_control("skb_menu_position", array(
        'label' => "menu position",
        'description' => __('If you are interested, you can change the menu position here.', 'sakib'),
        "setting" => "skb_menu_position",
        "section" => "skb_menu_options",
        "type" => "radio",
        "choices" => array(
            "left_menu" => __("left menu", "sakib"),
            "center_menu" => __("center menu", "sakib"),
            "right_menu" => __("right menu", "sakib"),
        )
    ));
    // footer section
    $wp_customize->add_section("skb_footer_section", array(
        "title" => __("footer section", "sakib"),
        'description' => __('If you are interested, you can change the footer here.', 'sakib'),
    ));
    $wp_customize->add_setting("skb_footer_add", array(
        "default" => "&copy; Copyright | skb",
    ));
    $wp_customize->add_control("skb_footer_add", array(
        "label" => "footer",
        'description' => __('If you are interested, you can change the footer here.', 'sakib'),
        'setting' => 'skb_footer_add',
        'section' => 'skb_footer_section',
    ));
}
add_action('customize_register', 'skb_customize_register');