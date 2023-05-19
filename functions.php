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

    wp_enqueue_script("slick", get_template_directory_uri() . "/src/js/slick.min.js");
    wp_enqueue_script("flexmenu", get_template_directory_uri() . "/src/js/flexmenu.min.js");
    wp_enqueue_script("jquery-matchHeight", get_template_directory_uri() . "/src/js/jquery.matchHeight.js");
    wp_enqueue_script("muuri", get_template_directory_uri() . "/src/js/muuri.js");
    wp_enqueue_script("jquery-vide", get_template_directory_uri() . "/src/js/jquery.vide.min.js");
    wp_enqueue_script("jquery-paroller", get_template_directory_uri() . "/src/js/jquery.paroller.min.js");
    wp_enqueue_script("video", get_template_directory_uri() . "/src/js/video.js");
    wp_enqueue_script("jquery-inview", get_template_directory_uri() . "/src/js/jquery.inview.min.js");
    wp_enqueue_script("progressbars", get_template_directory_uri() . "/src/js/progressbar.min.js");
    wp_enqueue_script("lightbox", get_template_directory_uri() . "/src/js/lightbox.js");

    wp_enqueue_script("wow", get_template_directory_uri() . "/src/js/wow.min.js");

    wp_enqueue_script("script", get_template_directory_uri() . "/src/js/script.js", array("jquery", "bootstrap"));

    wp_localize_script('script', 'my_ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
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

function custom_form_submission()
{
    if (isset($_POST['action']) && $_POST['action'] === 'custom_form_submission') {

        $email = sanitize_email($_POST['email']);

        $to = $email;
        $subject = 'Fist Brothers Newsletter';
        $body = "Thank you for subscribing to our newsletter. We will keep you updated with our latest news.";
        $headers = array('Content-Type: text/html; charset=UTF-8');

        wp_mail($to, $subject, $body, $headers);

        $response = array(
            'message' => 'Thank you for subscribing to our newsletter. We will keep you updated with our latest news.',
            'status' => true
        );

        wp_send_json_success($response);
    }
}

add_action('wp_ajax_custom_form_submission', 'custom_form_submission');
add_action('wp_ajax_nopriv_custom_form_submission', 'custom_form_submission');
