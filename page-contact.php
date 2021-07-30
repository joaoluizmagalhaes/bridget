<?php /* Template Name: Contato */ 
    get_header();

    $customFields = get_fields();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
    <section class="contact__section">
        <div class="container">
            <div class="row g-0">
                <div class="home__section-wrapper">
                    <h2 class="home__section-title"><?= esc_html($customFields['titulo']) ?></h2>
                    <div class="container">
                        <div class="row g-0">
                            <div class="col-md-4 col-12 home__contact-whats">
                                <h3 class="home__section-subtitle"><?= esc_html($customFields['subtitulo']) ?></h3>
                                <p class="home__section-text"><?= esc_html($customFields['texto']) ?></p>
                                <a href="https://api.whatsapp.com/send?phone=55<?= esc_html($customFields['whatsapp']) ?>" class="btn btn__primary" target="_blank" ><img src="<?php bloginfo('template_url'); ?>/_assets/img/whats-icon.svg" alt="login" class="btn__icon svg"> WhatsApp</a>
                                <h3 class="home__section-subtitle">Prefere falar pelo telefone?</h3>
                                <div class="contact__section-wrapper">
                                    <?php foreach ($customFields['telefones'] as $telefone) { ?>
                                        <p class="home__section-text"><?= esc_html($telefone['telefone']) ?></p>
                                    <?php } ?>
                                </div>
                                
                                <h3 class="home__section-subtitle">Nos mande um e-mail:</h3>
                                <div class="contact__section-wrapper">
                                    <?php foreach ($customFields['emails'] as $email) { ?>
                                        <p class="home__section-text"><a href="mailto:<?= esc_html($email['email']) ?>"><?= esc_html($email['email']) ?></a></p>
                                    <?php } ?>
                                </div>
                                
                            </div>
                            <div class="col-12 offset-md-1 col-md-7">
                                <div class="contact__spinner-wrapper">
                                    <h2 class="home__section-title d-md-none">Preencha o formulário</h2>
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