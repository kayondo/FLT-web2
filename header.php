<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutureLink Technologies</title>
    <?php wp_head(); ?>
    </head>
<body>


<!--brand bar-->
<div class="w-full brand-bar"></div>

<!--navigation-->
<nav class="navigation bg-pattern bg-blur">
    <div class="container flex items-center justify-between">
        <a href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/svg/future-link-logo.svg" alt="Futurelink technologies logo" height="40">
        </a>

        <button class="md:hidden text-3xl" id="menuButton">
            <span class="fe fe-align-right"></span>
        </button>

        <div class="menu" id="menu">
            <div class="lg:flex-grow">
                <a href="<?php echo get_site_url(); ?>#products"
                   class="menu-item">
                    Products
                </a>
                <a href="<?php echo get_site_url(); ?>#services"
                   class="menu-item">
                    Services
                </a>
                <a href="<?php echo get_site_url(); ?>/news"
                   class="menu-item">
                    News & Publications
                </a>
                <a href="<?php echo get_site_url(); ?>/about-us"
                   class="menu-item">
                    About Us
                </a>
                <a href="<?php echo get_site_url(); ?>/contact-us"
                   class="menu-item">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</nav>