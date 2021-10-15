<?php
      add_filter('acf/prepare_field/name=cpf_ou_cnpj', 'prepare_field_cpf_cnpj');
      function prepare_field_cpf_cnpj( $field ) {
  
          // Lock-in the value "Example".
  
          if(is_page('minha-conta')) {
              $user_meta = get_user_meta(get_current_user_id());
  
              $field['value'] = $user_meta['cpf_ou_cnpj'][0];
          }
          
          return $field;
      }
  
      add_filter('acf/prepare_field/name=nome_completo_ou_razao_social', 'prepare_field_nome');
      function prepare_field_nome( $field ) {

        
  
          // Lock-in the value "Example".
  
          if(is_page('minha-conta')) {
              $user_meta = get_user_meta(get_current_user_id());

              $full_name = $user_meta['first_name'][0] . ' ' . $user_meta['last_name'][0];
  
              $field['value'] = $full_name;
          }
          
          return $field;
      }
  
      add_filter('acf/prepare_field/name=e-mail', 'prepare_field_email');
      function prepare_field_email( $field ) {
  
          // Lock-in the value "Example".
  
          if(is_page('minha-conta')) {
              $user_data = get_userdata(get_current_user_id());
  
              $field['value'] = $user_data->user_email;
          }
          
          return $field;
      }
  
      add_filter('acf/prepare_field/name=servicos_de_interesse', 'prepare_field_servicos');
      function prepare_field_servicos( $field ) {
  
          // Lock-in the value "Example".
  
          if(is_page('minha-conta')) {
              $user_meta = get_user_meta(get_current_user_id());
             
              $field['value'] = unserialize($user_meta['servicos_de_interesse'][0]);
          }
          return $field;
      }

      add_filter('acf/prepare_field/name=telefone_1', 'prepare_field_tel_1');
      function prepare_field_tel_1( $field ) {
  
          // Lock-in the value "Example".
  
          if(is_page('minha-conta')) {
              $user_meta = get_user_meta(get_current_user_id());
             
              $field['value'] = $user_meta['telefone_1'][0];
          }
          return $field;
      }

      add_filter('acf/prepare_field/name=telefone_2', 'prepare_field_tel_2');
      function prepare_field_tel_2( $field ) {
  
          // Lock-in the value "Example".
  
          if(is_page('minha-conta')) {
              $user_meta = get_user_meta(get_current_user_id());
             
              $field['value'] = $user_meta['telefone_2'][0];
          }
          return $field;
      }

      add_filter('acf/prepare_field/name=areas_de_interesse', 'prepare_field_areas');
      function prepare_field_areas( $field ) {
  
          // Lock-in the value "Example".
  
          if(is_page('minha-conta')) {
              $user_meta = get_user_meta(get_current_user_id());
             
              $field['value'] = ($user_meta['areas_de_interesse'][0] !== '') ? unserialize($user_meta['areas_de_interesse'][0]) : '';

          }
          return $field;
      }


    add_action( 'acf/pre_save_post', 'update_user_id', 10, 2 );
    function update_user_id( $post_id, $form ) {
        // Check that we are targeting the right form. I do this by checking the acf_form ID.
        if ( ! isset( $form['id'] ) || 'update_user' != $form['id'] ) {
        return $post_id;
        }

        // Create an empty array to add user field data into
        $user_fields = array();

        // Check for the fields we need in our postdata, and add them to the $user_fields array if they exist
        if ( isset( $_POST['acf']['field_614152a036a36'] ) ) {
            $user_fields['first_name'] = strtok(sanitize_text_field( $_POST['acf']['field_614152a036a36'] ), ' ');
        }

        if ( isset( $_POST['acf']['field_614152a036a36'] ) ) {
            $explode = explode(' ', sanitize_text_field( $_POST['acf']['field_614152a036a36'] ));
            for($i = 1; $i < sizeof($explode); $i++) {
                if($i + 1 === sizeof($explode)) {
                $last_name = $last_name . $explode[$i];
                } else {
                $last_name = $last_name . $explode[$i] . ' ';
                }
                
            }

            $user_fields['last_name'] = $last_name;
        }

        if ( isset( $_POST['acf']['field_614152d636a38'] ) ) {
            $user_fields['user_login'] =  preg_replace( '/[^\p{L}\p{N}]/u', '', strtok(sanitize_user( $_POST['acf']['field_614152d636a38'] ), '@'));
        }

        if ( isset( $_POST['acf']['field_614152d636a38'] ) ) {
            $user_fields['user_email'] = sanitize_email( $_POST['acf']['field_614152d636a38'] );
        }

        if ( isset( $_POST['acf']['field_6141535336a39'] ) ) {
            $user_fields['user_pass'] = $_POST['acf']['field_6141535336a39'];
        }

        if ( isset( $_POST['acf']['field_614152a036a36'] ) ) {
            $user_fields['display_name'] = $user_fields['first_name'] . ' ' . $user_fields['last_name'];
        }

        if ( isset( $_POST['acf']['field_614152be36a37'] ) ) {
            $user_fields['cpf_ou_cnpj'] = $_POST['acf']['field_614152be36a37'];
        }

        if ( isset( $_POST['acf']['field_614153d536a3b'] ) ) {
            $user_fields['telefone_1'] = $_POST['acf']['field_614153d536a3b'];
        }

        if ( isset( $_POST['acf']['field_6141540336a3c'] ) ) {
            $user_fields['telefone_2'] = $_POST['acf']['field_6141540336a3c'];
        }

        if ( isset( $_POST['acf']['field_6141556536a3e'] ) ) {
            $user_fields['areas_de_interesse'] = $_POST['acf']['field_6141556536a3e'];
        }

        if ( isset( $_POST['acf']['field_6141541136a3d'] ) ) {
            $user_fields['servicos_de_interesse'] = $_POST['acf']['field_6141541136a3d'];
        }

        $user_fields['ID'] = get_current_user_id();

    
        $user_id = wp_update_user( $user_fields );
    

        if ( is_wp_error( $user_id ) ) {
        // If adding this user failed, deliver an error message. I also do custom JS field validaiton before submit to check for proper email addresses, and to check for duplicate emails/existing usernames. But that code is beyond the scope of this thread
            wp_die( $user_id->get_error_message() );
        } else {
            $user_fields['ID'] = $user_id;

            update_user_meta($user_id, 'cpf_ou_cnpj', $user_fields['cpf_ou_cnpj']);
            update_user_meta($user_id, 'telefone_1', $user_fields['telefone_1']);
            update_user_meta($user_id, 'telefone_2', $user_fields['telefone_2']);
            update_user_meta($user_id, 'areas_de_interesse', $user_fields['areas_de_interesse']);
            update_user_meta($user_id, 'servicos_de_interesse', $user_fields['servicos_de_interesse']);

                
            wp_set_current_user( $user_id );
            wp_set_auth_cookie( $user_id );

            $sucess_message = 'Perfil atualizado com sucesso!';

            wp_redirect( home_url() . "/minha-conta?success=" . $sucess_message ); 
            exit;
        
        }
    }