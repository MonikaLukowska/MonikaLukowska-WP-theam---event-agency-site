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
            $url = $img['url'];
            $full = $img['sizes']['bannerFull'];
            $medium= $img['sizes']['bannerMedium'];
            $mobile = $img['sizes']['bannerMobile'];
            ?>
            <source  media="(min-width: 1500px)" srcset="<?php echo esc_url($url)?>" alt="<?php echo esc_attr($alt)?>" />
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
            $url = $img['url'];
            $full = $img['sizes']['bannerFull'];
            $medium= $img['sizes']['bannerMedium'];
            $mobile = $img['sizes']['bannerMobile'];
            ?>
            <source  media="(min-width: 1500px)" srcset="<?php echo esc_url($url)?>" alt="<?php echo esc_attr($alt)?>" />
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
            $url = $img['url'];
            $full = $img['sizes']['bannerFull'];
            $medium= $img['sizes']['bannerMedium'];
            $mobile = $img['sizes']['bannerMobile'];
            ?>
            <source  media="(min-width: 1500px)" srcset="<?php echo esc_url($url)?>" alt="<?php echo esc_attr($alt)?>" />
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
        <a href="<?php echo site_url('/oferta'); ?>" class="btn btn--overlap">Sprawdź</a>
    </div>
    <div class="page-section page-section--sm-nopadding">

    <?php 
     if(have_rows('counter')) :
        while(have_rows('counter')) :the_row();
        $group1 = get_sub_field('group1');
        $group2 = get_sub_field('group2');
        $group3 = get_sub_field('group3');
        $group4 = get_sub_field('group4');
    ?>
        <div class="counter-section">
        <?php if(($group1['num']) && ($group1['desc'])) : ?>
            <div data-aos="fade-up" class="counter-section__block">
                <span class="counter-section__count"><?php echo $group1['num'] ?></span>
                <span class="counter-section__desc"><?php echo $group1['desc'] ?></span>
            </div>
            <?php endif ?>
            <?php if(($group2['num']) && ($group2['desc'])) : ?>
            <div data-aos="fade-up"  class="counter-section__block">
                <span class="counter-section__count"><?php echo $group2['num'] ?></span>
                <span class="counter-section__desc"><?php echo $group2['desc'] ?></span>
            </div>
            <?php endif ?>
            <?php if(($group3['num']) && ($group3['desc'])) : ?>
            <div data-aos="fade-up"  class="counter-section__block">
                <span class="counter-section__count"><?php echo $group3['num'] ?></span>
                <span class="counter-section__desc"><?php echo $group3['desc'] ?></span>
            </div>
            <?php endif ?>
            <?php if(($group4['num']) && ($group4['desc'])) : ?>
            <div data-aos="fade-up" class="counter-section__block">
                <span class="counter-section__count"><?php echo $group4['num'] ?></span>
                <span class="counter-section__desc"><?php echo $group4['desc'] ?></span>
            </div>
            <?php endif ?>
        </div>
        <?php endwhile ?>
        <?php endif ?>
    </div>
    <div class="page-section page-section--medium-6">
    <?php 
     if(have_rows('motto')) :
        while(have_rows('motto')) :the_row();
        $img = get_sub_field('image');
        $quote = get_sub_field('quote');
        $author = get_sub_field('author');
        if($img) :
            $full = $img['url'];
            $mobile= $img['sizes']['mottoMobile']; 
    ?>
    <picture>
        <source data-srcset="<?php echo esc_url($full)?>" alt="<?php echo esc_attr($alt)?>" media="(min-width: 600px)">
        <img class="lazyload" data-src="<?php echo esc_url($mobile)?>" alt="<?php echo esc_attr($alt)?>">
    </picture>
    <?php endif ?>
        <div class="page-section__yellow-col">
            <div data-aos="fade-left" class="quotes">
            <div class="quotes__quotation"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quotation.png" alt="quotation icon" /></div>
                <div class="quotes__content">
                    <p class="qutes__text"><?php echo $quote ?></p>
                    <p class="quotes__author"><?php echo $author ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile ?>
    <?php endif ?>
    </div>
    <div class="page-section page-section--border">
        <div class="about">
            <div class="wrapper">
                <h2 data-aos="fade-up"  class="headline headline--medium">O nas</h2>
                <p data-aos="fade-up"  class="main-content"><?php the_field('about') ?></p>

                    <?php get_template_part('template-parts/content', 'features');?>

                <a href="<?php echo site_url('/o-nas'); ?>" class="btn">Czytaj więcej</a>
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
    <div class="testimonials-container">
        <div class="testimonials">
            <div data-aos="fade-up" class="testimonials__slider">
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
       </div>
    <?php
       get_template_part('template-parts/content', 'logotypes');
       ?>  
        </div>
       
    </div>
</div>
    <?php get_footer();

    ?>

    