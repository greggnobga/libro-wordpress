<script>
    /** Import from svelte. */
    import Carousel from 'svelte-carousel';

    let images = [
        { title: 'Ascendance Of A Bookworm', source: '/wp-content/themes/libro/assets/images/bookworm.jpg' },
        { title: 'A Late Start Tamer Laid Back Life', source: '/wp-content/themes/libro/assets/images/tamer.jpg' },
        { title: 'Campfire Cooking In Another World', source: '/wp-content/themes/libro/assets/images/campfire.jpg' },
    ];
</script>

<div class="svelte-carousel mt-2">
    <Carousel let:loaded loaded autoplay autoplayDuration={5000}>
        {#each images as image, imageIndex (image)}
            <div class="w-full h-[45vh] flex flex-col gap-2 justify-center items-center">
                {#if loaded.includes(imageIndex)}
                    <img
                        class="object-fill h-auto w-full rounded-md overflow-hidden"
                        src={image.source}
                        alt={image.title} />
                    <p class="text-slate-500 text-sm md:text-md lg:text-lg">{image.title}</p>
                {/if}
            </div>
        {/each}
    </Carousel>
</div>

<style>
</style>
