<?php

function custom_service()
{
    register_post_type("service", array(
        "labels" => array(
            "name" => "Services",
            "singular_name" => "Service",
            "add_new" => "Add New Service",
            "add_new_item" => "Add New Service",
            "edit_item" => "Edit Service",
            "view_item" => "View Service",
            "not_found" => "Sorry, no services found",
        ),
        "menu_icon" => "dashicons-networking",
        "public" => true,
        "publicly_queryable" => true,
        "exclude_from_search" => true,
        "menu_position" => 5,
        "has_archive" => true,
        "show_ui" => true,
        "taxonomies" => array('category'),
        "capability_type" => "post",
        "rewrite" => array("slug" => "service"),
        "supports" => array("title", "thumbnail", "editor"),
    ));
}

add_action("init", "custom_service");

// Global theme support for post thumbnails (only once)
add_theme_support("post-thumbnails");

// Enable post thumbnails specifically for 'post', 'page', and 'service'
add_theme_support("post-thumbnails", array('post', 'page', 'service'));


function custom_service_catgegory_post($query)
{
    if (is_category()) {
        $post_type = get_query_var('post_type');
        if ($post_type) {
            $post_type = $post_type;
        } else {
            $post_type = array("post", "service");
            $query->set('post_type', $post_type);
            return $query;
        }
    }
}
add_filter('pre_get_posts', 'custom_service_catgegory_post');