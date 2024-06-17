<?php

/** Enqueue libro scripts. */
function lib_enqueue() {
    /** Register style. */
    wp_register_style('lib_styles', get_template_directory_uri() . '/assets/bundle/main.css');
    wp_register_style('lib_hamburger', get_template_directory_uri() . '/assets/vendor/hamburger.css');

    /** Enqueque style. */
    wp_enqueue_style('lib_styles');
    wp_enqueue_style('lib_hamburger');

    /** Register script. */
    wp_register_script('lib_scripts', get_template_directory_uri() . '/assets/bundle/main.js', array(), false, true);

    /** Enqueque script. */
    wp_enqueue_script('lib_scripts');
}

?>
