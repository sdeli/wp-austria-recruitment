<?php get_header(); ?>

<?php
    get_template_part('partials/_jumbotron')
?>
<section class="container main-info-area">
    <div class="row">
        <section class="container main-info-area">
            <div class="row">
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
