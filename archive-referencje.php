<?php get_header(); ?>

  
 <div class="page-section page-section--sm-nopadding page-section--padding-top">
   <div class="testimonials-container testimonials-container--paddingbt">
        <div class="testimonials">
            <div class="testimonials__slider">
                <h2 class="headline headline--medium headline--overlap">Opinie klientów</h2>
                <div data-aos="fade-up" class="testimonials__slides-container">
             <?php
                while(have_posts()){
                    the_post();
                    get_template_part('template-parts/content', 'testimonial');
                     }
                    ?>
                    </div>
                    </div>
                    </div>
                    
</div>
</div>
<div class="page-section">
<?php get_template_part('template-parts/content', 'logotypes');?>
  
   </div>
   

    <?php get_footer();

    ?>

    