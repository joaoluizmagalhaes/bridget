<?php

  add_action('acf/pre_save_post', 'acf_override_title_company_save_post', -1);
  function acf_override_title_company_save_post($post_id) {
    if (empty($_POST['acf']))
      return;
    
    $_POST['acf']['_post_title'] = $_POST['acf']['field_615cdaee5599b']['field_615cdb135599c'];
    $_POST['acf']['_post_content'] = $_POST['acf']['field_615cdaee5599b']['field_615cdb235599d'];

    return $post_id;
  }


  add_action('acf/save_post', 'my_acf_save_post');
  function my_acf_save_post( $post_id ) {

    // Get newly saved values.
    $values = get_fields( $post_id );

    // Check the new value of a specific field.
    $featured_image_id = $values['dados_do_anuncio']['imagens'][0]['imagem']['ID'];
    if( $featured_image_id ) {
      add_post_meta($post_id, '_thumbnail_id', $featured_image_id);
    }
  }
  