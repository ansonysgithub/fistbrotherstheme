<?php

function fb_assets()
{
    wp_register_style("google-font", "https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;1,900&display=swap", array(), false, 'all');
    wp_register_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css", array(), false, 'all');
    wp_register_style("font-awesome", "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", array(), "5-1", 'all');

    wp_enqueue_style("styles", get_template_directory_uri() . "/src/css/style.css", array("google-font", "bootstrap", "font-awesome"));

    wp_register_script("jquery", "https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js");
    wp_register_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js");
    wp_register_script("popper", "https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js");

    wp_enqueue_script("javascript", get_template_directory_uri() . "/src/js/script.js", array("jquery", "bootstrap", "popper"));
    wp_enqueue_script("formValidation", get_template_directory_uri() . "/src/js/formValidation.js");

    wp_localize_script('javascript', 'ajax_register', array('ajax_url' => admin_url('admin-ajax.php')));
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

function suscribe_submission()
{
    if (isset($_POST['action']) && $_POST['action'] === 'suscribe_form') {

        $errors = array();

        $email = sanitize_email($_POST['email']);

        if (empty($email)) {
            $errors['email'] = 'Email is required';
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email is not valid';
        }

        if (empty($errors)) {

            $to = $email;
            $subject = 'Fist Brothers Newsletter';
            $body = "Thank you for subscribing to our newsletter. We will keep you updated with our latest news.";
            $headers = array('Content-Type: text/html; charset=UTF-8');

            wp_mail($to, $subject, $body, $headers);

            $response = array(
                'message' => 'Thank you for subscribing to our newsletter. We will keep you updated with our latest news.',
                'status' => true
            );

            wp_send_json_success($response, 200);
        } else {
            $response = array(
                'message' => 'Please fill in the required fields with the correct information.',
                'status' => false,
                'errors' => $errors
            );

            wp_send_json_error($response, 422);
        }
    }
}

add_action('wp_ajax_suscribe_form', 'suscribe_submission');
add_action('wp_ajax_nopriv_suscribe_form', 'suscribe_submission');
