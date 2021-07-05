<?php /* Template Name: Estruturação de Projetos*/ 
    get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
    <section class="about__section home__contact ">
      <div class="container">
        <div class="home__section-wrapper">
          <h1 class="about__section-title main-title">Estruturação de Projetos</h1>
        </div>
        <div class="row">
          <div class="col-12 offset-lg-1 col-lg-4 project__section-wrapper"> 
            <h4 class="about__section-subtitle">Identificar riscos e oportunidades é fundamental para se atingir os resultados pretendidos.</h4>
            <p class="about__section-text">O desafio de uma empresa a ser aberta ou que deseja crescer começa na análise dos investimentos necessários e estruturação financeira de projetos, independentemente do segmento de atuação.</p>
            <img src="<?php bloginfo('template_url'); ?>/_assets/img/project-1.jpg" alt="quem somos" class="about__section-pages-img">
          </div>
          <div class="col-12 col-lg-5 offset-lg-1 p-0">
            
          </div>
        </div>
      </div>
    </section>
    <section class="home__section home__contact">
            <div class="container">
                <div class="row g-0">
                    <div class="home__section-wrapper">
                        <h2 class="home__section-title">Estamos ansiosos para falar com você</h2>
                        <div class="container">
                            <div class="row g-0">
                                <div class="col-md-4 d-none d-md-flex home__contact-whats">
                                    <h3 class="home__section-subtitle">Precisa de um serviço 100% sob medida?</h3>
                                    <p class="home__section-text">Nossa equipe está pronta para responder suas dúvidas e elaborar a melhor solução para você.</p>
                                    <button class="btn btn__primary"><img src="<?php bloginfo('template_url'); ?>/_assets/img/whats-icon.svg" alt="login" class="btn__icon svg"> WhatsApp</button>
                                </div>
                                <div class="col-12 offset-md-1 col-md-7">
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
  </main>
</div>

<?php

    get_footer();