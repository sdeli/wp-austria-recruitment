<?php
/**
 * Template Name: Front PAge Template
 * Template Post Type: page
 *
 */
get_header();
get_template_part('partials/_jumbotron')
?>

<section class="container main-info-area">
    <div class="row">

        <div class="info-feed col-btm-12 col-gutter-z-btm-both col-gutter-n-sm-both col-md-8">
            <?php get_template_part('partials/page/_front-page-content'); ?>
        </div> <!-- info-feed end -->

        <?php get_sidebar(); ?>

    </div> <!-- row -->
</section> <!-- main-info-area end -->
<?php get_template_part('partials/_modal.php') ?>
<?php get_footer();
