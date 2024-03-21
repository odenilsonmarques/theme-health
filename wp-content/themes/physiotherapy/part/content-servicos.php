<div class="row mt-5 text-center">
    <div class="col-md-4 widget-image shadow p-3 mb-5 bg-body rounded">
        <!-- <h3>Serviço 1</h3>
        <p>Descrição do serviço 1...</p> -->
        <?php
        if (is_active_sidebar('fisrt-service')) {
            dynamic_sidebar('fisrt-service');
        }
        ?>
    </div>
    <div class="col-md-4 widget-image shadow p-3 mb-5 bg-body rounded"">
        <!-- <h3>Serviço 2</h3>
        <p>Descrição do serviço 2...</p> -->
        <?php
        if (is_active_sidebar('second-service')) {
            dynamic_sidebar('second-service');
        }
        ?>
      </div>
      <div class=" col-md-4 widget-image shadow p-3 mb-5 bg-body rounded"">
        <!-- <h3>Serviço 3</h3>
        <p>Descrição do serviço 3...</p> -->
        <?php
        if (is_active_sidebar('third-service')) {
            dynamic_sidebar('third-service');
        }

        ?>
    </div>
</div>