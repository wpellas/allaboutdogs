<?php get_header() ?>

<main>
    <h1>
        <?php while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile;
        wp_reset_postdata(); ?>  
    </h1> 
</main>

<?php get_footer(); ?>