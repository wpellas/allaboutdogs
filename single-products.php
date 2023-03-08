<?php get_header() ?>
<!-- /products/*/ -->
<main class="h-full w-full px-[4%] sm:px-[6%] md:px-[10%] pt-8 pb-36 bg-primary-special">
    <?php while (have_posts()): the_post(); 
    $terms = get_the_terms( get_the_ID(), 'product-category' );?>
    <div class="h-full w-full">
        <!-- Main -->
        <div class="w-full h-full md:h-[600px] flex gap-4 mb-16">
            <div class="basis-1/6 h-full hidden md:block my-8">
                <!-- Left Categories -->
                <div class="h-[600px] bg-white border border-solid shadow-md mt-4 p-6 text-xl text-primary-300 list-none flex flex-col justify-center">
                    <p class="self-start text-primary-500 uppercase">Categories</p>
                    <ul class="w-full h-full flex flex-col gap-2 pt-4">
                        <?php wp_list_categories('taxonomy=product-category&title_li='); ?>
                    </ul>
                </div>
                
            </div>

            <!-- Post -->
            <div class="w-full h-full md:basis-5/6 my-8">
                <div class="w-full h-full bg-white border border-solid shadow-md mt-4 p-6 flex flex-wrap">
                    <div class="w-full md:basis-1/3 h-5/6 p-2">
                        <!-- Images -->
                        <?php 
                        $images = get_field('product_images');
                        if( $images ): ?>
                                <div class="product-gallery w-full h-full overflow-hidden">
                                    <?php foreach( $images as $image ): ?>
                                            <a class="w-full h-full hidden first-of-type:block" href="<?php echo $image['url']?>"><img class="w-full h-full object-scale-down" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
                                    <?php endforeach; ?>
                                </div>
                        <?php endif; ?>
                    </div>
                    <!-- All dynamic product fields via ACF -->
                    <div class="w-full md:basis-2/3 h-5/6 p-2 flex flex-row flex-wrap justify-around">
                        <h1 class="w-full mt-4 text-2xl sm:text-3xl md:text-4xl text-primary-300 uppercase"><?php the_title(); ?></h1>
                        <div class="w-full my-4 text-zinc-400 text-lg"><?= get_field('product_brand'); ?></div> <!-- Description -->
                        <div class="w-full my-4 text-primary-300 text-lg"><?= get_field('product_description'); ?></div> <!-- Description -->
                        <div class="w-full my-4 text-secondary-100 text-base">Article Number: <?= get_field('product_number'); ?></div> <!-- Price -->
                        <div class="w-full my-4 text-primary-500 text-2xl md:text-4xl flex items-center justify-between"><div><?= get_field('product_price'); ?>€</div><button class="bg-primary-300 hover:bg-secondary-300 transition duration-300 p-2 text-primary-special">Purchase</button></div> <!-- Price -->
                    </div>
                    <div class="w-full h-1/6 hidden md:block">
                        <div class="product-gallery w-full h-full flex">
                            <?php foreach( $images as $image ): ?>
                                    <a class="h-full w-full" href="<?php echo $image['url']?>"><img class="w-auto h-full object-cover" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Recommended Products -->
        <div class="w-full h-full pt-16 pb-36">
            <?php
                $newProducts = new WP_Query([
                    'post_type'=>'products',
                    'posts_per_page'=>3,
                    'tax_query'=>array(
                        array(
                        'taxonomy' => 'product-category',
                        'field' => 'slug',
                        'terms' => $terms[0]->slug,
                        )
                    )
                ]);
                ?>
                <!-- Category Title, dynamic through terms -->
                <h1 class="text-2xl md:text-4xl text-primary-300">
                    <?php foreach ($terms as $term): ?>
                        <a href="<?php echo get_term_link($term->term_id);?>">
                        Newly added <?php echo $term->name; ?>
                        </a>
                    <?php endforeach; ?>
                </h1>
                <div class="w-full h-1 bg-primary-300"></div>
                <div class="py-4 h-full flex flex-wrap md:flex-nowrap justify-between items-center gap-4">
                <?php
                // Runs have_posts() on $newsPosts
                if ($newProducts->have_posts()) :
                    while ($newProducts->have_posts()) : $newProducts->the_post(); 
                     ?>
                        <!-- Large Card -->
                        <div class="flex items-center w-full md:basis-1/2 h-full bg-white border border-solid shadow-md">
                            <div class="h-full w-3/4">
                                <div class="w-full h-full flex flex-col justify-center">
                                    <div class="px-4 w-full flex flex-row text-secondary-300 text-sm lg:text-base xl:text-lg uppercase">
                                        <div class="font-semibold hover:text-primary-300">
                                            <?php foreach ($terms as $term): ?>
                                                <a href="<?php echo get_term_link($term->term_id);?>">
                                                <?php echo $term->name; ?>
                                                </a>
                                            <?php endforeach; ?></div>
                                        <div class="px-1">-</div>
                                        <div><?= get_field('product_brand'); ?></div>
                                    </div>
                                    <h1 class="px-4 w-full mt-3 text-primary-300 hover:text-secondary-500 text-sm lg:text-base xl:text-lg"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                </div>
                            </div>

                            <div class="h-full w-1/4 bg-center bg-contain">
                                <a href="<?php the_permalink(); ?>"><img class="w-full h-full object-scale-down p-2" src="<?=get_the_post_thumbnail_url();?>" alt="item"></a>
                            </div>

                        </div>
                    <?php endwhile;
                    else :
                    // Nothing
                endif;
                wp_reset_postdata();
                ?>
                </div>
        </div>
    </div>
    <?php endwhile; 
    wp_reset_postdata();?>
</main>

<?php get_footer(); ?>