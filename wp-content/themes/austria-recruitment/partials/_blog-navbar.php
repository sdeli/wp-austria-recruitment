<nav class="blog-navbar">
    <div class="blog-navbar__hamburger">
        <div class="blog-navbar__hamburger__relative-cont">
            <div class="blog-navbar__hamburger__relative-cont__background"></div>
            <i class="blog-navbar__hamburger__relative-cont__search-icon fas fa-search"></i>
            <div class="blog-navbar__hamburger__relative-cont__icon">
                <div class="blog-navbar__hamburger__relative-cont__icon__bar-middle"></div>
            </div>
        </div>
    </div>

    <div class="blog-navbar__position">
        <div class="blog-navbar__position__menu">
            <div class="blog-navbar__position__menu__background"></div>
            <div class="blog-navbar__position__menu__close-btn">
                <div class="blog-navbar__position__menu__close-btn__icon"></div>
            </div>
            <ul data-nav-li-conatiner>
                <?php
                        get_template_part('partials/_mobile-searchform');
                        
                        if (has_nav_menu('nav-menu')) {
                            $navWalker = new Libs\Walkers\NavWalker\NavWalker();

                            wp_nav_menu([
                                'items_wrap' => '%3$s',
                                'theme_location' =>  'nav-menu',
                                'container' =>  false,
                                'walker' => $navWalker
                            ]);
                        }
                ?>
                <li data-nav-li class="blog-navbar__position__menu__item-separator"></li>

                <?php
                     $categories = get_categories();
                     foreach ($categories as $cat) {
                         $category_link = get_category_link($cat->cat_ID);
                         echo '
                            <li data-nav-li class="blog-navbar__position__menu__item">
                                <a href="'.esc_url($category_link).'">'
                                     .$cat->name.
                                '</a>
                             </li>';
                     }
                ?>

                <li data-nav-li class="nav__drop-down">
                    <i class="nav__drop-down__icon fas fa-sort-down"></i>

                    <div class="nav__drop-down__position">
                        <div class="nav__drop-down__position__container">
                            <div class="nav__drop-down__position__container__background"></div>

                            <ul class="nav__drop-down__position__container__ul"></ul>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>