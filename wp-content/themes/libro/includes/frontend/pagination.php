<?php

/** Add rewrite rule and change setting > permalinks > optional value of category base to books. */
function lib_pagination()
{
    add_rewrite_rule(get_option('category_base') . '/page/?([0-9]{1,})/?$', 'index.php?pagename=' . get_option('category_base') . '&paged=$matches[1]', 'top');
}
