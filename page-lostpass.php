<?php /* Template Name: Recuperar Senha*/ 
    get_header();

    $login  = (isset($_GET['login']) ) ? $_GET['login'] : 0;

    if(is_user_logged_in()) {
      wp_redirect(home_url());
      exit();
    }
?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-12 ">
            <div class="login__wrapper">
              <img src="<?php bloginfo('template_url'); ?>/_assets/img/logo-bridget.svg" alt="" class="login__form-logo">
              <h2 class="login__form-title">Recupere sua conta</h2>
              <?php 
                if( isset($_GET['errors'])){ ?>
                  <div class="login__form-error">
                    <p class="text"><?= esc_html($_GET['errors']) ?></p>
                  </div>
                <?php }

                if( isset($_GET['confirm'])){ ?>
                  <div class="login__form-confirm">
                    <p class="text"><?= esc_html($_GET['confirm']) ?></p>
                  </div>
                <?php }
              ?>
              <form action="<?= esc_url( wp_lostpassword_url()); ?>" method="post" class="login__form">
                <label for="" class="login__form-label">E-mail</label>
                <input type="text" class="login__form-input" name="user_login" id="<?= __('user_login') ; ?>">
                
                <input type="submit" class="btn btn__secondary btn__login-form" value="Enviar">
                <input type="hidden" name="redirect_to" value="<?= esc_url(get_home_url('/')); ?>'" />
              </form>
              
              <p class="text">Não tem uma conta? <a href="<?= esc_url(home_url()); ?>/criar-usuario/" class="login__link">Cadastre-se</a></p>
            </div>
            <div class="login__legal-wrapper">
              <p class="login__legal">
                Ao continuar, você concorda com os <a href="" class="login__link">Termos de Uso</a> e a <a href="" class="login__link">Política de Privacidade</a> da Bridget, e também em receber comunicações via e-mail da Bridget e seus parceiros.
              </p>
            </div>
          </div>
        </div>
      </div>
            
    </main>
  </div>

<?php

    get_footer();