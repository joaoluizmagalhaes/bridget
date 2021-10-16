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