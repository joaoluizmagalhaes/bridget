<?php

    require_once 'plugins/plugins.php';

    // Localize the script with new data
	$ajaxsettings = array(
	    'ajaxurl' => admin_url('admin-ajax.php')
	);
	wp_localize_script( 'bridget-js', 'ajaxsettings', $ajaxsettings );

    add_action('wp_enqueue_scripts','bridget_enqueue_styles', 15);
    function bridget_enqueue_styles(){
        wp_enqueue_style('bootstrap-grid', get_template_directory_uri().'/_assets/vendor/bootstrap/bootstrap.min.css');
        wp_enqueue_style('main-style', get_template_directory_uri().'/_assets/css/style.css');

        if(is_singular('advertise')) {
            wp_enqueue_style('slick-css', get_template_directory_uri().'/_assets/vendor/slick/slick.css');
            wp_enqueue_style('slick-theme-css', get_template_directory_uri().'/_assets/vendor/slick/slick-theme.css');
        }
    }

    add_action('wp_enqueue_scripts','bridget_enqueue_scripts', 0);
    function bridget_enqueue_scripts(){
        wp_register_script('TweenMax-js', get_template_directory_uri().'/_assets/vendor/tweenmax/TweenMax.min.js', array('jquery'),'1.0', true);
		wp_enqueue_script('TweenMax-js');
        wp_register_script('Slick-js', get_template_directory_uri().'/_assets/vendor/slick/slick.min.js', array('jquery'),'1.0', true);
		wp_enqueue_script('Slick-js');
        wp_register_script('jQuery-mask', get_template_directory_uri().'/_assets/vendor/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js', array('jquery'),'1.0', true);
		wp_enqueue_script('jQuery-mask');
        wp_register_script('bridget-js', get_template_directory_uri().'/_assets/js/main.js', array('jquery'),'1.0', true);
		wp_enqueue_script('bridget-js');
        

        if(is_singular('advertise')) {

            wp_register_script('bridget-company-js', get_template_directory_uri().'/_assets/js/single-company.js', array('jquery'),'1.0', true);
		    wp_enqueue_script('bridget-company-js');
        }


        if(is_page('criar-usuario') || is_page()) {

            wp_register_script('bridget-create-user-js', get_template_directory_uri().'/_assets/js/page-create-user.js', array('jquery'),'1.0', true);
		    wp_enqueue_script('bridget-create-user-js');
        }

        if(is_page('minha-avaliacao') || is_page()) {

            wp_register_script('bridget-evaluation-js', get_template_directory_uri().'/_assets/js/evaluation.js', array('jquery'),'1.0', true);
		    wp_enqueue_script('bridget-evaluation-js');
        }
    }

    add_theme_support( 'post-thumbnails' ); 
    add_theme_support( 'menus' );

    function html_allowed() {
        $parameters = array(
            'alt'              => array(),
            'autocomplete'     => array(),
            'class'            => array(),
            'hidden'           => array(),
            'href'             => array(),
            'height'           => array(),
            'id'               => array(),
            'meta-value'       => array(),
            'rel'              => array(),
            'selected'         => array(),
            'src'              => array(),
            'srcset'           => array(),
            'style'            => array(),
            'sizes'            => array(),
            'title'            => array(),
            'value'            => array(),
            'width'            => array(),
        );

        $tags = array(
            'p'      => $parameters,
            'strong' => $parameters,
            'a'      => $parameters,
            'h1'     => $parameters,
            'h2'     => $parameters,
            'h3'     => $parameters,
           
        );

        return $tags;
    }

    add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

    function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
    }

    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
    function custom_excerpt_length( $length ) {
        return 10;
    }

    add_action('init', 'init_remove_support',100);
    function init_remove_support(){
        $post_type = 'page';
        remove_post_type_support( $post_type, 'editor');
    }

    add_action( 'wp_logout', 'redirect_after_logout');
    function redirect_after_logout(){
        wp_redirect( home_url() );
        exit();
    }

   /*
    * Set post views count using post meta
    */
    function setPostViews($postID) {
        $countKey = 'post_views_count';
        $count = get_post_meta($postID, $countKey, true);
        if($count==''){
            $count = 0;
            delete_post_meta($postID, $countKey);
            add_post_meta($postID, $countKey, '0');
        }else{
            $count++;
            update_post_meta($postID, $countKey, $count);
        }
    }
    
    add_filter('login_redirect', 'my_login_redirect', 10, 3);
    function my_login_redirect($redirect_to, $requested_redirect_to, $user) {
        if (is_wp_error($user)) {
            //Login failed, find out why...
            $error_types = array_keys($user->errors);
            //Error type seems to be empty if none of the fields are filled out
            $error_type = 'both_empty';
            //Otherwise just get the first error (as far as I know there
            //will only ever be one)

            if (is_array($error_types) && !empty($error_types)) {
                $error_type = strip_tags ($user->errors[$error_types[0]][0]);
            }
            wp_redirect( home_url() . "/login?login=failed&reason=" . $error_type ); 
            exit;
        } else {
            //Login OK - redirect to another page?
            return home_url() . "/minha-conta";
        }
    }

    add_action( 'login_form_lostpassword', 'do_password_lost'  );

    /**
     * Initiates password reset.
     */
    function do_password_lost() {
        if ( 'POST' == $_SERVER['REQUEST_METHOD'] ) {
            $errors = retrieve_password();

            if ( is_wp_error( $errors ) ) {
                // Errors found

                foreach($errors->errors as $value){
                    $error_msg = $value[0];
                }
               
                wp_redirect( home_url() . "/recuperar-senha?errors=" . strip_tags ($error_msg ));
                //$redirect_url = add_query_arg( 'errors', join( ',', $errors->get_error_codes() ), $redirect_url );
            } else {
                // Email sent
                
                $confirm_msg = 'Verifique no seu e-mail o link de confirmação!';

                wp_redirect( home_url() . "/recuperar-senha?confirm=" . $confirm_msg);
                //$redirect_url = home_url( 'recuperar-senha' );
                //$redirect_url = add_query_arg( 'checkemail', 'confirm', $redirect_url );
            }

            wp_redirect( $redirect_url );
            exit;
        }
    }
    
    add_filter('template_include', 'template_chooser');
    function template_chooser($template) {    
        global $wp_query;   

        $post_type = get_query_var('post_type');   
        
        if( $wp_query->is_search && $post_type == 'advertise' ) {
            return locate_template('archive-advertise.php');  //  redirect to archive-search.php
        }   
        
        return $template;   
    }


    add_filter( 'manage_advertise_posts_columns', 'revealid_add_id_column', 1 );
    function revealid_add_id_column( $columns ) {
        $columns['revealid_id'] = 'Ref';
        return $columns;
    }

    add_action( 'manage_advertise_posts_custom_column', 'revealid_id_column_content', 1, 2 );
    function revealid_id_column_content( $column, $id ) {
        if( 'revealid_id' == $column ) {
            echo $id;
        }
    }
    
    
