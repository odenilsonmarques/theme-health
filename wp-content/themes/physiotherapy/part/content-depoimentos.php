<div class="row mt-5 text-center">
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