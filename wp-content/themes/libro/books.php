<?php /* Template Name: Books Layout */ ?>

<?php get_header(); ?>

<!-- Section -->
<section class="min-h-screen bg-gray-700">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
         <div class="bg-gray-800 border border-gray-700 rounded-lg p-8 md:p-12 mb-8">
            <!-- Heading -->
            <h1 class="text-white text-3xl md:text-5xl font-extrabold mb-4">Books</h1>

            <!-- Card -->
             <div class="grid grid-cols-1 md:grid-cols-4 pb-4">
                <div class="col-span-1 aspect-w-16 aspect-h-9"><img class="h-48 w-full object-cover md:h-full md:w-48" src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel.svg" alt="" /></div>
                <div class="col-span-3 border border-gray-700 p-2">
                    <h2 class="text-white text-2xl md:text-3xl font-extrabold mb-4">Title</h2>
                    <p class="text-gray-300 pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  rounded-lg focus:ring-4 focus:outline-none bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                        Read more
                    </a>
                </div>
             </div>

              <!-- Card -->
             <div class="grid grid-cols-1 md:grid-cols-4 pb-4">
                <div class="col-span-1 aspect-w-16 aspect-h-9"><img class="h-48 w-full object-cover md:h-full md:w-48" src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel.svg" alt="" /></div>
                <div class="col-span-3 border border-gray-700 p-2">
                    <h2 class="text-white text-2xl md:text-3xl font-extrabold mb-4">Title</h2>
                    <p class="text-gray-300 pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  rounded-lg focus:ring-4 focus:outline-none bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                        Read more
                    </a>
                </div>
             </div>

              <!-- Card -->
             <div class="grid grid-cols-1 md:grid-cols-4 pb-4">
                <div class="col-span-1 aspect-w-16 aspect-h-9"><img class="h-48 w-full object-cover md:h-full md:w-48" src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel.svg" alt="" /></div>
                <div class="col-span-3 border border-gray-700 p-2">
                    <h2 class="text-white text-2xl md:text-3xl font-extrabold mb-4">Title</h2>
                    <p class="text-gray-300 pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  rounded-lg focus:ring-4 focus:outline-none bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                        Read more
                    </a>
                </div>
             </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
