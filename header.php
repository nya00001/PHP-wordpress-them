<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS II Final</title>
    <!-- Link to the current theme's stylesheet -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <!-- Function that hooks into the WordPress header to add scripts, styles, or anything else needed -->
    <?php wp_head(); ?>
</head>
<body class="body">
<header>
    <!-- Include a template part for widgets specific to the header -->
    <?php get_template_part('template-part/widget', 'header'); ?>
    <nav class="navbar">
        <div class="container-fluid">
            <!-- Link and logo for the site's home page -->
            <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
                <img src="<?php echo get_theme_file_uri('assets/logo.png'); ?>" alt="logo">
            </a>
            <!-- Dynamic navigation menu that adapts based on admin settings -->
            <div class="navbar-nav">
                <?php wp_nav_menu(array(
                    'theme_location' => 'primary_menu',
                    'menu_class'     => 'item',
                )); ?>
            </div>
            <!-- Include additional template parts like font icons -->
            <?php get_template_part('template-part/font', 'icons'); ?>
            <!-- Include the search form -->
            <?php get_search_form(); ?>
            <!-- Display a dynamically set phone number from theme options -->
            <?php cms2_display_phone_number(); ?>
        </div>
    </nav>
</header>