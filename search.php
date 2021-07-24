<?php
  get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
    <?php
      $s=get_search_query();
      $args = array(
          's' =>$s
      );
      // The Query
      
      $the_query = new WP_Query( $args );
      
      if ( $the_query->have_posts() ) { ?>
        <div class="container">
          <article id="post-<?php the_ID(); ?>" <?php post_class('search__article'); ?>>
            <h2 class="search__title">Seus resultados para: <i>"<?= get_query_var('s') ?>"</i></h2>

            <?php while ( $the_query->have_posts() ) {
              $the_query->the_post(); ?>
                <div class="search__result-wrapper">
                  <div class="row">
                    <div class="col-12 col-md-3">
                      <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('medium'); ?></a>
                    </div>
                    <div class="col-12 col-md-9">
                      <a href="<?php the_permalink(); ?>" class="search__result-link"><?php the_title(); ?></a>
                        <p class="search__result-excerpt"><?= get_the_excerpt(); ?></p>
                    </div>
                  </div>
                </div>
            <?php } ?>
          </article>
        </div> <?php
      } else { ?>
        <div class="container">
          <article id="post-<?php the_ID(); ?>" <?php post_class('search__article'); ?>>
            <h2 class="search__title">Não encontramos nada!</h2>
            <div class="alert alert-info">
              <p class="search__result-excerpt">Desculpe, mas infelizmente não encontramos nada para a sua busca! Tente outros termos.</p>
            </div>
            <?php get_search_form(); ?>
          </article>
        </div>
      <?php } 
    ?>
  </main>
</div>

<?php get_footer(); ?>