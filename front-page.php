<?php

/**
 * Template Name: Home Page
 *
 * Template for a home page
 *
 */

get_header(); ?>

<section id="homecover-1" class="container-fluid py-5 full-bg" labelledby="hero-heading" style="background-image: url(<?php echo get_theme_file_uri() ?>/assets/img/screen_2x.webp);">
    <div class="container grid-center h-100">
        <div class="row justify-content-between gap-5 p-relative z-5">
            <div class="col-4">
                <img src="<?php echo get_theme_file_uri() ?>/assets/img/W-Relocation@4x.png" alt="LOGO">
            </div>
            <div class="col white-txt d-flex flex-column justify-content-around">
                <h4>Let the experts help you.</h4>
                <h2>Taking care of your Relocation needs
                    is what we do best.</h2>
                <a href="/">
                    <button class="discover-btn">Discover W Relocation</button>
                </a>
            </div>
        </div>
        <div class="overlay"></div>
    </div>
</section>

<section class="container-fluid py-6">
    <div class="container">
        <h3 class="text-center line-above">WHY W RELOCATION</h3>
        <div class="row py-5 justify-content-between">
            <div class="col text-center">
                <img class="svg-icon" src="<?php echo get_theme_file_uri() ?>/assets/img/computer.svg" alt="Technology">
                <h5 class="py-4 gray">TECHNOLOGY.</h5>
            </div>
            <div class="col text-center">
                <img class="svg-icon" src="<?php echo get_theme_file_uri() ?>/assets/img/Hands.svg" alt="Caring">
                <h5 class="py-4 purple">CARING.</h5>
            </div>
            <div class="col text-center">
                <img class="svg-icon" src="<?php echo get_theme_file_uri() ?>/assets/img/People.svg" alt="Team">
                <h5 class="py-4 blue">TEAM.</h5>
            </div>
            <div class="col text-center">
                <img class="svg-icon" src="<?php echo get_theme_file_uri() ?>/assets/img/Wizard.svg" alt="Full Service">
                <h5 class="py-4 brown">FULL-SERVICE.</h5>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid py-6 gray-bg px-0">
    <div class="row align-items-center">
        <div class="col">
            <img src="<?php echo get_theme_file_uri() ?>/assets/img/discover-image.webp" alt="Discover Interior">
        </div>
        <div class="col white-txt px-5">
            <h3><em>DISCOVER W RELOCATION</em></h3>
            <p>W Relocation specializes in offering benefits and personalized
                discounts for your members/employees. We ensure that these
                benefits are customized to fit every person's needs, from Real Estate,
                Mortgages, and Title Services, making sure these big life events are
                an enjoyable experience.</p>
            <p>Our program was designed to allow you to offer valuable and
                impactful benefits and discounts to your employees, which leads to
                high morale, retention, and appeal to new talent. </p>
            <a href="/">
                <button class="discover-btn">Learn More</button>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
