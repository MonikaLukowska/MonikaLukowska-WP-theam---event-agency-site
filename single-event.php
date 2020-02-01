<?php get_header();

while(have_posts()){
    the_post();?>
<div class="page-section">

<h2 class="headline headline--medium"><?php the_title(); ?></h2>
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