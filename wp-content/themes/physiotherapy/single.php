<?php get_header(); ?>
<section id="all-posts">
    <div class="container">
        <div class="row">
            <!-- <h1 class="text-center">Bem - vindo(a) ao meu blog</h1> -->
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-md-12 content">
                    <h2 class=" mb-5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="atributted">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="2 1 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                        </svg>
                        Por <?php the_author(); ?>
                        <span class="post-date">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="4 1 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                            </svg><?php the_date(); ?>
                        </span>
                        <?php
                        $comments_number = get_comments_number();
                        ?>
                    </p>
                    <p><?php echo wp_trim_words(get_the_content()); ?></p>
                </div>
            <?php
                // lógica para exibir ou nao os comentários
                // 1º argumento verifica se o post esta abertos a comentario. Lembra definimos isso no painel do wp
                // 2º verifica se existe comentarios no post. caso uma das condições seja verdaira entra no if e exibe os comentarios
                if (comments_open() || get_comments_number()) {
                    //exie um template de formulario de comentarios
                    comments_template();
                }
                ?>
<?php


            endwhile; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>