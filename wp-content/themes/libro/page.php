<?php get_header(); ?>

<!-- Section -->
<section class="min-h-screen bg-slate-300 mx-auto max-w-screen-3xl py-8 px-4 lg:py-12">
    <div class="bg-gray-200 border border-slate-100 rounded px-2 py-4 mb-8">
        <h1 class="p-2 text-3xl md:text-5xl font-extrabold mb-4"><?php the_title(); ?></h1>
        <div class="p-2">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
