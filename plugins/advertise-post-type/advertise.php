<?php

	add_action('init', 'init_advertise_post_type');
	function init_advertise_post_type() {

		$labels = array(
		    'add_new'            => _x('Novo Anúncio', 'advertise'),
				'add_new_item'       => _x('Adicionar novo Anúncio', 'advertise'),
				'edit_item'          => _x('Editar Anúncio', 'advertise'),
				'menu_name'          => _x('Anúncios', 'advertise'),
				'name'               => _x('Anúncios', 'advertise'),
				'new_item'           => _x('Novo Anúncio', 'advertise'),
				'not_found'          => _x('Anúncio não encontrado', 'advertise'),
				'not_found_in_trash' => _x('Anúncio não encontrado na lixeira', 'advertise'),
				'search_items'       => _x('Pesquisar Anúncios', 'advertise'),
				'singular_name'      => _x('Anúncio', 'advertise'),
				'view_item'          => _x('Ver Anúncio', 'advertise')
	    );

	    $args = array(
	        'labels'             => $labels,
	        'menu_icon'          => 'dashicons-id-alt',
	        'menu_position'      => 4,
	        'public'             => true,
	        'has_archive'        => true,
					'rewrite' 					 => array('slug' => 'anuncios'),
	        'supports'           => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
	        'show_ui'            => true,
					'taxonomies'  			 => array( 'segments' ),

	    );
		register_post_type('advertise', $args);
	}

