<div class="flex items-center w-full h-36 bg-white border border-solid shadow-md flex-none">
    <!-- Text -->
    <div class="h-full w-2/3 p-4">
        <!-- Title and Article name -->
        <div class="w-full h-full flex flex-col justify-around">
        <div class="w-full flex flex-wrap text-secondary-300 text-sm uppercase">
                <div class="font-semibold hover:text-primary-300 w-full"><?= the_category(); ?></div>
                <div><?= $post_date = get_the_date( 'j F Y' ); ?></div>
            </div>
            <h1 class="w-full text-primary-300 text-base"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        </div>
    </div>
    <!-- Image -->
    <a class="w-1/3 h-full" href="<?php the_permalink(); ?>"><div class="h-full w-full bg-center bg-cover" style="background-image:url('<?=get_the_post_thumbnail_url();?>');"></div>
    </a>
</div>