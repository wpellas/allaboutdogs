<div class="hidden md:block h-full w-1/6">
    <!-- Lists category regardless of regular or taxonomy via args input -->
    <div class="bg-white border border-solid shadow-md text-primary-300 list-none p-4 min-h-[400px]">
        <p class="self-start text-primary-500 text-base lg:text-lg xl:text-xl uppercase">Categories</p>
        <ul class="w-full h-full flex flex-col gap-2 pt-4 text-base lg:text-lg xl:text-xl">
            <?php wp_list_categories($args); ?>
        </ul>
    </div>
</div>