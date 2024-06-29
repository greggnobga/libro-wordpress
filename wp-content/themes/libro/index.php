<!-- Call header function.-->
<?php get_header(); ?>

<!-- Main content.-->
<main class="min-h-screen">
    <!-- Carousel -->
    <section class='svelte-carousel max-w-screen-3xl py-8 px-4 lg:py-12'></section>

    <!-- Section -->
    <section class="bg-slate-300 mx-auto max-w-screen-3xl py-8 px-4 lg:py-12">
        <div class="bg-slate-100 border-1 border-slate-500 rounded p-8 md:p-12 mb-8">
            <h1 class="text-luxor text-3xl md:text-5xl font-extrabold mb-2">Go on an adventure with completely broken heroes.</h1>
            <p class="text-lg font-normal text-slate-600 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="/books" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-slate-100  rounded focus:ring-4 focus:outline-none bg-luxor hover:bg-hokey hover:text-coast focus:ring-energy">
                Read Books
            </a>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-slate-100 border-1 border-slate-500 rounded p-8 md:p-12">
                <h2 class="text-coast text-3xl font-extrabold mb-2">Take a look at us; we are happy to get acquainted with you better.</h2>
                <p class="text-lg font-normal text-slate-600 mb-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="/about" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-slate-100 rounded focus:ring-4 focus:outline-none bg-luxor hover:bg-hokey hover:text-coast focus:ring-energy">About Us</a>
            </div>
            <div class="bg-slate-100 border-1 border-slate-500 rounded p-8 md:p-12">
                <h2 class="text-coast text-3xl font-extrabold mb-2">If you can't find what you're looking for, get in touch with us.</h2>
                <p class="text-lg font-normal text-slate-600 mb-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <a href="/contact" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-slate-100  rounded focus:ring-4 focus:outline-none bg-luxor hover:bg-hokey hover:text-coast focus:ring-energy">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Section -->
    <section class="grid grid-cols-1 md:grid-cols-12 bg-gray-200 max-w-screen-3xl py-8 px-4 lg:py-12">
        <div class="md:col-span-8">
            <div class="col-span-8">
                <h2 class="py-2 px-4">Latest Books</h2>
            </div>
            <div class="container mx-auto py-2 px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <?php
                $latest_books = new WP_Query(array(
                    'post_type' => 'books',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC',
                ));
                if ($latest_books->have_posts()) {
                    while ($latest_books->have_posts()) {
                        $latest_books->the_post(); ?>
                        <!-- Card -->
                        <div class="cols-span-1 flex flex-col bg-slate-100 border border-slate-200 rounded p-2 hover:bg-slate-200 hover:border-slate-100 shadow hover:scale-95 transition delay-100 duration-300 ease-in-out">
                            <h2 class="mb-2 font-bold text-sm">
                                <a href="<?php the_permalink(); ?>" class="hover:text-luxor">
                                    <?php echo wp_trim_words(get_the_title(), 10) ?>
                                </a>
                            </h2>
                            <div class="mb-2 flex flex-wrap aspect-w-16 aspect-h-9">
                                <?php if (has_post_thumbnail($post->id)) { ?>
                                    <img class="rounded-t-md w-full h-48 object-cover overflow-hidden" src="<?php echo get_the_post_thumbnail_url($post->id); ?>" alt="" />
                                <?php } else { ?>
                                    <img class="rounded-t-md w-full h-48 object-cover overflow-hidden" src="<?php echo get_template_directory_uri(); ?>/assets/images/bookworm.jpg" alt="" />
                                <?php } ?>
                            </div>
                            <div class="text-xs">
                                <?php echo wp_trim_words(get_the_content(), 25) ?>
                            </div>
                            <div class="flex flex-wrap mt-auto pt-3 text-xs">
                                <?php $posttags = get_the_tags();
                                if ($posttags) {
                                    foreach ($posttags as $bkey => $bvalue) {
                                        if ($bkey <= 3) { ?>
                                            <p class="mr-2 mb-2"><?php echo $bvalue->name; ?></p>
                                <?php }
                                    }
                                } ?>
                            </div>
                            <div class="flex flex-wrap text-xs justify-end items-center">
                                <a href="<?php the_permalink(); ?>" class="inline-flex items-center px-2 py-1 text-xs font-thin text-center text-slate-100 rounded focus:ring-4 focus:outline-none bg-luxor hover:bg-hokey hover:text-coast focus:ring-energy">
                                    Read more
                                </a>
                            </div>
                        </div>
                    <?php }
                } else { ?>
                    <p class="mb-3 font-normal text-gray-400">No books published.</p>
                <?php } ?>
            </div>
        </div>
        <div class="md:col-span-4">
            <div class="col-span-4">
                <h2 class="py-2 px-4">Latest Posts</h2>
            </div>
            <div class="container mx-auto py-2 px-4 grid grid-cols-1 gap-4">
                <?php
                $latest_posts = new WP_Query(array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 2,
                    'orderby' => 'date',
                    'order' => 'DESC',
                ));
                if ($latest_posts->have_posts()) {
                    while ($latest_posts->have_posts()) {
                        $latest_posts->the_post(); ?>
                        <!-- Card -->
                        <div class="grid grid-cols-6 bg-slate-100 border border-slate-200 rounded p-2 hover:bg-slate-200 hover:border-slate-100 shadow hover:scale-95 transition delay-100 duration-300 ease-in-out">
                            <div class="col-span-2 px-2 flex flex-wrap">
                                <div class="mb-2 flex flex-wrap aspect-w-16 aspect-h-9">
                                    <?php if (has_post_thumbnail($post->id)) { ?>
                                        <img class="rounded-t-md w-full h-32 object-cover overflow-hidden" src="<?php echo get_the_post_thumbnail_url($post->id); ?>" alt="" />
                                    <?php } else { ?>
                                        <img class="rounded-t-md w-full h-32 object-cover overflow-hidden" src="<?php echo get_template_directory_uri(); ?>/assets/images/bookworm.jpg" alt="" />
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-span-4 px-2 flex flex-wrap">
                                <h2 class="mb-2 font-bold text-sm">
                                    <a href="<?php the_permalink(); ?>" class="hover:text-luxor">
                                        <?php echo wp_trim_words(get_the_title(), 10) ?>
                                    </a>
                                </h2>
                                <div class="text-xs">
                                    <?php echo wp_trim_words(get_the_content(), 25) ?>
                                </div>
                                <div class="flex flex-wrap mt-auto pt-3 text-xs">
                                    <?php $posttags = get_the_tags();
                                    if ($posttags) {
                                        foreach ($posttags as $pkey => $pvalue) {
                                            if ($pkey <= 3) {
                                    ?>
                                                <p class="mr-2 mb-2"><?php echo $pvalue->name; ?></p>
                                    <?php }
                                        }
                                    } ?>
                                </div>
                            </div>
                            <div class="col-span-6 px-2 flex flex-wrap text-xs justify-end items-center">
                                <a href="<?php the_permalink(); ?>" class="inline-flex items-center px-2 py-1 text-xs font-thin text-center text-slate-100 rounded focus:ring-4 focus:outline-none bg-luxor hover:bg-hokey hover:text-coast focus:ring-energy">
                                    Read more
                                </a>
                            </div>
                        </div>
                    <?php }
                } else { ?>
                    <p class="mb-3 font-normal text-gray-400">No posts published.</p>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Section -->
    <section class="bg-slate-300 mx-auto max-w-screen-3xl py-16 px-4">
        <h1 class="mb-4 text-center text-4xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-6xl text-luxor">Looking for full stack web developer?</h1>
        <p class="mb-8 text-lg font-normal  lg:text-xl sm:px-16 lg:px-48 text-slate-500">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
        <div class="flex flex-col gap-2 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 w-full">
            <a href="https://buntod.com/contact" target="_blank" class="py-2.5 px-5 text-center me-2 mb-2 text-sm font-medium focus:outline-none rounded border focus:z-10 focus:ring-4 bg-luxor text-slate-100 border-slate-300 hover:text-slate-100 hover:bg-hokey">
                Contact Us
            </a>
        </div>
    </section>
</main>

<!-- Call footer function.-->
<?php get_footer(); ?>
