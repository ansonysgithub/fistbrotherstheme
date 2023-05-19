<?php

function fb_assets()
{
    wp_register_style("google-font-roboto", "https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i", array(), false, 'all');
    wp_register_style("google-font-cabin", "https://fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i", array(), false, 'all');
    wp_register_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css", array(), false, 'all');
    wp_register_style("font-awesome", "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", array(), "5-1", 'all');

    wp_enqueue_style("styles", get_template_directory_uri() . "/style.css", array("google-font-roboto", "google-font-cabin", "bootstrap", "font-awesome"));

    wp_enqueue_style("responsive", get_template_directory_uri() . "/src/css/responsive.css");
    wp_enqueue_style("slider", get_template_directory_uri() . "/src/css/slider.css");
    wp_enqueue_style("animate", get_template_directory_uri() . "/src/css/animate.min.css");
    wp_enqueue_style("lightbox", get_template_directory_uri() . "/src/css/lightbox.css");
    wp_enqueue_style("video-js", get_template_directory_uri() . "/src/css/video-js.css");
    wp_enqueue_style("date-range-picker", get_template_directory_uri() . "/src/css/daterangepicker.min.css");
    wp_enqueue_style("slick", get_template_directory_uri() . "/src/css/slick.css");
    wp_enqueue_style("slick-theme", get_template_directory_uri() . "/src/css/slick-theme.css");
    wp_enqueue_style("normalize", get_template_directory_uri() . "/src/css/normalize.min.css");
    wp_enqueue_style("smartslider", get_template_directory_uri() . "/src/css/smartslider.min.css");

    wp_register_script("jquery", "https://code.jquery.com/jquery-3.6.0.js");
    wp_register_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js");

    wp_enqueue_script("n2-j", get_template_directory_uri() . "/src/js/n2-j.min.js");
    wp_enqueue_script("nextend-gsap", get_template_directory_uri() . "/src/js/nextend-gsap.min.js");
    wp_enqueue_script("nextend-frontend", get_template_directory_uri() . "/src/js/nextend-frontend.min.js");
    wp_enqueue_script("smartslider-frontend", get_template_directory_uri() . "/src/js/smartslider-frontend.min.js");
    wp_enqueue_script("smartslider-simple-type-frontend", get_template_directory_uri() . "/src/js/smartslider-simple-type-frontend.min.js");
    wp_enqueue_script("nextend-webfontloader", get_template_directory_uri() . "/src/js/nextend-webfontloader.min.js");
    wp_enqueue_script("wow", get_template_directory_uri() . "/src/js/wow.min.js");
}

add_action("wp_enqueue_scripts", "fb_assets");

function fb_theme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support(
        'custom-logo',
        array(
            "height" => 170,
            "width" => 35,
            "flex-width" => true,
            "flex-height" => true,
        )
    );
    add_image_size("post-card", 200, 200, false);
}

add_action("after_setup_theme", "fb_theme_supports");

function fb_add_menus()
{
    register_nav_menus(
        array(
            'menu-principal' => "Menu principal",
            'menu-responsive' => "Menu responsive"
        )
    );
}

add_action("after_setup_theme", "fb_add_menus");
