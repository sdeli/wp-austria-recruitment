<?php

function au_enqueue()
{
    $uri                =   get_theme_file_uri();
    $ver                =   AU_DEV_MODE ? time() : false;

    wp_register_style(
        'ju_google_fonts',
        'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i',
        [],
        $ver
    );
    wp_register_style('au_main_stylesheet', $uri . '/assets/css/main-bundled.css', [], $ver);

    wp_enqueue_style('au_main_stylesheet');

    // wp_register_script('ju_plugins', $uri . '/assets/js/plugins.js', [], $ver, true);
    // wp_register_script('ju_functions', $uri . '/assets/js/functions.js', [], $ver, true);

    // wp_enqueue_script('jquery');
    // wp_enqueue_script('ju_plugins');
    // wp_enqueue_script('ju_functions');
}
