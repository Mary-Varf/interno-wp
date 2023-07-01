<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interno</title>
    <?php wp_head(); ?>
    <?php wp_footer(); ?>
</head>
<body>
<header>
    <div class="container">
        <div class="header">
            <a href="<?php echo site_url(); ?>" class="logo">
                <img src="<?php echo INTERNO_IMG_DIR ?>/logo.svg" alt="">
            </a>
            <?php
            wp_nav_menu( [
                'menu'            => 'Main Menu',
                'container'       => 'nav',
                'menu_class'      => 'header__nav',
            ] );
            ?>
            <button class="header__search" onclick="openModal()">
                <img src="<?php echo INTERNO_IMG_DIR ?>/search.svg" alt="">
            </button>
            <button class="header__menu" onclick="openModalMenu()"></button>
        </div>
    </div>
</header>

<div class="overlay" id="overlay">
    <div class="modal-search">
        <div class="container">
            <div class="modal-search__content">
                <?php get_search_form(); ?>
                <button type="button" class="modal-search__close" onclick="closeModal()"></button>
            </div>
        </div>
    </div>
</div>

<div class="overlay" id="overlayMenu">
    <div class="modal">
        <div class="container">
            <div class="modal__content">
                <?php
                wp_nav_menu( [
                    'menu'            => 'Main Menu',
                    'container'       => 'nav',
                    'menu_class'      => 'header__nav',
                ] );
                ?>
            </div>
            <button type="button" class="modal__close" onclick="closeModalMenu()"></button>
        </div>
    </div>
</div>