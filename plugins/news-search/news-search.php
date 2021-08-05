<?php 

  function news_search() {
    $keyword = $_POST['keyword'];

    $ajaxposts = new WP_Query([
      'post_type'      => 'post',
      'posts_per_page' => 3,
      'order'          => 'DESC',
      'orderby'        => 'meta_value_num',
      'meta_key'       => 'post_views_count',
      's'              => esc_attr( $keyword ),
    ]);
    
    $response = '';

    if($ajaxposts->have_posts()) {
      while($ajaxposts->have_posts()) : $ajaxposts->the_post();
        $response .= get_template_part('templates/components/news-card');
      endwhile;
    } else {
      $response = '<h4 class="news__section-title">Desculpe, mas não encontramos nada para a busca: "' . $keyword . '", tente novamente!</h4>' ;
    }

    echo $response;
    exit;
  }
  add_action('wp_ajax_news_search', 'news_search');
  add_action('wp_ajax_nopriv_news_search', 'news_search');