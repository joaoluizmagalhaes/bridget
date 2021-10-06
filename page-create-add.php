<?php /* Template Name: Criar Anúncio*/ 

    if(!is_user_logged_in()) {
      wp_redirect(home_url());
      exit();
    }
  
    acf_form_head();
    get_header();
  
    $user_meta = get_user_meta(get_current_user_id());

    $settings = array(
      'submit_value'	=> 'Cadastrar anúncio',
      'id'				    => 'register_new_add',
      'post_id'			  => 'new_add_post',
      'field_groups' => array(
        'key' => 'group_615cd67d36416'
      ),
    )

?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <div class="container">
        <div class="row col-12">
          <div class="add__create-wrapper">
            <div class="add__create-title-wrapper">
              <h2 class="title">Cadastro da empresa</h2>
              <p class="subtitle">Preencha corretamente os dados da sua empresa para prosseguir com o cadastro do seu anúndio</p>
            </div>
            <?php acf_form($settings); ?>
          </div>
        </div>
      </div>
    </main>
  </div>

<?php

    get_footer();