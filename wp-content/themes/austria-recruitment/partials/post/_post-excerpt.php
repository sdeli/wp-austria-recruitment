<div class="post">
    <div>
        <?php
            global $utils;
            $utils->echoAuStyledCategoryLinks();
         ?>
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
            <?php
                $hasThumbnail = has_post_thumbnail();
                if ($hasThumbnail) {
                    ?>
            <a class="clearfix" href="" target="_blank">
                <div class="post__container__body__img">
                    <a href="<?php the_permalink(); ?>"
                        target="_blank">
                        <?php
                            the_post_thumbnail('full', [
                                'class' => 'image_fade'
                            ]); ?>
                </div>
            </a>
            <?php
                } ?>

            <?php if ($hasThumbnail) : ?>
            <div class="fr-view post__container__body__teaser">
                <?php else : ?>
                <div class="fr-view post__container__body__teaser post__container__body__teaser--full-width">
                    <?php endif; ?>
                    <p style="margin-bottom: 0px;">
                        <?php echo get_the_excerpt().'...<br>'; ?>
                    </p>
                    <a href="<?php the_permalink(); ?>"
                        class="post__read-more">olvass tovább...</a>
                </div>
                </a>
            </div> <!-- post__container__body clearfix -->
        </div> <!-- post__container -->
    </div> <!-- post -->