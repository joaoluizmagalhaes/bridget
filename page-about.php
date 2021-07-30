<?php /* Template Name: Sobre */ 
    get_header();

    $customFields = get_fields();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
    <section class="about__section home__contact ">
      <div class="container">
        <div class="home__section-wrapper">
          <h1 class="about__section-title main-title"><?= esc_html($customFields['secao_inicial']['titulo']) ?></h1>
        </div>
        <div class="row">
          <div class="col-12 offset-lg-1 col-lg-4 about__contact-wrapper"> 
            <?= wp_kses($customFields['secao_inicial']['texto'], html_allowed()) ?>
          </div>
          <div class="col-12 col-lg-5 offset-lg-1 p-0">
            <img src="<?= esc_url($customFields['secao_inicial']['imagem']) ?>" alt="quem somos" class="about__section-contact-img">
          </div>
        </div>
      </div>
    </section>
    <section class="about__section home__search">
      <div class="container">
        <div class="row">
          <?php foreach($customFields['secao_destaque'] as $destaque) { ?>
            <div class="col col-12 col-lg-4">
              <h2 class="about__title-secondary"><?=  esc_html($destaque['texto_destaque']) ?></h2>
              <p class="about__text-secondary"><?=  esc_html($destaque['texto_auxiliar']) ?></p>
            </div>
          <?php } ?>
      
        </div>
      </div>
    </section>
    <section class="about__section about__pages">
      <div class="container">
        <div class="home__section-wrapper">
          <h1 class="about__section-title main-title"><?= esc_html($customFields['secao_areas']['titulo']) ?></h1>
        </div>
        <?php foreach($customFields['secao_areas']['areas']['area'] as $key => $area ) { ?>
          <div class="row">
            <div class="d-none mt-lg-5 mb-lg-5 d-lg-block col-lg-5 <?= ($key % 2 === 0) ? 'offset-lg-1 order-1 ' : 'order-2' ?>">
              <img src="<?= esc_url($area['imagem']) ?>" alt="quem somos" class="about__section-pages-img">
            </div>
            <div class="col-12  col-lg-5 about__contact-wrapper <?= ($key % 2 === 0) ? 'order-2 ' : 'order-1 offset-lg-1' ?>"> 
              <h4 class="about__section-subtitle"><?= esc_html($area['titulo']) ?></h4>
              <p class="about__section-text"><?= esc_html($area['descricao']) ?></p>   
              <a href="<?= esc_url($area['link']) ?>" class="home__section-link">Saiba mais <img src="<?php bloginfo('template_url'); ?>/_assets/img/arrow-link.svg" class="svg home__section-link-icon"></a>
          </div>
        </div>
        <?php } ?>

      </div>
    </section>
  </main>
</div>

<?php

    get_footer();