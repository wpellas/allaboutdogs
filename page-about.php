<?php get_header() ?>

<main class="h-full w-full px-[4%] sm:px-[6%] md:px-[10%] bg-primary-special py-6 flex justify-center">
    <div class="h-full w-full max-w-[1024px]">
        <div class="w-full h-full">
            <h1 class="text-4xl text-primary-300">About this website</h1>
            <div class="w-full h-1 bg-primary-300"></div>
        </div>
        <div class="w-full h-full md:h-[800px] grid grid-cols-1 sm:grid-cols-2 grid-rows-2 sm:grid-rows-1 md:grid-rows-2 gap-2 my-4 bg-white border border-solid shadow-md">
            <div class="h-full w-full p-6 flex items-center">  
                <div class="text-primary-300 text-xl">
                    <h1 class="text-2xl text-primary-500 font-bold">What is this site?</h1>
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <div class="hidden md:block h-full w-full row-span-2 p-6 bg-center bg-cover" style="background-image:url('<?php the_field('about_image', 'option'); ?>');">
            </div>
            <div class="h-full w-full p-6 flex justify-start items-center">
                <ul class="list-none text-secondary-300">
                    <li class="font-bold">portfolio: <a class="font-medium text-primary-300" href="<?php the_field('portfolio', 'option'); ?>">williampellas.com</a></li>
                    <li class="font-bold">github: <a class="font-medium text-primary-300" href="<?php the_field('github', 'option'); ?>">wpellas</a></li>
                    <li class="font-bold">linkedin: <a class="font-medium text-primary-300" href="<?php the_field('linkedin', 'option'); ?>">william pellas</a></li>
                    <li class="font-bold">email: <a class="font-medium text-primary-300" href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>