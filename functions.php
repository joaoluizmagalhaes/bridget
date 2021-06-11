<?php
    add_action('wp_enqueue_scripts','bridget_enqueue_styles', 15);
    function bridget_enqueue_styles(){
        wp_enqueue_style('slick-style', get_template_directory_uri().'/_assets/vendor/slick/slick.css');
        wp_enqueue_style('slick-theme-style', get_template_directory_uri().'/_assets/vendor/slick/slick-theme.css');
        wp_enqueue_style('bootstrap-style', get_template_directory_uri().'/_assets/vendor/bootstrap/bootstrap-grid.min.css');
        wp_enqueue_style('main-style', get_template_directory_uri().'/_assets/css/style.css');
       
    }

    add_action('wp_enqueue_scripts','bridget_enqueue_scripts', 0);
    function bridget_enqueue_scripts(){
        wp_register_script('TweenMax-js', get_template_directory_uri().'/_assets/vendor/tweenmax/TweenMax.min.js', array('jquery'),'1.0', true);
		wp_enqueue_script('TweenMax-js');
        wp_register_script('bridget-js', get_template_directory_uri().'/_assets/js/main.js', array('jquery'),'1.0', true);
		wp_enqueue_script('bridget-js');
    }
