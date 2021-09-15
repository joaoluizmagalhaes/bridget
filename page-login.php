<?php /* Template Name: Login*/ 
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
              <h2 class="login__form-title">Acesse sua conta</h2>
              <form action="<?= esc_url( site_url( 'wp-login.php', 'login_post' ) ); ?>" method="post" class="login__form">
                <label for="" class="login__form-label">E-mail</label>
                <input type="text" class="login__form-input" name="log" id="<?= __('user_login') ; ?>">
                <label for="" class="login__form-label label__lost-pass">Senha <a href="#" class="login__link">Esqueceu sua senha?</a></label>
                <input type="password" class="login__form-input last" name="pwd" id="<?= __('user_pass'); ?>">
                <input type="submit" class="btn btn__secondary btn__login-form" value="Entrar">
                <input type="hidden" name="redirect_to" value="<?= esc_url(get_home_url('/')); ?>'" />
              </form>
              <p class="text">ou</p>
              <div class="login__social-wrapper">
                <a href="http://localhost:8080/Server/Freela/bridget/wp-login.php?loginSocial=facebook" data-plugin="nsl" data-action="connect" data-redirect="current" data-provider="facebook" data-popupwidth="475" data-popupheight="175" class="btn btn__face">Facebook</a>
                <a href="http://localhost:8080/Server/Freela/bridget/wp-login.php?loginSocial=google" data-plugin="nsl" data-action="connect" data-redirect="current" data-provider="google" data-popupwidth="600" data-popupheight="600" class="btn btn__google">Google</a>
              </div>
              <p class="text">Não tem uma conta? <a href="#" class="login__link">Cadastre-se</a></p>
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