<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="home__search-input-wrapper">
    <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
      <img src="<?php bloginfo('template_url'); ?>/_assets/img/search-icon.svg" class="home__search-input-icon">
      <input type="text" class="home__search-input" placeholder="Procure por cidades, bairros ou valores" value="<?php echo get_search_query(); ?>" name="s" id="s">
      <input type="hidden" name="post_type" value="advertise" />
      <input type="hidden" name="taxonomy" value="segment" /> 
    </div>
  <button type="submit" class="btn btn__secondary">Ver resultados</button>
</form>