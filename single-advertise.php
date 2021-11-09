<?php 
    get_header();

    $customFields = get_fields();

?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <section class="company">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="container">
          <div class="company__header">
            <h2 class="company__title"><?= esc_html($customFields['dados_do_anuncio']['nome_do_anuncio']) ?></h2>
          </div>
          <div class="company__gallery">
            <div class="row ">
              <div class="offset-md-2 col-12 col-md-7 p-0 p-md-3">
                <div class="company__gallery-main">
                  <?php foreach ($customFields['dados_do_anuncio']['imagens'] as $imagem) { ?>
                    <img src="<?= esc_url($imagem['imagem']['url']) ?>" alt="">
                  <?php } ?>
                </div>
              </div>
              <div class="col-12 col-md-1">
                <div class="company__gallery-icons">
                  <?php foreach ($customFields['dados_do_anuncio']['imagens'] as $imagem) { ?>
                    <div> 
                      <img src="<?= esc_url($imagem['imagem']['url']) ?>" alt="">
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
          <div class="company__content">
            <div class="row">
              <div class="offset-md-2 col-12 col-md-7">
                <div class="content__header">
                  <p class="price">R$ <?= esc_html(number_format($customFields['dados_do_anuncio']['valor_da_venda'],2,",",".")) ?></p>
                  <div class="social">
  
                    <div class="social-item"><?= get_favorites_button($post_id, $site_id); ?><span class="text d-none d-md-block">Favoritar</span></div>
                    <div class="social-item share-btn"><img src="<?php bloginfo('template_url'); ?>/_assets/img/share-icon.svg" alt="" class="svg card-favorite "><span class="text d-none d-md-block">Compartilhar</span></div>
                  </div>
                </div>
              </div>
              <div class="offset-md-2 col-12 col-md-8">
                <div class="content__body">
                  <div class="row">
                    <div class="col-12 col-md-5">
                      <h4 class="subtitle">Faturamento mensal</h4>
                      <p class="text">R$ <?= esc_html(number_format($customFields['dados_do_anuncio']['faturamento_anual'],2,",",".")) ?></p>
                    </div>
                    <div class="col-12 col-md-5">
                      <h4 class="subtitle">Categoria</h4>
                      <p class="text"><?= esc_html($customFields['dados_do_anuncio']['categoria']->name) ?></p>
                    </div>
                    <div class="col-12 col-md-5">
                      <h4 class="subtitle">Lucro líquido mensal</h4>
                      <p class="text">R$ <?= esc_html(number_format($customFields['dados_do_anuncio']['lucro_liquido_anual'],2,",",".")) ?></p>
                    </div>
                    <div class="col-12 col-md-5">
                      <h4 class="subtitle">Localização</h4>
                      <p class="text"><?= esc_html($customFields['dados_do_anuncio']['cidade']) ?></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <p class="code">Ref <?= get_the_ID(); ?></p>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <h4 class="subtitle">Descrição</h4>
                      <p class="text"><?= esc_html($customFields['dados_do_anuncio']['descricao']) ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </article>
    </section>
    <section class="company__contact">
      <div class="container">
        <div class="row">
          <div class="col-12 offset-md-2 col-md-8">  
            <div class="company__contact-header">
              <h2 class="title">Se interessou por este anúncio?</h2>
              <p class="subtitle">Preencha os campos abaixo e nós entraremos em contato</p>
            </div>
          </div>
          <div class="col-12 offset-md-2 col-md-6">
            <?= get_template_part('/templates/components/contact-form') ?>
          </div>
        </div>
      </div>
    </section>
    <section class="company__related">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-12 company__related-wrapper">
                <h2 class="company__title">Anúncios relacionados</h2>
              </div>
            </div>
            <div class="row">
              <?php 
                $args = array(
                  'post_type'      => 'advertise',
                  'post_status'    => 'publish',
                  'posts_per_page' => 3,
                  'order'          => 'DESC',
                  'orderby'        => 'date',
                  'tax_query'      => array(
                    array (
                        'taxonomy' => 'segments',
                        'field'    => 'slug',
                        'terms'    => esc_html($customFields['dados_do_anuncio']['categoria']->name),
                    )
                  ),
                );
            
                $the_query = new WP_Query( $args );

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
                        )
                        
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
            <div class="row">
              <div class="col-12 company__related-wrapper">
                <a href="<?= esc_url( home_url( '/comprar' ) ) ?>" class="btn btn__secondary">Ver mais anúncios</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>



<?php

    get_footer();