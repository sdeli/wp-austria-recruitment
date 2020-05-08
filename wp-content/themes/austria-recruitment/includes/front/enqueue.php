<?php

function au_enqueue()
{
    $uri                =   get_theme_file_uri();
    $ver                =   AU_DEV_MODE ? time() : false;

    wp_register_style(
        'au_google_fonts',
        'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i'
    );
    wp_register_style('au_main_stylesheet', $uri.'/assets/css/main-bundled.css', [], $ver);
    
    wp_enqueue_style('au_main_stylesheet');
    wp_enqueue_style('au_google_fonts');

    wp_register_script('au_jquery', 'https://code.jquery.com/jquery-3.3.1.min.js');
    wp_register_script('au_font_awesome', 'https://kit.fontawesome.com/4535a1b8de.js');
    wp_register_script('au_main_js', $uri.'/assets/js/main-bundled.js', [], $ver);
    
    wp_enqueue_script('au_jquery');
    wp_enqueue_script('au_font_awesome');
    wp_enqueue_script('au_main_js', null, ['au_jquery'], false, true);
    // wp_enqueue_style('au_bootstrap');

    // wp_register_script('ju_plugins', $uri . '/assets/js/plugins.js', [], $ver, true);
    // wp_register_script('ju_functions', $uri . '/assets/js/functions.js', [], $ver, true);

    // wp_enqueue_script('ju_plugins');
    // wp_enqueue_script('ju_functions');
}
