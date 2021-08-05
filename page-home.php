<?php /* Template Name: Home */ 

    get_header();

    $customFields = get_fields();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
        <section class="home__banner" style=" background-image: url(<?= esc_url($customFields['banner']['imagem']) ?>)"> 
            <h1 class="home__banner-title"><?= esc_html($customFields['banner']['titulo']) ?></h1>
            <h3 class="home__banner-subtitle"><?= esc_html($customFields['banner']['subtitulo']) ?></h3>
            <a class="btn btn__secondary" href="<?= esc_url($customFields['banner']['link_do_botao']) ?>"><?= esc_html($customFields['banner']['texto_do_botao']) ?></a>
            <div class="overlay"></div>
        </section>
        <section class="home__section">
            <div class="container">
                <div class="row">
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
        <!--googleoff: all-->
        <section class="home__section d-md-none">
            <div class="container">
                <div class="row g-0">
                    <div class="home__section-wrapper">
                        <h2 class="home__section-title"><?= esc_html($customFields['secao_de_cards']['titulo_da_secao']) ?></h2>
                        <div class="home__section-carousel carousel" id="carousel">
                            <div class="home__section-carousel-wrapper" >
                                <?php 
                                    foreach($customFields['secao_de_cards']['cards'] as $card) { ?>
                                        <div class="home__section-carousel-card carousel__item">
                                        <img src="<?= esc_url($card['card']['icone']) ?>" alt="" class="home__section-carousel-card-icon svg">
                                            <h3 class="home__section-carousel-card-title"><?= esc_html($card['card']['titulo']) ?></h3>
                                            <p class="home__section-carousel-card-text"><?= esc_html($card['card']['texto']) ?></p>
                                        </div>
                                    <?php }
                                ?>
                            </div>
                            <div class="home__section-carousel-controls">
                                <div class="carousel-arrow-left disabled"><img src="<?php bloginfo('template_url'); ?>/_assets/img/arrow-left.svg" alt="" class=" svg"></div>
                                <div class="carousel-bullets-wrapper"></div>
                                <div class="carousel-arrow-right"><img src="<?php bloginfo('template_url'); ?>/_assets/img/arrow-right.svg" alt="" class=" svg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--googleon: all-->
        <section class="home__section d-none d-md-flex">
            <div class="container">
                <div class="row g-0">
                    <div class="home__section-wrapper">
                        <h2 class="home__section-title"><?= $customFields['secao_de_cards']['titulo_da_secao'] ?></h2>
                        <div class="home__section-carousel">
                            <div class="home__section-carousel-wrapper row g-0" >
                                <?php 
                                    foreach($customFields['secao_de_cards']['cards'] as $card) { ?>
                                        <div class="home__section-carousel-card col-6 col-lg-6 col-xl-3">
                                            <img src="<?= esc_url($card['card']['icone']) ?>" alt="" class="home__section-carousel-card-icon svg">
                                            <h3 class="home__section-carousel-card-title"><?= esc_html($card['card']['titulo']) ?></h3>
                                            <p class="home__section-carousel-card-text"><?= esc_html($card['card']['texto']) ?></p>
                                        </div>
                                    <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home__section home__search">
            <div class="container">
                <div class="row">
                    <div class="col-12 home__search-wrapper">
                        <img src="<?php bloginfo('template_url'); ?>/_assets/img/home-search.svg" alt="" class="home__search-icon svg">
                        <h2 class="home__section-title">A empresa que você procura está aqui</h2>
                        <p class="home__section-text">Descubra centenas de negócios à venda no nosso Marketplace</p>
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="home__section home__contact">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 col-lg-5 offset-lg-1 p-0">
                        <img src="<?= esc_url($customFields['quem_somos']['imagem']) ?>" alt="quem somos" class="home__section-contact-img">
                    </div>
                    <div class="col-12 col-lg-4 home__contatic-wrapper">
                        <h4 class="home__section-title"><?= esc_html($customFields['quem_somos']['titulo']) ?></h4>
                        <?=  wp_kses($customFields['quem_somos']['texto'], html_allowed()) ?>
                        <a href="<?= esc_url($customFields['quem_somos']['link']['url']) ?>" class="home__section-link"><?= esc_html($customFields['quem_somos']['link']['texto_do_link']) ?> <img src="<?php bloginfo('template_url'); ?>/_assets/img/arrow-link.svg" class="svg home__section-link-icon"></a>
                    </div>
                </div>
            </div>
        </section>
        <!--googleoff: all-->
        <section class="home__section d-md-none">
            <div class="container">
                <div class="row g-0">
                    <div class="home__section-wrapper">
                        <h2 class="home__section-title"><?= $customFields['carrossel_de_depoimentos']['titulo'] ?></h2>
                        <div class="home__section-carousel carousel" id="carousel-clients">
                            <div class="home__section-carousel-wrapper">
                                <?php 
                                    foreach($customFields['carrossel_de_depoimentos']['depoimento'] as $depoimento) { ?>
                                        <div class="home__section-carousel-card-testimonial carousel__item">
                                            <div class="home__section-carousel-card-testimonial-photo-wrapper">
                                                <img src="<?= esc_url($depoimento['foto']) ?>" class="home__section-carousel-card-photo">
                                            </div>
                                            <p class="home__section-carousel-card-testimonial-text">"<?= esc_html($depoimento['texto']) ?>"</p>
                                            <div class="home__section-carousel-card-testimonial-name-wrapper">
                                                <p class="name"><?= esc_html($depoimento['nome']) ?></p>
                                                <p class="location"><?= esc_html($depoimento['cidade']) ?></p>
                                            </div>                                            
                                        </div>
                                    <?php }
                                ?>
                            </div>
                            <div class="home__section-carousel-controls">
                                <div class="carousel-arrow-left disabled"><img src="<?php bloginfo('template_url'); ?>/_assets/img/arrow-left.svg" alt="" class=" svg"></div>
                                <div class="carousel-bullets-wrapper"></div>
                                <div class="carousel-arrow-right"><img src="<?php bloginfo('template_url'); ?>/_assets/img/arrow-right.svg" alt="" class=" svg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--googleon: all-->
        <section class="home__section d-none d-md-flex">
            <div class="container">
                <div class="row g-0">
                    <div class="home__section-wrapper">
                        <h2 class="home__section-title"><?= $customFields['carrossel_de_depoimentos']['titulo'] ?></h2>
                        <div class="home__section-carousel">
                            <div class="home__section-carousel-wrapper row g-0">
                                <?php 
                                    foreach($customFields['carrossel_de_depoimentos']['depoimento'] as $depoimento) { ?>
                                        <div class="home__section-carousel-card-testimonial col-6 col-lg-6 col-xl-3">
                                            <div class="home__section-carousel-card-testimonial-photo-wrapper">
                                                <img src="<?= esc_url($depoimento['foto']) ?>" class="home__section-carousel-card-photo">
                                            </div>
                                            <p class="home__section-carousel-card-testimonial-text">"<?= esc_html($depoimento['texto']) ?>"</p>
                                            <div class="home__section-carousel-card-testimonial-name-wrapper">
                                                <p class="name"><?= esc_html($depoimento['nome']) ?></p>
                                                <p class="location"><?= esc_html($depoimento['cidade']) ?></p>
                                            </div>                                            
                                        </div>
                                    <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--googleoff: all-->
        <section class="home__section home__search home__news d-none d-md-flex">
            <div class="container">
                <div class="row g-0">
                    <div class="home__section-wrapper">
                        <h2 class="home__section-title">Últimas notícias</h2>
                        <div class="home__section-carousel">
                            <div class="home__section-carousel-wrapper row g-0" >
                                <?php 
                                    $args = array(
                                        'post_type'      => 'post',
                                        'post_status'    => 'publish',
                                        'posts_per_page' => 4,
                                        'order'          => 'DESC',
                                        'orderby'        => 'ID',
                                    );

                                    $the_query = new WP_Query( $args );

                                    //The Loop
                                    if ( $the_query->have_posts() ) {
                                        while ( $the_query->have_posts() ) {
                                            $the_query->the_post(); ?>

                                            <div class="home__section-carousel-card-news col-6 col-lg-6 col-xl-3">
                                                <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" class="home__section-carousel-card-img-news">
                                                <div class="home__section-carousel-card-news-wrapper">
                                                    <span class="home__section-carousel-card-category"><?= get_the_category()[0]->name; ?></span>
                                                    <h3 class="home__section-carousel-card-title"><?php the_title(); ?></h3>
                                                    <p class="home__section-carousel-card-text"><?= get_the_excerpt(); ?></p>
                                                    <a href="<?php the_permalink(); ?>" class="home__section-link">Leia mais</a>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                <?php wp_reset_query(); ?>
                             </div>
                            <a href="http://localhost:8080/Server/Freela/bridget/noticias/" class="btn btn__secondary">Ver mais notícias</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--googleon: all-->
        <section class="home__section home__search home__news d-md-none">
            <div class="container">
                <div class="row g-0">
                    <div class="home__section-wrapper">
                        <h2 class="home__section-title">Últimas notícias</h2>
                        <div class="home__section-carousel carousel" id="carousel-news">
                            <div class="home__section-carousel-wrapper" >
                                <div class="home__section-carousel-card-news carousel__item">
                                    <img src="<?php bloginfo('template_url'); ?>/_assets/img/news-1.jpg" alt="" class="home__section-carousel-card-img-news">
                                    <div class="home__section-carousel-card-news-wrapper">
                                        <span class="home__section-carousel-card-category">Valuation</span>
                                        <h3 class="home__section-carousel-card-title">Como calcular o valor da sua empresa?</h3>
                                        <p class="home__section-carousel-card-text">Aqui vai um breve resumo da matéria para aguçar a curiosidade do leitor e incentivá-lo a clicar no botão para continuar lendo.</p>
                                        <a href="#" class="home__section-link">Leia mais <img src="<?php bloginfo('template_url'); ?>/_assets/img/arrow-link.svg" class="svg home__section-link-icon"></a>
                                    </div>
                                </div>
                                <div class="home__section-carousel-card-news carousel__item">
                                    <img src="<?php bloginfo('template_url'); ?>/_assets/img/news-2.jpg" alt="" class="home__section-carousel-card-img-news">
                                    <div class="home__section-carousel-card-news-wrapper">
                                        <span class="home__section-carousel-card-category">Valuation</span>
                                        <h3 class="home__section-carousel-card-title">Como calcular o valor da sua empresa?</h3>
                                        <p class="home__section-carousel-card-text">Aqui vai um breve resumo da matéria para aguçar a curiosidade do leitor e incentivá-lo a clicar no botão para continuar lendo.</p>
                                        <a href="#" class="home__section-link">Leia mais <img src="<?php bloginfo('template_url'); ?>/_assets/img/arrow-link.svg" class="svg home__section-link-icon"></a>
                                    </div>
                                </div>
                                <div class="home__section-carousel-card-news carousel__item">
                                    <img src="<?php bloginfo('template_url'); ?>/_assets/img/news-3.jpg" alt="" class="home__section-carousel-card-img-news">
                                    <div class="home__section-carousel-card-news-wrapper">
                                        <span class="home__section-carousel-card-category">Valuation</span>
                                        <h3 class="home__section-carousel-card-title">Como calcular o valor da sua empresa?</h3>
                                        <p class="home__section-carousel-card-text">Aqui vai um breve resumo da matéria para aguçar a curiosidade do leitor e incentivá-lo a clicar no botão para continuar lendo.</p>
                                        <a href="#" class="home__section-link">Leia mais <img src="<?php bloginfo('template_url'); ?>/_assets/img/arrow-link.svg" class="svg home__section-link-icon"></a>
                                    </div>
                                </div>
                                <div class="home__section-carousel-card-news carousel__item">
                                    <img src="<?php bloginfo('template_url'); ?>/_assets/img/news-4.jpg" alt="" class="home__section-carousel-card-img-news">
                                    <div class="home__section-carousel-card-news-wrapper">
                                        <span class="home__section-carousel-card-category">Valuation</span>
                                        <h3 class="home__section-carousel-card-title">Como calcular o valor da sua empresa?</h3>
                                        <p class="home__section-carousel-card-text">Aqui vai um breve resumo da matéria para aguçar a curiosidade do leitor e incentivá-lo a clicar no botão para continuar lendo.</p>
                                        <a href="#" class="home__section-link">Leia mais <img src="<?php bloginfo('template_url'); ?>/_assets/img/arrow-link.svg" class="svg home__section-link-icon"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="home__section-carousel-controls">
                                <div class="carousel-arrow-left disabled"><img src="<?php bloginfo('template_url'); ?>/_assets/img/arrow-left.svg" alt="" class=" svg"></div>
                                <div class="carousel-bullets-wrapper"></div>
                                <div class="carousel-arrow-right"><img src="<?php bloginfo('template_url'); ?>/_assets/img/arrow-right.svg" alt="" class=" svg"></div>
                            </div>
                            <a href="http://localhost:8080/Server/Freela/bridget/noticias/" class="btn btn__secondary">Ver mais notícias</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home__section home__contact">
            <div class="container">
                <div class="row g-0">
                    <div class="home__section-wrapper">
                        <h2 class="home__section-title"><?= esc_html($customFields['secao_de_contato']['titulo']) ?></h2>
                        <div class="container">
                            <div class="row g-0">
                                <div class="col-md-4 d-none d-md-flex home__contact-whats">
                                    <h3 class="home__section-subtitle"><?= esc_html($customFields['secao_de_contato']['subtitulo']) ?></h3>
                                    <p class="home__section-text"><?= esc_html($customFields['secao_de_contato']['texto']) ?></p>
                                    <a href="https://api.whatsapp.com/send?phone=55<?= esc_html($customFields['secao_de_contato']['numero_whatsapp']) ?>" class="btn btn__primary" target="_blank" ><img src="<?php bloginfo('template_url'); ?>/_assets/img/whats-icon.svg" alt="login" class="btn__icon svg"> WhatsApp</a>
                                </div>
                                <div class="col-12 offset-md-1 col-md-7">
                                    <?= get_template_part('/templates/components/contact-form') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>


<?php

    get_footer();