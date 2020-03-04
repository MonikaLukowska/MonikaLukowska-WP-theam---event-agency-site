<?php 
$cookies = new WP_Query('page_id=400');
while($cookies->have_posts()) : $cookies->the_post();

?>
<div class="cookie-notice"><?php echo the_content() ?>
<div>
<a class="cookie-close" href="#">Rozumiem</a>
<a class="privacy" href="<?php echo site_url('/polityka-prywatnosci'); ?>">Polityka Prywatności</a>
</div>
</div>
<?php
endwhile
?>