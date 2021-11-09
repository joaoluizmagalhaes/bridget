

</div>
<a href="https://api.whatsapp.com/send?phone=5511993271622" class="whats-fixed"><img src="<?php bloginfo('template_url'); ?>/_assets/img/Whatsapp_logoAtivo.svg" alt="" class="svg whats-fixed"></a>
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-2">
        <img src="<?php bloginfo('template_url'); ?>/_assets/img/logo-white.svg" alt="" class="svg footer__logo">
      </div>
      <div class="col-12 col-lg-6">
        <div class="row">
          <div class="col-12 col-lg-4 order-1 ">
            <h4 class="footer__title">Serviços</h4>
            <nav class="footer__nav">
              <?php 
                $argsServicos = array(
                    'menu'       => 'Footer Serviços',
                    'menu_class' => 'footer__nav-list',
                    'container'  => 'ul',
                );
                $menu_wp = wp_nav_menu($argsServicos); 
              ?>
              
            </nav> 
          </div>
          <div class="col-12 col-lg-4 order-2 order-md-3">
          <h4 class="footer__title">Contato</h4>
            <nav class="footer__nav">
            <?php 
                $argsContato = array(
                    'menu'       => 'Footer Contato',
                    'menu_class' => 'footer__nav-list',
                    'container'  => 'ul',
                );
                $menu_wp = wp_nav_menu($argsContato); 
              ?>
              
            </nav> 
          </div>
          <div class="col-12 col-lg-4 order-3 order-md-2">
          <h4 class="footer__title">Sobre nós</h4>
            <nav class="footer__nav">
            <?php 
                $argsSobre = array(
                    'menu'       => 'Footer Sobre',
                    'menu_class' => 'footer__nav-list',
                    'container'  => 'ul',
                );
                $menu_wp = wp_nav_menu($argsSobre); 
              ?>
              
            </nav> 
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3 offset-lg-1 footer__social">
        <h4 class="footer__title no-after">Redes Sociais</h4>
        <div class="footer__social-icon-wrapper">
          <a href="https://www.facebook.com/bridgetbr" target="_blank"><img src="<?php bloginfo('template_url'); ?>/_assets/img/face-icon.svg" alt="" class="svg footer__social-icon"></a>
          <a href="https://www.instagram.com/bridget.brasil" target="_blank"><img src="<?php bloginfo('template_url'); ?>/_assets/img/insta-icon.svg" alt="" class="svg footer__social-icon"></a>
          <a href="https://www.linkedin.com/company/bridgetbr" target="_blank"><img src="<?php bloginfo('template_url'); ?>/_assets/img/linkedin-icon.svg" alt="" class="svg footer__social-icon"></a>
        </div>
      </div>
    </div>
    <div class="row footer__copyright-wrapper">
      <div class="footer__line"></div>
      <p class="footer__copyright">Copyright © Bridget - Todos os direitos reservados</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

<div class="mask-overlay">
  <div class="lds-default newsletter__msg"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
</div>
</body>
</html>