<?php get_header() ?>
<!-- /news/ -->
<main class="h-full w-full px-[4%] sm:px-[6%] md:px-[10%] bg-primary-special pt-8 pb-36 flex justify-center">
    <!-- Category page -->
    <!-- Wrapper -->
    <div class="h-full w-full md:w-[95%] lg:w-[87%] xl:w-[80%]">
    <!-- Heading -->
    <?php get_template_part('components/news_heading', null,
        array(
            'categoryTitle' => false
        ));
    ?>
        <!-- Content -->
        <div class="flex gap-4">
            <!-- Category List -->
            <?php get_template_part('components/category_list', null, 'title_li=') ?>
            <!-- Category Cards -->
            <?php get_template_part('components/category_card') ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>