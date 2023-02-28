<?php wp_footer(); ?>
    <footer class="hidden md:block static bottom-0 w-full h-60 text-center bg-white text-amber-900 px-[10%] shadow-[0px_-10px_15px_-3px_rgba(0,0,0,0.1)]">
        <!-- Wrapper -->
        <div class="flex w-full h-full">
            <!-- Logo -->
            <div class="w-1/3 h-full">
                <div class="p-2 flex justify-start items-center h-full">
                    <a href="<?php home_url() ?>"><img class="h-20 lg:h-24 xl:h-28 w-auto relative" src="<?= get_stylesheet_directory_uri() . '/assets/image/logo.svg' ?>" alt="Logo"></a>
                </div>
            </div>
            <!-- Links and text, split in boxes -->
            <div class="w-2/3 h-full flex flex-wrap">
                <div class="w-full h-1/2 text-lg xl:text-xl text-secondary-300">
                    <?php wp_nav_menu(["Footer"=>"footer menu"]); ?> 
                </div>
                <div class="w-1/2 h-1/2 p-4">
                <?php if(!empty(get_field('email', 'option'))): ?>
                    <p class="text-left text-secondary-500">Email: <a class="text-secondary-300 hover:text-primary-100" href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></p>
                <?php endif; ?>
                    <p class="text-left text-secondary-500">Github: <a class="text-secondary-300 hover:text-primary-100" href="<?php the_field('github_url', 'option'); ?>"><?php the_field('github_name', 'option'); ?></a></p>
                </div>
                <div class="w-1/2 h-1/2 p-4">
                    <p class="text-left text-secondary-500">Portfolio: <a class="text-secondary-300 hover:text-primary-100" href="<?php the_field('portfolio_url', 'option'); ?>"><?php the_field('portfolio_name', 'option'); ?></a></p>
                    <p class="text-left text-secondary-500">LinkedIn: <a class="text-secondary-300 hover:text-primary-100" href="<?php the_field('linkedin_url', 'option'); ?>"><?php the_field('linkedin_name', 'option'); ?></a></p>
                </div>
            </div>
        </div>  
    </footer>
</body>
</html>