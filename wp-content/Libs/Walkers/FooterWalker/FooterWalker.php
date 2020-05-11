<?php
namespace Libs\Walkers\FooterWalker;

use Walker_Nav_Menu;

class FooterWalker extends Walker_Nav_Menu
{
    public function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $output         .=  '<li>';
        $output         .=  $args->before;
        $output         .=  '<a class="footer__info-item__ul__a" href="' . $item->url . '">';
        $output         .=  $args->link_before . $item->title . $args->link_after;
        $output         .=  '</a>';
        $output         .=  $args->after;
    }

    public function end_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $output         .=  '</li>';
    }
}
