<?php 
    get_header();

    $customFields = get_fields();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <section class="company">
      <div class="container">
        <div class="company__header">
          <h2 class="company__title">Clínica odontológica Odonto Company</h2>
        </div>
        <div class="company__gallery">
          <div class="row">
            <div class="offset-2 col-12 col-md-7">
              <div class="company__gallery-main">
                <img src="<?php bloginfo('template_url'); ?>/_assets/img/clinica.jpg" alt="">
              </div>
            </div>
            <div class="col-12 col-md-1">
              <div class="company__gallery-icons">
                <img src="<?php bloginfo('template_url'); ?>/_assets/img/clinica.jpg" alt="">
                <img src="<?php bloginfo('template_url'); ?>/_assets/img/clinica.jpg" alt="">
                <img src="<?php bloginfo('template_url'); ?>/_assets/img/clinica.jpg" alt="">
                <img src="<?php bloginfo('template_url'); ?>/_assets/img/clinica.jpg" alt="">
                <img src="<?php bloginfo('template_url'); ?>/_assets/img/clinica.jpg" alt="">
                <img src="<?php bloginfo('template_url'); ?>/_assets/img/clinica.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="company__content">
          <div class="row">
            <div class="offset-2 col-12 col-md-7">
              <div class="content__header">
                <p class="price">R$ 80.000</p>
                <div class="social">
                  <div class="social-item"><img src="<?php bloginfo('template_url'); ?>/_assets/img/heart.svg" alt="" class="svg card-favorite"><span class="text d-none d-md-block">Favoritar</span></div>
                  <div class="social-item"><img src="<?php bloginfo('template_url'); ?>/_assets/img/share-icon.svg" alt="" class="svg card-favorite"><span class="text d-none d-md-block">Compartilhar</span></div>
                </div>
              </div>
              <div class="content__body">
                <div class="row">
                  <div class="col-12 col-md-5">
                    <h4 class="subtitle">Faturamento mensal</h4>
                    <p class="text">R$ 50.000</p>
                  </div>
                  <div class="col-12 col-md-5">
                    <h4 class="subtitle">Categoria</h4>
                    <p class="text">Vestuário</p>
                  </div>
                  <div class="col-12 col-md-5">
                    <h4 class="subtitle">Lucro líquido mensal</h4>
                    <p class="text">R$ 18.000</p>
                  </div>
                  <div class="col-12 col-md-5">
                    <h4 class="subtitle">Localização</h4>
                    <p class="text">São Bernardo do Campo</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <p class="code">Código 653</p>
                    </div>
                </div>
                <div class="row">
                  <div class="col">
                    <h4 class="subtitle">Descrição</h4>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et rhoncus tortor. Phasellus sodales risus urna, quis luctus leo ullamcorper a. In quis dolor magna. Mauris fringilla ex ante, ac rutrum lacus laoreet dignissim. Morbi eu ipsum ac ante lobortis cursus quis et nisi. Aliquam felis sem, cursus et odio sed, commodo tincidunt mi. Aenean volutpat pretium tincidunt. Pellentesque tincidunt, augue eu pharetra sollicitudin, metus nunc luctus leo, eu dictum nibh velit ut odio. Pellentesque nulla mauris, pharetra at volutpat varius, porta nec ligula. Morbi tincidunt neque quis lorem posuere consequat. Sed porta, ipsum sit amet tincidunt accumsan, ante neque commodo lectus, ac pulvinar velit magna et diam. Donec elementum sodales vulputate. Vestibulum est nisi, dapibus tempus sem vel, lacinia consequat arcu.</p>
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