<script>
    /** Import from svelte. */
    import Carousel from 'svelte-carousel';

    let images = [
        {
            title: 'Ascendance Of A Bookworm',
            source: '/wp-content/themes/libro/assets/images/bookworm.jpg',
            description:
                'A certain college girl who loved books ever since she was a little girl dies in an accident and is reborn in another world she knows nothing about.',
            tags: ['isekai', 'books', 'fantasy', 'medieval', 'food', 'magic', 'sword', 'monster'],
        },
        {
            title: 'A Late Start Tamer Laid Back Life',
            source: '/wp-content/themes/libro/assets/images/tamer.jpg',
            description:
                'Yuta is chomping at the bit to start his virtual life as a Tamer, a class that harnesses the powers of wild monsters.',
            tags: ['fantasy', 'gaming', 'virtual reality', 'adventure', 'monster', 'slice of life'],
        },
        {
            title: 'Campfire Cooking In Another World',
            source: '/wp-content/themes/libro/assets/images/campfire.jpg',
            description:
                'Mukoda Tsuyoshi may not be a hero, but this conjuring error has given him a delicious power of online grocery.',
            tags: ['isekai', 'cooking', 'gourmet', 'camping', 'shopping', 'taming'],
        },
    ];

    /** Declare innerWidth and do dynamic statement to determine the value of isMobile. */
    let innerWidth = 0;
    $: isMobile = innerWidth <= 768 ? false : true;
</script>

<!-- Bind window inner width to know the screen size. -->
<svelte:window bind:innerWidth />

<div class="svelte-carousel mt-2">
    <Carousel
        let:loaded
        loaded
        autoplay
        autoplayDuration={5000}
        particlesToShow={isMobile ? 3 : 1}
        particlesToScroll={2}>
        {#each images as image, imageIndex (image)}
            <div class="flex items-stretch">
                {#if loaded.includes(imageIndex)}
                    <div class="flex-1 p-2">
                        <div class="block bg-slate-100 overflow-hidden border border-slate-200 rounded h-full">
                            <div class="p-4 h-[85%]">
                                <h2 class="mt-2 mb-2 font-bold text-md font-heading">{image.title}</h2>
                                <div class="mb-4 flex flex-wrap">
                                    <img
                                        class="object-fill h-48 w-full rounded overflow-hidden"
                                        src={image.source}
                                        alt={image.title} />
                                </div>
                                <p class="text-sm text-slate-600 text-left">{image.description}</p>
                            </div>
                            <div class="p-4 flex flex-wrap items-center">
                                {#each image.tags as tag}
                                    <p class="tracking-wide text-xs mr-2 mb-2">{tag}</p>
                                {/each}
                            </div>
                        </div>
                    </div>
                {/if}
            </div>
        {/each}
    </Carousel>
</div>
