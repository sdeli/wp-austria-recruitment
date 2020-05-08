<?php
namespace Libs\Utils;

class Utils
{
    public function echoAuStyledCategoryLinks()
    {
        global $post;
        // global $utils;

        // // var_dump($categs);
        // echo $categs[0]->name;
        $categories = get_the_category($post->ID);

        foreach ($categories as $cat) {
            $category_link = get_category_link($cat->cat_ID);
            echo '
                <a href="'.esc_url($category_link).'" class="au_category au_category--orange" title="'.esc_attr($cat->name).'">'
                    ."<span>"
                        .$cat->name
                    ."</span>"
                .'</a>';
        }
    }
}
