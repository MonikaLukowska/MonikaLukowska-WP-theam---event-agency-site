<?php get_template_part('template-parts/content', 'cookies');?>
<footer>
<div class="page-section page-section--border">
        <div class="footer footer__upper">
            <div class="row row--medium-4 row--noflex">
                <h3 class="headline headline--small">Masz pytania?</h3>
                <p class="main-content main-content--sm-center">Zaczynasz nowy projekt?<br> Masz pytania? Skontaktujemy się z Tobą.</p>
            
             <?php echo do_shortcode ('[contact-form-7 id="403" html_class="footer__form" title="Contact form 1"]'); ?>
            
               
            </div>
        </div>
        </div>
        <div class="footer footer__lower">
            <div class="row row--medium-4 row--start">
                <div class="footer__logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/studio_logo_sm.png" alt="logo studio mb"></div>
                <div class="footer__addres">
                    <p>Studio MB<br> ul. Gdańska 27, I piętro<br>85-005 Bydgoszcz<br><a href="mailto:biuro@studiomb.pl">biuro@studiomb.pl<a></p>
                    <div class="footer__socials">
                    <a href="https://www.facebook.com/AgencjaEventowaStudioMB/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.linkedin.com/company/studiomb"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <nav class="navigation navigation--footer">
                    <ul>
                        <li <?php if(is_page('o-nas')) echo'class="current-menu-item"'?>><a href="<?php echo site_url('/o-nas'); ?>">o nas</a></li>
                        <li <?php if(is_page('oferta')) echo'class="current-menu-item"'?>><a href="<?php echo site_url('/oferta'); ?>">oferta</a></li>
                        <li <?php if(is_page('portfolio')) echo'class="current-menu-item"'?>><a href="<?php echo site_url('/portfolio'); ?>">portfolio</a></li>
                        <li <?php if(is_page('referencje')) echo'class="current-menu-item"'?>><a href="<?php echo site_url('/referencje'); ?>">referencje</a></li>
                        <li <?php if(is_page('kontakt')) echo'class="current-menu-item"'?>><a href="<?php echo site_url('/kontakt'); ?>">kontakt</a></li>
                        <li <?php if(is_page('polityka-prywatnosci')) echo'class="current-menu-item"'?>><a href="<?php echo site_url('/polityka-prywatnosci'); ?>">polityka prywatności</a></li>
                    </ul>
                </nav>
                <button class="btn btn--up"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ARROW UP.png" /></button>
            </div>
            </div>
     
    </footer>

<?php wp_footer(); ?>
</body>

</html>