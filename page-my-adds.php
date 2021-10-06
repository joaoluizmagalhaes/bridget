<?php /* Template Name: Meus anúncios*/ 

  if(!is_user_logged_in()) {
    wp_redirect(home_url());
    exit();
  }

  get_header();

  $user_meta = get_user_meta(get_current_user_id());
  

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
            <div class="user__create-wrapper">
              <?php 
                $args = array(
                    'post_type'      => 'company',
                    'post_status'    => 'publish',
                    'author'         => get_current_user_id(),
                    'posts_per_page' => 4,
                    'order'          => 'DESC',
                    'orderby'        => 'ID',
                );

                $the_query = new WP_Query( $args );

                //The Loop
                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post(); ?>

                        <div class="home__section-carousel-card-news carousel__item">
                            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" class="home__section-carousel-card-img-news">
                            <div class="home__section-carousel-card-news-wrapper">
                                <span class="home__section-carousel-card-category"><?= get_the_category()[0]->name; ?></span>
                                <h3 class="home__section-carousel-card-title"><?php the_title(); ?></h3>
                                <p class="home__section-carousel-card-text"><?= get_the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="home__section-link">Leia mais</a>
                            </div>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                  <p class="subtitle">Você não possui anúncios publicados no momento</p>
                <?php } ?>
              <?php wp_reset_query(); ?>
              <a href="<?= esc_url(home_url()); ?>/criar-anuncio" class="btn btn__secondary">Criar anúncio</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>

<?php

    get_footer();