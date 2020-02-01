<?php

/**
 * Template Name: O nas
 */

get_header(); 

?>
<?php while ( have_posts() ) : the_post(); ?>
        
        <div class="banner">
          <picture>
            <source srcset="<?php the_field('banner'); ?>" media="(min-width: 900px)"/>
            <img src="<?php the_field('banner_mobile'); ?>" />
         </picture>
        </div>
        <div class="page-section page-section--border">
          <div class="wrapper wrapper--wider" >
             <h2 class="headline headline--medium headline--about" style="text-align:left; margin-left:60px"><?php the_field('page-title') ?></h2>
            </div>
        <?php endwhile; // end of the loop. ?>
        <?php
         
         if (have_rows('block') ):
            while (have_rows('block')) :the_row();
           $paragraph1 = strip_tags(get_sub_field('paragraph'));
           $image1 = get_sub_field('image1');
            ?>
        
       
            <div class="wrapper wrapper--wider">
                <div class="image-text-block-section">
                    <div class="image-text-block-section__block image-text-block-section__block--about">
                        <div class="image-text-block-section__block__content">
                            <div class="paragraph-block">
                                <p class="paragraph-block__content"><?php echo $paragraph1 ?></p>
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
           $image1 = get_sub_field('image1');
         
            ?>
              <div class="image-text-block-section__block image-text-block-section__block--about">
                <div class="image-text-block-section_block__img image-text-block-section__block__img--none-sm"><img src=<?php echo $image1 ?> alt=""></div>
                <div class="image-text-block-section__block__content">
                            <div class="paragraph-block">
                                <p class="paragraph-block__content"><?php echo $paragraph1 ?></p>
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
           $image1 = get_sub_field('image1');
            ?>
        
               <div class="image-text-block-section__block image-text-block-section__block--about">
                        <div class="image-text-block-section__block__content">
                            <div class="paragraph-block">
                                <p class="paragraph-block__content"><?php echo $paragraph1 ?></p>
                            </div>
                        </div>
                       <div class="image-text-block-section_block__img"><img src=<?php echo $image1 ?> alt=""></div>
                   </div>
                            <?php endwhile; // end of the loop. ?>
                            <?php endif; // end of the loop. ?>
                </div>
                </div>

       <div class="page-section page-section--green">
           <div class="wrapper wrapper--overlay">
              <div class="row row--medium-4 row--features">

              <?php 
                if(have_rows('features') ):
                    while(have_rows('features')) :the_row();
                        $feature1 =  get_sub_field('feature1');
                        $feature2 = get_sub_field('feature2');
                        $feature3 = get_sub_field('feature3');
              ?>

                    <div class="feature-block">
                        <img src="<?php echo $feature1['icon']; ?>" alt="ikona o nas1" >
                        <p class="feature-block__desc"><?php echo $feature1['description']; ?></p>
                    </div>
                    <div class="feature-block">
                        <img src="<?php echo $feature2['icon']; ?>"  alt="ikona o nas2">
                        <p class="feature-block__desc"><?php echo $feature2['description']; ?></p>
                    </div>
                    <div class="feature-block">
                        <img src="<?php echo $feature3['icon']; ?>" alt="ikona o nas 3">
                        <p class="feature-block__desc"><?php echo $feature3['description']; ?></p>
                    </div>
                    <?php endwhile ?>
                    <?php endif ?>
                </div>

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
                </div
<?php 
get_footer();

?>