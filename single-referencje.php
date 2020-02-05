<?php get_header();

while(have_posts()){
    the_post();?>
   
  <div class="page-section page-section--sm-nopadding page-section--padding-top">
        <div class="testimonials">
            <div class="testimonials__slider">
                <h2 class="headline headline--medium headline--overlap">Opinie klientów</h2>
                <div class="testimonials__slides-container">
                    <?php
                    get_template_part('template-parts/content', 'testimonial')
                    ?>
                    </div>
                    </div>
                   
  

</div>
</div>





<?php }
get_footer();

?>