<?php
/**
 * hail functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hail
 */

if ( ! function_exists( 'hail_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hail_setup() {
	 register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
   
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on hail, use a find and replace
	 * to change 'hail' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'hail', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'hail' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'hail_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'hail_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hail_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hail_content_width', 640 );
}
add_action( 'after_setup_theme', 'hail_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hail_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hail' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hail_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hail_scripts() {
	wp_enqueue_style( 'hail-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'hail-bootstraap_style', get_template_directory_uri().'/css/bootstrap.min.css' );

	wp_enqueue_script( 'hail-bootstraap-min-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
	
	wp_enqueue_script( 'hail-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'hail-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hail_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
/**
 * Load menu compatibility file.
 */
require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');

/*options*/
/** Step 2 (from text above). */
add_action( 'admin_menu', 'my_plugin_menu' );
/** Step 1. */
function my_plugin_menu() {	
//add_options_page( 'My Plugin Options', 'My Plugin', 'manage_options', 'my-unique-identifier', 'my_plugin_options' );
add_theme_page('Hail Theme', 'Theme Options', 'manage_options', 'Theme Options', 'theme_settings_page');
}
/** Step 3. */
function theme_settings_page()
{
    ?>
	    <div class="wrap">
	    <h1>Theme Panel</h1>
	    <form method="post" action="options.php">
	        <?php
	            settings_fields("section");
	            do_settings_sections("theme-options");      
	            submit_button(); 
	        ?>          
	    </form>
		</div>
	<?php
}
function display_address_element()
{
	?>
	   <textarea name="contact_address" cols="50" rows="10" id="contact_address"><?php echo get_option('contact_address'); ?></textarea>
  <?php
}

function display_location_element()
{
	?>
    	<input size="50" type="text" name="location_map" id="location_map" value="<?php echo get_option('location_map'); ?>" />
    <?php
}

function display_theme_panel_fields()
{
	add_settings_section("section", "All Settings", null, "theme-options");
	
	add_settings_field("contact_address", "Address", "display_address_element", "theme-options", "section");
    add_settings_field("location_map", "Location", "display_location_element", "theme-options", "section");
	
    register_setting("section", "contact_address");
    register_setting("section", "location_map");
}

add_action("admin_init", "display_theme_panel_fields");
/**
* Define a constant path to our single template folder
*/
define(SINGLE_PATH, TEMPLATEPATH . '/single');

/**
* Filter the single_template with our custom function
*/
add_filter('single_template', 'hail_single_template');

/**
* Single template function which will choose our template
*/
function hail_single_template($single) {
global $wp_query, $post;

/**
* Checks for single template by author
* Check by user nicename and ID
*/
$curauth = get_userdata($wp_query->post->post_author);

if(file_exists(SINGLE_PATH . '/single-services.php'))
return SINGLE_PATH . '/single-services.php';
}