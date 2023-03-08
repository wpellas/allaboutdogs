<?php get_header() ?>
<!-- home page -->
<main class="bg-primary-special">

    <!-- Hero -->
    <section class="h-[100vh]">
      <?php while (have_posts()): the_post(); ?>
        <div class="h-full md:h-[88%] w-full bg-center bg-no-repeat bg-cover relative flex justify-center items-center" style="background-image:linear-gradient(0deg,rgba(0,0,0,0.4)0%,rgba(255,255,255,0) 100%),url('<?= get_field('heroimage')['url']; ?>');">
            <div class="h-full w-full bg-transparent flex justify-center md:justify-start px-[4%] sm:px-[6%] md:px-[10%] mt-32 md:mt-52">
                <ul class="w-[90%] md:w-1/2 text-3xl md:text-4xl lg:text-5xl xl:text-6xl  text-primary-special text-left">
                    <li class="mb-2"><?= get_field('slogan_1'); ?></li>
                    <li><?= get_field('slogan_2'); ?></li>
                </ul>
            </div>
        </div>
        <div class="hidden md:block h-[12%] py-4 mb-4 px-[4%] sm:px-[6%] md:px-[10%] bg-primary-100 text-primary-special">
            <div class="flex w-full h-full gap-4 justify-between items-center opacity-75">
                <?php if (have_rows('sponsors', 'option')):
                    while (have_rows('sponsors', 'option')):the_row();
                    // Load sub field value.
                    $sub_value = get_sub_field('sponsors_image');?>
                        <img class="h-10 lg:h-12 xl:h-14 w-auto" src="<?=$sub_value?>" alt="<?=$sub_value?>">
                    <?php endwhile;
                endif;?>
            </div>
        </div>
        
        <?php the_content(); ?>
    <?php endwhile;
    wp_reset_postdata(); ?>
    </section>

    <!-- Newsfeed -->
    <section class="w-full h-full px-[4%] sm:px-[6%] md:px-[10%]">
    <div class="w-full h-full pt-8 md:flex md:justify-between md:items-center gap-4">
        <!-- Articles -->
        <div class="h-1/2 md:h-full w-full md:w-1/2 flex flex-col justify-around gap-4 mt-4 md:mt-0">
            <!-- News Title -->
            <?php get_template_part('components/main_title', null, 'New Articles') ?>
                <?php
                    $newsPosts = new WP_Query([
                        'post_type'=>'post',
                        'posts_per_page'=>3,
                    ]);
                ?>
                
                <!-- News Cards -->
                <?php
                    if ($newsPosts->have_posts()) :
                        while ($newsPosts->have_posts()) : $newsPosts->the_post();
                ?>
                    <?php get_template_part('components/news_card') ?>
                <?php endwhile;
                    else :
                    // Nothing
                    endif;
                    wp_reset_postdata();
                ?>
        </div>
        <!-- Products -->
        <div class="h-1/2 md:h-full w-full md:basis-1/2 flex flex-col justify-around gap-4 mt-4 md:mt-0">
            <!-- Product Title -->
            <?php get_template_part('components/main_title', null, 'New Products') ?>
                <!-- WP Loop -->
                <?php
                    $newProducts = new WP_Query([
                        'post_type'=>'products',
                        'posts_per_page'=>3
                    ]);
                ?>
                
                <!-- Product Cards -->
                <?php
                    if ($newProducts->have_posts()) :
                        while ($newProducts->have_posts()) : $newProducts->the_post(); 
                    $terms = get_the_terms( get_the_ID(), 'product-category' );
                ?>
                    <?php get_template_part('components/product_card', null, $terms) ?>
                <?php endwhile;
                    else :
                    // Nothing
                    endif;
                    wp_reset_postdata();
            ?>
        </div>
    </div>
    </section>

    <!-- Employees -->
    <section class="h-[100vh] px-[4%] sm:px-[6%] md:px-[10%] pt-12 mb-36">
    <div class="h-full w-full pb-16">
        
        <!-- Category Title -->
        <?php get_template_part('components/main_title', null, 'Meet Our Team') ?>
        
        <!-- Category Cards -->
        <div class="h-full w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 justify-between pt-4">
            <?php
            $newEmployees = new WP_Query([
                'post_type'=>'employees',
            ]);
            ?>
            <?php
                if ($newEmployees->have_posts()) :
                    while ($newEmployees->have_posts()) : $newEmployees->the_post(); 
                $employeeTerms = get_the_terms( get_the_ID(), 'employee-category' );
            ?>
            <!-- Employee Card -->
            <?php get_template_part('components/employee_card', null, $employeeTerms) ?>
            <!-- Endwhile -->
            <?php endwhile;
            else :
            // Nothing
                endif;
                wp_reset_postdata();
            ?>
        </div>
    </div>
    </section>
</main>

<?php get_footer(); ?>