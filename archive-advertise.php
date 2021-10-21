<?php /* Template Name: Busca empresas */ 
    get_header();

    $args = array(
      'post_type'      => 'advertise',
      'post_status'    => 'publish',
      'posts_per_page' => 12,
      'order'          => 'DESC',
      'orderby'        => 'date',
      's'              => $s
  );

  $the_query = new WP_Query( $args );

  $count = $the_query->found_posts;
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <section class="buy">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="buy__list-header">
              <h3 class="buy__title">Empresas à venda</h3>
              <?php get_template_part('/templates/components/searchform-advertise'); ?>
              <p class="buy__subtitle"> <?= esc_html($count); ?> <?= ($count <= 1) ? 'resultado de busca encontrado' : 'resultados de busca encontrados' ;?></p>
            </div>
            <div class="row">
            <?php
                  

                  //The Loop
                  if ( $the_query->have_posts() ) {
                      while ( $the_query->have_posts() ) {
                          $the_query->the_post(); 
                          $customFields = get_fields();

                          $classes = array(
                            'search__article',
                            'col-12',
                            'col-md-6',
                            'buy__card'
                          );
                          
                          ?>
                          <article id="post-<?php the_ID(); ?>" <?php post_class($classes); ?>>
                              <a href="<?= esc_url(the_permalink()); ?>">
                                <img src="<?= get_the_post_thumbnail_url(); ?>" alt="">
                                <div class="card-wrapper">
                                  <img src="<?php bloginfo('template_url'); ?>/_assets/img/heart-full.svg" alt="" class="svg card-favorite">
                                  <p class="card-category"><?= esc_html($customFields['dados_do_anuncio']['categoria']->name) ?></p>
                                  <p class="card-title"><?php the_title(); ?></p>
                                  <p class="card-text"><?= esc_html($customFields['dados_do_anuncio']['cidade']); ?></p>
                                  <p class="card-text"><?= esc_html($customFields['dados_do_anuncio']['estado']); ?></p>
                                  <p class="card-title">R$ <?= esc_html(number_format($customFields['dados_do_anuncio']['valor_da_venda'],2,",",".")); ?></p>
                                </div>
                              </a>
                            </article>
                      <?php } ?>
                  <?php } ?>

            
            </div>
            <div class="buy__list-footer">
              <p class="list-footer-text">Precisa de ajuda para encontrar a empresa ideal pra você? <br>Nossa equipe te dá todo o suporte necessário.</p>
              <button class="btn btn__secondary">Entre em contato</button>
            </div>
          </div>
          <!--
          <div class="d-none d-md-block col-md-5">
            <img src="<?php bloginfo('template_url'); ?>/_assets/img/mapa.jpg" alt="" class="mapa">
          </div>
-->
        </div>
      </div>
    </section>
  </main>
</div>



<?php

    get_footer();