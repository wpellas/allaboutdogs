<?php get_header() ?>
<!-- Single news -->
<main class="h-full w-full px-[4%] sm:px-[6%] md:px-[10%] pt-8 pb-36 bg-primary-special">
    <?php while (have_posts()): the_post(); ?>
    <div class="w-full h-full flex justify-between gap-4 my-4">
        <!-- Category Cards -->
        <div class="w-1/3 hidden md:block">
            <?php
                $terms = get_the_terms( get_the_ID(), 'category' );
                $newsPosts = new WP_Query([
                    'post_type'=>'post',
                    'posts_per_page'=>5,
                    'category_name'=>$terms[0]->slug,
                ]);
            ?>
            <!-- Category Title -->
            <div class="text-4xl text-primary-300"><?php get_template_part('components/main_title', null, the_category('')) ?></div>
            <div class="hidden w-full h-full md:flex flex-col flex-wrap gap-4 mt-4">
                <!-- Lists out all other posts in the specific category -->
                <?php
                    if ($newsPosts->have_posts()) :
                    while ($newsPosts->have_posts()) : $newsPosts->the_post(); ?>
                        <?php get_template_part('components/news_card_small') ?>
                <?php endwhile;
                    else :
                    // Nothing
                    endif;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
        <!-- Post -->
        <div class="w-full md:w-2/3 h-full">
            <div class="w-full h-full bg-white border border-solid shadow-md mt-4 p-6">
                <h1 class="text-4xl text-primary-300"><?php the_title(); ?></h1>
                <div class="w-full my-4 text-primary-100 text-lg"><?= $post_date = get_the_date( 'j F Y' ); ?>, by <?php the_author(); ?></div>
                <div class="text-secondary-500 text-justify">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>