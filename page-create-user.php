<?php /* Template Name: Criar Usuário*/ 
    acf_form_head();
    get_header();

    $settings = array(
      'submit_value'	=> 'Cadastrar',
      'id'				    => 'register_new_user',
      'post_id'			  => 'new_user',
      'field_groups' => array(
        'key' => 'group_614149e28a3e3'
      ),
    )

?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
          <div class="container">
            <div class="row col-12">
              <div class="user__create-wrapper">
                <h2 class="title">Crie sua conta</h2>
                <?php acf_form($settings); ?>
              </div>
            </div>
          </div>
        </div>
    </div>

<?php

    get_footer();