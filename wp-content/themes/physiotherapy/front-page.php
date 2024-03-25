<?php get_header(); ?>

<!-- Banner Principal -->
<section id="hero">
  <div class="container">
    <div class="hero-items row align-items-center">
      <?php get_template_part('part/content', 'hero'); ?>
    </div>
  </div>
</section>

<!-- Sobre -->
<section id="sobre" class="bg-light ">
  <div class="container">
    <?php get_template_part('part/content', 'sobre'); ?>
  </div>
</section>

<!-- Serviços -->
<section id="servicos">
  <div class="container">
    <?php get_template_part('part/content','servicos');?>
  </div>
</section>

<!-- Testemunhos/Depoimentos -->
<section id="depoimentos" class="bg-light py-5">
  <div class="container">
    <?php get_template_part('part/content','testimonys');?>
  </div>
</section>

<?php get_footer(); ?>