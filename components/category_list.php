<div class="hidden md:block h-full w-1/6">
    <div class="bg-white border border-solid shadow-md text-primary-300 list-none p-2 min-h-[400px]">
        <p class="self-start text-primary-500 text-xl lg:text-2xl uppercase">Categories</p>
        <ul class="w-full h-full flex flex-col gap-2 pt-4 text-lg lg:text-xl">
            <?php wp_list_categories($args); ?>
        </ul>
    </div>
</div>