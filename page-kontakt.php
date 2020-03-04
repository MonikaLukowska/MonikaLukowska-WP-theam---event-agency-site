<?php

/**
 * Template Name: Kontakt
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<div class="page-section page-section--border">
<div class="banner banner--tall">
  <picture class="bgc">
  <?php 
       $banner = get_field('banner');
          if($banner):
          $alt = $banner['alt']; 
          $url = $banner['url'];
          $full = $banner['sizes']['bannerFull'];
          $medium = $banner['sizes']['bannerMedium'];
          $mobile = $banner['sizes']['bannerMobile'];
          ?>
            <source  media="(min-width: 900px)" srcset="<?php echo esc_url($full)?>" alt="<?php echo esc_attr($alt)?>" />
            <source  media="(min-width: 530px)" srcset="<?php echo esc_url($medium)?>" alt="<?php echo esc_attr($alt)?>" />
            <img src="<?php echo esc_url($mobile)?>" alt="<?php esc_attr($mobile)?>"/>
            <?php endif ?>
         </picture> 
            <div class="contact">
              <h2   class="headline headline--medium headline--overlap"><?php the_field('page-title') ?></h2>
              <div class="contact__details">
            <?php 
            if (have_rows('contact')):
                while (have_rows('contact') ) :the_row();
                $name = get_sub_field('company');
                $line1 = get_sub_field('address1');
                $line2 = get_sub_field('address2');
                $email = get_sub_field('email');

  
            ?>
                 <span><?php echo $name ?><br> <?php echo $line1 ?><br><?php echo $line2 ?></span>
                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ikonka mail.png" alt="ikona email" />
                 <span><a href="mailto:<?php echo $email ?>"><?php echo $email ?><a></span>
              </div>
              <?php endwhile ?>
              <?php endif ?>
              <?php endwhile ?>
            </div>
        </div>
      
        <?php get_template_part('template-parts/content', 'form');?>
    <iframe class="map" src="https://snazzymaps.com/embed/213771"  style="border:none;"></iframe>
</div>
</div>
    <?php get_footer('contact');
    ?>
