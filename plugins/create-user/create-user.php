<?php

  add_action( 'acf/pre_save_post', 'generate_new_user_id', 10, 2 );
  function generate_new_user_id( $post_id, $form ) {
    // Check that we are targeting the right form. I do this by checking the acf_form ID.
    if ( ! isset( $form['id'] ) || 'register_new_user' != $form['id'] ) {
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

    if ( isset( $_POST['acf']['field_614152d636a38'] ) ) {
      $user_fields['cpf'] = $_POST['acf']['field_614152d636a38'];
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
 
    $user_id = wp_insert_user( $user_fields );


    if ( is_wp_error( $user_id ) ) {
      // If adding this user failed, deliver an error message. I also do custom JS field validaiton before submit to check for proper email addresses, and to check for duplicate emails/existing usernames. But that code is beyond the scope of this thread
      wp_die( $user_id->get_error_message() );
    } else {
      $user_fields['ID'] = $user_id;

      $new_user = wp_update_user($user_fields);

      if ( is_wp_error( $new_user ) ) {
        wp_die( $user_id->get_error_message() );
      } else {
        return 'user_' . $new_user;
      }
    }
  }
  