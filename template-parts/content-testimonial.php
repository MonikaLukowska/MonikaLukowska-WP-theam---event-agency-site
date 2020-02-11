<?php $text = get_field('content');
    if($text) :?>

<div class="testimonials__slide">
                        <div class="quotes quotes--column">
                            <div class="quotes__quotation"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quotation.png" alt="quotation icon" /></div>
                            <p class="quotes__text-content" ><?php strip_tags(the_field('content')) ?></p>
                            <p class="quotes__author--center"><?php the_field('author') ?></p>
                        </div>
                    </div>
<?php else: ?>
<div class="testimonials__slide">
    <div class="testimonials__slide--img">
                       <img src="<?php  the_field('image')?>" />
</div>
                    </div>
                    <?php endif ?>