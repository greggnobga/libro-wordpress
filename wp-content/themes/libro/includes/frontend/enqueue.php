<?php

/** Enqueue libro scripts. */
function lib_enqueue() {
    /** Register style. */
    wp_register_style('lib_tailwind', get_template_directory_uri() . '/assets/style.css');

    /** Enqueque style. */
    wp_enqueue_style('lib_tailwind');

    /** Register script. */
    wp_register_script('lib_javascipt', get_template_directory_uri() . '/assets/scripts/app.js', array(), false, true);

    /** Enqueque script. */
    wp_enqueue_script('jquery');
    wp_enqueue_script('lib_javascript');
}

?>
