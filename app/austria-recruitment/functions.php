<?php

define('AU_DEV_MODE', true);

include(get_theme_file_path('/includes/front/enqueue.php'));

add_action('wp_enqueue_scripts', 'au_enqueue');
