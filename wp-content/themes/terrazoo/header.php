<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                    ?>
                        <!-- <a href="<?php echo esc_html(home_url('/')); ?>">TerraZoo</a> -->
                        <img src="http://localhost:8170/wp-content/uploads/2024/04/cropped-logo.png" alt="">
                    <?php
                    }
                    ?>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fe fe-x"></i>
                    </button>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'zoo_main_menu',
                        'container' => 'ul',
                        'container_class' => 'navbar-nav ms-auto', // Alterei de 'navbar-nav ms-lg-auto' para 'navbar-nav ms-auto'
                        'menu_class' => 'navbar-nav ms-auto', // Alterei de 'navbar-nav ms-lg-auto' para 'navbar-nav ms-auto'
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', // Mantive a estrutura do items_wrap igual ao que você forneceu
                    ));
                    
                    ?>

                    <!-- Button -->
                    <a class="navbar-btn btn btn-sm btn-primary lift ms-auto teste py-2 px-3"
                        href="https://themes.getbootstrap.com/product/landkit/" target="_blank">
                        QUERO SER PARCEIRO
                    </a>
                </div>
            </div>
        </nav>
    </header>