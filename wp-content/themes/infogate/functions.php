<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */

	// Options Framework (https://github.com/devinsays/options-framework-plugin)
	if ( !function_exists( 'optionsframework_init' ) ) {
		define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/_/inc/' );
		require_once dirname( __FILE__ ) . '/_/inc/options-framework.php';
	}

	// Theme Setup (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function html5reset_setup() {
		load_theme_textdomain( 'html5reset', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'structured-post-formats', array( 'link', 'video' ) );
		add_theme_support( 'post-formats', array( 'aside', 'video' ) );
		register_nav_menu( 'primary', __( 'Navigation Menu', 'html5reset' ) );
		register_nav_menu( 'secondary', __( 'Claves Menu', 'html5reset' ) );
		register_nav_menu( 'tertiary', __( 'Footer Menu', 'html5reset' ) );
		add_theme_support( 'post-thumbnails' );
	}
	add_action( 'after_setup_theme', 'html5reset_setup' );

	// Scripts & Styles (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function html5reset_scripts_styles() {
		global $wp_styles;

		// Load Comments
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );

		// Load Stylesheets
//		wp_enqueue_style( 'html5reset-reset', get_template_directory_uri() . '/reset.css' );
//		wp_enqueue_style( 'html5reset-style', get_stylesheet_uri() );

		// Load IE Stylesheet.
//		wp_enqueue_style( 'html5reset-ie', get_template_directory_uri() . '/css/ie.css', array( 'html5reset-style' ), '20130213' );
//		$wp_styles->add_data( 'html5reset-ie', 'conditional', 'lt IE 9' );

		// Modernizr
		// This is an un-minified, complete version of Modernizr. Before you move to production, you should generate a custom build that only has the detects you need.
		// wp_enqueue_script( 'html5reset-modernizr', get_template_directory_uri() . '/_/js/modernizr-2.6.2.dev.js' );

	}
	add_action( 'wp_enqueue_scripts', 'html5reset_scripts_styles' );

	// WP Title (based on twentythirteen: http://make.wordpress.org/core/tag/twentythirteen/)
	function html5reset_wp_title( $title, $sep ) {
		global $paged, $page;

		if ( is_feed() )
			return $title;

//		 Add the site name.
		$title .= get_bloginfo( 'name' );

//		 Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";

//		 Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( __( 'Page %s', 'html5reset' ), max( $paged, $page ) );

		return $title;
	}
	add_filter( 'wp_title', 'html5reset_wp_title', 10, 2 );




