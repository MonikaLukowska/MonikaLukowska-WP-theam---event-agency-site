<?php 
//php logic for portfolio carousel

function portfolioCarousel(){
    ?>
    <div class="wrapper wrapper--wider">
    <h2 data-aos="fade-up" class="headline headline--medium">Nasze realizacje</h2>
    <div class="portfolio__bottom">
              <div data-aos="fade-up" data-aos-delay="500" class="portfolio__carousel">
 
                      <?php
              $eventCarousel = new WP_Query(array(
                  'posts_per_page' => 9,
                  'post_type' => 'Event'
              ));

              while ($eventCarousel->have_posts()) {
                  $eventCarousel->the_post();  

                  ?>
                              <figure class="portfolio__carousel__slide">
                        
                      <?php the_post_thumbnail(); 
                      ?>
                      
              <a class="overlay" href="<?php the_permalink(); ?> ">
              <figcaption class="overlay"><p><?php the_title(); ?></p></figcaption>
              </a>
              </figure>
              
                              <?php } wp_reset_postdata();
              ?>
          </div>
          <a class="btn" href="<?php echo site_url('/portfolio') ?>">zobacz więcej</a>
          </div>
      </div>

<?php }

//function display banner

function pageBanner(){
    ?>
      <div class="banner">
        <picture>
        <?php 
       $banner = get_field('banner');
          if($banner):
          $alt = $banner['alt']; 
          $url = $banner['url'];
          $full = $banner['sizes']['bannerFull'];
          $medium = $banner['sizes']['bannerMedium'];
          $mobile = $banner['sizes']['bannerMobile'];
          ?>
            <source  media="(min-width: 900px)" srcset="<?php echo esc_url($full)?>" alt="<?php echo esc_attr($alt)?>" />
            <source  media="(min-width: 530px)" srcset="<?php echo esc_url($medium)?>" alt="<?php echo esc_attr($alt)?>" />
            <img src="<?php echo esc_url($mobile)?>" alt="<?php esc_attr($mobile)?>"/>
            <?php endif ?>
         </picture>
         
        </div>
<?php }

//add styles and scripts
function mb_studio_src(){
    wp_enqueue_script('aos', '//unpkg.com/aos@next/dist/aos.js');
    wp_enqueue_script('main-js', get_theme_file_uri('/js/bundled.js'), NULL, microtime(), true);
    wp_enqueue_script('vendor-js', get_theme_file_uri('/js/vendors.js'), NULL, '1.0', true);
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Palanquin|Roboto&display=swap');
    wp_enqueue_script('font-awesome', '//kit.fontawesome.com/56d84fb067.js');
    wp_enqueue_style('main_styles', get_stylesheet_uri(), NULL, microtime());
}
    add_action('wp_enqueue_scripts', 'mb_studio_src');
//add page title in the browser; enable menu customization
    function mb_studio_features(){
        register_nav_menu('headerMenuLocation', 'Header Menu');
        register_nav_menu('footerMenuLocation', 'Footer Menu');
        add_theme_support('title-tag'); 
        add_theme_support( 'post-thumbnails' ); 
        add_image_size('bannerFull', 1800, 620);
        add_image_size('bannerMobile',480,440, array('center', 'center'));
        add_image_size('bannerMedium',780,540, array('center', 'center'));
        add_image_size('mottoMobile', 530, 630,  array('center', 'center'));
    }

    add_action('after_setup_theme', 'mb_studio_features');
    
    //remove p tags cf7
    add_filter('wpcf7_autop_or_not', '__return_false');

    /*Contact form 7 remove span*/
    add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    $content = str_replace('<br />', '', $content);
        
    return $content;
});
    
?>