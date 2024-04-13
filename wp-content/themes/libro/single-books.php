<?php get_header(); ?>

<!-- Section -->
<section class="min-h-screen bg-gray-700">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
         <!-- Wrapper -->
         <div class="bg-gray-800 rounded-lg p-8 md:p-12 mb-8">
            <!-- Card -->
            <div class="grid grid-cols-1 md:grid-cols-4 pb-4">
                <div class="col-span-1 aspect-w-16 aspect-h-9 p-2">
                    <img class="h-48 w-full object-cover md:h-full md:w-48" src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel.svg" alt="" />
                    <p>Genre: </p>
                    <p>Author: </p>
                    <p>Rating: </p>
                </div>
                <div class="col-span-3 p-2">
                    <a href="#">
                        <h5 class="pb-2 mb-2 text-2xl font-bold tracking-tight text-white border-b border-gray-700">Title</h5>
                    </a>
                    <span>Date Posted: </span>
                    <div class="mb-3 font-normal text-gray-400">
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 border border-gray-700">
                   <p>Download link...</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
