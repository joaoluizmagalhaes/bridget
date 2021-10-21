<?php /* Template Name: Vender */ 
    get_header();

    $customFields = get_fields();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <section class="sell__header">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-5 offset-md-1">
            <img src="<?php bloginfo('template_url'); ?>/_assets/img/sell-img-1.png" alt="">
          </div>
          <div class="col-12 col-md-5">
            <div class="sell__header-wrapper">
              <h2 class="title">Venda sua empresa com a Bridget</h2>
              <p class="subtitle">Anuncie seu negócio no nosso marketplace. É rápido e seguro.</p>
              <a href="<?= (!is_user_logged_in()) ? home_url() . '/criar-usuario/' : home_url() . '/criar-anuncio/' ?>" class="btn btn__secondary extra__padding">+ Criar anúncio</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="sell__content">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="sell__content-wrapper">
              <h4 class="subtitle bold">Não sabe por onde começar?<br> Conte conosco para ajudarmos em todas as etapas necessárias para concretizar sua venda</h4>
              <p class="text">Vender uma empresa requer organização e relacionamento. Além de elaborar um Valuation sólido, a empresa precisa utilizar os meios corretos para chegar ao real comprador em potencial.</p>
              <p class="text">Não obstante, após a concretização da venda é necessário um acompanhamento adequado das etapas de formalização.</p>
              <img src="<?php bloginfo('template_url'); ?>/_assets/img/sell-img-2.jpg" alt="">
            </div>
          </div>
          <div class="col-12 col-md-5 offset-md-1">
            <div class="row">
              <div class="col-12">
                <div class="sell__carousel carousel" id="carousel-sell">
                  <div class="sell__carousel-wrapper">
                    <div class="item carousel__item">
                      <div class="sell__item">Avaliação da empresa (Valuation)</div>
                      <div class="sell__item">Planejamento estratégico</div>
                    </div>
                    <div class="item carousel__item">
                      <div class="sell__item">Elaboração de Material Comercial</div>
                      <div class="sell__item">Divulgação e Pesquisa de Mercado</div>
                    </div>
                    <div class="item carousel__item">
                      <div class="sell__item">Abordagem de Interessados</div>
                      <div class="sell__item">Termo de Confidencialidade</div>
                    </div>
                    <div class="item carousel__item">
                      <div class="sell__item">Due Diligence</div>
                      <div class="sell__item">Negociações</div>
                    </div>
                    <div class="item carousel__item">
                      <div class="sell__item">Formalização</div>
                    </div>
                  </div>
                  <div class="sell__carousel-controls home__section-carousel-controls">
                    <div class="carousel-arrow-left disabled"><img src="<?php bloginfo('template_url'); ?>/_assets/img/arrow-left.svg" alt="" class=" svg"></div>
                    <div class="carousel-bullets-wrapper"></div>
                    <div class="carousel-arrow-right"><img src="<?php bloginfo('template_url'); ?>/_assets/img/arrow-right.svg" alt="" class=" svg"></div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="sell__details-wrapper">
                  <ol class="sell__list">
                    <li class="sell__list-item">Clique em criar anúncio</li>
                    <li class="sell__list-item">Preencha os dados da sua empresa</li>
                    <li class="sell__list-item">Seu anúncio é aprovado em poucos minutos</li>
                    <li class="sell__list-item">Nossos consultores entram em contato</li>
                    <li class="sell__list-item">Sua empresa começa a receber contatos e propostas</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="sell__button-wrapper">
              <a href="<?= (!is_user_logged_in()) ? home_url() . '/criar-usuario/' : home_url() . '/criar-anuncio/' ?>" class="btn btn__secondary extra__padding">+ Criar anúncio</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="sell__footer">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="sell__footer-wrapper">
              <h2 class="title">Não sabe quanto vale seu negócio?</h2>
              <p class="text">A Bridget ajuda empresas e empreendedores no processo de Valuation, a arte e ciência de avaliar empresas. O Valuation é etapa fundamental em qualquer processo de fusão e quisição.</p>
              <a href="" class="btn btn__primary extra__padding">Avaliar minha empresa</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>

<?php

    get_footer();