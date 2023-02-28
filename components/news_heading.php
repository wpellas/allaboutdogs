<div class="flex gap-4 mb-4">
    <div class="hidden md:block h-full w-1/6"></div>
    <div class="h-full w-full md:w-5/6">
        <!-- Category Title -->
        <div class="text-4xl md:text-6xl lg:text-8xl text-primary-300">
            <!-- Defaults to Newsfeed if no category is found -->
            <?php 
            if ( $args['categoryTitle'] ) {
                echo the_category();
            } else {
                echo 'Newsfeed';
            }
            ?>
        </div>
        <div class="w-full h-1 bg-primary-300"></div>
    </div>
</div>