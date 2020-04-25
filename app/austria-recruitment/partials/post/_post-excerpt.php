<div class="post">
    <div>
        <?php echoAuStyledCategoryLinks(); ?>
    </div>

    <div class="post__container">
        <div class="post__container__header">
            <h3 class="post__container__header__h3 post__container__header__h3--centered">
                <a href="<?php the_permalink(); ?>" target="_blank">
                    <?php the_title(); ?>
                </a>
            </h3>
        </div>

        <div class="post__container__body">
            <a class="clearfix" href="" target="_blank">
                <?php if (has_post_thumbnail()) { ?>
                <div class="post__container__body__img">
                    <a href="<?php the_permalink(); ?>"
                        target="_blank">
                        <?php
                            the_post_thumbnail('full', [
                                'class' => 'image_fade'
                            ]);
                        ?>
                </div>
            </a>
            <?php } ?>


            <div class="fr-view post__container__body__teaser">
                <?php the_excerpt(); ?>
                Author: <?php the_author(); ?>
            </div>
            </a>
        </div> <!-- post__container__body clearfix -->
    </div> <!-- post__container -->
</div> <!-- post -->

<?php
    function echoAuStyledCategoryLinks()
    {
        $categories = get_categories();

        foreach ($categories as $cat) {
            $category_link = get_category_link($cat->cat_ID);
            echo '
                <a href="'.esc_url($category_link).'" class="category category--orange" title="'.esc_attr($cat->name).'">'
                    ."<span>"
                        .$cat->name
                    ."</span>"
                .'</a>';
        }
    }
