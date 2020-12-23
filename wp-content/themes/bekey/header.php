<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header class="header">
        <div class="container-fluid h-100">
            <div class="row d-flex justify-content-between h-100">
                <div class="col-4 col-md-2 logo-block d-flex align-items-center h-100">
                    <div class="logo">
                        <a href="<?php echo home_url('/'); ?>">
                            <?php if (has_custom_logo()) {
                                echo get_custom_logo();
                            } else {
                                bloginfo('name');
                            } ?>

                        </a>
                    </div>
                </div>
                <div class="col-8 col-sm-6 col-md-3 menu d-flex justify-content-end align-items-center h-100">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'menu_header_social',
                        'container' => ''
                    )); ?>
                    <div class="search">
                        <svg>
                            <svg class="">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#search"></use>
                            </svg>
                        </svg>
                    </div>
                    <div class="login">
                        <?php
                        if (!is_user_logged_in()) { ?>
                            <a href="<?php echo wp_login_url(); ?>">
                                <svg class="">
                                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#login"></use>
                                </svg>
                            </a>
                        <?php } else { ?>
                            <a href="<?php echo wp_logout_url(); ?>">Logout</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
