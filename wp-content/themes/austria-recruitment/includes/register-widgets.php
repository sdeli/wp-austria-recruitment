<?php

function au_widgets()
{
    register_sidebar([
        'name'          =>  __('Au Main Desktop Sidebar', 'au'),
        'id'            =>  'au_main_desktop_sidebar',
        'description'   =>  __('Desktop Sidebar for Austria Recruitmnet theme', 'au'),
        'before_widget' =>  '<div id="%1$s" class="main-desktop-sidebar %2$s">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h4>',
        'after_title'   =>  '</h4>'
    ]);

    register_sidebar([
        'name'          =>  __('Au Bottom Mobile Widget Area', 'au'),
        'id'            =>  'au_bottom_mobile_widget_area',
        'description'   =>  __('Mobile widget area to bootom for Austria Recruitmnet theme', 'au'),
        'before_widget' =>  '<div id="%1$s" class="bottom_mobile_widget_area %2$s">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h4>',
        'after_title'   =>  '</h4>'
    ]);

    register_sidebar([
        'name'          =>  __('Au Top Mobile Widget Area', 'au'),
        'id'            =>  'au_top_mobile_widget_area',
        'description'   =>  __('Mobile widget area to top for Austria Recruitmnet theme', 'au'),
        'before_widget' =>  '<div id="%1$s" class="top_mobile_widget_area %2$s">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h4>',
        'after_title'   =>  '</h4>'
    ]);
}
