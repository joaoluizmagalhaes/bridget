<?php /* Template Name: Notícias*/ 
  get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
    <section class="news__header">
      <div class="news__header-wrapper">
        <div class="container">
          <h1 class="news__header-title">Notícias</h1>
        </div>
      </div>
      <div class="news__header-menu-bar">
        <div class="container">
          <div class="row">
            <div class="news__header-menu-wrapper">
              <img src="<?php bloginfo('template_url'); ?>/_assets/img/menu-white.svg" alt="menu" class="news__menu-icon">
              <p class="news__menu-subtitle d-md-none">Categorias</p>
              <nav class="news__header-menu container closed">
                <img src="<?php bloginfo('template_url'); ?>/_assets/img/close-white.svg" alt="menu" class="svg news__menu-icon news__menu-close">
                <?php $categories = get_categories(); ?>
                <ul class="news__header-menu-list">
                  <li class="news__header-menu-list-item">Todas</li>
                  <?php for( $i = 0; $i <= 4; $i++) { ?>
                    <?php if( $categories[$i]->name !== NULL ) { ?>
                      <li class="news__header-menu-list-item" data-slug="<?= $categories[$i]->slug; ?>"><?= esc_html($categories[$i]->name) ?></li>
                    <?php } ?>
                  <?php } ?>
                  
                </ul>
              </nav>
              <input type="text" class="news__menu-search" placeholder="Pesquisar">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="news">
      <div class="container">
        <div class="row news__wrapper news-reload">
          <div class="col-12"><h2 class="news__section-title">Mais lidas</h2></div>
          <?php  

            $args = array(
              'post_type'      => 'post',
              'post_status'    => 'publish',
              'posts_per_page' => 3,
              'order'          => 'DESC',
              'orderby'        => 'meta_value_num',
              'meta_key'       => 'post_views_count'
            );

            $the_query = new WP_Query( $args );
                      
            //The Loop
            if ( $the_query->have_posts() ) {
              while ( $the_query->have_posts() ) {
                $the_query->the_post(); 

                get_template_part('templates/components/news-card');
                  
              }
            } 
            
            wp_reset_query(); 
          ?>
        </div>
        <div class="row news__wrapper">
          <div class="col-12"><h2 class="news__section-title">Últimas notícias</h2></div>

          <?php 
              $args = array(
                  'post_type'      => 'post',
                  'post_status'    => 'publish',
                  'posts_per_page' => 6,
                  'order'          => 'DESC',
                  'orderby'        => 'ID',
              );

              $the_query = new WP_Query( $args );

              //The Loop
              if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                  $the_query->the_post(); 
  
                  get_template_part('templates/components/news-card');
                    
                }
              } 
              
              wp_reset_query(); 
            ?>
        </div>
      </div>
    </section>
  </main>
</div>

<?php

    get_footer();
