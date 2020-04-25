<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="content-type"
        content="text/html; charset=<?php bloginfo('charset'); ?>" />

    <!-- Stylesheets
	============================================= -->
    <?php wp_head(); ?>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('partials/_blog-navbar.php'); ?>

    <section class="container">
        <div class="row">
            <?php get_template_part('partials/_logo-stripe.php'); ?>
        </div>
    </section>