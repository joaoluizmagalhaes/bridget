<?php

  add_action( 'init', 'create_segments_hierarchical_taxonomy', 0 );
  
  //create a custom taxonomy name it segments for your posts
  
  function create_segments_hierarchical_taxonomy() {
  
  // Add new taxonomy, make it hierarchical like categories
  //first do the translations part for GUI
  
    $labels = array(
      'name' => _x( 'Segmentos', 'taxonomy general name' ),
      'singular_name' => _x( 'Segmento', 'taxonomy singular name' ),
      'search_items' =>  __( 'Buscar Segmentos' ),
      'all_items' => __( 'Todos Segmentos' ),
      'parent_item' => __( 'Segmento Ascendente' ),
      'parent_item_colon' => __( 'Segmento Ascendente:' ),
      'edit_item' => __( 'Editar Segmento' ), 
      'update_item' => __( 'Atualizar Segmento' ),
      'add_new_item' => __( 'Novo Segmento' ),
      'new_item_name' => __( 'Novo Segmento Name' ),
      'menu_name' => __( 'Segmentos' ),
    );    
  
  // Now register the taxonomy
    register_taxonomy('segments',array('advertise'), array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_in_rest' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'segmento' ),
    ));
  
  }