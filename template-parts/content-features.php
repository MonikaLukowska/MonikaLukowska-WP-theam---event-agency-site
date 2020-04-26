<div class="row row--medium-4 row--features">

              <?php 
                if(have_rows('features', 210) ):
                    while(have_rows('features', 210)) :the_row();
                        $feature1 =  get_sub_field('feature1');
                        $feature2 = get_sub_field('feature2');
                        $feature3 = get_sub_field('feature3');
              ?>

                    <div data-aos="fade-right" class="feature-block">
                        <img aria-hidden="true" src="<?php echo $feature1['icon']; ?>" alt="" >
                        <p class="feature-block__desc"><?php echo $feature1['description']; ?></p>
                    </div>
                    <div data-aos="fade-up" class="feature-block">
                        <img aria-hidden="true" src="<?php echo $feature2['icon']; ?>"  alt="">
                        <p class="feature-block__desc"><?php echo $feature2['description']; ?></p>
                    </div>
                    <div data-aos="fade-left" class="feature-block">
                        <img aria-hidden="true" src="<?php echo $feature3['icon']; ?>" alt="">
                        <p class="feature-block__desc"><?php echo $feature3['description']; ?></p>
                    </div>
                    <?php endwhile ?>
                    <?php endif ?>
                </div>
   