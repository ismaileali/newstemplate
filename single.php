<?php get_header(); ?>
<?php global $reduxnews; ?>        
        <!-- Breadcrumb Start -->
       
        <div class="breadcrumb-wrap mt-4">
            <div class="container">
                    <?php get_breadcrumb(); ?>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Single News Start-->
        <div class="single-news">
            <div class="container">
                <div class="row"> 
                <div class="col-lg-8">
                    <?php if (have_posts()) : ?>
                           <?php while(have_posts()) : the_post(); ?>
                        <div class="sn-container">
                            <div class="sn-img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="sn-content">
                                <h3><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                            </div>
                            <div class="sharethis-inline-share-buttons"></div>
                            <div class="fb-comments" data-href="<?php  the_permalink(); ?>" data-width="100%" data-numposts="5"></div>
                        </div>
                    <?php  endwhile;
                             wp_reset_postdata();
                           endif;
                     ?>
                    <div class="sn-related">
                            <h2>Related News</h2>
                            <div class="row sn-slider">
                            <?php
                                //for use in the loop, list 5 post titles related to first tag on current post
                                $tags = wp_get_post_tags($post->ID);
                                if ($tags) {
                                $first_tag = $tags[0]->term_id;
                                $args=array(
                                'tag__in' => array($first_tag),
                                'post__not_in' => array($post->ID),
                                'posts_per_page'=> '5',
                                'caller_get_posts'=>1
                                );
                                $my_query = new WP_Query($args);
                                if( $my_query->have_posts() ) {
                                while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                <div class="col-md-4">
                                    <div class="sn-img">
                                          <?php the_post_thumbnail(); ?>
                                        <div class="sn-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    endwhile;
                                    }
                                    wp_reset_query();
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                    <?php  get_sidebar(); ?>
                </div>
            </div>
        </div>
        <!-- Single News End-->        
        
<?php get_footer(); ?>