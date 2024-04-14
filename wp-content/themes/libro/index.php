<?php get_header(); ?>

<!-- Carousel -->
<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-800/30 group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-800/30 group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>


<!-- Section -->
<section class="bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
        <div class="bg-gray-800 border border-gray-700 rounded-lg p-8 md:p-12 mb-8">
            <h1 class="text-white text-3xl md:text-5xl font-extrabold mb-2">Go on an adventure with completely broken heroes.</h1>
            <p class="text-lg font-normal text-gray-400 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="/books" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  rounded-lg focus:ring-4 focus:outline-none bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                Read Books
            </a>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gray-800 border border-gray-700 rounded-lg p-8 md:p-12">
                <h2 class="text-white text-3xl font-extrabold mb-2">Take a look at us; we are happy to get acquainted with you better.</h2>
                <p class="text-lg font-normal text-gray-400 mb-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="/about" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  rounded-lg focus:ring-4 focus:outline-none bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">About Us</a>
            </div>
            <div class="bg-gray-800 border border-gray-700 rounded-lg p-8 md:p-12">
                <h2 class="text-white text-3xl font-extrabold mb-2">If you can't find what you're looking for, get in touch with us.</h2>
                <p class="text-lg font-normal text-gray-400 mb-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <a href="/contact" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  rounded-lg focus:ring-4 focus:outline-none bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<!-- Section -->
<section class="bg-gray-800">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
         <div class="bg-gray-800 border border-gray-700 rounded-lg p-8 md:p-12 mb-8">
            <h1 class="text-white text-3xl md:text-5xl font-extrabold mb-4">Latest Published Books</h1>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">
            <?php
                $latest_books = new WP_Query(array(
                    'post_type' => 'books',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC',
                ));
                if ($latest_books->have_posts()) {
                    while($latest_books->have_posts()) {
                        $latest_books->the_post(); ?>
                        <!-- Card -->
                        <div class="w-full rounded-lg shadow bg-gray-900 border-gray-700">
                            <a href="<?php the_permalink(); ?>">
                                <img class="rounded-t-lg" src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel.svg" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="<?php the_permalink(); ?>">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-white"><?php echo wp_trim_words( get_the_title(), 5) ?></h5>
                                </a>
                                <div class="mb-3 font-normal text-gray-400"><?php echo wp_trim_words( get_the_content(), 25) ?></div>
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
    </div>
</section>

<!-- Section -->
<section class="bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-6xl text-white">Looking for a web developer?</h1>
        <p class="mb-8 text-lg font-normal  lg:text-xl sm:px-16 lg:px-48 text-gray-400">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
        <div class="flex flex-col gap-2 space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="https://buntod.com/contact" target="_blank" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  rounded-lg focus:ring-4 focus:outline-none bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                Contact Us
            </a>
            <a href="https://buntod.com/" target="_blank" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium focus:outline-none rounded-lg border focus:z-10 focus:ring-4 bg-gray-800 text-gray-400 border-gray-700 hover:text-gray-200 hover:bg-gray-700">
                Our Portfolio
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
