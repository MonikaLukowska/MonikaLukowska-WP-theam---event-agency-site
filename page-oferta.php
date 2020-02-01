<?php

/**
 * Template Name: Oferta
 */

get_header(); 

?>

		<?php while ( have_posts() ) : the_post(); ?>
        
        <div class="banner">
        <picture>
            <source  media="(min-width: 900px)" srcset="<?php the_field('banner'); ?>">
            <img src="<?php the_field('banner_mobile'); ?>" >
         </picture>
        </div>
     
        <div class="page-section page-section--border">
        <h2 class="headline headline--medium"><?php the_field('title') ?></h2>
        <?php print_r(the_field('page-title'))?>
        <?php endwhile; // end of the loop. ?>
        <?php
         
         if (have_rows('block') ):
            while (have_rows('block')) :the_row();
           $paragraph1 = strip_tags(get_sub_field('paragraph'));
           $paragraph2 = strip_tags(get_sub_field('paragraph2'));
           $paragraph3 = strip_tags(get_sub_field('paragraph3'));
           $image1 = get_sub_field('image1');
           $header= get_sub_field('header');
            ?>
        
       
            <div class="wrapper wrapper--wider">
                <div class="image-text-block-section">
                    <div class="image-text-block-section__block">
                        <div class="image-text-block-section__block__content">
                            <div class="feature-block feature-block--offer">
                                <img src="<?php echo $header['icon'] ?>" alt="ikona o nas1">
                                <p class="feature-block__desc"><?php echo $header['title'] ?></p>
                            </div> 
                            <div class="paragraph-block">
                                <p class="paragraph-block__content"><?php echo $paragraph1 ?></p>
                            </div>
                            <?php print_r($block['paragraph'])?>
                            <div class="paragraph-block">
                 
                                <p class="paragraph-block__content"><?php echo $paragraph2?></p>
                            </div>
                            <div class="paragraph-block">
                 
                                <p class="paragraph-block__content"><?php echo $paragraph3 ?></p>
                            </div>
                            </div>
                            <div class="image-text-block-section_block__img"><img src=<?php echo $image1 ?> alt=""></div>
                    </div>
                            <?php endwhile; // end of the loop. ?>
                            <?php endif; // end of the loop. ?>
        <?php
         
         if (have_rows('block2') ):
            while (have_rows('block2')) :the_row();
           $paragraph1 = strip_tags(get_sub_field('paragraph'));
           $paragraph2 = strip_tags(get_sub_field('paragraph2'));
           $paragraph3 = strip_tags(get_sub_field('paragraph3'));
           $image1 = get_sub_field('image1');
           $header= get_sub_field('header');
            ?>
        <div class="image-text-block-section__block">
        <div class="image-text-block-section_block__img image-text-block-section__block__img--none-sm"><img src=<?php echo $image1 ?> alt=""></div>
          <div class="image-text-block-section__block__content">
                            <div class="feature-block feature-block--offer">
                                <img src="<?php echo $header['icon'] ?>" alt="ikona o nas2">
                                <p class="feature-block__desc"><?php echo $header['title'] ?></p>
                            </div> 
                            <div class="paragraph-block">
                                <p class="paragraph-block__content"><?php echo $paragraph1 ?></p>
                            </div>
                            <div class="paragraph-block">
                 
                                <p class="paragraph-block__content"><?php echo $paragraph2?></p>
                            </div>
                            <div class="paragraph-block">
                 
                                <p class="paragraph-block__content"><?php echo $paragraph3 ?></p>
                            </div>  
                            </div>
          <div class="image-text-block-section_block__img image-text-block-section__block__img--none-md"><img src=<?php echo $image1 ?> alt=""></div> 
         </div>
                            <?php endwhile; // end of the loop. ?>
                            <?php endif; // end of the loop. ?>
                            <?php
         
         if (have_rows('block3') ):
            while (have_rows('block3')) :the_row();
           $paragraph1 = strip_tags(get_sub_field('paragraph'));
           $paragraph2 = strip_tags(get_sub_field('paragraph2'));
           $paragraph3 = strip_tags(get_sub_field('paragraph3'));
           $image1 = get_sub_field('image1');
           $header= get_sub_field('header');
            ?>
        
        <div class="image-text-block-section__block">
        <div class="image-text-block-section__block__content">
                            <div class="feature-block feature-block--offer">
                                <img src="<?php echo $header['icon'] ?>" alt="ikona o nas3">
                                <p class="feature-block__desc"><?php echo $header['title'] ?></p>
                            </div> 
                            <div class="paragraph-block">
                                <p class="paragraph-block__content"><?php echo $paragraph1 ?></p>
                            </div>
                            <?php print_r($block['paragraph'])?>
                            <div class="paragraph-block">
                 
                                <p class="paragraph-block__content"><?php echo $paragraph2?></p>
                            </div>
                            <div class="paragraph-block">
                 
                                <p class="paragraph-block__content"><?php echo $paragraph3 ?></p>
                            </div>
                            </div>
                            <div class="image-text-block-section_block__img"><img src=<?php echo $image1 ?> alt=""></div>
                    </div>
                    </div>
                            <?php endwhile; // end of the loop. ?>
                            <?php endif; // end of the loop. ?>
                </div>
                </div>
                <div class="wrapper wrapper--wider">
                <h2 class="headline headline--medium">Nasze realizacje</h2>
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
                </div>
                <a class="btn" href="<?php echo site_url('/portfolio') ?>">zobacz więcej</a>
                </div>
                </div>
<?php get_footer(); ?>