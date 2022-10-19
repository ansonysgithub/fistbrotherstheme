<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo("charset") ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <div id="page-container">

        <!-- Main navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand text-white" href="<?php echo home_url(); ?>">Fist Brothers</a>
            </div>
        </nav>

        <div class="text-center sub-nav">
            <div class="menu">
                <?php wp_nav_menu(
                    array(
                        "menu" => 'menu-principal'
                    )
                ); ?>
            </div>
        </div>