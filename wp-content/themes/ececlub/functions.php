<?php
if ( ! function_exists( 'pc_setup' ) ) :

	function pc_setup() {
		// Enable support for Post Thumbnails, and declare two sizes.
		add_theme_support( 'post-thumbnails' );


		$args = array(
			'width'         => 215,
			'height'        => 214,
			'default-image' => get_template_directory_uri() . '/images/ece_club_logo.png',
			'uploads'       => true,
		);
		add_theme_support( 'custom-header', $args );
		//set_post_thumbnail_size( 672, 372, true );
		//add_image_size( 'twentyfourteen-full-width', 1038, 576, true );
		//add_image_size( 'hero-med', 700, 700, false );

		//excerpt for pages
		//add_post_type_support( 'page', 'excerpt' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus( array(
			'primary'   => __( 'Top primary menu', 'twentyfourteen' ),
			'secondary' => __( 'Secondary menu is for responsive', 'twentyfourteen' ),
		) );

		/*
	 	* Switch default core markup for search form, comment form, and comments
	 	* to output valid HTML5.
	 	*/
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list',
		) );

	}

endif;
add_action( 'after_setup_theme', 'pc_setup' );

//REMOVE WP-GENERATOR, RSD AND WLMMANIFEST (WHICH ARE USED ONLY IF USE MICROSOFT WRITER)
function remheadlink() {
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'feed_links_extra', 3 );
	remove_action('wp_head', 'feed_links', 2);
}
add_action('init', 'remheadlink');


/**
 * Extend the default WordPress body classes.
 *
 * Adds body classes to denote:
 * 1. Single or multiple authors.
 * 2. Presence of header image.
 * 3. Index views.
 * 4. Full-width content layout.
 * 5. Presence of footer widgets.
 * 6. Single views.
 * 7. Featured content layout.
 *
 * @since Twenty Fourteen 1.0
 *
 * @param array $classes A list of existing body class values.
 * @return array The filtered body class list.
 */
function twentyfourteen_body_classes( $classes ) {
    if ( !is_front_page() ){
        $classes[] = 'nav-bg';
    }

	if ( is_singular() && ! is_front_page() ) {
		$classes[] = 'singular';
	}

	return $classes;
}
add_filter( 'body_class', 'twentyfourteen_body_classes' );

function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');



/**
 * Extend the default WordPress post classes.
 *
 * Adds a post class to denote:
 * Non-password protected page with a post thumbnail.
 *
 * @since Twenty Fourteen 1.0
 *
 * @param array $classes A list of existing post class values.
 * @return array The filtered post class list.
 */
function twentyfourteen_post_classes( $classes ) {
	if ( ! post_password_required() && has_post_thumbnail() ) {
		$classes[] = 'has-post-thumbnail';
	}

	return $classes;
}
add_filter( 'post_class', 'twentyfourteen_post_classes' );


// Register widgetized areas
function theme_widgets_init() {
    // Area 1
    register_sidebar( array (
        'name'          => 'Primary Widget Area',
        'id'            => 'primary_widget_area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
 
    // Area 2
    register_sidebar( array (
        'name'          => 'Secondary Widget Area',
        'id'            => 'secondary_widget_area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
} // end theme_widgets_init
 
add_action( 'init', 'theme_widgets_init' );

// Check for static widgets in widget-ready areas
function is_sidebar_active( $index ){
    global $wp_registered_sidebars;
 
    $widgetcolums = wp_get_sidebars_widgets();
 
    if ( $widgetcolums[$index] ) return true;
 
    return false;
} // end is_sidebar_active

function create_upcoming_events_cat () {
    if (file_exists (ABSPATH.'/wp-admin/includes/taxonomy.php')) {
        require_once (ABSPATH.'/wp-admin/includes/taxonomy.php'); 
        if ( ! get_cat_ID( 'Upcoming Events' ) ) {
            wp_create_category( 'Upcoming Events' );
        }
    }
}
add_action ( 'after_setup_theme', 'create_upcoming_events_cat' );

?>