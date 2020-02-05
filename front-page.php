<?php get_header(); ?>
<?php 
  if(have_rows('hero')) :
    while(have_rows('hero')) :the_row();
    $slide1 = get_sub_field('slide1');
    $slide2 = get_sub_field('slide2');
    $slide3 = get_sub_field('slide3');

?>

<div class="hero-slider">
        <div class="hero-slider__container">
            <div class="hero-slider__slide hero-slider__slide--1">
              <picture>
            <?php
            $img = $slide1['image'];
            if($img):
            $full = $img['sizes']['bannerFull'];
            $medium= $img['sizes']['bannerMedium'];
            $mobile = $img['sizes']['bannerMobile'];
            ?>
            <source  media="(min-width: 900px)" srcset="<?php echo esc_url($full)?>" alt="<?php echo esc_attr($alt)?>" />
            <source  media="(min-width: 530px)" srcset="<?php echo esc_url($medium)?>" alt="<?php echo esc_attr($alt)?>" />
            <img src="<?php echo esc_url($mobile)?>" alt="<?php esc_attr($mobile)?>"/>
              
            <?php endif ?>
             </picture>
                <div class="hero-slider__overlay container">
                    <div class="hero-slider__text-content">
                        <h1 class="headline headline--large"><?php echo $slide1['title']; ?></h1>
                        <p class="main-content main-content--slider"><?php echo $slide1['desc']; ?></p>
                    </div>
                </div>
            </div>
          
           
            <div class="hero-slider__slide hero-slider__slide--2 lazyload">
            <picture>
            <?php
            $img = $slide2['image'];
            if($img):
            $full = $img['sizes']['bannerFull'];
            $medium= $img['sizes']['bannerMedium'];
            $mobile = $img['sizes']['bannerMobile'];
            ?>
            <source  media="(min-width: 900px)" srcset="<?php echo esc_url($full)?>" alt="<?php echo esc_attr($alt)?>" />
            <source  media="(min-width: 530px)" srcset="<?php echo esc_url($medium)?>" alt="<?php echo esc_attr($alt)?>" />
            <img src="<?php echo esc_url($mobile)?>" alt="<?php esc_attr($mobile)?>"/>
              
            <?php endif ?>
             </picture>
                <div class="hero-slider__overlay container">
                    <div class="hero-slider__text-content">
                        <h1 class="headline headline--large"><?php echo $slide2['title']; ?></h1>
                        <p class="main-content main-content--slider"><?php echo $slide2['desc']; ?></p>
                    </div>
                </div>
            </div>
            <div class="hero-slider__slide hero-slider__slide--3 lazyload">
            <picture>
            <?php
            $img = $slide3['image'];
            if($img):
            $full = $img['sizes']['bannerFull'];
            $medium= $img['sizes']['bannerMedium'];
            $mobile = $img['sizes']['bannerMobile'];
            ?>
            <source  media="(min-width: 900px)" srcset="<?php echo esc_url($full)?>" alt="<?php echo esc_attr($alt)?>" />
            <source  media="(min-width: 530px)" srcset="<?php echo esc_url($medium)?>" alt="<?php echo esc_attr($alt)?>" />
            <img src="<?php echo esc_url($mobile)?>" alt="<?php esc_attr($mobile)?>"/>
              
            <?php endif ?>
             </picture>
                <div class="hero-slider__overlay container">
                    <div class="hero-slider__text-content">
                        <h1 class="headline headline--large"><?php echo $slide3['title']; ?></h1>
                        <p class="main-content main-content--slider"><?php echo $slide3['desc']; ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile ?>
            <?php endif ?>
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
            <div data-aos="fade-left" class="quotes">
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
                <h2 data-aos="fade-up"  class="headline headline--medium">O nas</h2>
                <p data-aos="fade-up"  class="main-content">Agencja Promocyjna i Eventowa STUDIO MB od ponad 15 lat z sukcesem realizuje
                    projekty eventowe,
                    PR-owe i BLT-owe w skali ogólnopolskiej. Współpracujemy z prestiowymi firmami i markami
                    zapewniając im kompleksowe strategie marketingu bezpośredniego.</p>

                    <?php get_template_part('template-parts/content', 'features');?>

                <a class="btn">Czytaj więcej</a>
            </div>
        </div>
    </div>
    <div class="page-section page-section--border page-section--gradient-bgc">
    <?php
        portfolioCarousel();

        ?>
        </div>
    </div>
    <div class="page-section">
        <div class="testimonials">
            <div class="testimonials__slider">
                <h2 class="headline headline--medium headline--overlap">Opinie klientów</h2>
                <div class="testimonials__slides-container">
                <?php
              $testimonialsSlider = new WP_Query(array(
                  'posts_per_page' => 6,
                  'post_type' => 'Referencje'
              ));

              while ($testimonialsSlider ->have_posts()) {
                $testimonialsSlider ->the_post();  
                get_template_part('template-parts/content', 'testimonial');      
             } wp_reset_postdata();
              ?>
                </div>
            </div>
       </div>
    
        <?php 
        if (have_rows('logotypes_section', 75)) :
          while(have_rows('logotypes_section', 75)) :the_row();
          $title = get_sub_field('title');
          $logos = get_sub_field('logotypes');

        ?>
        <?php if($logos): ?>
     <div class="testimonials__logo-container">
     <?php foreach ($logos as $logo) : ?>
        <li class="testimonials__logo-item"><img src="<?php echo $logo ?>" /></li>
        <?php endforeach; ?>
        </div>
        <?php endif ?>
     <?php endwhile  ?>
     <?php endif ?>
        </div>
    </div>
</div>
    <?php get_footer();

    ?>

    