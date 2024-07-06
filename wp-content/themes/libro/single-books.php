<?php get_header(); ?>

<!-- Section -->
<section class="min-h-screen bg-slate-300 mx-auto max-w-screen-3xl py-8 px-4 lg:py-12">
    <!-- Wrapper -->
    <div class="bg-gray-200 border border-slate-100 rounded px-2 py-4 mb-8">
        <div class="grid grid-cols-1 md:grid-cols-8 md:gap-4">
            <div class="col-span-2">
                <div class="aspect-w-16 aspect-h-9 p-2 ">
                    <img class="w-full h-48 md:h-auto object-cover overflow-hidden rounded border border-slate-100 shadow hover:scale-95 transition-image" src="<?php echo get_the_post_thumbnail_url($post->id, 'thumbnail'); ?>" alt="" />
                </div>
                <div class="grid grid-cols-2 pb-4">
                    <div class='flex justify-start items-center p-2'>
                        <svg class="w-5 h-5 mr-2" fill="#D2A134">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#author"></use>
                        </svg>
                        <p class="text-xs uppercase text-slate-800"><?php echo get_the_author_meta('display_name', $post->post_author); ?></p>
                    </div>
                    <div class='flex justify-start items-center p-2'>
                        <svg class="w-4 h-4 mr-1" fill="#D2A134">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#date"></use>
                        </svg>
                        <p class="text-xs uppercase text-slate-800"><?php echo get_the_date(); ?></p>
                    </div>
                </div>
                <div class='flex justify-center items-center p-2 text-sm w-full border border-green-500'>
                    Add Like Button
                </div>
            </div>
            <div class="col-span-6">
                <h5 class="pb-2 text-2xl font-bold tracking-tight"><?php the_title(); ?></h5>
                <div class="text-xs border-b border-slate-100 pb-2 flex justify-start items-center">
                    <svg class="w-4 h-4 mr-1" fill="#D2A134">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#category"></use>
                    </svg>
                    <p class="uppercase text-hokey">
                        <?php $postcategories = get_the_category($post->id);
                        if ($postcategories) {
                            foreach ($postcategories as $ckey => $cvalue) {
                                if ($ckey <= 3) { ?>
                                    <span class="mr-2 mb-2 uppercase text-slate-800"><?php echo $cvalue->name; ?></span>
                        <?php }
                            }
                        } ?>
                    </p>
                </div>
                <div class="p-4">
                    <p class="pb-2"><?php the_content(); ?></p>
                </div>
                <div class="text-xs border-t border-slate-100 pb-2 flex justify-end items-center">
                    <svg class="w-4 h-4 mr-1" fill="#D2A134">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#tag"></use>
                    </svg>
                    <p class="uppercase text-hokey p-2">
                        <?php $posttags = get_the_tags();
                        if ($posttags) {
                            foreach ($posttags as $pkey => $pvalue) {
                                if ($pkey <= 3) {
                        ?>
                                    <span class="mr-2 mb-2 uppercase text-slate-800"><?php echo $pvalue->name; ?></span>
                        <?php }
                            }
                        } ?>
                    </p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
