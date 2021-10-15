<?php /* Template Name: Minha Conta*/ 

  if(!is_user_logged_in()) {
    wp_redirect(home_url());
    exit();
  }

  acf_form_head();
  get_header();

  $user_meta = get_user_meta(get_current_user_id());
  
  $settings = array(
    'submit_value'	=> 'Atualizar',
    'id'				    => 'update_user',
    'post_id'			  => 'update_user',
    'field_groups' => array(
      'key' => 'group_614149e28a3e3'
    ),
  );



?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <section class="account">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="account__title title">Olá <?= $user_meta['first_name'][0] ?></h2>
          </div>
          <div class="col-12 col-md-3">
            <?= get_template_part('/templates/components/account-menu') ?>
          </div>
          <div class="col-12 col-md-9">
            <div class="user__create-wrapper">
              <?php if( isset($_GET['success'])){ ?>
                <div class="login__form-confirm">
                  <p class="text"><?= esc_html($_GET['success']) ?></p>
                </div>
              <?php } ?>
              <?php acf_form($settings); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>

<?php

    get_footer();