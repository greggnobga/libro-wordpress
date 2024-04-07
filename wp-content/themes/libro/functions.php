<?php

/** Setup. */
add_theme_support('menus');

/** Includes. */
include(get_template_directory() . '/includes/frontend/enqueue.php');
include(get_template_directory() . '/includes/setup.php');
include(get_template_directory() . '/includes/widgets.php');

/** Actions and filter hooks. */
add_action('wp_enqueue_scripts', 'lib_enqueue');
add_action('after_setup_theme', 'lib_setup_menu');
add_action('widgets_init', 'lib_widgets');

/** Shortcodes. */
