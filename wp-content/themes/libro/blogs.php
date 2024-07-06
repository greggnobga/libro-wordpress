<?php /* Template Name: Blogs Layout */ ?>

<?php get_header(); ?>

<!-- Section -->
<section class="min-h-screen bg-slate-300 mx-auto max-w-screen-3xl py-8 px-4 lg:py-12">
    <!-- Wrapper -->
    <div class="bg-gray-200 border border-slate-100 rounded px-2 py-4 mb-8">
        <!-- Heading -->
        <h1 class="text-3xl md:text-5xl font-extrabold mb-4">Posts</h1>
        <!-- Card -->
        <?php
        $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $latest_posts = new WP_Query(array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'paged' => $current_page,
            'orderby' => 'date',
            'order' => 'DESC',
        ));
        if ($latest_posts->have_posts()) {
            while ($latest_posts->have_posts()) {
                $latest_posts->the_post(); ?>
                <div class="grid grid-cols-1 md:grid-cols-4 pb-4 border-b border-slate-100 md:gap-4">
                    <div class="col-span-1 aspect-w-16 aspect-h-9 p-2">
                        <?php if (has_post_thumbnail($post->id)) { ?>
                            <img class="w-full h-44 object-cover overflow-hidden rounded" src="<?php echo get_the_post_thumbnail_url($post->id, 'thumbnail'); ?>" alt="" />
                        <?php } else { ?>
                            <img class="w-full h-44 object-cover overflow-hidden rounded" src="<?php echo get_template_directory_uri(); ?>/assets/images/bookworm.jpg" alt="" />
                        <?php } ?>
                    </div>
                    <div class="col-span-3 p-2">
                        <a href="<?php the_permalink(); ?>">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-slate-700 hover:text-hokey"><?php echo wp_trim_words(get_the_title(), 25) ?></h5>
                        </a>
                        <div class="mb-3 font-normal text-slate-600">
                            <?php echo wp_trim_words(get_the_content(), 40) ?>
                        </div>
                        <div class="flex justify-end items-center">
                            <a href="<?php the_permalink(); ?>" class="inline-flex items-center px-2 py-1 text-xs font-thin text-center text-slate-100 rounded focus:ring-4 focus:outline-none bg-luxor hover:bg-hokey hover:text-coast focus:ring-energy">
                                Read more
                            </a>
                        </div>

                    </div>
                </div>
            <?php }
        } else { ?>
            <p class="mb-3 font-normal text-gray-400">No books published.</p>
        <?php } ?>
    </div>
    <div class="pagination">
        <?php lib_pagination($latest_posts); ?>
    </div>
    <?php wp_reset_postdata(); ?>
</section>

<?php get_footer(); ?>