//OLD STUFF BELOW


	// Load jQuery
	if ( !function_exists( 'core_mods' ) ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script( 'jquery' );
				wp_register_script( 'jquery', ( "http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ), false);
				wp_enqueue_script( 'jquery' );
			}
		}
		add_action( 'wp_enqueue_scripts', 'core_mods' );
	}

	// Clean up the <head>, if you so desire.
	//	function removeHeadLinks() {
	//    	remove_action('wp_head', 'rsd_link');
	//    	remove_action('wp_head', 'wlwmanifest_link');
	//    }
	//    add_action('init', 'removeHeadLinks');

	// Custom Menu
	register_nav_menu( 'primary', __( 'Navigation Menu', 'html5reset' ) );
	register_nav_menu( 'secondary', __( 'Claves Menu', 'html5reset' ) );
	register_nav_menu( 'tertiary', __( 'Footer Menu', 'html5reset' ) );

	// Widgets
	if ( function_exists('register_sidebar' )) {
		function html5reset_widgets_init() {
			register_sidebar( array(
				'name'          => __( 'Sidebar Widgets', 'html5reset' ),
				'id'            => 'sidebar-primary',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			) );
		}
		add_action( 'widgets_init', 'html5reset_widgets_init' );
	}

	// Navigation - update coming from twentythirteen
	function post_navigation() {
		echo '<div class="navigation">';
		echo '	<div class="next-posts">'.get_next_posts_link('&laquo; Noticias Anteriores').'</div>';
		echo '	<div class="prev-posts">'.get_previous_posts_link('Noticias Recientes &raquo;').'</div>';
		echo '</div>';
	}

	// Posted On
	function posted_on() {
		printf( __( '<span class="sep">Posted </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a> by <span class="byline author vcard">%5$s</span>', '' ),
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_author() )
		);
	}
	
	 add_image_size( 'home-1', 340, 230, true );
	 add_image_size( 'home-2', 500, 333, true );
	 add_image_size( 'home-3', 200, 135, true );
	 add_image_size( 'home-cita', 300, 300, true );
	 add_image_size( 'opinion-avatar', 60, 60, true );
	 add_image_size( 'populares', 300, 150, true );
	 add_image_size( 'img-principal', 640, 429, true );
	 
	 
	 // Citas

		function post_type_citas() {
		
		register_post_type('cita',
		    array(
		    'labels' => array(
		        'name'               => _x( 'Citas', 'post type general name' ),
				'singular_name'      => _x( 'cita', 'post type singular name' ),
				'menu_name'          => _x( 'Citas', 'admin menu' ),
				'name_admin_bar'     => _x( 'cita', 'add new on admin bar' ),
				'add_new'            => _x( 'Agregar Nueva', 'Cita' ),
				'add_new_item'       => __( 'Agregar Nueva Cita' ),
				'new_item'           => __( 'Nueva Cita' ),
				'edit_item'          => __( 'Editar Cita' ),
				'view_item'          => __( 'Ver Cita' ),
				'all_items'          => __( 'Todos las Citas' ),
				'search_items'       => __( 'Buscar Citas' ),
				'parent_item_colon'  => __( 'Cita:' ),
				'not_found'          => __( 'No se han encontrado Citas.' ),
				'not_found_in_trash' => __( 'No hay Citas en la Papelera.' )
		        ),
		  'public' => true,
		  'has_archive' => true,
		  'rewrite' => array( 'slug' => 'cita' ),
		        'exclude_from_search' => true,
		        'hierarchical' => true,
		        'supports' => array( 'title', 'editor', 'thumbnail' ),
		        'query_var' => true
		        )
		  );
		}
		add_action('init', 'post_type_citas');
		
		
		// Opinión

		function post_type_opinion() {
		
		register_post_type('opinion',
		    array(
		    'labels' => array(
		        'name'               => _x( 'Opinión', 'post type general name' ),
				'singular_name'      => _x( 'Opinión', 'post type singular name' ),
				'menu_name'          => _x( 'Opinión', 'admin menu' ),
				'name_admin_bar'     => _x( 'Opinión', 'add new on admin bar' ),
				'add_new'            => _x( 'Agregar Nueva', 'Opinión' ),
				'add_new_item'       => __( 'Agregar Nueva Opinión' ),
				'new_item'           => __( 'Nueva Opinión' ),
				'edit_item'          => __( 'Editar Opinión' ),
				'view_item'          => __( 'Ver Opinión' ),
				'all_items'          => __( 'Todas las opiniones' ),
				'search_items'       => __( 'Buscar Opinión' ),
				'parent_item_colon'  => __( 'Opinión:' ),
				'not_found'          => __( 'No se han encontrado opiniones.' ),
				'not_found_in_trash' => __( 'No hay opiniones en la Papelera.' )
		        ),
		  'public' => true,
		  'has_archive' => true,
		  'rewrite' => array( 'slug' => 'opinion' ),
		        'exclude_from_search' => true,
		        'hierarchical' => true,
		        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		        'query_var' => true
		        )
		  );
		}
		add_action('init', 'post_type_opinion');
	 
	 
	 function exclude_post_categories($excl='', $spacer=' ') {
	  $categories = get_the_category($post->ID);
	  if (!empty($categories)) {
	    $exclude = $excl;
	    $exclude = explode(",", $exclude);
	    $thecount = count(get_the_category()) - count($exclude);
	    foreach ($categories as $cat) {
	      $html = '';
	      if (!in_array($cat->cat_ID, $exclude)) {
	        $html .= '<a href="' . get_category_link($cat->cat_ID) . '" ';
	        $html .= 'title="' . $cat->cat_name . '">' . $cat->cat_name . '</a>';
	        if ($thecount > 1) {
	          $html .= $spacer;
	        }
	        $thecount--;
	        echo $html;
	      }
	    }
	  }
	}
	
		function my_custom_popular_posts_html_list( $mostpopular, $instance ){
    $output = '<ul class="wpp-list">';

    // loop the array of popular posts objects
    foreach( $mostpopular as $popular ) {

        $stats = array(); // placeholder for the stats tag

        $excerpt = ''; // Excerpt placeholder

        // Excerpt option checked, build excerpt tag
        if ($instance['post-excerpt']['active']) {

            $excerpt = get_excerpt_by_id( $popular->id );
            if ( !empty($excerpt) ) {
                $excerpt = '<div class="wpp-excerpt">' . $excerpt . '</div>';
            }

        }

        $output .= "<li>";
        $output .= "<div class=\"img\"><a href=\"" . get_the_permalink( $popular->id ) . "\" title=\"" . esc_attr( $popular->title ) . "\">" . get_the_post_thumbnail($popular->id, 'populares') . "</a></div>";
        $output .= "<h2 class=\"entry-title\"><a href=\"" . get_the_permalink( $popular->id ) . "\" title=\"" . esc_attr( $popular->title ) . "\">" . $popular->title . "</a></h2>";
        $output .= "</li>" . "\n";

    }

    $output .= '</ul>';

    return $output;
}

add_filter( 'wpp_custom_html', 'my_custom_popular_posts_html_list', 10, 2 );


//Add slug (loads category object via get_category):  

function wpa_category_nav_class( $classes, $item ){
  if( 'category' == $item->object ){
    $category = get_category( $item->object_id );
    $classes[] = $category->slug;     
  }     
  return $classes;
}
add_filter( 'nav_menu_css_class', 'wpa_category_nav_class', 10, 2 );

//Lets add Open Graph Meta Info

function insert_fb_in_head() {
	global $post;
	if ( !is_singular()) //if it is not a post or a page
		return;
        echo '<meta property="fb:admins" content="542653049"/>';
        echo '<meta property="og:title" content="' . get_the_title() . '"/>';
        echo '<meta property="og:type" content="article"/>';
        echo '<meta property="og:url" content="' . get_permalink() . '"/>';
        echo '<meta property="og:site_name" content="Infogate.cl"/>';
        echo '<meta property="og:description" content="' . get_the_excerpt() . '"/>';
        
	if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
		$default_image="http://www.infogate.cl/wp-content/themes/infogate/_/img/logo-01.jpg"; //replace this with a default image on your server or an image in your media library
		echo '<meta property="og:image" content="' . $default_image . '"/>';
	}
	else{
		$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
		echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
	}
	echo "
";
}
add_action( 'wp_head', 'insert_fb_in_head', 5 );

?>
