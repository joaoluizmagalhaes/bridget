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
                <div class="row g-0">
                    <div class="col col-md-4 col-12 home__section-item">
                        <img class="home__section-icon" src="<?php bloginfo('template_url'); ?>/_assets/img/company.svg" alt="company">
                        <p class="home__text">Milhares de opções para encontrar <span class="secondary"><br>a empresa que você procura</span></p>
                    </div>
                    <div class="col col-md-4 col-12 home__section-item">
                        <img class="home__section-icon" src="<?php bloginfo('template_url'); ?>/_assets/img/consultant.svg" alt="consultant">
                        <p class="home__text">Serviço 100% personalizado com <span class="secondary"><br>consultores especializados</span></p>
                    </div>
                    <div class="col col-md-4 col-12 home__section-item">
                        <img class="home__section-icon" src="<?php bloginfo('template_url'); ?>/_assets/img/deal.svg" alt="deal">
                        <p class="home__text">Inteligência de mercado para<span class="secondary"><br>te ajudar a fazer o melhor negócio</span></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="home__section d-md-none">
            <div class="container">
                <div class="row g-0">
                    <div class="home__section-wrapper">
                        <h2 class="home__section-title">Como podemos ajudar sua empresa?</h2>
                        <div class="home__section-carousel" id="carousel">
                            <div class="home__section-carousel-wrapper" >
                                <div class="home__section-carousel-card carousel__item">
                                    <img src="<?php bloginfo('template_url'); ?>/_assets/img/graph.svg" alt="" class="home__section-carousel-card-icon">
                                    <h3 class="home__section-carousel-card-title">Quero avaliar minha empresa</h3>
                                    <p class="home__section-carousel-card-text">A avaliação de uma empresa é o passo fundamental em qualquer tipo de fusão e aquisição, além de possibilitar uma estratégia eficiente para gestão financeira de empresas e estruturação de projetos.</p>
                                </div>
                                <div class="home__section-carousel-card carousel__item">
                                    <img src="<?php bloginfo('template_url'); ?>/_assets/img/megaphone.svg" alt="" class="home__section-carousel-card-icon">
                                    <h3 class="home__section-carousel-card-title">Quero vender minha empresa</h3>
                                    <p class="home__section-carousel-card-text">Venda sua empresa com o melhor pacote de serviços que o mercado pode ofertar e com as facilidades exclusivas que nossa equipe pode proporcionar.</p>
                                </div>
                                <div class="home__section-carousel-card carousel__item">
                                    <img src="<?php bloginfo('template_url'); ?>/_assets/img/magnifier.svg" alt="" class="home__section-carousel-card-icon">
                                    <h3 class="home__section-carousel-card-title">Quero comprar uma empresa</h3>
                                    <p class="home__section-carousel-card-text">Comprar uma empresa pode ser algo desafiador. Dos estudos de mercado até a avaliação, da negociação até a assinatura, conte conosco para ajudar seu sonho a virar realidade.</p>
                                </div>
                                <div class="home__section-carousel-card carousel__item">
                                    <img src="<?php bloginfo('template_url'); ?>/_assets/img/lamp.svg" alt="" class="home__section-carousel-card-icon">
                                    <h3 class="home__section-carousel-card-title">Estruturação de projetos</h3>
                                    <p class="home__section-carousel-card-text">O desafio de uma empresa crescer começa na análise dos investimentos necessários e estruturação financeira do projeto. Identificar riscos e oportunidades é fundamental para se atingir os resultados pretendidos.</p>
                                </div>
                            </div>
                            <div class="home__section-carousel-controls">
                                <div class="carousel-arrow-left"><img src="<?php bloginfo('template_url'); ?>/_assets/img/arrow-left.svg" alt="" class=" svg"></div>
                                <div class="carousel-bullets-wrapper"></div>
                                <div class="carousel-arrow-right"><img src="<?php bloginfo('template_url'); ?>/_assets/img/arrow-right.svg" alt="" class=" svg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home__section d-none d-md-flex">
            <div class="container">
                <div class="row g-0">
                    <div class="home__section-wrapper">
                        <h2 class="home__section-title">Como podemos ajudar sua empresa?</h2>
                        <div class="home__section-carousel">
                            <div class="home__section-carousel-wrapper row g-0" >
                                <div class="home__section-carousel-card col-6 col-lg-6 col-xl-3">
                                    <img src="<?php bloginfo('template_url'); ?>/_assets/img/graph.svg" alt="" class="home__section-carousel-card-icon">
                                    <h3 class="home__section-carousel-card-title">Quero avaliar minha empresa</h3>
                                    <p class="home__section-carousel-card-text">A avaliação de uma empresa é o passo fundamental em qualquer tipo de fusão e aquisição, além de possibilitar uma estratégia eficiente para gestão financeira de empresas e estruturação de projetos.</p>
                                </div>
                                <div class="home__section-carousel-card col-6 col-lg-6 col-xl-3">
                                    <img src="<?php bloginfo('template_url'); ?>/_assets/img/megaphone.svg" alt="" class="home__section-carousel-card-icon">
                                    <h3 class="home__section-carousel-card-title">Quero vender minha empresa</h3>
                                    <p class="home__section-carousel-card-text">Venda sua empresa com o melhor pacote de serviços que o mercado pode ofertar e com as facilidades exclusivas que nossa equipe pode proporcionar.</p>
                                </div>
                                <div class="home__section-carousel-card col-6 col-lg-6 col-xl-3">
                                    <img src="<?php bloginfo('template_url'); ?>/_assets/img/magnifier.svg" alt="" class="home__section-carousel-card-icon">
                                    <h3 class="home__section-carousel-card-title">Quero comprar uma empresa</h3>
                                    <p class="home__section-carousel-card-text">Comprar uma empresa pode ser algo desafiador. Dos estudos de mercado até a avaliação, da negociação até a assinatura, conte conosco para ajudar seu sonho a virar realidade.</p>
                                </div>
                                <div class="home__section-carousel-card col-6 col-lg-6 col-xl-3">
                                    <img src="<?php bloginfo('template_url'); ?>/_assets/img/lamp.svg" alt="" class="home__section-carousel-card-icon">
                                    <h3 class="home__section-carousel-card-title">Estruturação de projetos</h3>
                                    <p class="home__section-carousel-card-text">O desafio de uma empresa crescer começa na análise dos investimentos necessários e estruturação financeira do projeto. Identificar riscos e oportunidades é fundamental para se atingir os resultados pretendidos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home__section home__search">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 home__search-wrapper">
                        <img src="<?php bloginfo('template_url'); ?>/_assets/img/home-search.svg" alt="" class="home__search-icon svg">
                        <h2 class="home__section-title">A empresa que você procura está aqui</h2>
                        <p class="home__section-text">Descubra centenas de negócios à venda no nosso Marketplace</p>
                        <div class="home__search-input-wrapper">
                            <img src="<?php bloginfo('template_url'); ?>/_assets/img/search-icon.svg" class="home__search-input-icon">
                            <input type="text" class="home__search-input" placeholder="Procure por cidades, bairros ou valores">
                        </div>
                        <button class="btn btn__secondary">Ver resultados</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="home__section home__contact">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 col-md-5 offset-md-1 p-0">
                        <img src="<?php bloginfo('template_url'); ?>/_assets/img/contact.jpg" alt="quem somos" class="home__section-contact-img">
                    </div>
                    <div class="col-12 col-md-4 home__contatic-wrapper">
                        <h4 class="home__section-title">Quem somos</h4>
                        <p class="home__section-text">Por muito tempo, consultorias especializadas para estruturação financeira de projetos ou para compra e venda de empresas tiveram custos muito elevados e eram acessíveis somente a grandes corporações.</p>
                        <p class="home__section-text">Com tecnologia e uma equipe técnica qualificada, democratizamos o acesso de qualquer empresa ou empreendedor ao universo das Fusões e Aquisições (M&A), do Project Finance e da Gestão Baseada em Valor (Value Based Management). </p>
                        <a href="#" class="home__section-link">Saiba mais <img src="<?php bloginfo('template_url'); ?>/_assets/img/arrow-link.svg" class="svg home__section-link-icon"></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>


<?php

    get_footer();