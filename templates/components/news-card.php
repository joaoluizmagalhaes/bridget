<div class="col-12 col-md-3 news__card">
  <span class="news__card-tag"><?= get_the_category()[0]->name; ?></span>
  <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" class="news__card-img">
  <div class="news__card-wrapper">
      <h3 class="news__card-title"><?php the_title(); ?></h3>
      <p class="news__card-text"><?= get_the_excerpt(); ?></p>
      <a href="<?php the_permalink(); ?>" class="home__section-link">Leia mais</a>
  </div>
</div>