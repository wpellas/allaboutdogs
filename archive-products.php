<?php get_header() ?>
<!-- /products/ -->
<main class="h-full w-full px-[4%] sm:px-[6%] md:px-[10%] bg-primary-special py-12 flex justify-center mb-36">
    <!-- Heading -->
    <div class="h-full w-full">
        <?php get_template_part('components/product_heading', null,
            array(
                'categoryTitle' => false
            ));
        ?>

        <div class="h-full w-full flex gap-4">
            <!-- Category List -->
            <?php get_template_part('components/category_list', null, 'taxonomy=product-category&title_li=') ?>
                <!-- Category Cards -->
                <?php
                $newProducts = new WP_Query([
                    'post_type'=>'products',
                ]);
                ?>
            <!-- Product Grid -->
            <div class="w-full md:w-5/6 h-full grid grid-cols-1 md:grid-cols-2 gap-4">
                <?php
                    // Runs have_posts() on $opinionPosts
                    if ($newProducts->have_posts()) :
                        while ($newProducts->have_posts()) : $newProducts->the_post(); 
                        $terms = get_the_terms( get_the_ID(), 'product-category' );
                ?>
                    <?php get_template_part('components/product_card_small', null, $terms) ?>
                <?php endwhile;
                    else :
                    // Nothing
                        endif;
                        wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>

