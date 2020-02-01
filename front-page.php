<?php get_header(); ?>
<div class="hero-slider">
        <div class="hero-slider__container">
            <div class="hero-slider__slide hero-slider__slide--1">
                <!-- <div class="hero-slider__image-container">
            <img src="/images/baloons.png" alt="">
           </div> -->
                <div class="hero-slider__overlay container">
                    <div class="hero-slider__text-content">
                        <h1 class="headline headline--large">Patrzymy kreatywnie</h1>
                        <p class="main-content main-content--slider">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Proin a vestibulum enim, eget mattis
                            ligula.
                            Morbi et faucibus urna. Nulla commodo suscipit iaculis.
                            diam.</p>
                    </div>
                </div>
            </div>
            <div class="hero-slider__slide hero-slider__slide--2 lazyload">
                <!-- <div class="hero-slider__image-container">
            <img src="/images/baloons.png" alt="">
           </div> -->
                <div class="hero-slider__overlay container">
                    <div class="hero-slider__text-content">
                        <h1 class="headline headline--large white">Działamy efektywnie</h1>
                        <p class="main-content main-content--slider white">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Proin a vestibulum enim, eget mattis
                            ligula.
                            Morbi et faucibus urna. </p>
                    </div>
                </div>
            </div>
            <div class="hero-slider__slide hero-slider__slide--3 lazyload">
                <div class="hero-slider__overlay container">
                    <div class="hero-slider__text-content">
                        <h1 class="headline headline--large white">Patrzymy przyszłościowo</h1>
                        <p class="main-content main-content--slider white">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Proin a vestibulum enim, eget mattis
                            ligula.
                            Morbi et faucibus urna.</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn--overlap">Sprawdź</a>
    </div>
    <div class="page-section page-section--sm-nopadding">
        <div class="counter-section">
            <div class="counter-section__block">
                <span class="counter-section__count">220</span>
                <span class="counter-section__desc">pracowników</span>
            </div>
            <div class="counter-section__block">
                <span class="counter-section__count">106</span>
                <span class="counter-section__desc">kontraktów</span>
            </div>
            <div class="counter-section__block">
                <span class="counter-section__count">41</span>
                <span class="counter-section__desc">pracowników</span>
            </div>
            <div class="counter-section__block">
                <span class="counter-section__count">150</span>
                <span class="counter-desc">klientów</span>
            </div>
        </div>
    </div>
    <div class="page-section page-section--medium-6">
    <picture>
        <source data-srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/laughing-boy-hd.png" media="(min-width: 600px)">
        <img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/laughing_boy_small.png" alt="happy child">
    </picture>
        <div class="page-section__yellow-col">
            <div class="quotes">
            <div class="quotes__quotation"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quotation.png" alt="quotation icon" /></div>
                <div class="quotes__content">
                    <p class="qutes__text">Ludzie wystarczająco szaleni, by sądzić, ze mogą zmienić świat, są tymi,
                        którzy go
                        zmieniają.</p>
                    <p class="quotes__author">Apple, 1997</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="page-section page-section--border">
        <div class="about">
            <div class="wrapper">
                <h2 class="headline headline--medium">O nas</h2>
                <p class="main-content">Agencja Promocyjna i Eventowa STUDIO MB od ponad 15 lat z sukcesem realizuje
                    projekty eventowe,
                    PR-owe i BLT-owe w skali ogólnopolskiej. Współpracujemy z prestiowymi firmami i markami
                    zapewniając im kompleksowe strategie marketingu bezpośredniego.</p>

                <div class="row row--medium-4 row-features">
                    <div class="feature-block">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Eventy-i-wydarzenia-specjalne.png" alt="ikona o nas1">
                        <p class="feature-block__desc">Eventy i wydarzenia specjalne</p>
                    </div>
                    <div class="feature-block">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Programy-lojalnościowe-i-motywacyjne.png" alt="ikona o nas2">
                        <p class="feature-block__desc">Programy lojalnościowe i motywacyjne</p>
                    </div>
                    <div class="feature-block">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mechanizmy-pro-sprzedazowe.png" alt="ikona o nas 3">
                        <p class="feature-block__desc">Mechanizmy <span class="no-break">pro-sprzedaŻowe</span></p>
                    </div>
                </div>
                <a class="btn">Czytaj więcej</a>
            </div>
        </div>
    </div>
    <div class="page-section page-section--border page-section--gradient-bgc">
        <div class="wrapper wrapper--wider">
            <div class="portfolio">
                <div class="portfolio__text-content">
                    <h2 class="headline headline--medium">Nasze realizacje</h2>
                    <p class="main-content main-content--full-width">Dziesiątki na stałe współpracujących z nami firm i
                        marek to potwierdzenie naszych kompetencji,
                        profesjonalizmu i skuteczności w realizacji wyznaczonych celów.</p>
                </div>
                <div class="portfolio__bottom">
                    <div class="portfolio__carousel">
                    <?php
          $eventCarousel = new WP_Query(array(
            'posts_per_page' => 6,
            'post_type' => 'Event'
          ));

          while ($eventCarousel->have_posts()) {
            $eventCarousel->the_post(); ?>
                           <figure class="portfolio__carousel__slide">
          <img class="lazyload" src-data="<?php echo get_the_post_thumbnail(); ?>
          <a class="overlay" href="<?php the_permalink(); ?> "/>
          <figcaption class="overlay"><p><?php the_title(); ?></p></figcaption>
           </a>
         </figure>
        
                        <?php } wp_reset_postdata();
        ?>

                    
                   <!--
                        <div class="portfolio__carousel__slide"><img class="lazyload" data-src="<?php echo site_url(); ?>/images/portfolio slider 1.png" alt="" />
                        </div>
                        <div class="portfolio__carousel__slide"><img class="lazyload" data-src="<?php echo site_url(); ?>/images/portfolio slider 2.png" alt="" />
                        </div>
                        <div class="portfolio__carousel__slide"><img class="lazyload" data-src="<?php echo site_url(); ?>/images/portfolio slider 3.png" alt="" />
                        </div>
                        <div class="portfolio__carousel__slide"><img class="lazyload" data-src="<?php echo site_url(); ?>/images/portfolio slider 1.png" alt="" />
                        </div>
                        <div class="portfolio__carousel__slide"><img class="lazyload" data-src="<?php echo site_url(); ?>/images/portfolio slider 2.png" alt="" />
                        </div>
                        <div class="portfolio__carousel__slide"><img class="lazyload" data-src="<?php echo site_url(); ?>/images/portfolio slider 3.png" alt="" />
                        </div>
                        <div class="portfolio__carousel__slide"><img class="lazyload" data-src="<?php echo site_url(); ?>/images/portfolio slider 1.png" alt="" />
                        </div>
                        <div class="portfolio__carousel__slide"><img class="lazyload" data-src="<?php echo site_url(); ?>/images/portfolio slider 2.png" alt="" />
                        </div>
                        <div class="portfolio__carousel__slide"><img class="lazyload" data-src="<?php echo site_url(); ?>/images/portfolio slider 3.png" alt="" />
                        </div> -->
                    </div>
                    <a class="btn" href="<?php echo site_url('/portfolio') ?>">zobacz więcej</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-section page-section--sm-nopadding">
        <div class="testimonials">
            <div class="testimonials__slider">
                <h2 class="headline headline--medium headline--overlap">Opinie klientów</h2>
                <div class="testimonials__slides-container">
                    <div class="testimonials__slide">
                        <div class="quotes quotes--column">
                        <div class="quotes__quotation"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quotation.png" alt="quotation icon" /></div>
                            <p class="quotes__text-content">Morbi et faucibus urna. Nulla commodo suscipit iaculis. Nam
                                sit amet
                                commodo tortor, necpulvinar diam</p>
                            <p class="quotes__author--center">Monika Mrozowicz</p>
                        </div>
                    </div>
                    <div class="testimonials__slide">
                        <div class="quotes quotes--column">
                        <div class="quotes__quotation"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quotation.png" alt="quotation icon" /></div>
                            <p class="quotes__text-content">Morbi et faucibus urna. Nulla commodo suscipit iaculis. Nam
                                sit amet
                                commodo tortor, necpulvinar diam</p>
                            <p class="quotes__author--center">Monika Mrozowicz</p>
                        </div>
                    </div>
                    <div class="testimonials__slide">
                        <div class="quotes quotes--column">
                        <div class="quotes__quotation"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quotation.png" alt="quotation icon" /></div>
                            <p class="quotes__text-content">Morbi et faucibus urna. Nulla commodo suscipit iaculis. Nam
                                sit amet
                                commodo tortor, necpulvinar diam</p>
                            <p class="quotes__author--center">Monika Mrozowicz</p>
                        </div>
                    </div>
                    <div class="testimonials__slide">
                        <div class="quotes quotes--column">
                        <div class="quotes__quotation"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quotation.png" alt="quotation icon" /></div>
                            <p class="quotes__text-content">Morbi et faucibus urna. Nulla commodo suscipit iaculis. Nam
                                sit amet
                                commodo tortor, necpulvinar diam</p>
                            <p class="quotes__author--center">Monika Mrozowicz</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonials__logo-container">
            <div class="testimonials__logo-item"><img src="<?php echo site_url(); ?>/images/unilever-logo.png" /></div>
            <div class="testimonials__logo-item"><img src="<?php echo site_url(); ?>/images/unilever-logo.png" /></div>
            <div class="testimonials__logo-item"><img src="<?php echo site_url(); ?>/images/unilever-logo.png" /></div>
            <div class="testimonials__logo-item"><img src="<?php echo site_url(); ?>/images/unilever-logo.png" /></div>
            <div class="testimonials__logo-item"><img src="<?php echo site_url(); ?>/images/unilever-logo.png" /></div>
            <div class="testimonials__logo-item"><img src="<?php echo site_url(); ?>/images/unilever-logo.png" /></div>
            <div class="testimonials__logo-item"><img src="<?php echo site_url(); ?>/images/unilever-logo.png" /></div>
            <div class="testimonials__logo-item"><img src="<?php echo site_url(); ?>/images/unilever-logo.png" /></div>
        </div>
    </div>

    <?php get_footer();

    ?>

    