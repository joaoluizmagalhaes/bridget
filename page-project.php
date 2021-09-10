<?php /* Template Name: Estruturação de Projetos*/ 
    get_header();

    $customFields = get_fields();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main project">
    <section class="about__section home__contact ">
      <div class="container">
        <div class="home__section-wrapper">
          <h1 class="about__section-title main-title"><?= esc_html($customFields['titulo']) ?></h1>
        </div>
        <div class="row">
          <div class="col-12 offset-lg-1 col-lg-5 project__section-wrapper"> 
            <h4 class="about__section-subtitle"><?= esc_html($customFields['secao_inicial']['subtitulo']) ?></h4>
            <p class="about__section-text"><?= esc_html($customFields['secao_inicial']['texto']) ?></p>
            <img src="<?= esc_url($customFields['secao_inicial']['imagem']) ?>" alt="quem somos" class="about__section-pages-img">
          </div>
          <div class="col-12 col-lg-4 offset-lg-1 project__section-wrapper">
            <?php foreach($customFields['secao_inicial']['items'] as $item) { ?>
              <div class="project__section-item">
                <h4 class="project__section-item-title"><?= esc_html($item['titulo']) ?></h4>
                <p class="project__section-item-text"><?= esc_html($item['texto']) ?></p>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
    <section class="about__section home__contact project__do">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-11 offset-md-1">
            <h4 class="about__section-subtitle"><?= esc_html($customFields['o_que_fazemos']['titulo']) ?></h4>
          </div>
          <?php foreach($customFields['o_que_fazemos']['items'] as $key => $item) { ?>
            <div class="col-12 <?= ($key % 2 === 0 ? 'offset-md-1' : '') ?> col-md-5">
              <div class="row">
                <div class="col-1">	
                  <img src="<?= esc_url($item['icone']) ?>" alt="">
                </div>
                <div class="col-11">
                  <h4 class="project__section-subtitle"><?= esc_html($item['titulo']) ?></h4>
                  <p class="project__section-text"><?= esc_html($item['texto']) ?></p>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>
    <section class="home__section home__contact">
            <div class="container">
                <div class="row g-0">
                    <div class="home__section-wrapper">
                        <div class="container">
                            <div class="row g-0">
                                <div class="col-md-4 col-12 home__contact-whats mb-5 project__contact">
                                    <h2 class="home__section-title"><?= esc_html($customFields['formulario_de_contato']['titulo']) ?></h2>
                                    <h3 class="home__section-subtitle"><?= esc_html($customFields['formulario_de_contato']['subtitulo']) ?></h3>
                                    <p class="home__section-text"><?= esc_html($customFields['formulario_de_contato']['texto']) ?></p>
                                    <a href="https://api.whatsapp.com/send?phone=55<?= esc_html($customFields['formulario_de_contato']['whatsapp']) ?>" class="btn btn__primary"><img src="<?php bloginfo('template_url'); ?>/_assets/img/whats-icon.svg" alt="login" class="btn__icon svg"> WhatsApp</a>
                                </div>
                                <div class="col-12 offset-md-1 col-md-7">
                                  <?= get_template_part('/templates/components/contact-form') ?>
                                </div>
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