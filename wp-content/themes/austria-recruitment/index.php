<?php get_header(); ?>

<?php
    get_template_part('partials/_jumbotron')
?>
<section class="container main-info-area">
    <div class="row">
        <section class="container main-info-area">
            <div class="row">
                <?php if (is_search()): ?>
                <div
                    class="info-feed info-feed--gutter-s-md-all col-btm-12 col-gutter-s-btm-both col-gutter-n-sm-both col-md-8">

                    <?php global $wp_query; ?>
                    <h3 class="communication__header-light">
                        Találatok száma a
                        <span style="color: black">"<?php the_search_query() ?>"</span> keresőszóra:
                        <span style="color: black"><?= $wp_query->found_posts ?></span>
                    </h3>

                </div>
                <?php endif;?>

                <div
                    class="info-feed info-feed--gutter-s-md-all col-btm-12 col-gutter-z-btm-both col-gutter-n-sm-both col-md-8">
                    <?php
                    if (have_posts()) {
                        $utils = new Libs\Utils\Utils();
                        while (have_posts()) {
                            the_post();

                            get_template_part('partials/post/_post-excerpt');
                        }
                    }
                ?>
                </div>

                <?php get_sidebar(); ?>

            </div>
        </section>

    </div> <!-- row -->
</section> <!-- main-info-area end -->

<?php get_template_part('partials/_modal.php') ?>
<?php get_footer();
