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
						the_post(); ?>
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
									<img src="<?php bloginfo('template_url'); ?>/_assets/img/facebook-icon.svg" alt="">
									<img src="<?php bloginfo('template_url'); ?>/_assets/img/linked-icon.svg" alt="">
									<img src="<?php bloginfo('template_url'); ?>/_assets/img/twitter-icon.svg" alt="">
									<img src="<?php bloginfo('template_url'); ?>/_assets/img/whatsapp-icon.svg" alt="">
								</footer><!-- .entry-footer -->
							</article><!-- #post-<?php the_ID(); ?> -->
							<section>
								<div class="container">
									<div class="row news__wrapper">
										<div class="col-12"><h2 class="news__section-title">Leia também</h2></div>
										<div class="col-12 col-md-3 news__card">
											<span class="news__card-tag">Valuation</span>
											<img src="<?php bloginfo('template_url'); ?>/_assets/img/news-img.jpg" alt="" class="news__card-img">
											<div class="news__card-wrapper">
												<h3 class="news__card-title">Como calcular o valor da sua empresa?</h3>
												<p class="news__card-text">Aqui vai um breve resumo da matéria para aguçar a curiosidade do leitor e incentivá-lo a clicar no botão para continuar lendo.</p>
												<a href="#" class="home__section-link">Leia mais</a>
											</div>
										</div>
										<div class="col-12 col-md-3 news__card">
											<span class="news__card-tag">Valuation</span>
											<img src="<?php bloginfo('template_url'); ?>/_assets/img/news-img.jpg" alt="" class="news__card-img">
											<div class="news__card-wrapper">
												<h3 class="news__card-title">Como calcular o valor da sua empresa?</h3>
												<p class="news__card-text">Aqui vai um breve resumo da matéria para aguçar a curiosidade do leitor e incentivá-lo a clicar no botão para continuar lendo.</p>
												<a href="#" class="home__section-link">Leia mais</a>
											</div>
										</div>
										<div class="col-12 col-md-3 news__card">
											<span class="news__card-tag">Valuation</span>
											<img src="<?php bloginfo('template_url'); ?>/_assets/img/news-img.jpg" alt="" class="news__card-img">
											<div class="news__card-wrapper">
												<h3 class="news__card-title">Como calcular o valor da sua empresa?</h3>
												<p class="news__card-text">Aqui vai um breve resumo da matéria para aguçar a curiosidade do leitor e incentivá-lo a clicar no botão para continuar lendo.</p>
												<a href="#" class="home__section-link">Leia mais</a>
											</div>
										</div>
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