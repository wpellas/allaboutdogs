<?php get_header() ?>
<!-- /about/ -->
<main class="h-full w-full px-[4%] sm:px-[6%] md:px-[10%] bg-primary-special pt-8 pb-36 flex justify-center">
    <!-- Wrapper -->
    <div class="h-full w-full max-w-[1024px]">
        <!-- Title -->
        <?php get_template_part('components/main_title', null, 'About This Website') ?>
        <!-- Page Body -->
        <div class="w-full h-full md:h-[800px] grid grid-cols-1 sm:grid-cols-2 grid-rows-2 sm:grid-rows-1 md:grid-rows-2 gap-2 my-4 bg-white border border-solid shadow-md">
            <div class="h-full w-full p-6 flex items-center">  
                <div class="text-primary-300 text-xl">
                    <h1 class="text-2xl text-primary-500 font-bold">What is this site?</h1>
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <div class="hidden md:block h-full w-full row-span-2 p-6 bg-center bg-cover" style="background-image:url('<?php the_field('about_image', 'option'); ?>');">
            </div>
            <!-- Links -->
            <div class="h-full w-full p-6 flex justify-start items-center">
                <ul class="list-none text-secondary-300 text-sm md:text-base relative">
                    <li class="font-bold w-full py-1">portfolio: <a class="absolute left-24 w-36 font-medium text-primary-300 hover:text-secondary-300" href="<?php the_field('portfolio_url', 'option'); ?>"><?php the_field('portfolio_name', 'option'); ?></a></li>
                    <li class="font-bold w-full py-1">github: <a class="absolute left-24 w-36 font-medium text-primary-300 hover:text-secondary-300" href="<?php the_field('github_url', 'option'); ?>"><?php the_field('github_name', 'option'); ?></a></li>
                    <li class="font-bold w-full py-1">linkedin: <a class="absolute left-24 w-36 font-medium text-primary-300 hover:text-secondary-300" href="<?php the_field('linkedin_url', 'option'); ?>"><?php the_field('linkedin_name', 'option'); ?></a></li>
                    <li class="font-bold w-full py-1">email: <a class="absolute left-24 w-36 font-medium text-primary-300 hover:text-secondary-300" href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>