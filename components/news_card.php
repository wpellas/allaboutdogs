<!-- Large Card -->
<div class="hidden md:flex items-center justify-between w-full h-72 bg-white border border-solid shadow-md flex-none">
    <!-- Text -->
    <div class="h-full w-4/6 lg:w-2/3 xl:w-1/2 p-2">
        <div class="w-full h-full flex flex-col justify-center">
            <!-- Title and Article name -->
            <div class="w-full flex flex-row text-secondary-300 text-base lg:text-lg xl:text-[1.17rem] uppercase">
                <div class="font-semibold hover:text-primary-300"><?= the_category(); ?></div>
                <div class="px-1">-</div>
                <div><?= $post_date = get_the_date( 'j F Y' ); ?></div>
            </div>
            <h1 class="w-full mt-3 text-primary-300 hover:text-secondary-500 text-lg lg:text-xl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        </div>
    </div>
    <!-- Image -->
    <div class="h-full w-2/6 lg:w-1/3 xl:w-1/2">
        <a class="w-full h-full" href="<?php the_permalink(); ?>"><img class="w-full h-full object-cover" src="<?=get_the_post_thumbnail_url();?>" alt="item"></a>
    </div>
</div>
<!-- Small Card -->
<div class="flex items-center md:hidden w-full h-52 bg-white border border-solid shadow-md">
    <!-- Text -->
    <div class="h-36 xs:h-40 sm:h-48 w-2/3 p-2">
        <div class="w-full h-full flex flex-col justify-center">
        <!-- Title and Article name -->
        <div class="w-full flex flex-row text-secondary-300 text-xs xs:text-sm sm:text-lg uppercase">
                <div class="font-semibold hover:text-primary-300"><?= the_category(); ?></div>
                <div class="px-1">-</div>
                <div><?= $post_date = get_the_date( 'j F Y' ); ?></div>
            </div>
            <h1 class="w-full text-primary-300 text-sm xs:text-base sm:text-lg"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        </div>
    </div>
    <!-- Image -->
    <a class="w-1/3 h-full" href="<?php the_permalink(); ?>"><div class="w-auto h-full bg-center bg-cover" style="background-image:url('<?=get_the_post_thumbnail_url();?>');"></div>
    </a>
</div>