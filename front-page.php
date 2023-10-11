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
            <div class="col white-txt">
                <h4>Let the experts help you.</h4>
                <br />
                <h2>Taking care of your Relocation needs
                    is what we do best.</h2>
            </div>
        </div>
        <div class="overlay"></div>
    </div>
</section>

<section class="container-fluid py-5">
    <div class="container">
        <h2 class="text-center">WHY W RELOCATION</h2>
        <div class="row py-4">
            <div class="col">
                <h4>TECHNOLOGY.</h4>
            </div>
            <div class="col">
                <h4>TECHNOLOGY.</h4>
            </div>
            <div class="col">
                <h4>TECHNOLOGY.</h4>
            </div>
            <div class="col">
                <h4>TECHNOLOGY.</h4>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid py-5 gray-bg">
    <div class="row">
        <div class="col">

        </div>
        <div class="col">
            <h3>DISCOVER W RELOCATION</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
