<?php

	add_action('init', 'init_company_post_type');
	function init_company_post_type() {

		$labels = array(
		    'add_new'            => _x('Nova Empresa', 'company'),
				'add_new_item'       => _x('Adicionar nova Empresa', 'company'),
				'edit_item'          => _x('Editar Empresa', 'company'),
				'menu_name'          => _x('Empresas', 'company'),
				'name'               => _x('Empresas', 'company'),
				'new_item'           => _x('Nova Empresa', 'company'),
				'not_found'          => _x('Empresa não encontrada', 'company'),
				'not_found_in_trash' => _x('Empresa não encontrada na lixeira', 'company'),
				'search_items'       => _x('Pesquisar Empresas', 'company'),
				'singular_name'      => _x('Empresa', 'company'),
				'view_item'          => _x('Ver Empresa', 'company')
	    );

	    $args = array(
	        'labels'             => $labels,
	        'menu_icon'          => 'dashicons-id-alt',
	        'menu_position'      => 4,
	        'public'             => true,
	        'has_archive'        => true,
					'rewrite' 					 => array('slug' => 'empresas'),
	        'supports'           => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
	        'show_ui'            => true,
	    );
		register_post_type('company', $args);
	}

