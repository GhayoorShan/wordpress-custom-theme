<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container">
        <header>
            <div class="brandname"><?php bloginfo('name'); ?></div>
            <nav>
                <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
            </nav>
            <div class="buttons">
                <a href="#" class="login">Login</a>
                <a href="#" class="join">JOIN US</a>
            </div>
        </header>
    </div>
