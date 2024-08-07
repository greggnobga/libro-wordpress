<script>
    /** Import from svelte. */
    import { onDestroy, onMount } from 'svelte';

    /** Declare innerWidth and do dynamic statement to determine the value of isMobile. */
    let innerWidth = 0;
    $: isMobile = innerWidth <= 768 ? false : true;

    /** Declare url to get current path. */
    let url = ``;

    /** Call on mount. */
    onMount(() => {
        unsubscribe = () => {
            /** Query current location.*/
            loc = window.location.href;

            /** Split and clean the location.*/
            path = loc.split('/').filter((i) => i);

            /** Assign value.*/
            url = path.length === 3 ? path[2] : '';
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

    /** Search handler function. */
    function searchHandler() {
        console.log('Clicked search button...');
    }
</script>

<!-- Bind window inner width to know the screen size. -->
<svelte:window bind:innerWidth />

<!-- Check if isMobile and apply style in the head section depending on the result. -->
<svelte:head>
    {#if isMobile}
        <style lang="postcss">
            body {
                @apply overflow-hidden md:overflow-auto;
            }
        </style>
    {/if}
</svelte:head>

<!-- HTML markup. -->
<div class="text-slate-200 bg-gradient-to-r from-amber-400 to-yellow-600 flex justify-between">
    <div class="flex">
        <div class="px-2 flex w-[8rem] h-full justify-start items-center">
            <svg class="w-8 h-8" fill="#E2E8F0">
                <use xlink:href="/wp-content/themes/libro/assets/images/sprite.svg#book"></use>
            </svg>
            <a href="/" class="pl-2 uppercase">Libro</a>
        </div>
        <div class="px-2 flex w-full h-full justify-between items-center">
            <input class="w-full bg-transparent outline-none border-b border-slate-200 text-md transition:scale" />
            <svg class="w-6 h-6" fill="#E2E8F0">
                <use xlink:href="/wp-content/themes/libro/assets/images/sprite.svg#search"></use>
            </svg>
        </div>
    </div>
    {#if isMobile}
        <div
            class="absolute h-screen w-full -translate-x-full flex flex-col justify-center items-center bg-coast md:px-2 md:py-3 md:w-6/12 md:translate-x-0 md:relative md:flex-row md:h-full md:justify-end md:items-center md:bg-transparent z-10"
            class:translate-x-0={isMobile}>
            <div
                class={`cursor-pointer flex p-1 my-2 w-6/12 md:w-[8rem] md:px-2 mx-2 md:mx-1 border-b ${pathName === '/' ? 'border-energy' : 'border-slate-200'} hover:border-energy`}>
                <svg class="w-5 h-5" fill="#E2E8F0">
                    <use xlink:href="/wp-content/themes/libro/assets/images/sprite.svg#home"></use>
                </svg>
                <a href="/" class="pl-2">Home</a>
            </div>

            <div
                class={`cursor-pointer flex p-1 my-2 w-6/12 md:w-[8rem] md:px-2 mx-2 md:mx-1 border-b ${pathName === 'books' ? 'border-energy' : 'border-slate-200'} hover:border-energy`}>
                <svg class="w-5 h-5" fill="#E2E8F0">
                    <use xlink:href="/wp-content/themes/libro/assets/images/sprite.svg#book"></use>
                </svg>
                <a href="/books" class="pl-2">Books</a>
            </div>
            <div
                class={`cursor-pointer flex p-1 my-2 w-6/12 md:w-[8rem] md:px-2 mx-2 md:mx-1 border-b ${pathName === 'blog' ? 'border-energy' : 'border-slate-200'} hover:border-energy`}>
                <svg class="w-5 h-5" fill="#E2E8F0">
                    <use xlink:href="/wp-content/themes/libro/assets/images/sprite.svg#blog"></use>
                </svg>
                <a href="/blog" class="pl-2">Blog</a>
            </div>
            <div
                class={`cursor-pointer flex p-1 my-2 w-6/12 md:w-[8rem] md:px-2 mx-2 md:mx-1 border-b ${pathName === 'about' ? 'border-energy' : 'border-slate-200'} hover:border-energy`}>
                <svg class="w-5 h-5" fill="#E2E8F0">
                    <use xlink:href="/wp-content/themes/libro/assets/images/sprite.svg#about"></use>
                </svg>
                <a href="/about" class="pl-2">About</a>
            </div>
            <div
                class={`cursor-pointer flex p-1 my-2 w-6/12 md:w-[8rem] md:px-2 mx-2 md:mx-1 border-b ${pathName === 'contact' ? 'border-energy' : 'border-slate-200'} hover:border-energy`}>
                <svg class="w-5 h-5" fill="#E2E8F0">
                    <use xlink:href="/wp-content/themes/libro/assets/images/sprite.svg#contact"></use>
                </svg>
                <a href="/contact" class="pl-2">Contact</a>
            </div>
        </div>
    {/if}
    <div class="px-2 py-3 z-10 flex md:hidden">
        <button
            type="button"
            class="hamburger hamburger-spring cursor-pointer"
            class:is-active={isMobile}
            on:click={() => (isMobile = !isMobile)}>
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>
</div>
