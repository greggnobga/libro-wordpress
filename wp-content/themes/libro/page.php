<?php get_header(); ?>

<!-- Section -->
<section class="min-h-screen bg-gray-700">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
         <div class="bg-gray-800 border border-gray-700 rounded-lg p-8 md:p-12 mb-8">
            <h1 class="text-gray-200 text-3xl md:text-5xl font-extrabold mb-4"><?php the_title(); ?></h1>
            <div class="text-gray-200">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
