<?php get_header();

while(have_posts()){
    the_post();?>
  <div class="page-section page-section--padding-top">

  <h2 class="headline headline--medium"><?php the_title(); ?></h2>
  <div class="wrapper">
      <p><?php the_field('description') ?></p>
    </div>
    <?php 
  $content = apply_filters( 'the_content', $post->post_content );
  $embeds = get_media_embedded_in_content( $content );
  if($embeds):
  ?>
  <h5 data-aos="fade-up" data-aos-delay="200" class="headline headline--subtitle">Video</h5>
  <div class="gallery gallery--singiel gallery--videos">
  <?php
    foreach ($embeds as $embed):
  ?>
      <div class="gallery--videos__video"><?php echo $embed ?></div>
<?php endforeach ?>
</div>
<?php endif ?>
<h5 data-aos="fade-up" class="headline headline--subtitle">Galeria</h5>
  <div class="gallery gallery--singiel">
    
  <?php 

  if(get_post_gallery()){

    $gallery = get_post_gallery(get_the_ID(), false);
    $galleryIDS = $gallery['ids'];
    $image = explode(",", $galleryIDS);

    foreach ($image as $key => $value) {
      $image_medium = wp_get_attachment_image_src($value, 'medium');
      $image_full = wp_get_attachment_image_src($value, 'full');
      ?>

  <a rel="lightbox[gallery]" data-title="<?php the_title(); ?>" data-lightbox="portfolio" href="<?php echo $image_full[0] ?>">
                  <img src="<?php echo $image_full[0] ?>"/>
    </a>
    <?php
    }

  }
  ?>

  </div>
  </div>
  
<?php }
get_footer();

?>