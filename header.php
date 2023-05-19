<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fist Brothers</title>
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>

    <div class="header-line-wrapper">
        <header class="header-wrapper fixed-top plr100">
            <div class="table height-100p">
                <div class="table-row">
                    <div class="table-cell valign-top text-center vm-sm">
                        <div class="main-menu">
                            <span class="toggle_menu">
                                <span></span>
                            </span>
                            <ul class="menu clearfix">
                                <?php wp_nav_menu(
                                    array(
                                        "menu" => 'menu-principal'
                                    )
                                ); ?>
                            </ul>
                        </div>
                    </div>
                    <div class="table-cell valign-top text-right">
                        <div class="right-bl">
                            <div class="search-wrapper inline-block valign-middle">
                                <a href="#join-now" class="btn header-btn ml25 color-white hidden-sm hidden-xs">
                                    Join us Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>