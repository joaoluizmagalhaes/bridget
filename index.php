<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bridget
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main"> 
			<?php
				if ( have_posts() ) {

					// Load posts loop.
					while ( have_posts() ) {
						the_post(); 
						setPostViews(get_the_ID());
						$category = get_the_category();

						?>
						<div class="container">
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<header class="post__header">
								
									<?php the_title( '<h1 class="post__header-title">', '</h1>' ); ?>
								
									<img src="<?php the_post_thumbnail_url() ?>" alt="">
								</header>
								<div class="post__content">
									<?php
										the_content();						
									?>
								</div>

								<footer class="post__share">
									<p class="post__share-text">Compartilhe:</p> 
									<a href="https://www.facebook.com/sharer.php?u=<?= the_permalink();?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/_assets/img/facebook-icon.svg" alt=""></a>
									<a href="https://www.linkedin.com/shareArticle?url=<?= the_permalink();?>&title=<?= urlencode(get_the_title());?>" target="_blank" ><img src="<?php bloginfo('template_url'); ?>/_assets/img/linked-icon.svg" alt=""></a>
									<a href="https://twitter.com/intent/tweet?url=<?= the_permalink();?>&text=<?= urlencode(get_the_title());?>&via=bridget" target="_blank"><img src="<?php bloginfo('template_url'); ?>/_assets/img/twitter-icon.svg" alt=""></a>
									<a href="whatsapp://send?text=<?= the_permalink();?>" data-action="share/whatsapp/share" target="_blank"><img src="<?php bloginfo('template_url'); ?>/_assets/img/whatsapp-icon.svg" alt=""></a>
								</footer><!-- .entry-footer -->
							</article><!-- #post-<?php the_ID(); ?> -->
							<?php wp_reset_query(); ?>
							<section>
								<div class="container">
									<div class="row news__wrapper">
										<div class="col-12"><h2 class="news__section-title">Leia também</h2></div>
										<?php  

											$args = array(
												'post_type'      => 'post',
												'post_status'    => 'publish',
												'posts_per_page' => 3,
												'order'          => 'DESC',
												'category_name'  => $category[0]->slug,
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
								</div>
							</section>
						</div>
					<?php }
				} 
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();