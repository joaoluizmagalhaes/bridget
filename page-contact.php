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
                                <?= get_template_part('/templates/components/contact-form') ?>
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