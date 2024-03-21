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
    <h2 class="text-center">Sobre mim</h2>
    <?php get_template_part('part/content', 'sobre'); ?>
  </div>
</section>

<!-- Serviços -->
<section id="servicos">
  <div class="container">
    <h2 class="text-center">Nossos Serviços</h2>
    <?php get_template_part('part/content','servicos');?>
  </div>
</section>

<!-- Testemunhos/Depoimentos -->
<section id="depoimentos" class="bg-light py-5">
  <div class="container">
    <h2 class="text-center">Depoimentos</h2>
    <?php get_template_part('part/content','depoimentos');?>
  </div>
</section>

<?php get_footer(); ?>