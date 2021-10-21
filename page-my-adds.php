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
          <div class="col-12 col-md-2">
            <?= get_template_part('/templates/components/account-menu') ?>
            <a href="<?= esc_url(home_url()); ?>/criar-anuncio" class="btn btn__secondary btn__my-adds">Criar anúncio</a>
          </div>
          <div class="col-12 col-md-9">
            <div class="my-adds__wrapper">
              <?php 
                $args = array(
                    'post_type'      => 'advertise',
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

                    <div class="my-adds__card">
                      <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" class="my-adds__thumb">
                      <div class="my-adds__card-wrapper">
                        <h3 class="my-adds__title"><?php the_title(); ?></h3>
                        <a href="<?php the_permalink(); ?>" class="my-adds__link" target="_blank">Ver anúncio</a>
                        <a href="<?= esc_url(home_url()); ?>/editar-anuncio?id=<?= the_ID(); ?>" class="my-adds__link" >Editar anúncio</a>
                      </div>
                    </div>

                  <?php } ?>
                <?php } else { ?>
                  <p class="subtitle">Você não possui anúncios publicados no momento</p>
                <?php } ?>
                <?php wp_reset_query(); ?>
              
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>

<?php

    get_footer();