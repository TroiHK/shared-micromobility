<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?= get_bloginfo('charset'); ?>">
    <meta name="viewport" content="initial-scale=1.0,width=device-width,height=device-height,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google" content="notranslate">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open(get_queried_object()) ) : ?>
        <link rel="pingback" href="<?= get_bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="header" class="header" role="banner">
    <div class="block-header">
        <div class="wrapper">
            <a href="index.html" class="logo" title="Portail Gate">
                <img src="<?= ASSETS_PATH ?>/images/logo.png" class="img" alt="Portail Gate logo">
                <img src="<?= ASSETS_PATH ?>/images/logo-white.png" class="img-sticky" alt="Portail Gate logo">
            </a>
            <a href="#" class="btn-search-mobile" title="Recherche"><i class="i-search"></i></a>
            <a href="#" class="btn-collapse" title="">
                <span class="left"></span>
                <span class="right"></span>
                <span class="sr-only">Menu</span>
            </a>

            <div class="wrap-collapse">
                <div class="feature" style="background-image: url('<?= ASSETS_PATH ?>/images/menu.png')"></div>

                <nav class="main-nav" role="navigation">
                    <div class="wrap">
                        <a href="#" class="logo-nav" title="Portail Gate"><img src="<?= ASSETS_PATH ?>/images/logo-white.png" alt="Portail Gate logo"></a>
                        <?php
                        wp_nav_menu([
                            'theme_location'    => 'default_main_menu',
                            'menu_class'        => 'main-menu',
                            'container'         => false
                        ]);
                        ?>
                        <div class="contact">
                            <a href="#" class="help"><i class="i-question"></i><span>Aide</span></a>
                            <a href="mailto:" class="mail"><i class="i-email"></i><span>Contact</span></a>

                            <div class="multi-lang">
                                <ul>
                                    <li class="is-active fr"><a href="#">FR</a></li>
                                    <li class="en"><a href="#">EN</a></li>
                                    <li class="en"><a href="#">EN</a></li>
                                </ul>
                            </div>
                        </div>
                        <ul class="site-info">
                            <li><a href="#">Mention légales</a></li>
                            <li>.</li>
                            <li><a href="#">Chartes des données personnelles</a></li>
                            <li>.</li>
                            <li><a href="#">Plan du site</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="block-banner">
        <div class="wrapper">
            <div class="content">
                <h1 class="title-1">Bienvenue au GATE</h1>
                <h2 class="title-2">Guichet Accueil des Talents Étrangers</h2>
                <div class="detail">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ex dolor, ornare et tellus id, vestibulum semper ligula. Ut vel est lorem. Duis purus erat, facilisis sit amet velit sed, efficitur venenatis felis. Vivamus risus tortor.
                </div>
                <div class="group-btn">
                    <a href="#" class="btn-arrow">Découvrir le GATE <i class="i-arrow-right"></i></a>
                    <a href="#" class="btn-arrow">Partenaires et RDV <i class="i-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="feature" style="background-image: url('<?= ASSETS_PATH ?>/images/banner.png')">
            <div id="info" class="info">
                <a href="#" class="btn-close" title="Close" data-close="#info"><i class="i-close"></i></a>
                <span class="icon">
                    <i class="i-alert"></i>
                </span>
                <p class="title">Flash Info</p>
                <p class="des">Exceptionnellement le GATE sera fermée ce jour. Les RDV sont annulés et vous serez recontacté ultérieurement pour un nouveau RDV. Merci de votre compréhension.</p>
            </div>
        </div>
    </div>
    <div id="search" class="block-search">
        <form action="#" class="form-default form-search" method="get">
            <div class="input-wrap">
                <input id="input-s" type="text" placeholder="Recherche" class="input-field">
                <label class="input-label" for="input-s">
                    <button class="btn-submit" type="submit">Recherche</button>
                    <span class="input-label-content">Recherche</span>
                </label>
            </div>
        </form>
    </div>
</header>
