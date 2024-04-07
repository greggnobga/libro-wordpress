<?php
/** Post types. */
function calendar_post_types() {
    register_post_type( 'calendar', array(
        'public' => true,
        'labels' => array(
                'name' => 'Calendar',
                'add_new_item' => 'Add New Calendar',
                'edit_item' => 'Edit Calendar',
                'all_items' => 'All Calendar',
                'singular_name' => 'Calendar'
            ),
        'menu_icon' => 'dashicons-calendar',

    ));
}

/** Actions and filter hooks. */
add_action('init', 'calendar_post_types');
