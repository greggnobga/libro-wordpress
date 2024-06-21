<script>
    import Books from '$lib/Icon/Books.svelte';
    import Search from '$lib/Icon/Search.svelte';

    function searchHandler() {
        console.log('Clicked search button...');
    }

    let isMobile = true;

    $: console.log(isMobile);

    function mobileHandler() {
        return (isMobile = !isMobile);
    }
</script>

<svelte:head>
    {#if isMobile}
        <style lang="postcss">
            body {
                @apply overflow-hidden md:overflow-auto;
            }
        </style>
    {/if}
</svelte:head>

<div class="text-slate-200 bg-gradient-to-r from-amber-400 to-yellow-600 flex justify-between">
    <div class="flex px-2 py-3">
        <div class="pr-4 flex w-[8rem] h-full justify-start items-center">
            <span class="w-8 h-8"><Books color="#E2E8F0" /></span>
            <span class="pl-2 uppercase">Libro</span>
        </div>
        <div class="flex w-full h-full justify-start items-center">
            <input
                placeholder="Search"
                class="peer h-full w-full border-b border-slate-200 placeholder-slate-200 bg-transparent pt-2 pb-1.5 font-sans text-md font-normal text-slate-200 outline outline-0 transition-all focus:border-energy focus:outline-0 disabled:border-0 disabled:bg-slate-100" />
            <button class="w-8 h-8" on:click={searchHandler}><Search color="#E2E8F0" /></button>
        </div>
    </div>
    {#if isMobile}
        <div
            class="absolute h-screen w-full -translate-x-full flex flex-col justify-center items-center bg-coast md:w-6/12 md:px-2 md:py-3 md:translate-x-0 md:relative md:flex-row md:h-full md:justify-between md:bg-transparent"
            class:translate-x-0={isMobile}>
            <div class="p-2 w-full text-center">Home</div>
            <div class="p-2 w-full text-center">Books</div>
            <div class="p-2 w-full text-center">Blog</div>
            <div class="p-2 w-full text-center">About</div>
            <div class="p-2 w-full text-center">Contact</div>
        </div>
    {/if}
    <div class="px-2 py-3 flex z-10">
        <button type="button" class="hamburger hamburger-spring cursor-pointer" class:is-active={isMobile} on:click={mobileHandler}>
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>
</div>
