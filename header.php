<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title('|',true,'right'); ?> <?php bloginfo('name'); ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap News Template - Free HTML Templates" name="keywords">
        <meta content="Bootstrap News Template - Free HTML Templates" name="description">

        <!-- Favicon -->
        <!-- <link href="/img/favicon.ico" rel="icon"> -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet"> 
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/lib/slick/slick.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/lib/slick/slick-theme.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=60237c62a0a5fc001153a51f&product=inline-share-buttons" async="async"></script>

  <?php wp_head();
                  global $reduxnews;
  ?>
       
    </head>

    <body <?php body_class();?>>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0" nonce="HQh8G06w"></script>

      <?php wp_body_open();?>
        <!-- Top Bar Start -->
        <div class="top-bar hello">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tb-contact pt-3">
                            <p><i class="fas fa-envelope"></i> <?php echo $reduxnews['yourmail']?></p>
                            <p><i class="fas fa-phone-alt"></i> <?php echo $reduxnews['phone']?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tb-menu">
                          <nav class="navbar navbar-expand-md" role="navigation">
                            <div class="container p-0">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                    <?php
                                    wp_nav_menu( array(
                                        'theme_location'    => 'top_menu',
                                        'depth'             => 2,
                                        'container'         => 'div',
                                        'container_class'   => 'collapse navbar-collapse',
                                        'container_id'      => 'bs-example-navbar-collapse-1',
                                        'menu_class'        => 'nav navbar-nav ml-auto',
                                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'            => new WP_Bootstrap_Navwalker(),
                                    ) );
                                    ?>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar Start -->
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="b-logo">
                            <a href="<?php echo esc_url( home_url('/')); ?>">
                                <img src="<?php echo $reduxnews['header-logo']['url']?>" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="b-ads">
                            <a href="https://htmlcodex.com">
                                <img src="<?php echo $reduxnews['header-ads-banner']['url']?>" alt="Ads">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="b-search">
                            <form role="search" method="get" action="<?php echo esc_url( home_url('/')); ?>">
                            <input type="search" placeholder="Search" name="s" value="<?php echo get_search_query(); ?>" required="required" autofocus="" title=<?php  echo esc_attr_x('Search for home Posts', '', 'newstemplate'); ?> onfocus="clearText(this)" onblur="clearText(this)">
                            <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">

                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto top-socail">
                        <nav class="navbar navbar-expand-md" role="navigation">
                            <div class="container p-0">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                    <?php
                                    wp_nav_menu( array(
                                        'theme_location'    => 'primary_menu',
                                        'depth'             => 2,
                                        'container'         => 'div',
                                        'container_class'   => 'collapse navbar-collapse',
                                        'container_id'      => 'bs-example-navbar-collapse-1',
                                        'menu_class'        => 'nav navbar-nav mr-auto',
                                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'            => new WP_Bootstrap_Navwalker(),
                                    ) );
                                    ?>
                                </div>
                                
                            </nav>
                        </div>
                        
                        <div class="social ml-auto">
                        <?php if(!empty($reduxnews['all-socail-links']['Twitter'])) : ?>
                            <a href="<?php echo $reduxnews['all-socail-links']['Twitter']; ?>"><i class="fab fa-twitter text-light"></i></a>
                        <?php endif; ?>
                        <?php if(!empty($reduxnews['all-socail-links']['Facebook'])) : ?>
                            <a href="<?php echo $reduxnews['all-socail-links']['Facebook']; ?>"><i class="fab fa-facebook-f text-light"></i></a>
                        <?php endif; ?>
                            <?php if(!empty($reduxnews['all-socail-links']['Linkedin'])) : ?>
                        <a href="<?php echo $reduxnews['all-socail-links']['Linkedin']; ?>"><i class="fab fa-linkedin-in text-light"></i></a>
                        <?php endif; ?>
                        <?php if(!empty($reduxnews['all-socail-links']['Instagram'])) : ?>
                            <a href="<?php echo $reduxnews['all-socail-links']['Instagram']; ?>"><i class="fab fa-instagram text-light"></i></a>
                        <?php endif; ?>
                        <?php if(!empty($reduxnews['all-socail-links']['Youtube'])) : ?>
                            <a href="<?php echo $reduxnews['all-socail-links']['Youtube']; ?>"><i class="fab fa-youtube text-light"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->