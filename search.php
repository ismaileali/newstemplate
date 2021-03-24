<?php get_header(); ?>

<div class="search-page pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
            <h3 class="section-title-left"><?php printf( __( 'Search Results for: %s', 'newstemplate' ), '<span class="text-muted">' . esc_html( get_search_query() ) . '</span>'); ?></h3>
<p class="text-muted"><?php _e('Total posts found - ', 'optimizer'); ?> <?php global $wp_query; echo $wp_query->found_posts; wp_reset_query(); ?></p>


<?php 
    $search = get_search_query();
            $args = array(
                's' 		 => $search,
                'posts_per_page'         => '10',
                'post_type'				 => 'post',
                'post_status'			 => 'publish',
                'order'    				 => 'DESC',
                'paged' 				 => get_query_var( 'paged')
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
?>
      
      <div class="search-single-posts pb-4">
         <div class="row">
            <div class="col-md-3">
                    <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail( array( 'class' => 'search-page-img img-fluid')); ?></a>
            </div>
            <div class="col-md-9">
                <h5><?php the_title(); ?></h5>
               <p><?php echo  my_excerpt_length(50); ?></p>
            </div>
         </div>
      </div>
      
      
           
<?php }
                    } else {
                        echo 'Not Found Result';
                    }
                    wp_reset_postdata();
?>

            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
