<?php

function lib_widgets() {
    register_sidebar(array(
        'name'          => __('Libro Sidebar', 'libro'),
        'id'            => 'lib_sidebar',
        'description'   => 'Sidebar for libro.',
        'class'         => '',
    ));
}

?>
