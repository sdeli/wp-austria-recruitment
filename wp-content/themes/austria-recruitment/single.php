<?php get_header(); ?>

<?php
    get_template_part('partials/_jumbotron')
?>

<section class="container main-info-area">
    <div class="row">

        <div class="info-feed col-btm-12 col-gutter-z-btm-both col-gutter-n-sm-both col-md-8">
            <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                        $utils = new Libs\Utils\Utils();
                        global $post;
                        $author_ID = $post->post_author;
                        $author_URL = get_author_posts_url($author_ID);

                        $prevPost = get_adjacent_post();
                        $isPrevPost = boolval($prevPost);
                        if ($isPrevPost) {
                            $prev_post_link_url = "/?p=".$prevPost->ID;
                        }
                        
                        $nextPost = get_adjacent_post(false, '', false);
                        $isNextPost = boolval($nextPost);
                        if ($isNextPost) {
                            $next_post_link_url = "/?p=".$nextPost->ID;
                        }
            ?>

            <div id="post-id" class="article fr-view">
                <?php $utils->echoAuStyledCategoryLinks(); ?>
                <div class="article__content">
                    <div class="article__content__header">
                        <h1 class="article__content__header__h3 article__content__header__h3--centered">
                            <?php the_title(); ?>
                        </h1>
                    </div>

                    <div class="article__content__body">
                        <div>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div> <!-- article end -->

            <?php if (isset($prev_post_link_url)) { ?>
            <div class="pagination__left">
                <a href="<?= $prev_post_link_url ?>"
                    class="btn btn--block pagination__btn">
                    <i class="fas fa-chevron-left"></i>
                    <span class="pagination__text">előző</span>
                </a>
            </div>
            <?php } ?>

            <?php if (isset($next_post_link_url)) { ?>
            <div class="pagination__right">
                <a href="<?= $next_post_link_url ?>"
                    class="btn btn--block pagination__btn">
                    <span class="pagination__text">következő</span>
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
            <?php } ?>


            <?php endwhile;
            endif; ?>
        </div> <!-- info-feed end -->

        <?php get_sidebar(); ?>
        <?php get_sidebar(); ?>
    </div> <!-- row -->
</section> <!-- main-info-area end -->

<?php get_template_part('partials/_modal.php') ?>
<?php get_footer();
