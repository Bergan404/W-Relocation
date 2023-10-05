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
        <div class="row justify-content-between gap-5">
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
    </div>
</section>

<?php get_footer(); ?>
