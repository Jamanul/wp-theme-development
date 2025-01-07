<?php

function skb_widgets_register()
{
    register_sidebar(array(
        "name" => __("Main widget Area", "sakib"),
        "id" => "sidebar-1",
        "description" => __("appears in the widget setting", "sakib"),
        "before_widget" => "<div class='child_sidebar'>",
        "after_widget" => "</div>",
        "before_title" => "<h2 class='title'>",
        "after_title" => "</h2>",
    ));
}
;
add_action("widgets_init", "skb_widgets_register");