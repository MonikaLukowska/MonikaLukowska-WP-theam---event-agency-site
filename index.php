<?php get_header(); ?>

<h2 class="headline headline--medium">Nasze Realizacje</h2>

   <div class="wrapper">
     <p>Dziesiątki na stałe współpracujących z nami firm i marek to potwierdzenie naszych kompetencji, profesjonalizmu i skuteczności w realizacji wyznaczonych celów</p>
   </div>
   <?php
    // while(have_posts()) {
    //     the_post();?>
       
   <div class="gallery">
   <?php
   while(have_posts()){
       the_post()?>
 <div class="gallery__event">
         <figure>
          <img src="<?php echo get_the_post_thumbnail(); ?>" alt="" />
          <a class="overlay" href="<?php the_permalink(); ?>"> 
          <figcaption class="overlay"><p><?php the_title(); ?></p></figcaption>
           </a>
         </figure>       
    </div>

  <?php }
   ?>
  
   </div>
  
   
   <div class="wrapper">
   <h2 class="headline headline--medium">Współpraca z prestiżowymi markami</h2>
     <h5 class="headline headline--subtitle">Prestiżowe galerie handlowe dla których realizujemy kompleksowe projekty eventowe:</h5>
     <div class="row row--medium-6">
        <div class="paragraph-block">
            <div class="paragraph-block__border"></div>
            <p class="paragraph-block__content">Sieć Galerii Handlowych zarządzanych przez Apsys Polska</p>
        </div>
        <div class="paragraph-block">
        <div class="paragraph-block__border"></div>
        <p class="paragraph-block__content">Sieć Galerii Handlowych zarządzanych przez Segece Polska</p>
      </div>
      <div class="paragraph-block">
        <div class="paragraph-block__border"></div>
        <p class="paragraph-block__content">Sieć Galerii Handlowych zarządzanych przez Alfa Asset</p>
      </div>
      <div class="paragraph-block">
        <div class="paragraph-block__border"></div>
        <p class="paragraph-block__content">Sieć Galerii Handlowych zarządzanych przez Echo Investment</p>
      </div>
      <div class="paragraph-block">
        <div class="paragraph-block__border"></div>
        <p class="paragraph-block__content">Sieć Galerii Handlowych zarządzanych przez Auchan Polska</p>
      </div>
      <div class="paragraph-block">
        <div class="paragraph-block__border"></div>
        <p class="paragraph-block__content">Sieć Galerii Handlowych zarządzanych przez Auchan Schiver</p>
      </div>
     </div>
   </div>
   <div class="page-section">
   <div class="banner banner--artists" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/artysci-background.png);">
       <h5 class="headline headline--subtitle">Artyści i celebryci, z którymi mieliśmy przyjemność współpracować:</h5>
       <div class="row row--medium-12">
           <ul class="artists">
             <li>Magda Gessler</li>
             <li>Olivier Janiak</li>
             <li>Anita Lipnicka</li>
           </ul>
           <ul class="artists">
             <li>Grzegorz Turnau</li>
             <li>Dawid Woliński</li>
             <li>John Porter</li>
           </ul>
           <ul class="artists">
             <li>Zbigniew Wodecki</li>
             <li>Patrycja Kazadi</li>
             <li>Mariusz Pudzianowski</li>
           </ul>
           <ul class="artists">
             <li>Wojciech Cejrowski</li>
             <li>Joanna Horodyńska</li>
             <li>Karolina Malinowska</li>
           </ul>
           <ul class="artists">
             <li>Justyna Steczkowska</li>
             <li>Tomasz Jacyków</li>
             <li>i wielu innych...</li>
           </ul>
     </div>
     </div>
     <div class="page-section">
     <h5 class="headline headline--subtitle">Marki, które nam zaufały:</h5>
     <div class="testimonials__logo-container">
            <div class="testimonials__logo-item"><img src="./images/20479646_1578872805489120_9099902035367873852_n.png" /></div>
            <div class="testimonials__logo-item"><img src="./images/centrum-handlowe-vivo-vivo-stalowa-wola-1701.jpg" /></div>
            <div class="testimonials__logo-item"><img src="./images/galena-logo-www.png" /></div>
            <div class="testimonials__logo-item"><img src="./images/galeria-pomorska.png" /></div>
            <div class="testimonials__logo-item"><img src="./images/images (1).png" /></div>
            <div class="testimonials__logo-item"><img src="./images/images.png" /></div>
            <div class="testimonials__logo-item"><img src="./images/logo-3.png" /></div>
            <div class="testimonials__logo-item"><img src="./images/pobrany plik.png" /></div>
            <div class="testimonials__logo-item"><img src="./images/unnamed-4.jpg" /></div>
        </div>
     </div>
   </div>

   

    <?php get_footer();

    ?>

    