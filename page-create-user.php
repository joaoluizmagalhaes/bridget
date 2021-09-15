<?php /* Template Name: Criar Usuário*/ 
    acf_form_head();
    get_header();

    $settings = array(
      'field_groups' => array(
        'key' => 'group_614149e28a3e3'
      ),
      'submit_value'	=> 'Cadastrar'
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