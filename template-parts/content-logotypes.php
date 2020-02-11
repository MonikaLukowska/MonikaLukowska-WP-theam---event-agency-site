<?php 
        if (have_rows('logotypes_section', 75)) :
          while(have_rows('logotypes_section', 75)) :the_row();
          $title = get_sub_field('title');
          $logos = get_sub_field('logotypes');

        ?>

     <h5 data-aos="fade-up" class="headline headline--subtitle"><?php echo $title ?></h5>
     
     <?php  if($logos): ?>
     <div  class="testimonials__logo-container">
     <?php  $count=0; foreach ($logos as $logo) : 
     $count+=100;
     
       ?>
        <li data-aos="zoom-in" data-aos-delay="<?php echo $count; ?>" class="testimonials__logo-item"><img src="<?php echo $logo ?>" /></li>
     
       <?php  endforeach; ?>
        </div>
        <?php  endif ?>
     <?php endwhile  ?>
     <?php endif ?>