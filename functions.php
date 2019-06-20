<?php
/**
 * PlumTor functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package PlumTor
 */

if (!function_exists('plumtor_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function plumtor_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on PlumTor, use a find and replace
		 * to change 'plumtor' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('plumtor', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'primary' => esc_html__('Primary', 'plumtor'),
			'footer' => esc_html__('Footer', 'plumtor')
		));

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('plumtor_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		));
	}
endif;
add_action('after_setup_theme', 'plumtor_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function plumtor_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('plumtor_content_width', 640);
}
add_action('after_setup_theme', 'plumtor_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function plumtor_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'plumtor'),
		'id'            => 'sidebar-1',
		'description'   => esc_html__('Add widgets here.', 'plumtor'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar(array(
		'name'          => esc_html__('Footer Widget Area', 'plumtor'),
		'id'            => 'footer-widet-area',
		'description'   => esc_html__('Add widgets here.', 'plumtor'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'plumtor_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function plumtor_scripts()
{
	wp_register_style('plumtor-style', get_template_directory_uri() . '/style.css');

	// Bootstrap CSS
	wp_enqueue_style('plumtor-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array('plumtor-style'));

	wp_enqueue_style('plumtor-style');

	// Google Font
	wp_enqueue_style('plumtor-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Pacifico&display=swap');

	wp_enqueue_script('plumtor-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

	wp_enqueue_script('plumtor-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

	// Boostrap JS
	wp_enqueue_script('plumtor-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20151215', true);

	// FontAwesome Kit
	wp_enqueue_script('plumtor-fontawesome', 'https://kit.fontawesome.com/1c7085ef01.js', array(), '20151215', false);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'plumtor_scripts');


/**
 * Register Custom Post Type.
 *
 */

function plumtor_custom_post_type()
{
	$labels = array(
		'name'               => _x('Services', 'post type general name', 'plumtor'),
		'singular_name'      => _x('Service', 'post type singular name', 'plumtor'),
		'menu_name'          => _x('Services', 'admin menu', 'plumtor'),
		'name_admin_bar'     => _x('Service', 'add new on admin bar', 'plumtor'),
		'add_new'            => _x('Add New', 'Service', 'plumtor'),
		'add_new_item'       => __('Add New Service', 'plumtor'),
		'new_item'           => __('New Service', 'plumtor'),
		'edit_item'          => __('Edit Service', 'plumtor'),
		'view_item'          => __('View Service', 'plumtor'),
		'all_items'          => __('All Services', 'plumtor'),
		'search_items'       => __('Search Services', 'plumtor'),
		'parent_item_colon'  => __('Parent Services:', 'plumtor'),
		'not_found'          => __('No Service found.', 'plumtor'),
		'not_found_in_trash' => __('No Services found in Trash.', 'plumtor')
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __('Description.', 'plumtor'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array('slug' => 'services'),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title', 'editor')
	);

	register_post_type('services', $args);
}

add_action( 'init', 'plumtor_custom_post_type' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
