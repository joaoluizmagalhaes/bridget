<?php /* Template Name: Favoritos*/ 

  if(!is_user_logged_in()) {
    wp_redirect(home_url());
    exit();
  }

  $user_meta = get_user_meta(get_current_user_id());

  get_header();

?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <section class="account">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="account__title title">Olá <?= $user_meta['first_name'][0] ?></h2>
          </div>
          <div class="col-12 col-md-3">
            <?= get_template_part('/templates/components/account-menu') ?>
          </div>
          <div class="col-12 col-md-9">
            <div class="favorite__wrapper">
              <div class="row">

              <?php 

                $posts_id = get_user_favorites($user_id , $site_id , $filters = null );

                $args = array(
                  'post__in' => $posts_id,
                  'post_type' => 'company'
                );

                $the_query = new WP_Query( $args );

                if ( $the_query->have_posts() ) {
                  while ( $the_query->have_posts() ) {
                      $the_query->the_post(); 

                      $customFields = get_fields();
                      
                      ?>
                      
                      <div class="col-12 col-md-4 buy__card">
                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="">
                        <div class="card-wrapper">
                          <img src="<?php bloginfo('template_url'); ?>/_assets/img/heart-full.svg" alt="" class="svg card-favorite">
                          <p class="card-category">Categoria</p>
                          <p class="card-title"><?php the_title(); ?></p>
                          <p class="card-text"><?= esc_html($customFields['dados_do_anuncio']['cidade']) ?></p>
                          <p class="card-text"><?= esc_html($customFields['dados_do_anuncio']['estado']) ?></p>
                          <p class="card-title">R$ <?= esc_html(number_format($customFields['dados_do_anuncio']['valor_da_venda'],2,",",".")) ?></p>
                          <a href="<?php the_permalink(); ?>" class="home__section-link">Leia mais</a>
                        </div>
                      </div>
                   
                  <?php } ?>
                <?php } ?>
                <?php wp_reset_query(); ?>
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