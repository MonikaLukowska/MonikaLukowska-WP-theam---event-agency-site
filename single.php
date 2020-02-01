<?php get_header(); 

while(have_posts()){
    the_post();
?>
<div class="wrapper wrapper--wide">
<h2 class="headline headline--medium">Nasze realizacje</h2>
<div class="gallery gallery--singiel">
  <div class="gallery__text-content"><h5 class=" headline headline--subtitle"><?php the_title(); ?><h5></div>
  <div class="gallery gallery--singiel"><?php the_content(); ?></div>
</div>
</div>

<?php }

 get_footer();

?>