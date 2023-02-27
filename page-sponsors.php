<?php get_header() ?>

<main class="h-full w-full px-[4%] sm:px-[6%] md:px-[10%] bg-primary-special py-6 flex justify-center">
    <div class="h-full w-full max-w-[1024px]">
        <div class="w-full h-full">
            <h1 class="text-4xl text-primary-300">Our Sponsors</h1>
            <div class="w-full h-1 bg-primary-300"></div>
        </div>
        <div class="w-full h-[800px] md:h-[800px] my-4 bg-white border border-solid shadow-md">
            <div class="h-[700px] w-full grid grid-cols-1 md:grid-cols-2">
                <div class="h-[400px] md:h-full w-full p-6 flex items-center">   
                    <div class="text-primary-300 text-xs xs:text-sm sm:text-base md:text-lg">
                        <h1 class="w-full h-full text-primary-300 text-3xl sm:text-5xl md:text-8xl"><?php the_field('main_sponsor', 'option'); ?></h1>
                        <?php the_excerpt(); ?>
                    </div>
                </div>

                <div class="h-[300px] md:h-full w-full bg-center bg-cover" style="background-image:url('');">
                    <img class="w-full h-full object-contain" src="<?php the_field('main_sponsor_image', 'option'); ?>" alt="">
                </div>
            </div>
            
            <div class="h-[100px] w-full p-6 bg-primary-300 flex gap-1 sm:gap-6 md:gap-16 justify-between items-center opacity-75">
            <?php if (have_rows('sponsors', 'option')):
                    while (have_rows('sponsors', 'option')):the_row();
                    // Load sub field value.
                    $sub_value = get_sub_field('sponsors_image');?>
                        <img class="h-3 sm:h-5 md:h-7 lg:h-8 w-auto" src="<?=$sub_value?>" alt="<?=$sub_value?>">
                    <?php endwhile;
                endif;?>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>