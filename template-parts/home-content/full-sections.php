<div class="col-md-6">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#featured">Featured News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#popular">Popular News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#latest">Latest News</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="featured" class="container tab-pane active">
                            <?php
                               $args = array( 
                                   'category_name'     => 'featured',
                                   'posts_per_page'    => '3',
                                   'post_type'         => 'post',
                                   'post_status'       => 'publish',
                                   'paged'             => get_query_var('paged')
                               );              
                               $query = new WP_Query($args);
                                      if($query->have_posts()) {
                                          while($query->have_posts()) {
                                              $query->the_post();             
                            ?>
                            <div class="tn-news">
                                    <div class="tn-img">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="tn-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </div>
                                </div>
                           <?php }
                                }
                              wp_reset_postdata(); ?>
                            </div>
                            <?php ?>
                            <div id="popular" class="container tab-pane fade">
                            <?php
                               $args = array( 
                                   'posts_per_page'    => '3',
                                   'post_type'         => 'post',
                                   'post_status'       => 'publish',
                                   'orderby'           => 'meta_value_num', 
                                   'meta_key'          => 'wpb_post_views_count',
                                   'paged'             => get_query_var('paged'),
                                   'order'             => 'DESC'
                               );              
                               $query = new WP_Query($args);
                                      if($query->have_posts()) {
                                          while($query->have_posts()) {
                                              $query->the_post();             
                            ?>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="tn-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </div>
                                </div>
                            <?php }
                                }
                            wp_reset_postdata(); ?>
                            </div>
                            <div id="latest" class="container tab-pane fade">
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
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="tn-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </div>
                                </div>
                                <?php }
                                     } 
                                wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#m-viewed">Most Viewed</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#m-read">Most Read</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#m-recent">Most Recent</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="m-viewed" class="container tab-pane active">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/news-350x223-5.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/news-350x223-4.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/news-350x223-3.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                            </div>
                            <div id="m-read" class="container tab-pane fade">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/news-350x223-2.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/news-350x223-1.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/news-350x223-3.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                            </div>
                            <div id="m-recent" class="container tab-pane fade">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/news-350x223-4.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/news-350x223-5.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/news-350x223-1.jpg" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>