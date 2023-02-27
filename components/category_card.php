<div class="h-full w-full md:w-5/6">
    <div class="w-full h-full flex flex-wrap">
        <?php while (have_posts()): the_post(); ?>
        <div class="m-auto w-full h-full bg-white border border-solid shadow-md p-6 mb-16">
            <h1 class="text-2xl xs:text-3xl sm:text-4xl md:text-5xl text-primary-300 pb-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <div class="w-full my-2 text-primary-100 text-base md:text-lg"><?= $post_date = get_the_date( 'j F Y' ); ?>, by <?php the_author(); ?></div>
            <div class="text-justify">
                <?php the_content(); ?>
            </div>
        </div>
        <?php endwhile; ?> 
    </div>
</div>   