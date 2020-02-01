<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<body <?php body_class(); ?>>
    <div class="page-section--header">
        <header class="site-header" id="site-header">
        <div class="page-content">
            <div class="container">
                <div class="wrapper wrapper--nav">
                    <div class="site-header__menu-icon" id="site-header__menu-icon">
                        <div class="site-header__menu-icon__middle"></div>
                        
                    </div>
                    <div class="site-header__logo-mobile"><a href="<?php echo site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/studio_logo_sm.png" alt="logo studion MB" /></a></div>
                    <div class="site-header__content" id="site-header__content">
                        <nav class="navigation">
                        <!-- <?php 
                        wp_nav_menu(array(
                            'theme-location' => 'headerMenuLocation'
                        )) ?>-->
                            <ul class="navigation__left">
                                <li <?php if(is_page('o-nas')) echo'class="current-menu-item"'?>><a href="<?php echo site_url('/o-nas'); ?>">o nas</a></li>
                                <li <?php if(is_page('oferta')) echo'class="current-menu-item"'?>><a href="<?php echo site_url('/oferta'); ?>">oferta</a></li>
                            </ul>
                            <div class="navigation__logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/studio_logo_sm.png" /></a>
                            </div>
                            <ul class="navigation__right">
                                <li <?php if(get_post_type() == 'event' || is_page('portfolio')) echo'class="current-menu-item"'?>><a href="<?php echo site_url('/portfolio'); ?>">portfolio</a></li>
                                <li <?php if(is_page('referencje')) echo'class="current-menu-item"'?>><a href="<?php echo site_url('/referencje'); ?>">referencje</a></li>
                                <li <?php if(is_page('kontakt')) echo'class="current-menu-item"'?>><a href="<?php echo site_url('/kontakt'); ?>">kontakt</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            </div>
        </header>
    </div>