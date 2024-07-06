<?php get_header(); ?>

<!-- Section -->
<section class="min-h-screen bg-slate-300 mx-auto max-w-screen-3xl py-8 px-4 lg:py-12">
    <!-- Wrapper -->
    <div class="bg-gray-200 border border-slate-100 rounded py-2 px-4 mb-8">
        <!-- Heading -->
        <h1 class="text-3xl md:text-2xl font-extrabold mb-4">Books</h1>
        <!-- Card -->
        <div class="mb-6 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 py-2 px-4 gap-4">
            <?php
            $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $latest_books = new WP_Query(array(
                'post_type' => 'books',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'paged' => $current_page,
                'orderby' => 'date',
                'order' => 'DESC',
            ));
            if ($latest_books->have_posts()) {
                while ($latest_books->have_posts()) {
                    $latest_books->the_post(); ?>
                    <div class="flex flex-col bg-slate-100 border border-gray-100 rounded hover:border-slate-100 hover:bg-slate-200 shadow hover:scale-95 transition-image">
                        <div class="h-48 rounded">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail($post->id)) { ?>
                                    <img class="rounded-t-md w-full h-48 object-cover overflow-hidden border hover:border-slate-100 hover:scale-105 transition-image" src="<?php echo get_the_post_thumbnail_url($post->id); ?>" alt="" />
                                <?php } else { ?>
                                    <img class="rounded-t-md w-full h-48 object-cover overflow-hidden border hover:border-slate-100 hover:scale-105 transition-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/bookworm.jpg" alt="" />
                                <?php } ?>
                            </a>
                        </div>
                        <div class="px-1 py-2 text-xs text-center font-thin">
                            <div class="inline-flex justify-center items-center px-2" title="Volume">
                                <svg class="w-4 h-4" fill="#D2A134">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#volume"></use>
                                </svg>
                                <p class="pl-1">12</p>
                            </div>
                            <div class="inline-flex justify-center items-center px-2" title="Download">
                                <svg class="w-4 h-4" fill="#D2A134">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#download"></use>
                                </svg>
                                <p class="pl-1">100</p>
                            </div>
                            <div class="inline-flex flex-wrap justify-center items-center px-2" title="Like">
                                <svg class="w-4 h-4" fill="#D2A134">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#like"></use>
                                </svg>
                                <p class="pl-1">999</p>
                            </div>
                        </div>
                        <div class="px-1 py-2 text-sm text-center min-h-12" title="Title">
                            <div class="inline-flex flex-wrap justify-center items-center px-2" title="Like">
                                <a href="<?php the_permalink(); ?>" class="hover:text-luxor">
                                    <?php echo wp_trim_words(get_the_title(), 10) ?>
                                </a>
                            </div>
                        </div>
                        <div class="px-2 py-2 text-xs font-thin">
                            <div class="flex flex-wrap justify-start items-center" title="Tags">
                                <svg class="w-4 h-4 mr-2 mb-2" fill="#D2A134">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#tag"></use>
                                </svg>
                                <?php $posttags = get_the_tags();
                                if ($posttags) {
                                    foreach ($posttags as $bkey => $bvalue) {
                                        if ($bkey <= 2) { ?>
                                            <p class="mr-2 mb-2"><?php echo $bvalue->name; ?></p>
                                <?php }
                                    }
                                } ?>
                            </div>
                        </div>
                    </div>
                <?php }
            } else { ?>
                <p class="mb-3 font-normal text-gray-400">No books published.</p>
            <?php }

            ?>
        </div>
        <div class="pagination">
            <?php lib_pagination($latest_books); ?>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>
</section>

<?php get_footer(); ?>
