<?php

define('AU_DEV_MODE', true);
$composerAutoLoadPath = dirname(__DIR__). '/../vendor/autoload.php';
require_once $composerAutoLoadPath;
$utils = new Libs\Utils\Utils();

include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/register-menus.php'));
include(get_theme_file_path('/includes/register-widgets.php'));

add_action('wp_enqueue_scripts', 'au_enqueue');
add_action('init', 'au_register_menus');
add_action('widgets_init', 'au_widgets');
add_filter('excerpt_more', [$utils, 'excerptReadMore']);

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('automatic-feed-links');
add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ));
