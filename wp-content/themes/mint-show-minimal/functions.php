<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function mintshow_theme_setup() {
 
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
        'secondary' => __('Secondary Menu', 'myfirsttheme' )
    ) );
 
    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
add_action( 'after_setup_theme', 'mintshow_theme_setup' );


/**
* Add bootstrap (and font awesome) support to the Wordpress theme
* Also, load custom scripts
*/

function mintshow_add_bootstrap() {
  wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style( 'fa-css', get_template_directory_uri() . '/css/font-awesome.min.css' );
  wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
  wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery') );
  wp_enqueue_script( 'myscripts-js', get_template_directory_uri() . '/js/myscripts.js', array('jquery') );

  // Ajax Load More Posts: Ref: https://rudrastyh.com/wordpress/load-more-posts-ajax.html
  global $wp_query;
  wp_register_script( 'myloadmore-js', get_template_directory_uri() . '/js/myloadmore.js', array('jquery') );
  wp_localize_script( 'myloadmore-js', 'misha_loadmore_params', array(
    'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
    'posts' => serialize( $wp_query->query_vars ), // everything about your loop is here
    'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
    'max_page' => $wp_query->max_num_pages
  ) );
  wp_enqueue_script( 'myloadmore-js' );
}

add_action( 'wp_enqueue_scripts', 'mintshow_add_bootstrap' );


/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function mintshow_excerpt_more( $more ) {
  return sprintf( '<a class="ms-read-more" href="%1$s">%2$s <i class="fa fa-long-arrow-right"></i></a>',
      get_permalink( get_the_ID() ),
      __( 'Read More', 'textdomain' )
  );
}
add_filter( 'excerpt_more', 'mintshow_excerpt_more' );

/**
 * Register our sidebars widget areas.
 *
 */
function mintshow_sidebar_widget_init() {

	register_sidebar( array(
		'name'          => 'Left Sidebar',
		'id'            => 'left_sidebar_1',
		// 'before_widget' => '<div>',
		// 'after_widget'  => '</div>',
		// 'before_title'  => '<h2 class="rounded">',
		// 'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'mintshow_sidebar_widget_init' );


/**
* Ajax Load More Posts....
* Ref: https://rudrastyh.com/wordpress/load-more-posts-ajax.html
**/
function misha_loadmore_ajax_handler(){
 
	// prepare our arguments for the query
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
	$args['post_status'] = 'publish';
 
	// it is always better to use WP_Query but not here
	query_posts( $args );
 
	if( have_posts() ) :
 
		// run the loop
		while( have_posts() ): the_post();
 
			// look into your theme code how the posts are inserted, but you can use your own HTML of course
			// do you remember? - my example is adapted for Twenty Seventeen theme
			get_template_part( 'partials/blogsnippet', get_post_format() );
			// for the test purposes comment the line above and uncomment the below one
			// the_title();
 
 
		endwhile;
 
	endif;
	die; // here we exit the script and even no wp_reset_query() required!
} 
add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}