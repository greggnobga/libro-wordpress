<?php get_header(); ?>

<!-- Section -->
<section class="min-h-screen bg-gray-700">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
         <!-- Wrapper -->
         <div class="bg-gray-800 rounded-lg p-8 md:p-12 mb-8">
            <!-- Card -->
            <div class="grid grid-cols-1 md:grid-cols-4">
                <div class="col-span-1 aspect-w-16 aspect-h-9 p-2">
                    <img class="pb-2 h-48 w-full object-cover md:h-full md:w-48" src="<?php echo get_template_directory_uri(); ?>/assets/images/carousel.svg" alt="" />
                    <p class="py-1 font-thin text-gray-400"><?php the_category(); ?></p>
                    <p class="py-1 font-thin text-gray-400"><?php the_tags(); ?></p>
                    <p class="py-1 font-thin text-gray-400">Posted: <?php $post_date = get_the_date( 'l F j, Y' ); echo $post_date; ?></p>
                </div>
                <div class="col-span-3 p-2">
                    <a href="#">
                        <h5 class="pb-2 mb-2 text-2xl font-bold tracking-tight text-white border-b border-gray-700"><?php the_title(); ?></h5>
                    </a>
                    <div class="mb-3 font-normal text-gray-400">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
