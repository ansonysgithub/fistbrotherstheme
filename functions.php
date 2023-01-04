<?php

function fb_assets()
{
    wp_register_style("google-font", "https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;1,900&display=swap", array(), false, 'all');
    wp_register_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), false, 'all');
    wp_register_style("font-awesome", "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", array(), "5-1", 'all');

    wp_enqueue_style("styles", get_template_directory_uri() . "/style.css", array("google-font", "bootstrap", "font-awesome"));

    wp_register_script("jquery", "https://code.jquery.com/jquery-3.6.0.js");
    wp_register_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js");

    wp_enqueue_script("javascript", get_template_directory_uri() . "/bootstrap.js", array("jquery", "bootstrap", "bootstrap"));
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