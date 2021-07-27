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
    }

    add_action('wp_enqueue_scripts','bridget_enqueue_scripts', 0);
    function bridget_enqueue_scripts(){
        wp_register_script('TweenMax-js', get_template_directory_uri().'/_assets/vendor/tweenmax/TweenMax.min.js', array('jquery'),'1.0', true);
		wp_enqueue_script('TweenMax-js');
        wp_register_script('hammer-js', 'https://hammerjs.github.io/dist/hammer.min.js', array('jquery'), false, true);
        wp_enqueue_script('hammer-js');;
        wp_register_script('bridget-js', get_template_directory_uri().'/_assets/js/main.js', array('jquery'),'1.0', true);
		wp_enqueue_script('bridget-js');
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
    
