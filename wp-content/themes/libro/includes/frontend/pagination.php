<?php
function lib_pagination($query)
{
    $total_pages = $query->max_num_pages;
    if ($total_pages > 1) {
        $current_page = max(1, get_query_var('paged'));
        $page_links = paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => 'page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'show_all' => false,
            'end_size' => 2,
            'mid_size' => 2,
            'type' => 'plain',
            'prev_text'    => __('Prev'),
            'next_text'    => __('Next'),
        ));
        if (!str_contains($page_links, 'class="prev')) {
            $page_links = '<span class="prev page-numbers placeholder-prevnext">Prev</span>' . $page_links;
        }
        if (!str_contains($page_links, 'class="next')) {
            $page_links .= '<span class="next page-numbers placeholder-prevnext">Next</span>';
        }
        echo $page_links;
    }
}
