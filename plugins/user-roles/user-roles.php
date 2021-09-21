<?php

  $result = add_role(
    'basic_user',
    __( 'Usuário Básico' ),
    array(
        'read'          => 'company',  // true allows this capability
        'edit_posts'    => 'company',
        'delete_posts'  => 'company', // Use false to explicitly deny
        'create_posts'  => 'company',
        'publish_posts' => 'company'
    )
  );


  add_action( 'admin_init', 'redirect_non_admin_users' );
  /**
  * Redirect non-admin users to home page
  *
  * This function is attached to the 'admin_init' action hook.
  */
  function redirect_non_admin_users() {
  if ( current_user_can( 'basic_user' ) && ('/wp-admin/admin-ajax.php' != $_SERVER['PHP_SELF']) ) {
    wp_redirect( home_url() );
    exit;
    }
  }

  add_action('after_setup_theme', 'remove_admin_bar');
  function remove_admin_bar() {
    if (current_user_can('basic_user')) {
      show_admin_bar(false);
    }
  }
