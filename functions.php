
<?php
    //  if(!function_exists('newsfeed_enqueue_script')) {
    //              function newsfeed_enqueue_script() {
    //                   wp_enqueue_style('bootstrap-min', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), null, true);
    //                   wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css', array(), null, true);
    //                   wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap', array(), null, true);
    //                   wp_enqueue_style('slick-mail', get_template_directory_uri() . '/lib/slick/slick.css', array(), '1.8.0', true);
    //                   wp_enqueue_style('slick-theme', get_template_directory_uri() . '/lib/slick/slick-theme.css', array(), '1.8.0', true);
    //                   wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/custom-style.css', array(), '1.0.0', true);
    //                   wp_enqueue_style('min-style', get_stylesheet_uri());

    //                   wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.4.1.min.js', array('jquery'));
    //                   wp_enqueue_script('bootstrap-main', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js',array('jquery'));
    //                   wp_enqueue_script('fon-tawesomejs', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js', array('jquery'));
    //                   wp_enqueue_script('easing', get_template_directory_uri() . '/lib/easing/easing.min.js', array(), '1.4.1', true );
    //                   wp_enqueue_script('slick-min', get_template_directory_uri() . '/lib/slick/slick.min.js', array(), '1.8.0', true);
    //              }
    //              add_action('wp_enqueue_scripts', 'newsfeed_enqueue_script');
    //  }

//  Add Redux Framework
require_once get_template_directory().'/redux-framework/ReduxCore/framework.php';
require_once get_template_directory().'/redux-framework/sample/config.php';


function theme_setup(){
     /** automatic feed link*/
     add_theme_support( 'automatic-feed-links' );
  
     /** tag-title **/
     add_theme_support( 'title-tag' );
  
     /** post formats */
     $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
     add_theme_support( 'post-formats', $post_formats);
  
     /** post thumbnail **/
     add_theme_support( 'post-thumbnails' );
  
     /** HTML5 support **/
     add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
  
     /** refresh widgest **/
     add_theme_support( 'customize-selective-refresh-widgets' );
 
       // Crop image Custom Size
     //   add_image_size('right_recent_post', 270, 172, true);

 
 
      // Add theme support for document Title tag
      add_theme_support('title-tag');
 
      // Add theme support for custom CSS in the dinyMCE visual editor
     add_editor_style();
 
 }
 add_action('after_setup_theme','theme_setup');

 // Register Nave Menus
 register_nav_menus( array(
     'top_menu'     => __('Top Menu', 'newstemplate'),
     'primary_menu' => __('Primary Menu', 'newstemplate'),
     'footer_menu'  => __('Footer Menu', 'newstemplate'),
     'footer_useful_inks'  => __('Useful Links', 'newstemplate'),
     'footer_quick_links'  => __('Quick Links', 'newstemplate'),
 ));

 /**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/lib/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// How to Display Popular Posts by Views in WordPress without a Plugin
function wpb_set_post_views($postID) {
     $count_key = 'wpb_post_views_count';
     $count = get_post_meta($postID, $count_key, true);
     if($count==''){
         $count = 0;
         delete_post_meta($postID, $count_key);
         add_post_meta($postID, $count_key, '0');
     }else{
         $count++;
         update_post_meta($postID, $count_key, $count);
     }
 }
 //To keep the count accurate, lets get rid of prefetching
 remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
 

//  Footer widget
/*
* @since Twenty Fifteen Child 1.0
*
* @link https://codex.wordpress.org/Function_Reference/register_sidebar
*/
function twentyfifteen_child_widgets_init() {
 register_sidebar( array(
   'name'          => __( 'Footer Newsletter', 'newstemplate' ),
   'id'            => 'footer-sidebar-3',
   'description'   => __( 'Add widgets here to appear in your footer area.', 'newstemplate' ),
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget'  => '</aside>',
   'before_title'  => '<h2 class="widget-title">',
   'after_title'   => '</h2>',
 ) );
}
add_action( 'widgets_init', 'twentyfifteen_child_widgets_init' );

/**
 * Generate breadcrumbs
 */
function get_breadcrumb() {
  echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
  if (is_category() || is_single()) {
      echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
      the_category(' &bull; ');
          if (is_single()) {
              echo " &nbsp;&nbsp;/&nbsp;&nbsp; ";
              the_title();
          }
  } elseif (is_page()) {
      echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
      echo the_title();
  }elseif (is_page()) {
    echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
    echo the_title();
   } elseif (is_search()) {
      echo "&nbsp;&nbsp;/&nbsp;&nbsp;Search Results for... ";
      echo '"<em>';
      echo the_search_query();
      echo '</em>"';
  }
}

// Custom Excerpt defind function coll & red more btn
function my_excerpt_length($limit) {
    return wp_trim_words(get_the_excerpt(), $limit, '<a href="'. esc_url( get_permalink() ) . '">' . __( ' Read more', 'ismaile' ) . '</a>');
}
