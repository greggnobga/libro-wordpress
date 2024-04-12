<?php /* Template Name: Book Layout */ ?>

<?php get_header(); ?>

<!-- Section -->
<section class="min-h-screen bg-gray-700">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
         <div class="bg-gray-800 border border-gray-700 rounded-lg p-8 md:p-12 mb-8">
            <!-- Heading -->
            <h1 class="text-white text-3xl md:text-5xl font-extrabold mb-4">Books</h1>

            <?php
                $latest_books = new WP_Query(array(
                    'post_per_page' => 10,
                    'post_type' => 'books',
                ));
                if ($latest_books->have_posts()) {
                    while($latest_books->have_posts()) {
                        $latest_books->the_post(); ?>
                        <!-- Card -->
                        <div class="grid grid-cols-1 md:grid-cols-4 pb-4">
                            <div class="col-span-1 aspect-w-16 aspect-h-9"><img class="h-48 w-full object-cover md:h-full md:w-48" src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel.svg" alt="" /></div>
                                <div class="col-span-3 border border-gray-700 p-2">
                                    <a href="<?php the_permalink(); ?>">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white"><?php echo wp_trim_words( get_the_title(), 25) ?></h5>
                                    </a>
                                    <div class="mb-3 font-normal text-gray-400">
                                        <?php echo wp_trim_words( get_the_content(), 50) ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  rounded-lg focus:ring-4 focus:outline-none bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                                        Read more
                                    </a>
                                </div>
                        </div>
                <?php } } else { ?>
                        <p class="mb-3 font-normal text-gray-400">No books published.</p>
               <?php } ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
