<?php $unique_id = esc_attr(uniqid('search-form-')); ?>

<div class="communication visible-just-on-mobile-view"
    action="<?php echo esc_url(home_url('/')); ?>">
    <h3 class="visible-just-on-desktop-view communication__header-light">
        <?php _e('Keress az oldalon', 'au'); ?>
    </h3>

    <form method="get"
        action="<?php echo esc_url(home_url('/')); ?>"
        class="padding-top-md-0 communication__form">

        <input class="
            communication__form__input--no-margin-bottom
            communication__form__input 
            communication__form__input--inline" style="width: 68%"
            id="<?php echo $unique_id; ?>" name="s"
            value="<?php the_search_query(); ?>" type="text"
            placeholder=<?php _e('keresőszó kifejezés', 'au'); ?>
        name="name" />

        <button style="width: 28%; vertical-align: middle; margin-left: 2%;" type="submit"
            class="communication__form__btn btn ">Keres</button>
    </form>
</div>