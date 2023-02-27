<?php get_header() ?>

<div class="content">
    <h1>page.php</h1>
    <?php while (have_posts()): the_post(); ?>
        <h1 class="text-2xl"><?php the_title(); ?></h1>

        <?php the_content(); ?>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>

