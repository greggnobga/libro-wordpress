<?php

/** Setup. */
add_theme_support('post-thumbnails');

/** Includes. */
include(get_template_directory() . '/includes/frontend/enqueue.php');
include(get_template_directory() . '/includes/frontend/tags.php');
include(get_template_directory() . '/includes/frontend/pagination.php');
include(get_template_directory() . '/includes/setup.php');

/** Actions and filter hooks. */
add_action('wp_enqueue_scripts', 'lib_enqueue');
add_action('after_setup_theme', 'lib_setup');
add_action('init', 'lib_tags');

/** Shortcodes. */
