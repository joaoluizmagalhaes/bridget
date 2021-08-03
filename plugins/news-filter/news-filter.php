<?php 

  function news_filter() {
    $catSlug = $_POST['category'];

    $ajaxposts = new WP_Query([
      'post_type'      => 'post',
      'posts_per_page' => 3,
      'category_name'  => $catSlug,
      'order'          => 'DESC',
      'orderby'        => 'meta_value_num',
      'meta_key'       => 'post_views_count'
    ]);
    
    $response = '';

    if($ajaxposts->have_posts()) {
      while($ajaxposts->have_posts()) : $ajaxposts->the_post();
        $response .= get_template_part('templates/components/news-card');
      endwhile;
    } else {
      $response = 'empty';
    }

    echo $response;
    exit;
  }
  add_action('wp_ajax_news_filter', 'news_filter');
  add_action('wp_ajax_nopriv_news_filter', 'news_filter');