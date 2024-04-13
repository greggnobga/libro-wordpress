<!doctype html>
<html lang="en">
    <head>
        <title>Libro - Experience Living Numerous Times</title>
        <?php wp_head(); ?>
    </head>
    <body>
        <nav class="border border-gray-700 bg-gray-900">
            <div class="flex flex-wrap items-center justify-between p-4">
                 <a href="/" class="flex items-center space-x-2 rtl:space-x-reverse">
                    <svg class="w-6 h-6" fill="white"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#book"></use></svg>
                    <span class="self-center uppercase text-2xl font-semibold whitespace-nowrap text-gray-200">Libro</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden focus:outline-none focus:ring-2 text-gray-400 hover:bg-gray-700 focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                    <span class='hamburger'>
                        <span class='hamburger-box'>
                            <span class='hamburger-inner'></span>
                        </span>
                    </span>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 bg-gray-800 md:bg-transparent border-gray-700">
                        <li class="flex flex-row gap-2 py-2 md:p-0">
                            <svg class="w-5 h-5" fill="white"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#home"></use></svg>
                            <a href="/" class="rounded md:border-0 md:p-0 text-gray-200 md:hover:text-blue-500 hover:bg-gray-700 hover:text-gray-200 md:hover:bg-transparent">Home</a>
                        </li>
                        <li class="flex flex-row gap-2 py-2 md:p-0">
                            <svg class="w-5 h-5" fill="white"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#book"></use></svg>
                            <a href="/books" class="rounded md:border-0 md:p-0 text-gray-200 md:hover:text-blue-500 hover:bg-gray-700 hover:text-gray-200 md:hover:bg-transparent">Books</a>
                        </li>
                        <li class="flex flex-row gap-2 py-2 md:p-0">
                            <svg class="w-5 h-5" fill="white"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#blog"></use></svg>
                            <a href="/blog" class="rounded md:border-0 md:p-0 text-gray-200 md:hover:text-blue-500 hover:bg-gray-700 hover:text-gray-200 md:hover:bg-transparent">Blog</a>
                        </li>
                        <li class="flex flex-row gap-2 py-2 md:p-0">
                            <svg class="w-5 h-5" fill="white"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#about"></use></svg>
                            <a href="/about" class="rounded md:border-0 md:p-0 text-gray-200 md:hover:text-blue-500 hover:bg-gray-700 hover:text-gray-200 md:hover:bg-transparent">About</a>
                        </li>
                        <li class="flex flex-row gap-2 py-2 md:p-0">
                            <svg class="w-5 h-5" fill="white"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/sprite.svg#contact"></use></svg>
                            <a href="/contact" class="rounded md:border-0 md:p-0 text-gray-200 md:hover:text-blue-500 hover:bg-gray-700 hover:text-gray-200 md:hover:bg-transparent">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
