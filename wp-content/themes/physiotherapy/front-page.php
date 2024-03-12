<?php get_header(); ?>

<!-- Banner Principal -->
<section id="hero">

  <div class="container">
    <div class="hero-items row align-items-center">
      <div class="col-md-6">
        <h1>Bem-vindo ao Mundo do Bem-Estar</h1>
        <p class="mt-4">Encontre Equilíbrio e Vitalidade com a Nossa Fisioterapeuta.</p>
      </div>
      <div class="col-md-6">
        <img src="http://localhost:8170/wp-content/uploads/2024/02/jb.png" class="img-fluid" alt="Imagem" width="350">
      </div>
    </div>
  </div>
</section>

<!-- Sobre -->
<section id="sobre" class="bg-light ">
  <div class="container">
    <h2 class="text-center">Sobre mim</h2>
    <div class="row justify-content-center mt-5">
      <div class="col-md-5" style="border: none">
        <h3 class="text-center">Dr. Bianca Maria</h3>
        <p class="about-paragraph">
          Olá! Sou uma médica dedicada a fornecer cuidados de saúde excepcionais para minha
          comunidade. Com anos de experiência e um compromisso com a excelência, estou aqui para ajudar a melhorar a vida
          de meus pacientes.
        </p>
      </div>
      <div class="col-md-5 text-center" style="border: none">
        <h3>Formação</h3>
        <ul class="list-inline">
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg my-2" viewBox="0 0 16 16">
              <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
            </svg><span class="icon-itens">Graduação em pisioterapia pela UFMA</span>
          </li>
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg my-2" viewBox="0 0 16 16">
              <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
            </svg><span class="icon-itens">Especialização em Cardiologia Clínica</span>
          </li>
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg my-2" viewBox="0 0 16 16">
              <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
            </svg><span class="icon-itens">Membro da Sociedade de Cardiologia</span>
          </li>
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
              <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
            </svg><span class="icon-itens">Participação em diversos congressos</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Serviços -->
<section id="servicos">
  <div class="container">
    <h2 class="text-center">Nossos Serviços</h2>
    <div class="row mt-5 text-center">
      <div class="col-md-4 widget-image">
        <!-- <h3>Serviço 1</h3>
        <p>Descrição do serviço 1...</p> -->
        <?php
        if (is_active_sidebar('fisrt-service')) {
          dynamic_sidebar('fisrt-service');
        }
        ?>
      </div>
      <div class="col-md-4 widget-image">
        <!-- <h3>Serviço 2</h3>
        <p>Descrição do serviço 2...</p> -->
        <?php
        if (is_active_sidebar('second-service')) {
          dynamic_sidebar('second-service');
        }
        ?>
      </div>
      <div class="col-md-4 widget-image">
        <!-- <h3>Serviço 3</h3>
        <p>Descrição do serviço 3...</p> -->
        <?php
        if (is_active_sidebar('third-service')) {
          dynamic_sidebar('third-service');
        }

        ?>
      </div>
    </div>
  </div>
</section>

<!-- Testemunhos/Depoimentos -->
<section id="depoimentos" class="bg-light py-5">
  <div class="container">
    <h2 class="text-center">Depoimentos</h2>
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
  </div>
</section>


<?php get_footer(); ?>