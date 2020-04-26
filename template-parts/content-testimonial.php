<?php $text = get_field('content');
    if($text) :?>

<div class="testimonials__slide">
                        <blockquote class="quotes quotes--column">
                            <div class="quotes__quotation"><img aria-hidden="true" src="<?php echo get_stylesheet_directory_uri(); ?>/images/quotation.png" alt="" /></div>
                            <p class="quotes__text-content" ><?php strip_tags(the_field('content')) ?></p>
                            <cite class="quotes__author--center"><?php the_field('author') ?></cite>
                        </blockquote>
                    </div>
<?php else: ?>
<div class="testimonials__slide">
    <div class="testimonials__slide--img">
                       <img src="<?php  the_field('image')?>" />
</div>
                    </div>
                    <?php endif ?>