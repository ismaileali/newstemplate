<?php global $reduxnews; ?>
<div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <h2 class="sw-title">In This Category</h2>
                                <div class="news-list">
                                <?php
                                    $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                                    $term = get_queried_object();
                                    $catname = $term->slug;
                                        $args = array(
                                            'category_name' 	 => $catname,
                                            'posts_per_page'     => '5',
                                            'post_type'		     => 'post',
                                            'post_status'	 	 => 'publish',
                                            'order'    		     => 'DESC',
                                            'paged' 	     	 => $paged
                                        );
                                    $query = new WP_Query( $args );
                                        if ( $query->have_posts() ) {
                                            while ( $query->have_posts() ) {
                                                $query->the_post();?> 
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <div class="nl-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                    </div>
                                    <?php }
                                        }
                                    wp_reset_postdata();
                                    ?>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <div class="image">
                                    <a href="<?php echo $reduxnews['sponsor1-url'] ?>">
                                      <img src="<?php echo $reduxnews['sponsor1']['url']?>" alt="Sponsor">
                                    </a>
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <div class="tab-news">
                                    <ul class="nav nav-pills nav-justified">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#featured">Featured</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#popular">Popular</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#latest">Latest</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="featured" class="container tab-pane active">
                                        <?php
                                            $args = array( 
                                                'category_name'     => 'featured',
                                                'posts_per_page'    => '5',
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
                                        <div id="popular" class="container tab-pane fade">
                                        <?php
                                            $args = array( 
                                                'posts_per_page'    => '5',
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
                                            $args = array( 
                                                'posts_per_page'    => '5',
                                                'post_type'         => 'post',
                                                'post_status'       => 'publish',
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
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <h2 class="sw-title">News Category</h2>
                                <div class="category">
                                    <ul>
                                        <?php $categories = get_categories(array(
                                             'orderby' => 'name',
                                             'order'   => 'ASC'
                                        ));
                                                foreach($categories as $category){
                                                    echo ' <li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a><span>('. $category->count .')</span></li>';
                                                    } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <h2 class="sw-title">Tags Cloud</h2>
                                <div class="tags">
                                <?php $tags  = get_tags(array(
                                             'orderby' => 'name',
                                             'order'   => 'ASC'
                                        ));
                                                foreach($tags as $tag ){
                                                    echo '<a href="' . get_category_link($tag ->term_id) . '">' . $tag ->name . '</a>';
                                                    } ?>
                                    <!-- <a href="">National</a> -->

                                </div>
                            </div>
                        </div>
                    </div>
                    