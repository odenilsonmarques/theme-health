<?php get_header(); ?>

<section id="all-posts">
    <div class="container">
        <div class="row">
            <h1 class="text-center">Bem - vindo(a) ao meu blog</h1>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-md-6">
                        <figure class="figure mb-5">

                            <?php the_post_thumbnail('large', array('class' => 'img-fluid', 'style' => 'height: 300px; width: 100%; border-radius: 10px')); ?>

                            <figcaption class="figure-caption mt-3">Categorias:
                                <?php
                                // outra maneira de exibir as catewgorias usando um foreach
                                $categories = get_the_category();
                                if ($categories) {
                                    foreach ($categories as $category) {
                                        echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>, ';
                                    }
                                }
                                ?>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-6 content">
                        <h2 class="text-center mb-5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                        <p class="atributted text-center">
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
                            <span class="post-date">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-left" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                </svg>
                                <?php echo $comments_number ? "$comments_number Comentários" : 'Sem comentários'; ?>
                            </span>
                        </p>
                        <p><?php echo wp_trim_words(get_the_content(), 30, ' [...]'); ?> </p>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p>Nada para mostrar</p>
            <?php endif; ?>
        </div>
    </div>
</section>



<?php get_footer(); ?>