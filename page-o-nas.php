<?php

/**
 * Template Name: O nas
 */

get_header(); 

?>
<?php while ( have_posts() ) : the_post(); ?>
        
        <?php 
        pageBanner();
        ?>
        <div class="page-section page-section--border">
          <div class="wrapper wrapper--wider" >
             <h2 data-aos="fade-in" data-aos-duration="1000" class="headline headline--medium headline--about" style="text-align:left; margin-left:60px"><?php the_field('page-title') ?></h2>
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
                            <div data-aos="fade-right" class="paragraph-block">
                                <p class="paragraph-block__content"><?php echo $paragraph1 ?></p>
                            </div>
                            </div>
                            <div data-aos="fade-left"class="image-text-block-section_block__img"><img src="<?php echo $image1['url'] ?>" alt="<?php echo $image1['alt']?>"></div>   
                        </div>
                            <?php endwhile; // end of the loop. ?>
                            <?php endif; // end of the loop. ?>
        <?php
         
         if (have_rows('block2') ):
            while (have_rows('block2')) :the_row();
           $paragraph1 = strip_tags(get_sub_field('paragraph'));
           $image1 = get_sub_field('image1');
         
            ?>
              <div data-aos="fade-right"class="image-text-block-section__block image-text-block-section__block--about">
                <div class="image-text-block-section_block__img image-text-block-section__block__img--none-sm"><img src=<?php echo $image1['url'] ?> alt="<?php echo $image1['alt']?>"></div>
                <div data-aos="fade-left" class="image-text-block-section__block__content">
                            <div class="paragraph-block">
                                <p class="paragraph-block__content"><?php echo $paragraph1 ?></p>
                            </div>
                 </div> 
                 <div data-aos="fade-right"class="image-text-block-section_block__img image-text-block-section__block__img--none-md"><img src=<?php echo $image1 ['url']?> alt="<?php echo $image1['alt']?>"></div>      
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
                        <div data-aos="fade-right" class="image-text-block-section__block__content">
                            <div class="paragraph-block">
                                <p class="paragraph-block__content"><?php echo $paragraph1 ?></p>
                            </div>
                        </div>
                       <div data-aos="fade-left" class="image-text-block-section_block__img"><img src=<?php echo $image1['url'] ?> alt="<?php echo $image1['alt']?>"></div>
                   </div>
                            <?php endwhile; // end of the loop. ?>
                            <?php endif; // end of the loop. ?>
                </div>
                </div>

       <div class="page-section page-section--green">
           <div class="wrapper wrapper--overlay">
           <?php get_template_part('template-parts/content', 'features');?>
           </div>
       </div>  
       <div class="page-section">   
<?php
        portfolioCarousel();

        ?>
   </div>     
<?php 
get_footer();

?>