<?php
namespace Libs\Utils;

use WP_Term;
use Error;

// use Walker_Nav_Menu;

class Utils
{
    public function echoAuStyledCategoryLinks()
    {
        global $post;
        $categories = get_the_category($post->ID);
        $isCurrPostAPage = count($categories) === 0;
        if ($isCurrPostAPage) {
            $this->echoFakePageCategory($categories);
        }
        
        $this->echoAuCategories($categories);
    }

    private function echoAuCategories($categories)
    {
        foreach ($categories as $cat) {
            if (!$cat instanceof WP_Term) {
                throw new Error("incorect datatype");
            }
            
            $category_link = get_category_link($cat->cat_ID);
            echo '
                <a href="'.esc_url($category_link).'" class="au_category au_category--orange" title="'.esc_attr($cat->name).'">'
                    ."<span>"
                        .$cat->name
                    ."</span>"
                .'</a>';
        }
    }

    public function echoFakePageCategory()
    {
        echo '
        <a href="/" class="au_category au_category--orange" title="page">
            <span>Oldal</span>
        </a>';
    }

    public function excerptReadMore($more)
    {
        return '';
    }
}
