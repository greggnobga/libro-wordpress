<?php

/** Enqueue libro scripts. */
function lib_enqueue() {
    /** Register style. */
    wp_register_style('lib_tailwind', get_template_directory_uri() . '/assets/style.css');
    wp_register_style('lib_hamburger', get_template_directory_uri() . '/assets/vendor/hamburger.css');
    wp_register_style('lib_flowbite', get_template_directory_uri() . '/assets/vendor/flowbite.css');

    /** Enqueque style. */
    wp_enqueue_style('lib_tailwind');
     wp_enqueue_style('lib_hamburger');
    wp_enqueue_style('lib_flowbite');

    /** Register script. */
    wp_register_script('lib_javascipt', get_template_directory_uri() . '/assets/scripts/app.js', array(), false, true);
    wp_register_script('lib_flowbite', get_template_directory_uri() . '/assets/vendor/flowbite.js', array(), false, true);

    /** Enqueque script. */
    wp_enqueue_script('jquery');
    wp_enqueue_script('lib_javascript');
    wp_enqueue_script('lib_flowbite');
}

?>
