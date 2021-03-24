<?php get_header();
   
 ?>
        <!-- Top News Start-->
        <div class="top-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 tn-left">
                        <div class="row tn-slider">
                        <?php
                            $args = array (
                                    'posts_per_page'      => '3',
                                    'post_type'           => 'post',
                                    'post_status'         => 'publish',
                                    'paged'               => get_query_var('paged')
                            );        
                            $query = new WP_Query ( $args );
                            if ($query->have_posts()) {
                                while($query->have_posts()) {
                                    $query->the_post(); ?>
                            <?php get_template_part('template-parts/home-content/recent-post-slider', get_post_type() ); ?>

                            <?php  }
                                     }
                                wp_reset_postdata();
                                 ?> 
                        </div>
                    </div>
                    <div class="col-md-6 tn-right">
                        <div class="row">
                        <?php
                            $args = array (
                                    'offset'              => '3',
                                    'posts_per_page'      => '4',
                                    'post_type'           => 'post',
                                    'post_status'         => 'publish',
                                    'paged'               => get_query_var('paged')
                            );        
                            $query = new WP_Query ( $args );
                            if ($query->have_posts()) {
                                while($query->have_posts()) {
                                    $query->the_post(); ?>
                                <?php get_template_part('template-parts/home-content/recent-posts', get_post_type()); ?>
                            <?php  }
                                     }
                                wp_reset_postdata();
                                 ?>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top News End-->

        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Sports</h2>
                        <div class="row cn-slider">
                            <?php
                            $args = array(
                                'category_name'  => 'sports',
                                'post_type'      => 'post',
                                'post_status'    => 'publish',
                                'posts_per_page' => 5,
                                'paged'          => get_query_var('paged')
                                );
                            $loop = new WP_Query($args);
                                if($loop->have_posts()) {
                                    while ( $loop->have_posts() ) {
                                        $loop->the_post();
                            ?>
                           <?php get_template_part('template-parts/home-content/sports', get_post_type()); ?>

                            <?php }
                         }
                         wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>Technology</h2>
                        <div class="row cn-slider">
                        <?php
                              $args = array (
                                  'category_name'       => 'technology',
                                  'post_type'           => 'post',
                                  'posts_per_page'      => '5',
                                  'post_status'         => 'publish',
                                  'paged'               => get_query_var('paged')
                              );
                              $query = new WP_Query($args);
                                   if($query->have_posts()) {
                                       while($query->have_posts()) {
                                           $query->the_post();
                             ?>
                              <?php get_template_part('template-parts/home-content/technology', get_post_type()); ?>
                            <?php }  
                                }
                                wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->

        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Business</h2>
                        <div class="row cn-slider">
                        <?php
                              $args = array (
                                  'category_name'       => 'business',
                                  'post_type'           => 'post',
                                  'posts_per_page'      => '5',
                                  'post_status'         => 'publish',
                                  'paged'               => get_query_var('paged')
                              );
                              $query = new WP_Query($args);
                                   if($query->have_posts()) {
                                       while($query->have_posts()) {
                                           $query->the_post();
                             ?>
                            <?php get_template_part('template-parts/home-content/business', get_post_type()); ?>
                            <?php }
                                }
                                wp_reset_postdata();
                             ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>Entertainment</h2>
                        <div class="row cn-slider">
                        <?php
                              $args = array (
                                  'category_name'        => 'entertainment',
                                  'post_type'           => 'post',
                                  'posts_per_page'      => '5',
                                  'post_status'         => 'publish',
                                  'paged'               => get_query_var('paged')
                              );
                              $query = new WP_Query($args);
                                   if($query->have_posts()) {
                                       while($query->have_posts()) {
                                           $query->the_post();
                             ?>
                            <?php get_template_part('template-parts/home-content/entertainment', get_post_type()); ?>
                            <?php }
                                }
                                wp_reset_postdata();
                             ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->
        
        <!-- Tab News Start-->
        <div class="tab-news">
            <div class="container">
                <div class="row">
                    <?php get_template_part('template-parts/home-content/full-sections', get_post_type()); ?>
                </div>
            </div>
        </div>
        <!-- Tab News Start-->

        <!-- Main News Start-->
        <div class="main-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row">
                        <?php
                            $args = array (
                                    'category_name'       => 'movies',
                                    'posts_per_page'      => '9',
                                    'post_type'           => 'post',
                                    'post_status'         => 'publish',
                                    'paged'               => get_query_var('paged')
                            );        
                            $query = new WP_Query ( $args );
                            if ($query->have_posts()) {
                                while($query->have_posts()) {
                                    $query->the_post(); ?>
                            <?php get_template_part('template-parts/home-content/move', get_post_type()); ?>
                        <?php }
                            }
                        wp_reset_postdata();
                         ?>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="mn-list">
                            <h2>Read More</h2>
                            <ul>
                            <?php
                               $args = array( 
                                   'posts_per_page'    => '10',
                                   'post_type'         => 'post',
                                   'post_status'       => 'publish',
                                //    'orderby'           => 'meta_value_num', 
                                //    'meta_key'          => 'wpb_post_views_count',
                                   'paged'             => get_query_var('paged'),
                                   'order'             => 'DESC'
                               );              
                               $query = new WP_Query($args);
                                      if($query->have_posts()) {
                                          while($query->have_posts()) {
                                              $query->the_post();             
                            ?>
                                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php } 
                                 }
                              wp_reset_postdata();
                            ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main News End-->
<?php get_footer(); ?>