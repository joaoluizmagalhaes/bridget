<?php /* Template Name: Editar Anúncio*/ 

    if(!is_user_logged_in()) {
      wp_redirect(home_url());
      exit();
    }

    if(isset($_GET['id'])){
      $editId = $_GET['id'];
    }
  
    acf_form_head();
    get_header();
  
    $user_meta = get_user_meta(get_current_user_id());

    $redirect_url =  home_url() . '/meus-anuncios/';

    $settings = array(
      'submit_value'	=> 'Editar anúncio',
      'id'				    => 'register_edit_add',
      'post_id'			  => (int)$editId,
      'field_groups'  => array(
        'key'         => 'group_615cd67d36416'
      ),
      'return'        => $redirect_url
    );


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
            <?php while ( have_posts() ) : the_post(); ?>
            <?php acf_form($settings); ?>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </main>
  </div>

<?php

    get_footer();