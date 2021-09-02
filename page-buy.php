<?php /* Template Name: Comprar */ 
    get_header();

    $customFields = get_fields();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <section class="buy">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-7">
            <div class="buy__list-header">
              <h3 class="buy__title">Empresas à venda</h3>
              <?php get_search_form(); ?>
              <p class="buy__subtitle">18 resultados de busca encontrados</p>
            </div>
            <div class="row">
              <div class="col-12 col-md-6 buy__card">
                <img src="<?php bloginfo('template_url'); ?>/_assets/img/img-buy.jpg" alt="">
                <div class="card-wrapper">
                  <img src="<?php bloginfo('template_url'); ?>/_assets/img/heart-full.svg" alt="" class="svg card-favorite">
                  <p class="card-category">Categoria</p>
                  <p class="card-title">Nome da Empresa</p>
                  <p class="card-text">Cidade</p>
                  <p class="card-text">Estado</p>
                  <p class="card-title">R$ 85.000</p>
                </div>
              </div>
              <div class="col-12 col-md-6 buy__card">
                <img src="<?php bloginfo('template_url'); ?>/_assets/img/img-buy.jpg" alt="">
                <div class="card-wrapper">
                  <img src="<?php bloginfo('template_url'); ?>/_assets/img/heart.svg" alt="" class="svg card-favorite">
                  <p class="card-category">Categoria</p>
                  <p class="card-title">Nome da Empresa</p>
                  <p class="card-text">Cidade</p>
                  <p class="card-text">Estado</p>
                  <p class="card-title">R$ 85.000</p>
                </div>
              </div>
              <div class="col-12 col-md-6 buy__card">
                <img src="<?php bloginfo('template_url'); ?>/_assets/img/img-buy.jpg" alt="">
                <div class="card-wrapper">
                  <img src="<?php bloginfo('template_url'); ?>/_assets/img/heart.svg" alt="" class="svg card-favorite">
                  <p class="card-category">Categoria</p>
                  <p class="card-title">Nome da Empresa</p>
                  <p class="card-text">Cidade</p>
                  <p class="card-text">Estado</p>
                  <p class="card-title">R$ 85.000</p>
                </div>
              </div>
              <div class="col-12 col-md-6 buy__card">
                <img src="<?php bloginfo('template_url'); ?>/_assets/img/img-buy.jpg" alt="">
                <div class="card-wrapper">
                  <img src="<?php bloginfo('template_url'); ?>/_assets/img/heart.svg" alt="" class="svg card-favorite">
                  <p class="card-category">Categoria</p>
                  <p class="card-title">Nome da Empresa</p>
                  <p class="card-text">Cidade</p>
                  <p class="card-text">Estado</p>
                  <p class="card-title">R$ 85.000</p>
                </div>
              </div>
              <div class="col-12 col-md-6 buy__card">
                <img src="<?php bloginfo('template_url'); ?>/_assets/img/img-buy.jpg" alt="">
                <div class="card-wrapper">
                  <img src="<?php bloginfo('template_url'); ?>/_assets/img/heart.svg" alt="" class="svg card-favorite">
                  <p class="card-category">Categoria</p>
                  <p class="card-title">Nome da Empresa</p>
                  <p class="card-text">Cidade</p>
                  <p class="card-text">Estado</p>
                  <p class="card-title">R$ 85.000</p>
                </div>
              </div>
              <div class="col-12 col-md-6 buy__card">
                <img src="<?php bloginfo('template_url'); ?>/_assets/img/img-buy.jpg" alt="">
                <div class="card-wrapper">
                  <img src="<?php bloginfo('template_url'); ?>/_assets/img/heart.svg" alt="" class="svg card-favorite">
                  <p class="card-category">Categoria</p>
                  <p class="card-title">Nome da Empresa</p>
                  <p class="card-text">Cidade</p>
                  <p class="card-text">Estado</p>
                  <p class="card-title">R$ 85.000</p>
                </div>
              </div>
            </div>
            <div class="buy__list-footer">
              <p class="list-footer-text">Precisa de ajuda para encontrar a empresa ideal pra você? <br>Nossa equipe te dá todo o suporte necessário.</p>
              <button class="btn btn__secondary">Entre em contato</button>
            </div>
          </div>
          <div class="d-none d-md-block col-md-5">
            <img src="<?php bloginfo('template_url'); ?>/_assets/img/mapa.jpg" alt="" class="mapa">
          </div>
        </div>
      </div>
    </section>
  </main>
</div>



<?php

    get_footer();