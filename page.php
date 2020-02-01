<?php get_header(); 

while(have_posts()){
    the_post();
?>

<div class="banner banner--tall">
            <div class="contact">
              <h2 class="headline headline--medium headline--overlap"><?php the_title(); ?></h2>
              <div class="contact__details">
                 <span>Studio MP<br> ul. Gdańska 27, I piętro<br>85-005 Bydgoszcz</span>
                 <img src="./images/ikonka mail.png" alt="" />
                 <span>biuro@studiomb.pl</span>
              </div>
            </div>
        </div>
        <?php 
if(is_page(8)) {
 get_footer('form');
}
 wp_footer();
?>
        <!-- <div class="map">
        </div> -->
        <iframe class="map" src="https://snazzymaps.com/embed/213771"  style="border:none;"></iframe>



        <?php }
if(is_page(8)) {
 get_footer('contact');
}
else {
 get_footer();
}
 wp_footer();
?>