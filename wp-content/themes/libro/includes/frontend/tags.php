<?php

/** Add tag support to custom post type. */
function lib_tags()
{
    register_taxonomy_for_object_type('post_tag', 'books');
};
