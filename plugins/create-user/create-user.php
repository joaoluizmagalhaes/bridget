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
    if ( isset( $_POST['acf']['field_5a83681ec4d01'] ) ) {
      $user_fields['first_name'] = sanitize_text_field( $_POST['acf']['field_5a83681ec4d01'] );
    }

    if ( isset( $_POST['acf']['field_5a83681ec4d15'] ) ) {
      $user_fields['last_name'] = sanitize_text_field( $_POST['acf']['field_5a83681ec4d15'] );
    }

    if ( isset( $_POST['acf']['field_5a85f62e356bc'] ) ) {
      $user_fields['user_login'] = sanitize_user( $_POST['acf']['field_5a85f62e356bc'] );
    }

    if ( isset( $_POST['acf']['field_5a83689da2624'] ) ) {
      $user_fields['user_email'] = sanitize_email( $_POST['acf']['field_5a83689da2624'] );
    }

    if ( isset( $_POST['acf']['field_5a83681ec4d36'] ) ) {
      $user_fields['user_pass'] = $_POST['acf']['field_5a83681ec4d36'];
    }

    if ( isset( $_POST['acf']['field_5a83681ec4d01'], $_POST['acf']['field_5a83681ec4d15'] ) ) {
      $user_fields['display_name'] = sanitize_text_field( $_POST['acf']['field_5a83681ec4d01'] . ' ' . $_POST['acf']['field_5a83681ec4d15'] );
    }

    $user_id = wp_insert_user( $user_fields );

    if ( is_wp_error( $user_id ) ) {
      // If adding this user failed, deliver an error message. I also do custom JS field validaiton before submit to check for proper email addresses, and to check for duplicate emails/existing usernames. But that code is beyond the scope of this thread
      wp_die( $user_id->get_error_message() );
    } else {
      // Set the 'post_id' to the newly created user_id, including the 'user_' ACF uses to target a user
      return 'user_' . $user_id;
    }
  }
  