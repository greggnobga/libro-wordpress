<?php

/** Post types. */
function book_post_types()
{
    register_post_type('books', array(
        'supports' => array('title', 'editor'),
        'rewrite' => array('slug' => 'books'),
        'public' => true,
        'labels' => array(
            'name' => 'Books',
            'add_new_item' => 'Add New Book',
            'edit_item' => 'Edit Book',
            'all_items' => 'All Books',
            'singular_name' => 'Book'
        ),
        'menu_icon' => 'dashicons-book',
        'has_archive' => true,
    ));
}

/** Actions and filter hooks. */
add_action('init', 'book_post_types');
