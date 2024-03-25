<div class="row text-center">
    <h2 class="text-center subtitles"><?php echo get_theme_mod('set_testimonys_title', 'please, add some title') ?></h2>
    <div class="col-md-4 widget-image-testimony">
        <?php
        if (is_active_sidebar('first-testimony')) {
            dynamic_sidebar('first-testimony');
        }
        ?>
    </div>
    <div class="col-md-4 widget-image-testimony">
        <?php
        if (is_active_sidebar('second-testimony')) {
            dynamic_sidebar('second-testimony');
        }
        ?>
    </div>
    <div class="col-md-4 widget-image-testimony">
        <?php
        if (is_active_sidebar('third-testimony')) {
            dynamic_sidebar('third-testimony');
        }
        ?>
    </div>
</div>