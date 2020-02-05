<footer>
<div class="page-section page-section--border">
        <div class="footer footer__upper">
            <div class="row row--medium-4">
                <h3 class="headline headline--small">Masz pytania?</h3>
                <p class="main-content main-content--sm-center">Zaczynasz nowy projekt?<br> Masz pytania? Skontaktujemy się z toba</p>
                <form class="footer__form">
                    <input class="footer__input" type="text" placeholder="Adres e-mail" />
                    <button type="submit" class="btn btn--half-radius">Wyślij</button>
                </form>
            </div>
        </div>
        </div>
        <div class="footer footer__lower">
            <div class="row row--medium-4 row--start">
                <div class="footer__logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/studio_logo_sm.png" alt="logo studio mb"></div>
                <div class="footer__addres">
                    <p>Studio MP<br> ul. Gdańska 27, I piętro<br>85-005 Bydgoszcz<br>biuro@studiomb.pl</p>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                </div>
                <nav class="navigation navigation--footer">
                    <ul>
                        <li <?php if(is_page('o-nas')) echo'class="current-menu-item"'?>><a href="<?php echo site_url('/o-nas'); ?>">o nas</a></li>
                        <li <?php if(is_page('oferta')) echo'class="current-menu-item"'?>><a href="<?php echo site_url('/oferta'); ?>">oferta</a></li>
                        <li <?php if(is_page('portfolio')) echo'class="current-menu-item"'?>><a href="<?php echo site_url('/portfolio'); ?>">portfolio</a></li>
                        <li <?php if(is_page('referencje')) echo'class="current-menu-item"'?>><a href="<?php echo site_url('/referencje'); ?>">referencje</a></li>
                        <li <?php if(is_page('kontakt')) echo'class="current-menu-item"'?>><a href="<?php echo site_url('/kontakt'); ?>">kontakt</a></li>
                    </ul>
                </nav>
                <button class="btn btn--up"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ARROW UP.png" /></button>
            </div>
            </div>
     
    </footer>

<?php wp_footer(); ?>
</body>

</html>