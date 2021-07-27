<?php /* Template Name: Contato */ 
    get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
    <section class="contact__section">
        <div class="container">
            <div class="row g-0">
                <div class="home__section-wrapper">
                    <h2 class="home__section-title">Estamos ansiosos para falar com você</h2>
                    <div class="container">
                        <div class="row g-0">
                            <div class="col-md-4 col-12 home__contact-whats">
                                <h3 class="home__section-subtitle">Precisa de um serviço 100% sob medida?</h3>
                                <p class="home__section-text">Nossa equipe está pronta para responder suas dúvidas e elaborar a melhor solução para você.</p>
                                <button class="btn btn__primary"><img src="<?php bloginfo('template_url'); ?>/_assets/img/whats-icon.svg" alt="login" class="btn__icon svg"> WhatsApp</button>
                                <h3 class="home__section-subtitle">Prefere falar pelo telefone?</h3>
                                <p class="home__section-text">(11) 98428-2139<br>(11) 97697-4690</p>
                                <h3 class="home__section-subtitle">Nos mande um e-mail:</h3>
                                <p class="home__section-text"><a href="mailto:projetos@briget.com.br">projetos@briget.com.br</a><br><a href="mailto:elisson@briget.com.br">elisson@briget.com.br</a> </p>
                            </div>
                            <div class="col-12 offset-md-1 col-md-7">
                                <h2 class="home__section-title d-md-none">Preencha o formulário</h2>
                                <form action="#" class="home__contact-form">
                                    <label for="" class="home__contact-form-label">Seu nome</label>
                                    <input type="text" name="" class="home__contact-form-input">
                                    <label for="" class="home__contact-form-label">Seu Telefone</label>
                                    <input type="text" name="" class="home__contact-form-input">
                                    <label for="" class="home__contact-form-label">Seu melhor E-mail</label>
                                    <input type="text" name="" class="home__contact-form-input">
                                    <label for="" class="home__contact-form-label">Mensagem</label>
                                    <textarea name="" id="" class="home__contact-form-textarea"></textarea>
                                    <button class="btn btn__secondary btn__form">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section  class="contact__section">
      <div class="container">
          <div class="maps">
            <iframe
              id="map"
              frameborder="0" style="border:0;"
              src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBeSuicGqev3UooB8meubgpMjy1jkjexWc&q=%22/Zona+Central+de+São+Paulo+-+República%22" allowfullscreen>
            </iframe>
          </div>
      </div>
    </section>
  </main>
</div>

<?php

    get_footer();