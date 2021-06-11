<?php /* Template Name: Home */ 

    get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
        <section class="home__banner">
            <h1 class="home__banner-title">Valor em inovar.</h1>
            <h3 class="home__banner-subtitle">Nunca foi tao fácil comprar, vender e avaliar seu negócio</h3>
            <button class="btn btn__secondary">Entrar em contato</button>
            <div class="overlay"></div>
        </section>
        <section class="home__section">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4 col-12 home__section-item">
                        <img src="<?php bloginfo('template_url'); ?>/_assets/img/company.svg" alt="">
                        <p class="home__text">Milhares de opções para encontrar <span class="secondary">a empresa que você procura</span></p>
                    </div>
                    <div class="col col-md-4 col-12 home__section-item">
                        <img src="<?php bloginfo('template_url'); ?>/_assets/img/company.svg" alt="">
                        <p class="home__text">Milhares de opções para encontrar <span class="secondary">a empresa que você procura</span></p>
                    </div>
                    <div class="col col-md-4 col-12 home__section-item">
                        <img src="<?php bloginfo('template_url'); ?>/_assets/img/company.svg" alt="">
                        <p class="home__text">Milhares de opções para encontra r<span class="secondary">a empresa que você procura</span></p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>


<?php

    get_footer();