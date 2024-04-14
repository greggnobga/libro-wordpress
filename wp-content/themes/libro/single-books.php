<?php get_header(); ?>

<!-- Section -->
<section class="min-h-screen bg-gray-700">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
         <!-- Wrapper -->
         <div class="bg-gray-800 rounded-lg p-8 md:p-12 mb-8">
            <!-- Card -->
            <div class="grid grid-cols-1 md:grid-cols-4">
                <div class="col-span-1 aspect-w-16 aspect-h-9 p-2">
                    <img class="h-48 w-full object-cover md:h-full md:w-48" src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel.svg" alt="" />
                </div>
                <div class="col-span-3 p-2">
                    <a href="#">
                        <h5 class="pb-2 mb-2 text-2xl font-bold tracking-tight text-white border-b border-gray-700"><?php the_title(); ?></h5>
                    </a>
                    <div class="mb-3 font-normal text-gray-400">
                        <p class="pb-2">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-3 px-2 py-4 text-gray-400">
                <p>Genre: Slice Of Life</p>
                <p>Author: Satoshi Nakamoto</p>
                <p>Rating: *****</p>
            </div>
            <div class="grid grid-cols-1 border border-gray-700 px-2 py-4 text-gray-400">
                <h3>Content</h3>
                <p class="pb-2"><?php the_content(); ?></p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
