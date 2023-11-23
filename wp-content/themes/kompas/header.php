<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#162641">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#162641">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#162641">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title(); ?></title>
    <link rel="icon" href="<?php echo bloginfo('template_directory'); ?>/images/fav-icon.png" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/css/slick-theme.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo bloginfo('template_directory'); ?>/css/owl.carousel.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo bloginfo('template_directory'); ?>/css/jquery.fancybox.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/css/style.css"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

    <?php wp_head(); ?>
</head>

<body <?php if (!is_front_page()) body_class('interior'); ?> <?php body_class(); ?>>
<header class="header">
    <div class="container">
        <div class="flex space-between align-center">
            <div class="show-on-mobile">
                <div class="flex">
                    <!--            <a class="align-center mg-left" href="tel:0113982-104"><img src="/wp-content/themes/kompas/images/phone.png"><span>065555555</span></a>-->
                    <a class="align-center mg-right" href="mailto:kompasbaljevac@gmail.com"><img
                                src="/wp-content/themes/kompas/images/mail.png"><span>kompasbaljevac@gmail.com</span></a>
                </div>
            </div>
            <div id="logo-sk-show" class="logo text-center">
                <?php
                if (function_exists('kompas_custom_logo_setup')) {
                    the_custom_logo();
                }
                ?>
            </div>

            <div class="menu-toggle">
                <div class="hamburger"></div>
            </div>
            <div class="modal">
                <nav>
                    <div class="center-nav">
                        <?php
                        wp_nav_menu(array(
                            'menu' => 'Main-meni',
                            'container' => false
                        )); ?>
                        <li class="flex justify-center">
                            <ul class="social flex center-all">
                                <?php
                                wp_nav_menu(array(
                                    'menu' => 'Social-menu',
                                    'container_class' => 'social flex center-all',
                                    'container' => false
                                )); ?>
                            </ul>
                        </li>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>