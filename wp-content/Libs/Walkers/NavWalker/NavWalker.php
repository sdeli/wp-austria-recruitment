<?php
namespace Libs\Walkers\NavWalker;

// namespace Libs\Utils;

use Walker_Nav_Menu;

class NavWalker extends Walker_Nav_Menu
{
    public function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $output         .=  '<li data-nav-li class="blog-navbar__position__menu__item">';
        $output         .=  $args->before;
        $output         .=  '<a href="' . $item->url . '">';
        $output         .=  $args->link_before . $item->title . $args->link_after;
        $output         .=  '</a>';
        $output         .=  $args->after;
    }

    public function end_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $output         .=  '</li>';
    }
}
