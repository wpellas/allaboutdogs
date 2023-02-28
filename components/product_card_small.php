<div class="flex items-center w-full h-56 md:h-72 bg-white border border-solid shadow-md">
    <!-- Text -->
    <div class="h-full w-1/2 p-2">
        <div class="w-full h-full flex flex-col justify-center">
            <!-- Title and Article name -->
            <div class="w-full block lg:flex flex-row text-secondary-300 text-sm xs:text-base sm:text-lg uppercase">
                <div class="font-semibold">
                    <?php foreach ($args as $term): ?>
                        <a href="<?php echo get_term_link($term->term_id);?>">
                        <?php echo $term->name; ?>
                        </a>
                    <?php endforeach; ?></div>
                <div class="px-1 hidden lg:block">-</div>
                <div><?= get_field('product_brand'); ?></div>
            </div> 
            <h1 class="w-full text-primary-300 text-sm xs:text-base sm:text-lg"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        </div>
    </div>
    <!-- Image -->
    <a class="w-1/2 h-full" href="<?php the_permalink(); ?>"><div class="h-full w-full bg-center bg-cover" style="background-image:url('<?=get_the_post_thumbnail_url();?>');"></div>
    </a>
</div>