<aside
    class="widgets col-btm-12 col-gutter-s-btm-both col-gutter-n-sm-both col-md-4 col-gutter-n-md-right col-gutter-z-md-left">
    <?php
        if (is_active_sidebar('au_main_desktop_sidebar')) {
            dynamic_sidebar('au_main_desktop_sidebar');
        }

        if (function_exists('wpp_get_mostpopular')) {
            $args = array(
                'limit' => 5,
                'header' => 'Népszerű Cikkek',
                'header_start' => '<h3 class="au-top-down-post-list-widget__header">',
                'header_end' => '</h3>',
                'wpp_start' => '<div class="au-top-down-post-list-widget">',
                'wpp_end' => '</div>',
                'excerpt_length' => 55,
                'thumbnail_width' => 150,
                'thumbnail_height' => 100,
                'post_html' => '
                    <div class="au-top-down-post-list-widget__post">
                        <a href="{url}">
                            <img alt="{text_title}" src="{thumb_url}">
                                
                            <div class="au-top-down-post-list-widget__post__info">
                                <h4>{text_title}</h4>
                            </div>
                        </a>
                    </div>
                    '
            );
            wpp_get_mostpopular($args);
        }
    ?>
</aside>


<!-- <h3 class="title">Popular Posts</h3>

<ul class="wpp-list">

    <li>
        <a href="http://127.0.0.1:8080/?p=15" target="_self"><img width="150" height="150" alt="" class="wpp-thumbnail wpp_featured wpp_cached_thumb wpp-lazyloaded" src="http://127.0.0.1:8080/wp-content/uploads/wordpress-popular-posts/15-featured-150x150.jpg"></a> 
        <a href="http://127.0.0.1:8080/?p=15" class="wpp-post-title" target="_self">What is Lorem Ipsum?</a> 
        <p>
Lorem Ipsum&nbsp;is simply dummy text of the printing...</p>
    </li>

    <li>
        <a href="http://127.0.0.1:8080/?p=13" target="_self"><img width="150" height="150" alt="All About TOFU: What You Need to Know to Ace Your Top Funnel Content Game" class="wpp-thumbnail wpp_featured wpp_cached_thumb wpp-lazyloaded" src="http://127.0.0.1:8080/wp-content/uploads/wordpress-popular-posts/13-featured-150x150.jpg"></a> 
        <a href="http://127.0.0.1:8080/?p=13" class="wpp-post-title" target="_self">All About TOFU: What You Need to Know to Ace Your Top Funnel Content Game</a> 
        <p>
Not all consumers want to buy right away. Some want to...</p>
    </li>

    <li>
        <a href="http://127.0.0.1:8080/?p=27" target="_self"><img width="150" height="150" alt="Mi a Lorem Ipsum?" class="wpp-thumbnail wpp_featured wpp_cached_thumb wpp-lazyloaded" src="http://127.0.0.1:8080/wp-content/uploads/wordpress-popular-posts/27-featured-150x150.png"></a> 
        <a href="http://127.0.0.1:8080/?p=27" class="wpp-post-title" target="_self">Mi a Lorem Ipsum?</a> 
        <p>
A&nbsp;Lorem Ipsum&nbsp;egy egyszerû szövegrészlete, s...</p>
    </li>

    <li>
        <a href="http://127.0.0.1:8080/?p=32" target="_self"><img width="150" height="150" alt="Honnan származik?" class="wpp-thumbnail wpp_featured wpp_cached_thumb wpp-lazyloaded" src="http://127.0.0.1:8080/wp-content/uploads/wordpress-popular-posts/32-featured-150x150.jpg"></a> 
        <a href="http://127.0.0.1:8080/?p=32" class="wpp-post-title" target="_self">Honnan származik?</a> 
        <p>




A hiedelemmel ellentétben a Lorem Ipsum nem véletl...</p>
    </li>

    <li>
        <a href="http://127.0.0.1:8080/?p=1" target="_self"><img width="150" height="150" alt="" class="wpp-thumbnail wpp_featured wpp_cached_thumb wpp-lazyloaded" src="http://127.0.0.1:8080/wp-content/uploads/wordpress-popular-posts/1-featured-150x150.jpg"></a> 
        <a href="http://127.0.0.1:8080/?p=1" class="wpp-post-title" target="_self">Hello world!</a> 
        <p>
Lorem Ipsum&nbsp;is simply dummy text of the printing...</p>
    </li>

</ul> -->