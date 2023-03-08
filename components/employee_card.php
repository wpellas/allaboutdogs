<div class="flex justify-between bg-white border border-solid shadow-md">
    <!-- Text -->
    <div class="h-full w-3/4 md:w-1/2 p-4 mr-1">
        <div class="w-full h-full flex flex-col">
            <!-- Name -->
            <h1 class="font-raleway w-full text-primary-300 text-xl sm:text-xl md:text-2xl"><?php the_title(); ?></h1>
            <!-- Title -->
            <div class="w-full text-secondary-300 text-xs sm:text-sm md:text-base uppercase pb-2">
                <div><?= $args[0]->name; ?></div>
            </div>
            <!-- Biography -->
            <div class="text-xs md:text-sm pb-2">
                <?= get_field('employee_bio'); ?>
            </div>
            <!-- Email -->
            <a class="text-x md:text-sm text-secondary-300 font-raleway" href="mailto:<?= get_field('employee_email')?>"><?= get_field('employee_email')?></a>
        </div>
    </div>
    <!-- Picture -->
    <div class="h-full w-1/2 lg:w-1/4 xl:w-1/2 bg-center bg-cover" style="background-image:url('<?= get_field('employee_image'); ?>');"></div>
</div>