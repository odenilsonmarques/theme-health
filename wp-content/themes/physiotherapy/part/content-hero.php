<div class="col-md-6">
    <?php
      $hero_title = esc_html(get_theme_mod('set_hero_title', 'Please, type some title'));
      $hero_subtitle = esc_html(get_theme_mod('set_hero_subtitle', 'Please, type some subtitle'));
      $hero_button_text = esc_html(get_theme_mod( 'set_hero_button_text', 'Learn More' ));
      $hero_button_link = esc_html(get_theme_mod( 'set_hero_button_link', '#' ));
      $hero_img = esc_html(wp_get_attachment_url( get_theme_mod( 'set_hero_img' ) ));
    ?>
    <h1><?php echo $hero_title ?></h1>
    <p class="mt-4"><?php echo $hero_subtitle ?></p>

    <a class="btn btn-primary contact-us mt-3" href="<?php echo $hero_button_link?>"  target="_blank"><?php echo $hero_button_text ?></a>
</div>
<div class="col-md-6">
    <img src="<?php echo $hero_img?>" class="img-fluid" alt="Imagem" width="350">
</div>