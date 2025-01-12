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

// Add Meta Boxes for Price and Rating
function add_service_meta_boxes()
{
    add_meta_box(
        'service_price_rating',         // Meta box ID
        'Price and Rating',             // Title of the meta box
        'display_service_meta_box',     // Callback function to display fields
        'service',                      // Post type where this box should appear
        'normal',                       // Context (normal, side, etc.)
        'high'                          // Priority
    );
}
add_action('add_meta_boxes', 'add_service_meta_boxes');

// Display Price and Rating Meta Box
function display_service_meta_box($post)
{
    // Get current values
    $price = get_post_meta($post->ID, '_service_price', true);
    $rating = get_post_meta($post->ID, '_service_rating', true);

    // Output HTML for price and rating input fields
    ?>
    <label for="service_price">Price: </label>
    <input type="text" name="service_price" id="service_price" value="<?php echo esc_attr($price); ?>" />

    <label for="service_rating">Rating: </label>
    <input type="number" name="service_rating" id="service_rating" value="<?php echo esc_attr($rating); ?>" min="0" max="5"
        step="0.1" />
    <?php
}

// Save Meta Data
function save_service_meta_data($post_id)
{
    // Check if it's a valid save operation and not a WordPress autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;

    // Check if the post is a service
    if ('service' != get_post_type($post_id)) {
        return $post_id;
    }

    // Save Price
    if (isset($_POST['service_price'])) {
        update_post_meta($post_id, '_service_price', sanitize_text_field($_POST['service_price']));
    }

    // Save Rating
    if (isset($_POST['service_rating'])) {
        update_post_meta($post_id, '_service_rating', sanitize_text_field($_POST['service_rating']));
    }

    return $post_id;
}
add_action('save_post', 'save_service_meta_data');
