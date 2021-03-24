
        <!-- Footer Start -->
        <?php global $reduxnews; ?>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Get in Touch</h3>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i> <?php echo $reduxnews['location'] ?></p>
                                <p><i class="fa fa-envelope"></i> <?php echo $reduxnews['yourmail'] ?></p>
                                <p><i class="fa fa-phone"></i> <?php echo $reduxnews['phone']?></p>
                                <div class="social">
                                    <?php if(!empty($reduxnews['all-socail-links']['Twitter'])) : ?>
                                        <a href="<?php echo $reduxnews['all-socail-links']['Twitter']; ?>"><i class="fab fa-twitter"></i></a>
                                    <?php endif; ?>
                                    <?php if(!empty($reduxnews['all-socail-links']['Facebook'])) : ?>
                                        <a href="<?php echo $reduxnews['all-socail-links']['Facebook']; ?>"><i class="fab fa-facebook-f"></i></a>
                                    <?php endif; ?>
                                    <?php if(!empty($reduxnews['all-socail-links']['Linkedin'])) : ?>
                                        <a href="<?php echo $reduxnews['all-socail-links']['Linkedin']; ?>"><i class="fab fa-linkedin-in"></i></a>
                                    <?php endif; ?>
                                    <?php if(!empty($reduxnews['all-socail-links']['Instagram'])) : ?>
                                        <a href="<?php echo $reduxnews['all-socail-links']['Instagram']; ?>"><i class="fab fa-instagram"></i></a>
                                    <?php endif; ?>
                                    <?php if(!empty($reduxnews['all-socail-links']['Youtube'])) : ?>
                                        <a href="<?php echo $reduxnews['all-socail-links']['Youtube']; ?>"><i class="fab fa-youtube"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Useful Links</h3>
                            <?php
                                    wp_nav_menu( array(
                                        'theme_location'    => 'footer_quick_links',
                                        'depth'             => 2,
                                        'container'         => 'div',
                                        'menu_class'        => 'nav navbar-nav',
                                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'            => new WP_Bootstrap_Navwalker(),
                                    ) );
                                ?>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Quick Links</h3>
                            <?php
                                    wp_nav_menu( array(
                                        'theme_location'    => 'footer_quick_links',
                                        'depth'             => 2,
                                        'container'         => 'div',
                                        'menu_class'        => 'nav navbar-nav',
                                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'            => new WP_Bootstrap_Navwalker(),
                                    ) );
                                ?>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Newsletter</h3>
                            <div class="newsletter">
                                <p>
                                    <?php echo $reduxnews['footer-nltt'] ?>
                                </p>
                                <form>
                                    <?php echo do_shortcode('[mc4wp_form id="213"]'); ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Footer Menu Start -->
        <div class="footer-menu">
            <div class="container">
                <div class="f-menu">
                    <nav class="navbar navbar-expand-md" role="navigation">
                        <div class="container p-0">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                              <?php
                                    wp_nav_menu( array(
                                        'theme_location'    => 'footer_menu',
                                        'depth'             => 2,
                                        'container'         => 'div',
                                        'container_class'   => 'collapse navbar-collapse',
                                        'container_id'      => 'bs-example-navbar-collapse-1',
                                        'menu_class'        => 'nav navbar-nav mx-auto',
                                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'            => new WP_Bootstrap_Navwalker(),
                                    ) );
                              ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Footer Menu End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p><?php echo $reduxnews['footer-copytext'] ?></p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p>Designed By <a href="<?php echo $reduxnews['designed-url'] ?>" ><?php echo $reduxnews['designed'] ?></a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->

        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/lib/easing/easing.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/lib/slick/slick.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

    </body>
</html>
