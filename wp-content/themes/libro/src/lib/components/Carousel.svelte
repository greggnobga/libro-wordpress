<script>
    /** Import from svelte. */
    import { onDestroy, onMount } from 'svelte';

    /** Import from third party package. */
    import Carousel from 'svelte-carousel';

    let images = [
        {
            title: 'Ascendance Of A Bookworm',
            source: '/wp-content/themes/libro/assets/images/bookworm.jpg',
            link: 'books/ascendance-of-a-bookworm/',
            description:
                'A certain college girl who loved books ever since she was a little girl dies in an accident and is reborn in another world she knows nothing about.',
            tags: ['isekai', 'books', 'fantasy', 'medieval', 'food', 'magic', 'sword', 'monster'],
        },
        {
            title: 'A Late Start Tamer Laid Back Life',
            source: '/wp-content/themes/libro/assets/images/tamer.jpg',
            link: 'books/a-late-start-tamers-laid-back-life/',
            description:
                'Yuta is chomping at the bit to start his virtual life as a Tamer, a class that harnesses the powers of wild monsters.',
            tags: ['fantasy', 'gaming', 'virtual reality', 'adventure', 'monster', 'slice of life'],
        },
        {
            title: 'Campfire Cooking In Another World',
            source: '/wp-content/themes/libro/assets/images/campfire.jpg',
            link: 'books/campfire-cooking-in-another-world/',
            description:
                'Mukoda Tsuyoshi may not be a hero, but this conjuring error has given him a delicious power of online grocery.',
            tags: ['isekai', 'cooking', 'gourmet', 'camping', 'shopping', 'taming'],
        },
    ];

    /** Declare innerWidth and do dynamic statement to determine the value of isMobile. */
    let innerWidth = 0;
    $: isMobile = innerWidth <= 768 ? false : true;

    /** Declare url to get current path. */
    let url = ``;

    /** Call on mount. */
    onMount(() => {
        unsubscribe = () => {
            /** Query current location.*/
            url = window.location.href;
        };

        /** Run unsubscribe.*/
        unsubscribe();

        return unsubscribe;
    });

    $: pathName = url !== '' ? url : '/';

    /** Call on destroy. */
    onDestroy(() => {
        unsubscribe();
    });
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
            <a
                href={pathName ? pathName + image.link : '/'}
                class="hover:scale-95 transition delay-100 duration-300 ease-in-out">
                <div class="flex items-stretch">
                    {#if loaded.includes(imageIndex)}
                        <div class="flex-1 p-2">
                            <div
                                class="block bg-slate-100 overflow-hidden border border-slate-200 rounded h-full hover:bg-slate-200 hover:border-slate-100">
                                <div class="p-4 h-[85%]">
                                    <h2 class="mt-2 mb-2 font-bold text-md font-heading">{image.title}</h2>
                                    <div class="mb-4 flex flex-wrap">
                                        <img
                                            class="rounded-t-md object-cover h-48 w-full overflow-hidden"
                                            src={image.source}
                                            alt={image.title} />
                                    </div>
                                    <p class="text-xs text-slate-600 text-left">
                                        {image.description.split(' ').slice(0, 20).join(' ').concat('...')}
                                    </p>
                                </div>
                                <div class="p-4 flex flex-wrap items-center">
                                    {#each image.tags as tag, tagIndex (tag)}
                                        {#if tagIndex <= 4}
                                            <p class="tracking-wide text-xs mr-2 mb-2">{tag}</p>
                                        {/if}
                                    {/each}
                                </div>
                            </div>
                        </div>
                    {/if}
                </div>
            </a>
        {/each}
    </Carousel>
</div>
