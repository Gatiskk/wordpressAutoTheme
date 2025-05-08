<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>?ver=<?php echo time(); ?>">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="container">
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>

        <nav class="main-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container'      => false,
                'menu_class'     => 'menu',
            ));
            ?>
        </nav>
    </div>
</header>
<main>