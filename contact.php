<?php get_header(); 

/*
  ***
  **
     Template Name: main contact page
  **
  ***
  */
   global $reduxnews;
?>
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap pt-2">
            <div class="container">
               <?php get_breadcrumb(); ?>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="contact-form">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" placeholder="Your Name" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" placeholder="Your Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div><button class="btn" type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info">
                            <h3>Get in Touch</h3>
                            <p>
                               <?php echo $reduxnews['contact-info']; ?>
                            </p>
                            <h4><i class="fa fa-map-marker"></i> <?php echo $reduxnews['location'] ?></h4>
                            <h4><i class="fa fa-envelope"></i> <?php echo $reduxnews['yourmail'] ?></h4>
                            <h4><i class="fa fa-phone"></i> <?php echo $reduxnews['phone']?></h4>
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
            </div>
        </div>
        <!-- Contact End -->
        
       
<?php get_footer(); ?>