<!DOCTYPE html>
<html class="html" lang="sv" dir="ltr">
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <title><?php wp_title(); ?> <?= bloginfo('name') ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/5a6823260c.js" crossorigin="anonymous"></script>
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name') ?> Feed" href="<?php echo home_url() ?>/feed/">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="sticky top-0 w-full px-[4%] sm:px-[6%] md:px-[10%] leading-6 text-center bg-white shadow-lg text-primary-300 z-30">
    <!-- Navbar -->
    <div class="text-lg flex p-2">
        <div  class="basis-5/6 md:basis-3/6 flex justify-start items-center">
            <a href="<?= home_url() ?>"><img class="h-[64px] md:h-[100px] w-auto relative pr-8" src="<?= get_stylesheet_directory_uri() . '/assets/image/logo.svg' ?>" alt="Logo"></a>
            <h1 class="font-raleway relative text-lg sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl hover:text-secondary-100"><a href="<?= home_url() ?>">All About Dogs</a></h1>
        </div>
        <!-- Regular Menu -->
        <div class="basis-1/6 md:basis-3/6 hidden md:block text-lg xl:text-xl text-secondary-300">
           <?php wp_nav_menu(["Menu"=>"nav menu"]); ?> 
        </div>

        <!-- Small Menu Button -->
        <div class="basis-1/6 md:basis-3/6 block md:hidden text-secondary-300">
            <div class="flex justify-end items-center h-full">
                <i class="fa-solid fa-bars text-5xl sm:text-7xl leading-6" id="menuBtn" onclick="toggleMenu()"></i>
            </div>
        </div>
    </div>
    <!-- Small Navbar -->
    <div class="w-full h-[100vh] absolute right-0 top-0 z-[999] bg-white hidden shadow-lg text-secondary-300" id="smallMenu">
        <i class="fa-solid fa-xmark absolute top-10 right-[20%] text-8xl active:text-primary-500" id="menuBtn" onclick="toggleMenu()"></i>
        <div class="w-full h-full flex items-center">
            <div class="w-full h-1/2 text-4xl flex flex-col">
                <?php wp_nav_menu(["Menu"=>"nav menu"]); ?> 
            </div>
        </div>
    </div>

</header>