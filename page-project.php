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
          <div class="col-12 offset-lg-1 col-lg-4 p-0 p-md-4 project__section-wrapper"> 
            <h4 class="about__section-subtitle"><?= esc_html($customFields['secao_inicial']['subtitulo']) ?></h4>
            <p class="about__section-text"><?= esc_html($customFields['secao_inicial']['texto']) ?></p>
            <img src="<?= esc_url($customFields['secao_inicial']['imagem']) ?>" alt="quem somos" class="about__section-pages-img">
          </div>
          <div class="col-12 col-lg-5 offset-lg-1 project__section-wrapper">
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
                        <h2 class="home__section-title"><?= esc_html($customFields['formulario_de_contato']['titulo']) ?></h2>
                        <div class="container">
                            <div class="row g-0">
                                <div class="col-md-4 col-12 home__contact-whats mb-5">
                                    <h3 class="home__section-subtitle"><?= esc_html($customFields['formulario_de_contato']['subtitulo']) ?></h3>
                                    <p class="home__section-text"><?= esc_html($customFields['formulario_de_contato']['texto']) ?></p>
                                    <a href="https://api.whatsapp.com/send?phone=55<?= esc_html($customFields['formulario_de_contato']['whatsapp']) ?>" class="btn btn__primary"><img src="<?php bloginfo('template_url'); ?>/_assets/img/whats-icon.svg" alt="login" class="btn__icon svg"> WhatsApp</a>
                                </div>
                                <div class="col-12 offset-md-1 col-md-7">
                                    <div class="contact__spinner-wrapper">
                                        <form action="#" class="home__contact-form" id="contact-form">
                                            <label for="nome" class="home__contact-form-label">Seu nome</label>
                                            <input type="text" name="nome" class="home__contact-form-input">
                                            <label for="telefone" class="home__contact-form-label">Seu Telefone</label>
                                            <input type="text" name="telefone" class="home__contact-form-input">
                                            <label for="email" class="home__contact-form-label">Seu melhor E-mail</label>
                                            <input type="text" name="email" class="home__contact-form-input">
                                            <label for="mensagem" class="home__contact-form-label">Mensagem</label>
                                            <textarea name="mensagem" class="home__contact-form-textarea"></textarea>
                                            <button class="btn btn__secondary btn__form" type="submit">Enviar</button>
                                        </form>
                                        <div class="lds-default newsletter__msg"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                                        <div class="newsletter__success resume__msg">
                                            <p class="resume__success-text"><strong>Seu E-mail foi cadastrado com sucesso.</strong><br>Fique atento as nossas mensagens.</p>
                                        </div>
                                        <div class="newsletter__error resume__msg">
                                            <p class="resume__success-text"><strong>Infelizmente algo saiu errado, tente novamente mais tarde!</strong></p>
                                        </div>
                                    </div>
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