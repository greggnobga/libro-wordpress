<h1>Sidebar</h1>
<?php

/** Check if sidebar is active. */
if (is_active_sidebar('lib_sidebar')) {
    dynamic_sidebar('lib_sidebar');
}

?>
